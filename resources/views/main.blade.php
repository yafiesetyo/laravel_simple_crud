@extends('template.template')

@section('title')
    <title>Pegawai Controller</title>
    <link href="assets/style_main.css"{{ url('url') }}>
@endsection

@section('content')
<h1 >Data Pegawai PT. Maju Mundur</h1>
<p>Untuk menambahkan pegawai yang baru masuk / pegawai baru <br>
Bisa klik tombol <b>"Add"</b> dibawah tulisan ini. </p>
<button class="btn btn-success" style="margin-bottom: 25px; width: 100px;" data-toggle="modal" data-target="#add_modal" >Add</button>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">NIP</th>
            <th scope="col">Nama</th>
            <th scope="col">Posisi</th>
            <th scope="col">Rating</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($emp as $e)
        <tr>
            <td>{{$e->employee_num}}</td>
            <td>{{$e->name}}</td>
            <td>{{$e->position}}</td>
            <td>{{$e->rating}}</td>
            <td><a  href='/edit/{{$e->employee_id}}' class="btn btn-success" style="margin-right: 20px;">Edit</a><a href='/delete/{{$e->employee_id}}' class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('modal')
<div id="add_modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Pegawai Baru</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/store/employees">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>NIP</label>
                        <input class="form-control" name='nip'>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" name='nama'>
                    </div>
                    <div class="form-group">
                        <label>Posisi</label>
                        <select class="form-control" name="posisi">
                            <option value="Marketing">Marketing</option>
                            <option value="Accounting">Accounting</option>
                            <option value="HRD">HRD</option>
                            <option value="Produksi">Produksi</option>
                        </select>
                    </div>
                    <button class="btn btn-success">Tambah Pegawai</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
