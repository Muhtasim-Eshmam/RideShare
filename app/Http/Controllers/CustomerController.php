<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\vendor;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        return view('user.userpanel');
    }


    public function create(vendor $vendor,$id)
    {
        $vendor = vendor::find($id);
        return view('user.createbooking',compact('vendor'));
    }


    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'nid' => ['required'],
            'contact' => ['required'],
            'pickup' => ['required'],
            'destination' => ['required'],
            'bookfor' => ['required'],
            'vreg' => ['required'],
            'oname' => ['required'],
            'cmodel' => ['required'],
            'fee' => ['nullable'],


        ]);


        $customer = customer::create($valid);

        return redirect('/viewrides');
    }


    public function show(customer $customer,vendor $vendor)
    {
        $vendor = vendor::get();
        return view('user.viewrides',compact('vendor'));
    }

    public function viewbookings(customer $customer,vendor $vendor)
    {
        $customer = customer::get();
        return view('user.viewbookings',compact('customer'));
    }






    public function edit(customer $customer)
    {
        //
    }


    public function update(Request $request, customer $customer)
    {
        //
    }

    public function destroy(customer $customer)
    {
        //
    }
}
