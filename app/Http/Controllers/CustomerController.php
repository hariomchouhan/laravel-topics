<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $url = url('/customer');
        $title = "Customer Registration";
        $data = compact('url', 'title');
        return view('customer')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
        // Insert query
        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->status = $request['status'];
        $customer->points = $request['points'];
        $customer->password = md5($request['password']);
        $customer->save();

        return redirect('/customer/view');
    }

    /**
     * Display the specified resource.
     */
    public function view()
    {
        $customers = Customer::all();
        $data = compact('customers');
        return view('customer-view')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        if(is_null($customer)) {
            // not found
            return redirect('customer.view');
        }
        else {
            // found
            $title = "Update Customer";
            $url = url('/customer/update')."/".$id;
            $data = compact('customer', 'url', 'title');
            return view('customer')->with($data);
        }
    }

    public function update($id, Request $request) {
        $customer = Customer::find($id);
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->save();

        return redirect('customer/view');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $customer = Customer::find($id);
        if(!is_null($customer)) {
            $customer->delete();
        }
        
        return redirect('customer/view');
    }
}
