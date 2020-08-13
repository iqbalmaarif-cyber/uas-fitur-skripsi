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
 {{session('Sukses')}}
</div>
@endif
<h1>EDIT DATA MAHASISWA</h1>
    <div class="row text-center p-4" >
   
        <table >
        

    <form method="POST" action="/mahasiswa/{{$mahasiswa->id}}/update" >
    {{csrf_field()}}

  <div class="form-group">
    <label for="exampleInputEmail1">NIM</label>
    <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan NIM" value="{{$mahasiswa->nim}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" name="nama"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama"  value="{{$mahasiswa->nama}}">
  </div>
 
  <div class="form-group">
    <label for="jk">Jenis Kelamin</label>
    <select name="jk" class="form-control" id="jk" >
     
      <option value="L" @if($mahasiswa->jk == 'L')selected @endif>Laki-laki</option>
      <option value="P" @if($mahasiswa->jk == 'P')selected @endif>Perempuan</option>
      
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Kelas</label>
    <select  name="kelas" class="form-control" id="exampleFormControlSelect1">
      <option value="A1" @if($mahasiswa->kelas == 'A1')selected @endif>A1</option>
      <option value="A1"@if($mahasiswa->kelas == 'A2')selected @endif>A2</option>
      <option value="B1" @if($mahasiswa->kelas == 'B1')selected @endif>B1</option>
      <option value="B2" @if($mahasiswa->kelas == 'B2')selected @endif>B2</option>
      <option value="C1" @if($mahasiswa->kelas == 'C1')selected @endif>C1</option>
      <option value="C2" @if($mahasiswa->kelas == 'C2')selected @endif>C2</option>
      <option value="D1" @if($mahasiswa->kelas == 'D1')selected @endif>D1</option>
      <option value="D2"@if($mahasiswa->kelas == 'D2')selected @endif>D2</option>
      <option value="E1" @if($mahasiswa->kelas == 'E1')selected @endif>E1</option>
      <option value="E1" @if($mahasiswa->kelas == 'E2')selected @endif>E2</option>
      <option value="F1" @if($mahasiswa->kelas == 'F1')selected @endif>F1</option>
      <option value="F2" @if($mahasiswa->kelas == 'F2')selected @endif>F2</option>
    </select>
  </div>

  <div class="form-group">
    <label for="semester">Semester</label>
    <select name="smt" class="form-control" id="semester">
      <option value="1" @if($mahasiswa->smt == '1')selected @endif>1</option>
      <option value="2" @if($mahasiswa->smt == '2')selected @endif>2</option>
      <option value="3" @if($mahasiswa->smt == '3')selected @endif>3</option>
      <option value="4" @if($mahasiswa->smt == '4')selected @endif>4</option>
      <option value="5" @if($mahasiswa->smt == '5')selected @endif>5</option>
      <option value="6" @if($mahasiswa->smt == '6')selected @endif>6</option>
      <option value="7" @if($mahasiswa->smt == '7')selected @endif>7</option>
      <option value="8" @if($mahasiswa->smt == '8')selected @endif>8</option>
    </select>
  </div>
  
  <div class="form-group">
    <label for="prodi1">Prodi</label>
    <select name="prodi"class="form-control" id="prodi1">
      <option value="Teknik Elektro" @if($mahasiswa->prodi == 'Teknik Elektro')selected @endif>Teknik Elektro</option>
      <option value="Teknik Industri"@if($mahasiswa->prodi == 'Teknik Industri')selected @endif>Teknik Industri</option>
      <option value="Teknik Sipil" @if($mahasiswa->prodi == 'Teknik Sipil')selected @endif>Teknik Sipil</option>
      <option value="Teknik Informatika" @if($mahasiswa->prodi == 'Teknik Informatika')selected @endif>Teknik Informatika</option>
      <option value="Teknik Mesin" @if($mahasiswa->prodi == 'Teknik Mesin')selected @endif>Teknik Mesin</option>
      
    </select>
  </div>
  
 
 
 






      </div>
      <div class="modal-footer">
        <a href="/mahasiswa" class="btn btn-dark">Close</a>
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
