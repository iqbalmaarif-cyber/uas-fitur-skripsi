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
      <li class="nav-item active">
        <a class="nav-link" href="/mahasiswa">Data Mahasiswa <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
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
 {{session('Sukses')}}
</div>
@endif

    <div class="row">
    <div class="col-6">
    <h1>Data Mahasiswa</h1>
    </div>
    <div class="col-6">

<!-- Button trigger modal -->
<button type="button" class="btn btn-success float-right mt-3 btn-sm" data-toggle="modal" data-target="#exampleModal">
  Tambah Data MAHASISWA
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >


<form method="POST" action="/mahasiswa/create" >
    {{csrf_field()}}

  <div class="form-group">
    <label for="exampleInputEmail1">NIM</label>
    <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan NIM">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" name="nama"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama">
  </div>
 
  <div class="form-group">
    <label for="jk">Jenis Kelamin</label>
    <select name="jk" class="form-control" id="jk">
     
      <option value="L">Laki-laki</option>
      <option value="P">Perempuan</option>
      
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Kelas</label>
    <select  name="kelas" class="form-control" id="exampleFormControlSelect1">
      <option value="A1">A1</option>
      <option value="A1">A2</option>
      <option value="B1">B1</option>
      <option value="B2">B2</option>
      <option value="C1">C1</option>
      <option value="C2">C2</option>
      <option value="D1">D1</option>
      <option value="D2">D2</option>
      <option value="E1">E1</option>
      <option value="E1">E2</option>
      <option value="F1">F1</option>
      <option value="F2">F2</option>
    </select>
  </div>

  <div class="form-group">
    <label for="semester">Semester</label>
    <select name="smt" class="form-control" id="semester">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
    </select>
  </div>
  
  <div class="form-group">
    <label for="prodi1">Prodi</label>
    <select name="prodi"class="form-control" id="prodi1">
      <option value="Teknik Elektro">Teknik Elektro</option>
      <option value="Teknik Industri">Teknik Industri</option>
      <option value="Teknik Sipil">Teknik Sipil</option>
      <option value="Teknik Informatika">Teknik Informatika</option>
      <option value="Teknik Mesin">Teknik Mesin</option>
      
    </select>
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
            

        <table class="table table-hover text-center">

        @php
        $no=1
        @endphp
        <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>JENIS KELAMIN</th>
                <th>KELAS</th>
                <th>SEMESTER</th>
                <th>PRODI</th>
                <th>Actions</th>
        </tr>
        @foreach($data_mahasiswa as $mhs)
        <tr>
            <th>{{$no}}</th>
            <td>{{$mhs->nim}}</td>
            <td>{{$mhs->nama}}</td>
            <td>{{$mhs->jk}}</td>
            <td>{{$mhs->kelas}}</td>
            <td>{{$mhs->smt}}</td>
            <td>{{$mhs->prodi}}</td>
            <td>
            <a href="/mahasiswa/{{$mhs->id}}/edit" class="btn btn-primary">Ubah</a>
            <a href="/mahasiswa/{{$mhs->id}}/delete" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @php
        $no++
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
