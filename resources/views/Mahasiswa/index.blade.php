@extends('template/main')

@section('judul', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Daftar MAhasiswa</h1>

    <table class="table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NAMA</th>
      <th scope="col">NRP</th> 
      <th scope="col">EMAIL</th>
      <th scope="col">JURUSAN</th> 
      <th scope="col">ACTIONS</th>
    </tr>
  </thead>
  <tbody>


  @foreach($mahasiswa as $mhs)
    <tr>
      <th scope="row">1</th>
      <td>{{$mhs->nama}}</td>
      <td>{{$mhs->nrp}}</td>
      <td>{{$mhs->email}}</td>
      <td>{{$mhs->jurusan}}</td>
      
      <td>
        <a href="" class="badge badge-success">edit</a>
        <a href="" class="badge badge-danger">delete</a>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>

        </div>
    </div>
</div>
@endsection