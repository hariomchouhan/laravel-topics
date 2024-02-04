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
        $customer = new Customer;
        $customer->name = "";
        $customer->email = "";
        $customer->gender = "";
        $customer->address = "";
        $customer->state = "";
        $customer->country = "";
        $customer->dob = "";
        $customer->status = "";
        $customer->points = "";
        $customer->password = "";


        $url = url('/customer');
        $title = "Customer Registration";
        $data = compact('customer', 'url', 'title');
        return view('customer')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
    public function view(Request $request)
    {
        $search = $request['search'] ?? '';
        if($search != "") {
            // where
            $customers = Customer::where('name', 'LIKE', "%$search%")->orWhere('email', 'LIKE', "%$search%")->get();
        }else {
            $customers = Customer::get();
        }
        $data = compact('customers', 'search');
        return view('customer-view')->with($data);
    }

    public function trash() {
        $customers = Customer::onlyTrashed()->get();
        $data = compact('customers');
        return view('customer-trash')->with($data);
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
    public function forceDelete($id)
    {
        $customer = Customer::withTrashed()->find($id);
        if(!is_null($customer)) {
            $customer->forceDelete();
        }
        
        return redirect()->back();
    }
    public function restore($id)
    {
        $customer = Customer::withTrashed()->find($id);
        if(!is_null($customer)) {
            $customer->restore();
        }
        
        return redirect('customer/view');
    }
}
