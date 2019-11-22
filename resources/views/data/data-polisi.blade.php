@extends('layouts.index')

@section('title')
    ReTrack
@endsection

@section('name')
    CRUD > Data Polisi
@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card card-plain">
                <p class="sub-title">Semua Data Polisi</p>
              <div class="card-header">
                <button id="myBtn-form" class="data-btn">Tambah Polisi</button> 
              </div>
                <input type="text" class="input-search" id="input-search" placeholder="Search" onkeyup="inputSearch()" title="Search">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="table">
                    <thead class="text-primary">
                      <th>
                        No
                      </th>
                      <th>
                        ID
                      </th>
                      <th>
                        Nama Polisi   
                      </th>
                      <th>
                        Pangkat
                      </th>
                      <th>
                        Status
                      </th> 
                      <th>
                        
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          1
                        </td>
                        <td>
                          22112233
                        </td>
                        <td>
                          Bambang
                        </td>
                        <td>
                          PROVOS
                        </td>
                        <td>
                           Confirmed
                        </td>
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

      <div id="myModal-form" class="modal-form">
    <div class="modal-content2">
      <form>
        <span class="form-title">Tambah Polisi</span>

        <input class="input-form" type="text" name="polisi" placeholder="Nama Polisi">
      <br>
        <input class="input-form" type="text" name="pangkat" placeholder="Pangkat">
      <br>
        <input class="input-form" type="text" name="id" placeholder="ID Polisi">
      <br>
        <input class="input-form" type="text" name="password" placeholder="Password">
      <br>
        <input type="file" name="upload">
      <br>
      <div class="container-form-btn">
        <button type="submit" class="form-btn">Tambah</button>
      </div>
    </form>
  </div>
</div>

<div id="myModal-details" class="modal-details">
    <div class="modal-content-details">
      <span class="form-title">Detail Polisi</span>
      <br>
        <a>Nama Polisi</a>
      <br>
      <br>
      <br>
        <a>Pangkat</a>
      <br>
      <br>
      <br>
        <a>Status</a>
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

<script src="../assets/js/popup-form.js"></script>
<script src="../assets/js/popup-details.js"></script>
<script src="../assets/js/search.js"></script>
@endsection