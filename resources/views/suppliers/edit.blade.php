@extends('layouts.app')

@section('title', 'Edit Supplier')

@section('content')

    <h1>Edit Supplier</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/suppliers/{{ $supplier->id }}" method="post">
        @csrf
        @method('PUT')
        <ul>
            <li>
                <label for="company_name">
                    <span>Nama Perusahaan: </span>
                    <strong><span aria-label="required">*</span></strong>
                </label>
                <input type="text" id="company_name" name="company_name" value="{{ $supplier->company_name }}" required>
            </li>
            <li>
                <label for="plant">
                    <span>Plant: </span>
                    <strong><span aria-label="required">*</span></strong>
                </label>
                <input type="text" id="plant" name="plant" value="{{ $supplier->plant }}" required>
            </li>
            <li>
                <label for="npwp">
                    <span>NPWP: </span>
                    <strong><span aria-label="required">*</span></strong>
                </label>
                <input type="text" id="npwp" name="npwp" value="{{ $supplier->npwp }}" required>
            </li>
            <li>
                <label for="address">
                    <span>Alamat Perusahaan: </span>
                    <strong><span aria-label="required">*</span></strong>
                </label>
                <input type="text" id="address" name="address" value="{{ $supplier->address }}" required>
            </li>
            <li>
                <label for="postal_code">
                    <span>Kode Pos: </span>
                    <strong><span aria-label="required">*</span></strong>
                </label>
                <input type="text" id="postal_code" name="postal_code" value="{{ $supplier->postal_code }}" required>
            </li>
            <li>
                <label for="telp">
                    <span>Telp: </span>
                    <strong><span aria-label="required">*</span></strong>
                </label>
                <input type="text" id="telp" name="telp" value="{{ $supplier->telp }}" required>
            </li>
            <li>
                <label for="fax">
                    <span>Fax: </span>
                    <strong><span aria-label="required">*</span></strong>
                </label>
                <input type="text" id="fax" name="fax" value="{{ $supplier->fax }}" required>
            </li>
        </ul>
        <button type="submit">Simpan Perubahan</button>
    </form>

    <a href="/suppliers">Kembali ke daftar Supplier</a>

@endsection
