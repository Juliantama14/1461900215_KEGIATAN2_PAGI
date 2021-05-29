@extends('layout/layout')
@section('title','databuku')
@section('container')
<div class='container'>
    <h1>Data Buku</h1>
</div>
<div class='container'>
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Pengarang</th>
            <th scope="col">Penerbit</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            </tr>
        </tbody>
        </table>
    </table>

</div>
@endsection