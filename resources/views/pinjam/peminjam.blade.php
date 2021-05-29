@extends('layout/layout')
@section('title','peminjambuku')
@section('container')
<div class='container'>
    <h1>Data Peminjam Buku</h1>
</div>
<div class='container'>
    <table class="table">
        <thead class="table-primary">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tanggal Pinjam</th>
            <th scope="col">No Telepon</th>
            </tr>
        </thead>
        <tbody>
        @foreach ( $pinjam as $pinjam )
                <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $pinjam->anggota_nama }}</td>
                <td>{{ $pinjam->anggota_alamat }}</td>
                <td>{{ $pinjam->tgl_pinjam }}</td>
                <td>{{ $pinjam->anggota_telp }}</td>
                </tr>
        @endforeach
        </tbody>
        </table>
    </table>

</div>
@endsection