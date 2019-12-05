@extends('template/main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
<div class="row">
<div class="col-6">
<h2>Daftar Mahasiswa</h2>

<table class="table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NAMA</th> 
      <th scope="col">ACTIONS</th>
    </tr>
  </thead>
  <tbody>


  @foreach($students as $student)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$student->nama}}</td>

      
      <td>
        <a href="{{'students/' . $student->id}}" class="badge badge-info">show detail</a>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>

</div>
</div>
</div>
@endsection