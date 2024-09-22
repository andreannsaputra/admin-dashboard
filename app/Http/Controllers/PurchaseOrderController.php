<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\PurchaseOrder;
use Barryvdh\DomPDF\Facade\Pdf;

class PurchaseOrderController extends Controller
{
    public function index()
    {
        $orders = PurchaseOrder::with('customer')->get();
        return view('purchase_orders.index', compact('orders'));
    }


    public function create()
    {
        $customers = Customer::all();
        return view('purchase_orders.create', compact('customers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'order_number' => 'required|unique:purchase_orders',
            'order_date' => 'required|date',
            'total_amount' => 'required|numeric',
            'status' => 'required|string'
        ]);

        PurchaseOrder::create([
            'customer_id' => $request->customer_id,
            'order_number' => $request->order_number,
            'order_date' => $request->order_date,
            'total_amount' => $request->total_amount,
            'status' => $request->status
        ]);

        return redirect()
            ->route('purchase_orders.index')
            ->with('success', 'Sudah ditambahkan');
    }

    public function generateInvoice($id)
    {
        $order = PurchaseOrder::with('customer')->findOrFail($id);

        if ($order->status === 'Open') {
            $order->status = 'Closed';
            $order->save();
        }

        $data = [
            'order' => $order,
            'customer' => $order->customer
        ];

        $pdf = PDF::loadView('purchase_orders.invoice', $data);

        return $pdf->download('invoice_' . $order->order_number . '.pdf');
    }
}
