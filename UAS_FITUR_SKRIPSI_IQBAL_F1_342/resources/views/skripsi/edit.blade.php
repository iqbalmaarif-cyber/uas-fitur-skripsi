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
        <a class="nav-link" href="/mahasiswa/">Data Mahasiswa <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/skripsi/">Data Judul Skripsi</a>
      </li>    
    </ul>
    
  </div>
</nav>




@if(session('Sukses'))
<div class="alert alert-info" role="alert">
 {{session('sukses')}}
</div>
@endif
<h1>Edit Data Judul Skripsi</h1>
    <div class="row text-center p-4" >
   
        <table >
        

    <form method="POST" action="/skripsi/{{$skripsi->id}}/update" >
    {{csrf_field()}}

    <div class="form-group">
    <label for="exampleInputEmail1">NIM</label>
    <input type="text" name="nim" class="form-control" value="{{$skripsi->nim}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan NIM">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" name="nama_mahasiswa"class="form-control" value="{{$skripsi->nama_mahasiswa}}"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama">
  </div>
  <div class="form-group">
    <label for="jdl">Judul Skripsi</label>
    <input type="text" name="judul"class="form-control" id="jdl"value="{{$skripsi->judul}}" aria-describedby="emailHelp" placeholder="Masukan Judul Skripsi">
  </div>

  <div class="form-group">
    <label for="tmpt">Tempat Penelitian</label>
    <input type="text" name="tempat_penelitian"class="form-control" id="tmpt"value="{{$skripsi->tempat_penelitian}}" aria-describedby="emailHelp" placeholder="Masukan Judul Skripsi">
  </div>
  <div class="form-group">
    <label for="al">Alamat</label>
    <input type="text" name="alamat"class="form-control" id="al"value="{{$skripsi->alamat}}" aria-describedby="emailHelp" placeholder="Masukan Judul Skripsi">
  </div>
 
  
 
 
 






      </div>
      <div class="modal-footer">
        <a href="/skripsi" class="btn btn-dark">Close</a>
        <button type="submit" class="btn btn-warning">Update</button>
        </form>
        </table>



        
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</body>
</html>
