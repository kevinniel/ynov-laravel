<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{

    public function index()
    {
        $customers = Customer::all();
        return view('customer.index', compact('customers'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->get('name');
        $customer->phone = $request->get('phone');

        $customer->save();

        return redirect()->route('customer.index');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customer.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->name = $request->get('name');
        $customer->phone = $request->get('phone');
        $customer->save();

        return redirect()->route('customer.index');
    }

    public function destroy(Request $request)
    {
        $customer = Customer::find($request->get('id_to_destroy'));
        $customer->delete();

        return redirect()->route('customer.index');
    }

}
