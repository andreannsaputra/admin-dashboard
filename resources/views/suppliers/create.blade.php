@extends('layouts.app')

@section('title', 'Add Supplier')

@section('content')
    <h1>
        Tambah Supplier
    </h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/suppliers" method="post">
        @csrf
        <ul>
            <li>
                <label for="company_name">
                    <span>Nama Perusahaan: </span>
                    <strong><span aria-label="required">*</span></strong>
                </label>
                <input type="text" id="company_name" name="company_name" required>
            </li>
            <li>
                <label for="plant">
                    <span>Plant: </span>
                    <strong><span aria-label="required">*</span></strong>
                </label>
                <input type="text" id="plant" name="plant" required>
            </li>
            <li>
                <label for="npwp">
                    <span>NPWP: </span>
                    <strong><span aria-label="required">*</span></strong>
                </label>
                <input type="text" id="npwp" name="npwp" required>
            </li>
            <li>
                <label for="address">
                    <span>Alamat Perusahaan: </span>
                    <strong><span aria-label="required">*</span></strong>
                </label>
                <input type="text" id="address" name="address" required>
            </li>
            <li>
                <label for="postal_code">
                    <span>Kode Pos: </span>
                    <strong><span aria-label="required">*</span></strong>
                </label>
                <input type="text" id="postal_code" name="postal_code" required>
            </li>
            <li>
                <label for="telp">
                    <span>Telp: </span>
                    <strong><span aria-label="required">*</span></strong>
                </label>
                <input type="text" id="telp" name="telp" required>
            </li>
            <li>
                <label for="fax">
                    <span>Fax: </span>
                    <strong><span aria-label="required">*</span></strong>
                </label>
                <input type="text" id="fax" name="fax" required>
            </li>
        </ul>
        <button type="submit">Simpan</button>
    </form>

    <a href="/suppliers">Kembali ke daftar Supplier</a>
@endsection
