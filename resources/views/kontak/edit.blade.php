@extends('kontak/base')

@section('body')
<form method='post' action="/kontak/update">
{{ csrf_field() }}
    <div>
        <label>ID: </label>
        <input type="text" name="id" value="{{ $kontaks -> id }}" readonly>
    </div>
    <div>
        <label>Nama: </label>
        <input type="text" name="nama" value="{{ $kontaks -> nama }}">
    </div>
    <div>
        <label>Telepon: </label>
        <input type="text" name="telepon" value="{{ $kontaks -> telepon }}">
    </div>
    <div>
        <label>E-mail: </label>
        <input type="text" name="email" value="{{ $kontaks -> email }}">
    </div>
    <div>
        <label>Alamat: </label>
        <input type="text" name="alamat" value="{{ $kontaks -> alamat }}">
    </div>
    <div>
        <input type="submit">
    </div>
</form>
@endsection                
