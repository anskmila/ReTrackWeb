@extends('layouts.maps')

@section('title')
    ReTrack
@endsection

@section('name')
    Agenda
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-plain">
            <div class="card-header"></div>
            <div class="card-body">
                <div id="myModal-agenda" class="modal-agenda">
                    <div class="modal-content-agenda">
                        <a href="{{ route('agenda') }}"> 
                            <span class="close" onclick="hide(); return false">&times;</span>
                        </a>
                        
                        <span class="form-title-agenda">Agenda Details</span>              
                        <strong style="padding:100px;">Member</strong>
                        <strong style="padding:100px;">Car</strong>
                        <strong style="padding:70px;">Date</strong>
                        <br>
                        <a style="padding:100px;">
                        @foreach($team->users as $user)
                            {{ $user->user_name }},
                        @endforeach
                        </a>
                        <a>{{ $team->car->car_number }}</a>
                        <a style="padding:70px;">{{ $team->agenda->agenda_date }}</a>
                        <br>
                        <br>
                        <div class="maps-agenda2" id="maps-agenda2"></div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    $avgLong;
    $totalLong = 0;
    $avgLat;
    $totalLat = 0;
    $checkpoints = $team->agenda->checkpoints;
    $startLat = $checkpoints[0]->checkpoint_latitude;
    $endLat = $checkpoints[count($checkpoints) - 1]->checkpoint_latitude;
    $startLong = $checkpoints[0]->checkpoint_longitude;
    $endLong = $checkpoints[count($checkpoints) - 1]->checkpoint_longitude;
    foreach ($checkpoints as $checkpoint) {
        $totalLong += $checkpoint->checkpoint_longitude;
        $totalLat += $checkpoint->checkpoint_latitude;
    }
    $avgLong = $totalLong/count($checkpoints);
    $avgLat = $totalLat/count($checkpoints);
?>

<script>
    function initMap(){
        var waypts = [];
        <?php
            for ($i=1; $i < count($checkpoints) - 1; $i++) { 
        ?>
            waypts.push({
                location: 
                    new google.maps.LatLng(
                        <?= $checkpoints[$i]->checkpoint_latitude ?>, 
                        <?= $checkpoints[$i]->checkpoint_longitude ?>
                    ),
                stopover: true
            });
        <?php
            }
        ?>
        var directionsService = new google.maps.DirectionsService();
        var directionsRenderer = new google.maps.DirectionsRenderer();
        var start = new google.maps.LatLng(<?= $startLat ?>, <?= $startLong ?>);
        var end = new google.maps.LatLng(<?= $endLat ?>, <?= $endLong ?>);
        var map = new google.maps.Map(
            document.getElementById('maps-agenda2'), {
                zoom: 15, 
                center: {
                    lng: <?= $avgLong ?>, lat: <?= $avgLat ?>
                }
            });
        directionsService.route(
            {
                origin: start,
                destination: end,
                waypoints: waypts,
                optimizeWaypoints: false,
                travelMode: 'DRIVING'
            },
            function(response, status) {
                if (status === 'OK') {
                    directionsRenderer.setDirections(response);
                } else {
                    window.alert('Directions request failed due to ' + status);
                }
            }
        );
        directionsRenderer.setMap(map);
    }
</script>
@endsection