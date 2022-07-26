<?php

namespace App\Http\Controllers;


use App\Models\customer;
use App\Models\vendor;
use App\Models\admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.login');
    }

    public function adminhome()
    {
        return view('admin.admin');
    }



    public function adminvalidation(Request $request)
    {

        $name = $request->input('name');
        $password = $request->input('password');

        if($name=='reset' && $password=='reset' )
        {
            return view("admin.admin");
        }

        else
        {
            return view("admin.login");
        }
    }



    public function bookings(customer $customer)
    {
        $customer = customer::get();
        return view('admin.bookings',compact('customer'));
    }


    public function rides(vendor $vendor)
    {
        $vendor = vendor::get();
        return view('admin.rides',compact('vendor'));
    }



    public function create()
    {

    }


    public function show(admin $admin)
    {

    }

    public function edit(vendor $vendor,$id)
    {
        $vendor = vendor::find($id);
        return view('admin.editrides', compact('vendor'));
    }


    public function update(Request $request, vendor $vendor)
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
            'avat' => ['nullable'],
            'status' => ['nullable'],
        ]);

        if ($request->hasFile('image'))
        {
            $path = $request->file('image')->store('products', 'public');
            $valid['image'] = $path;
        }


        $vendor->update($valid);

        return redirect('/rides');
    }




    public function cancelbooking(customer $customer,$id)
    {
        $customer = customer::find($id);
        $customer->delete();
        return redirect('/bookings');
    }



    public function deleteride(vendor $vendor,$id)
    {
//
        $vendor = vendor::find($id);
        $vendor->delete();
        return redirect('/rides');
    }











}
