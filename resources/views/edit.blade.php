@extends('template.template')
@section('title')
@foreach ($employee as $a)
        <title>Edit {{$a->employee_num}}</title>
        <link rel="stylesheet" href="{{url('assets/style_edit.css')}}">
@endsection 



@section('content')
    
    <h1 style="text-align: center;">Edit Pegawai {{$a->employee_num}}</h1>  
    <div id="form_edit">
    <form method="POST" action='/update/{{$a->employee_id}}'>
        {{ csrf_field() }}
        <div class="form-group">
            <label>NIP Pegawai</label>
            <input class="form-control" value="{{$a->employee_num}} "  name="nip" disabled>
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input class="form-control" value="{{$a->name}}" name="nama" required>
        </div>
        <div class="form-group">
            <label>Posisi</label>
            <input class="form-control" value="{{$a->position}}" name="posisi" required>
        </div>
        <div class="form-group">
            <label>Rating</label>
            <input type="number" class="form-control" value="{{$a->rating}}" name = "rating" required>
        </div>
        <center>
            <button type="submit" class="btn btn-success" style="width: 50%;">Edit</button>
        </center>    
    </form> 
@endsection 
@endforeach
      
            