<!DOCTYPE html>
<html>
<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
<body class="bg-dark">
<div class="container bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="/mahasiswa">Data Mahasiswa <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/skripsi">Data Judul Skripsi</a>
      </li>    
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>




@if(session('Sukses'))
<div class="alert alert-info" role="alert">
 {{session('sukses')}}
</div>
@endif

    <div class="row">
    <div class="col-6">
    <h1>Data Judul Skripsi</h1>
    </div>
    <div class="col-6">

<!-- Button trigger modal -->
<button type="button" class="btn btn-success float-right mt-3 btn-sm" data-toggle="modal" data-target="#exampleModal">
  Tambah Judul Skripsi
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Judul Skripsi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >


<form method="POST" action="/skripsi/create" >
    {{csrf_field()}}

  <div class="form-group">
    <label for="exampleInputEmail1">NIM</label>
    <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan NIM">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" name="nama_mahasiswa"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama">
  </div>
  <div class="form-group">
    <label for="jdl">Judul Skripsi</label>
    <input type="text" name="judul"class="form-control" id="jdl" aria-describedby="emailHelp" placeholder="Masukan Judul Skripsi">
  </div>
  <div class="form-group">
    <label for="tmpt">Tempat Penelitian</label>
    <input type="text" name="tempat_penelitian"class="form-control" id="tmpt" aria-describedby="emailHelp" placeholder="Masukan Tempat Penelitian">
  </div>
  <div class="form-group">
    <label for="al">Alamat</label>
    <input type="text" name="alamat"class="form-control" id="al" aria-describedby="emailHelp" placeholder="Masukan Alamat Penelitian">
  </div>
 
 
 






      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
    </div>
            @php 
            $i=1
            @endphp

        <table class="table table-hover text-center">
        <tr>
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Judul</th>
        <th>Tempat</th>
        <th>Alamat</th>
        <th>Aksi</th>
        </tr>

        @foreach($skripsi as $skr)

        <tr>
        <th>{{$i}}</th>
        <td>{{$skr->nim}}</td>
        <td>{{$skr->nama_mahasiswa}}</td>
        <td>{{$skr->judul}}</td>
        <td>{{$skr->tempat_penelitian}}</td>
        <td>{{$skr->alamat}}</td>
        <td>
        <a href="/skripsi/{{$skr->id}}/edit" class="btn btn-primary">Ubah</a>
        <a href="/skripsi/{{$skr->id}}/delete" class="btn btn-danger">Hapus</a>
        </td>
        </tr>
        

       
        @php
        $i++
        @endphp
        @endforeach
        </table>

    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</body>
</html>
