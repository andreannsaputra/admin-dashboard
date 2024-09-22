<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index()
    {
        $supplier = supplier::all();
        return view(
            'suppliers.index',
            [
                'suppliers' => $supplier
            ]
        );
    }

    public function create()
    {
        return view('suppliers.create');
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

        Supplier::create([
            'company_name' => $request->company_name,
            'plant' => $request->plant,
            'npwp' => $request->npwp,
            'address' => $request->address,
            'postal_code' => $request->postal_code,
            'telp' => $request->telp,
            'fax' => $request->fax
        ]);

        return redirect('/suppliers')->with('Success', 'supplier berhasil ditambahkan');
    }

    public function edit(Supplier $supplier)
    {
        return view('suppliers.edit', ['supplier' => $supplier]);
    }

    public function update(Request $request, Supplier $supplier)
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

        $supplier->update([
            'company_name' => $request->company_name,
            'plant' => $request->plant,
            'npwp' => $request->npwp,
            'address' => $request->address,
            'postal_code' => $request->postal_code,
            'telp' => $request->telp,
            'fax' => $request->fax
        ]);

        return redirect('/suppliers')->with('Success', 'Supplier berhasil diperbaharui');
    }
}
