@extends('layouts.app')

@section('title', 'Edit User')

@section('content')

    <h1>Edit Customer</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/customers/{{ $customer->id }}" method="post">
        @csrf
        @method('PUT')
        <ul>
            <li>
                <label for="company_name">
                    <span>Nama Perusahaan: </span>
                    <strong><span aria-label="required">*</span></strong>
                </label>
                <input type="text" id="company_name" name="company_name" value="{{ $customer->company_name }}" required>
            </li>
            <li>
                <label for="plant">
                    <span>Plant: </span>
                    <strong><span aria-label="required">*</span></strong>
                </label>
                <input type="text" id="plant" name="plant" value="{{ $customer->plant }}" required>
            </li>
            <li>
                <label for="npwp">
                    <span>NPWP: </span>
                    <strong><span aria-label="required">*</span></strong>
                </label>
                <input type="text" id="npwp" name="npwp" value="{{ $customer->npwp }}" required>
            </li>
            <li>
                <label for="address">
                    <span>Alamat Perusahaan: </span>
                    <strong><span aria-label="required">*</span></strong>
                </label>
                <input type="text" id="address" name="address" value="{{ $customer->address }}" required>
            </li>
            <li>
                <label for="postal_code">
                    <span>Kode Pos: </span>
                    <strong><span aria-label="required">*</span></strong>
                </label>
                <input type="text" id="postal_code" name="postal_code" value="{{ $customer->postal_code }}" required>
            </li>
            <li>
                <label for="telp">
                    <span>Telp: </span>
                    <strong><span aria-label="required">*</span></strong>
                </label>
                <input type="text" id="telp" name="telp" value="{{ $customer->telp }}" required>
            </li>
            <li>
                <label for="fax">
                    <span>Fax: </span>
                    <strong><span aria-label="required">*</span></strong>
                </label>
                <input type="text" id="fax" name="fax" value="{{ $customer->fax }}" required>
            </li>
        </ul>
        <button type="submit">Simpan Perubahan</button>
    </form>

    <a href="/customers">Kembali ke daftar Customer</a>

@endsection
