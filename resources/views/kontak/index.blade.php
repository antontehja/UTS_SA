@extends('kontak/base')

@section('body')
    <h1>Kontak</h1>
    <button><a href="{{ route('kontakNewForm') }}">Tambah Baru</a></button>
    <button><a href="{{ route('kontakIndex') }}">Semula</a></button>
    
    <h3> </h3>

    <form action="{{ route('kontakSearch') }}" method="GET">
        <label>Cari Nama Kontak: </label>
        <input type="text" name="cari">
        <input type="submit" name="search">
    </form>

    <h3> </h3>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Telepon</th>
            <th>E-mail</th>
            <th>Alamat</th>
        </tr>
        @foreach ($kontaks as $kontak)
        <tr>
            <td>{{ $kontak -> id }}</td>
            <td>{{ $kontak -> nama}}</td>
            <td>{{ $kontak -> telepon}}</td>
            <td>{{ $kontak -> email}}</td>
            <td>{{ $kontak -> alamat}}</td>
            <td><input type="button" value="Edit" 
                onclick="location.href='/kontak/edit/ {{ $kontak -> id }}'"></td>
            <td><input type="button" value="Delete" 
                onclick="if(confirm('Are you sure to delete it?'))
                            location.href='/kontak/delete/ {{ $kontak -> id }}'"></td>
        </tr>
        @endforeach    
    </table>
@endsection