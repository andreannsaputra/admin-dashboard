<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::all();
        return view(
            'customers.index',
            [
                'customers' => $customer
            ]
        );
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string',
            'plant' => 'required|string',
            'npwp' => 'required|string',
            'address' => 'required|string',
            'postal_code' => 'required|string',
            'telp' => 'required|string',
            'fax' => 'required|string'
        ]);

        Customer::create([
            'company_name' => $request->company_name,
            'plant' => $request->plant,
            'npwp' => $request->npwp,
            'address' => $request->address,
            'postal_code' => $request->postal_code,
            'telp' => $request->telp,
            'fax' => $request->fax
        ]);

        return redirect('/customers')->with('Success', 'Customer berhasil ditambahkan');
    }

    public function edit(Customer $customer)
    {
        return view('customers.edit', ['customer' => $customer]);
    }

    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'company_name' => 'required|string',
            'plant' => 'required|string',
            'npwp' => 'required|string',
            'address' => 'required|string',
            'postal_code' => 'required|string',
            'telp' => 'required|string',
            'fax' => 'required|string'
        ]);

        $customer->update([
            'company_name' => $request->company_name,
            'plant' => $request->plant,
            'npwp' => $request->npwp,
            'address' => $request->address,
            'postal_code' => $request->postal_code,
            'telp' => $request->telp,
            'fax' => $request->fax
        ]);

        return redirect('/customers')->with('Success', 'Customer berhasil diperbaharui');
    }
}
