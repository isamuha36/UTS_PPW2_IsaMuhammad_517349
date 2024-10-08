@extends('layouts/app')

@section('title', 'Data Pemain')

@section('content')
<table class="table table-stripped">
    <thead>
        <tr>
            <th>id</th>
            <th>Nama Pemain</th>
            <th>No punggung</th>
            <th>Posisi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data_pemain as $pemain)
            <tr>
                <td>{{ $pemain->id }}</td>
                <td>{{ $pemain->nama_pemain }}</td>
                <td>{{ $pemain->no_punggung }}</td>
                <td>{{ $pemain->posisi }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection