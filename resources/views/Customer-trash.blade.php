@extends('index')

@section('title', 'Customer Trash List')
@section('main')
<div class="container">
    <div class="container text-right my-3">
        <a href="{{route('customer.create')}}" class="btn btn-primary">Add</a>
        <a href="{{route('customer.view')}}" class="btn btn-primary">Customer View</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>State</th>
                <th>Address</th>
                <th>Country</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $customers as $customer)
            <tr>
                <td>{{$customer->name}}</td>
                <td>{{$customer->email}}</td>
                <td>
                    @if($customer->gender == "M")
                    Male
                    @elseif($customer->gender == "F")
                    Female
                    @else
                    Other
                    @endif
                </td>
                <td>{{$customer->dob}}</td>
                <td>{{$customer->address}}</td>
                <td>{{$customer->state}}</td>
                <td>{{$customer->country}}</td>
                <td>
                    @if($customer->status == "1")
                    <span class="badge badge-success">Active</span>
                    @else
                    <span class="badge badge-warning">Deactive</span>
                    @endif
                </td>
                <td>
                    <!-- this is url method -->
                    <!-- <a href="{{url('/customer/delete/')}}/{{$customer->customer_id}}"> -->

                    <!-- this is route() method -->
                    <a href="{{route('customer.force-delete', ['id' => $customer->customer_id])}}">
                        <button class="btn btn-danger">Delete</button>
                    </a>
                    <a href="{{route('customer.restore', ['id' => $customer->customer_id])}}">
                        <button class="btn btn-primary">Restore</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection