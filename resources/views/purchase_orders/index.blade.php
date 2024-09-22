@extends('layouts.app')

@section('title', 'Purchase Order')

@section('content')

    <h1>Daftar Purchase Order</h1>

    <a href="{{ route('purchase_orders.create') }}">Tambah Purchase Order</a>

    <table>
        <thead>
            <tr>
                <th>Order Number</th>
                <th>Customer</th>
                <th>Tanggal Order</th>
                <th>Total</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->order_number }}</td>
                    <td>{{ $order->customer->company_name }}</td>
                    <td>{{ $order->order_date }}</td>
                    <td>{{ $order->total_amount }}</td>
                    <td>{{ $order->status }}</td>
                    <td>
                        @if ($order->status === 'Open')
                            <a href="{{ route('purchase_orders.invoice', $order->id) }}">Buat Invoice</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
