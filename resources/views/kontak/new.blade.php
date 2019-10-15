@extends('kontak/base')

@section('body')
<form method="post" action="{{ route('kontakCreate') }}">
{{ csrf_field() }}
    <div>
        <label>Nama: </label>
        <input type="text" name="nama">
    </div>
    <div>
        <label>Telepon: </label>
        <input type="text" name="telepon">
    </div>
    <div>
        <label>E-mail: </label>
        <input type="text" name="email">
    </div>
    <div>
        <label>Alamat: </label>
        <input type="text" name="alamat">
    </div>
    <div>
        <input type="submit">
    </div>
</form>
@endsection   