@extends('layout/layout')
@section('title','databuku')
@section('container')
<div class='container'>
    <h1>Data Buku</h1>
</div>
<div class='container'>
    <table class="table">
        <thead class="table-primary">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Kategori</th>
            <th scope="col">Jumlah</th>
            </tr>
        </thead>
        <tbody>
             @foreach ( $buku as $buku )
                <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $buku->buku_judul }}</td>
                <td>{{ $buku->kategori_id }}</td>
                <td>{{ $buku->buku_jumlah }}</td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </table>

</div>
@endsection