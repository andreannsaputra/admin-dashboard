@extends('layouts.app')

@section('title', 'Customer')

@section('content')
    <a href="/customers/create">Tambah Customer</a>

    <h1>Daftar Customer</h1>

    <table>
        <thead>
            <tr>
                <th>Nama Customer</th>
                <th>Plant</th>
                <th>NPWP</th>
                <th>Alamat</th>
                <th>Kode Post</th>
                <th>Telp</th>
                <th>Fax</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->company_name }}</td>
                    <td>{{ $customer->plant }}</td>
                    <td>{{ $customer->npwp }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->postal_code }}</td>
                    <td>{{ $customer->telp }}</td>
                    <td>{{ $customer->fax }}</td>
                    <td><a href="/customers/{{ $customer->id }}/edit">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
