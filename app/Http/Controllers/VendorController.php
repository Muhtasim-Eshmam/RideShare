<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\customer;
use App\Models\vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VendorController extends Controller
{

    public function index()
    {

    }





    public function create()
    {
        return view('vendor.post');
    }


    public function store(Request $request)
    {
        $valid = $request->validate([
            'oname' => ['required'],
            'oid' => ['required'],
            'dname' => ['required'],
            'did' => ['required'],
            'dcontact' => ['required'],
            'ocontact' => ['required'],
            'dlicense' => ['required'],
            'vreg' => ['required'],
            'dlv' => ['required'],
            'vlv' => ['required'],
            'cmodel' => ['required'],
            'cdetails' => ['required'],
            'fee' => ['nullable'],
            'image' => ['nullable'],

        ]);

        if ($request->hasFile('image'))
        {
            $path = $request->file('image')->store('products', 'public');
            $valid['image'] = $path;
        }


        $vendor = vendor::create($valid);

        return redirect('/vendorrides');
    }


    public function show(vendor $vendor)
    {
        $vendor = vendor::get();
        return view('vendor.viewmyposts',compact('vendor'));
    }


    public function ridebookings(vendor $vendor,customer $customer )
    {
        $customer = customer::get();
        $vendor = vendor::get();
        return view('vendor.myridebookings',compact('vendor','customer'));
    }







    public function edit(vendor $vendor)
    {
        //
    }

    public function update(Request $request, vendor $vendor)
    {
        //
    }


    public function destroy(vendor $vendor)
    {
        //
    }
}
