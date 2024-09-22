@extends('layouts.app')

@section('title', 'Supplier')

@section('content')
    <a href="/suppliers/create">Tambah supplier</a>

    <h1>Daftar supplier</h1>

    <table>
        <thead>
            <tr>
                <th>Nama supplier</th>
                <th>Plant</th>
                <th>NPWP</th>
                <th>Alamat</th>
                <th>Kode Post</th>
                <th>Telp</th>
                <th>Fax</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($suppliers as $supplier)
                <tr>
                    <td>{{ $supplier->company_name }}</td>
                    <td>{{ $supplier->plant }}</td>
                    <td>{{ $supplier->npwp }}</td>
                    <td>{{ $supplier->address }}</td>
                    <td>{{ $supplier->postal_code }}</td>
                    <td>{{ $supplier->telp }}</td>
                    <td>{{ $supplier->fax }}</td>
                    <td><a href="/suppliers/{{ $supplier->id }}/edit">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
