@extends('layouts.index')

@section('title')
    ReTrack
@endsection

@section('name')
    CRUD > Data Cars
@endsection

@section('content')
<div class="row">
<<<<<<< HEAD
          <div class="col-md-12">
            <div class="card card-plain">
                <p class="sub-title">Semua Data Mobil</p>
              <div class="card-header">
                <button id="myBtn" class="data-btn">Tambah Mobil</button> 
              </div>
                <input type="text" class="input-search" id="input-search" placeholder="Search" onkeyup="inputSearch()" title="Search">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="table">
                    <thead class="text-primary">
                      <th>No</th>
                      <th>ID</th>
                      <th>Plat Mobil</th>
                      <th>Jenis Mobil</th>
                      <th>Merk Mobil</th>  
                      <th>Action</th>
                    </thead>
                    <tbody id="myTable">
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                          <button class="details-btn" id="myBtn-details">Details</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>

      <div id="myModal" class="modal-form">
=======
  <div class="col-md-12">
    <div class="card card-plain">
      <p class="sub-title">Data Cars</p>
    <div class="card-header">
      <button id="myBtn-form" class="data-btn">Create Car</button> 
    </div>
    <input type="text" class="input-search" id="input-search" placeholder="Search" onkeyup="inputSearch()" title="Search">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table" id="table">
          <thead class="text-primary">
            <th>#</th>
            <th>Car Number</th>
            <th>Car Brand</th>
            <th>Car Type</th>  
            <th>Action</th>
          </thead>
          <tbody>
            @if($cars)
              @foreach($cars as $car)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $car->car_number }}</td>
                  <td>{{ $car->car_brand }}</td>
                  <td>{{ $car->car_type }}</td>
                  <td>
                    <button class="details-btn" id="myBtn-details">Details</button>
                  </td>
                </tr>
              @endforeach
            @else
              <p class="text-center text-primary">No Car Created Yet!</p>
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
  <div id="myModal-form" class="modal-form">
>>>>>>> 557f8e3307a215753ff3d3ae5f410fcbcca24560
    <div class="modal-content">
      <form>
        <span class="form-title">Create Car</span>
        <input class="input-form" type="text" name="plat" placeholder="Plat Mobil">
        <br>
        <input class="input-form" type="text" name="jenis" placeholder="Jenis Mobil">
        <br>
        <input class="input-form" type="text" name="merk" placeholder="Merk Mobil">
        <br>
        <div class="container-form-btn">
          <button type="submit" class="form-btn">Create</button>
        </div>
    </form>
  </div>
</div>

<div id="myModal-details" class="modal-details">
  <div class="modal-content-details">
    <span class="form-title">Car Details</span>
    <br>
      <a>Car Number</a>
    <br>
    <br>
    <br>
      <a>Car Brand</a>
    <br>
    <br>
    <br>
      <a>Car Type</a>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container-details-btn">
      <button type="submit" class="crud-btn">Delete</button>
        &emsp;
      <button type="submit" class="crud-btn">Update</button>
        &emsp;
      <button type="submit" class="crud-btn" id="btn-cancel">Cancel</button>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="../assets/js/search.js"></script>
<script src="../assets/js/popup-details.js"></script>
<script src="../assets/js/form-popup.js"></script>
@endsection