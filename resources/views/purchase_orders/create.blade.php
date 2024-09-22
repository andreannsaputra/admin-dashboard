@extends('layouts.app')

@section('title', 'PO Customer')

@section('content')

    <h1>Tambah Purchase Order</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('purchase_orders.store') }}" method="post">
        @csrf

        <ul>
            <li>
                <label for="customer_id">Customer</label>
                <select name="customer_id" id="customer_id" required>
                    <option value="">Pilih Customer</option>
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->company_name }}</option>
                    @endforeach
                </select>
            </li>
            <li>
                <label for="order_number">Nomor Order</label>
                <input type="text" name="order_number" id="order_number" required>
            </li>
            <li>
                <label for="order_date">Tanggal Order</label>
                <input type="date" name="order_date" id="order_date" required>
            </li>
            <li>
                <label for="total_amount">Jumlah Total</label>
                <input type="number" name="total_amount" id="total_amount" required>
            </li>
            <li>
                <label for="status">Status</label>
                <input type="text" name="status" id="status" required>
            </li>

            <button type="submit">Tambah Purchase Order</button>
        </ul>
    </form>

@endsection
