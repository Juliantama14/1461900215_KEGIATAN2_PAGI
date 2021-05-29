@extends('layout/layout')
@section('title','laki-laki')
@section('container')
<div class='container'>
    <h1>Anggota Laki-laki</h1>
</div>
<div class='container'>
    <table class="table">
        <thead class="table-primary">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">No Telepon</th>
            </tr>
        </thead>
        <tbody>
             @foreach ( $anggota as $anggota )
                <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $anggota->anggota_nama }}</td>
                <td>{{ $anggota->anggota_alamat }}</td>
                <td>{{ $anggota->anggota_jk }}</td>
                <td>{{ $anggota->anggota_telp }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection