@extends('index')

@section('title', 'Customer List')
@section('main')
<div class="container">
    <form action="" class="container text-left col-9">
        <div class="form-group">
            <input type="search" name="search" class="form-control" placeholder="Search by Name or Email"
                value="{{$search}}">
        </div>
        <button class="btn btn-primary">Search</button>
        <a href="{{route('customer.view')}}">
            <button class="btn btn-primary" type="button">Clear</button>
        </a>
    </form>
    <div class="container text-right my-3">
        <a href="{{route('customer.create')}}" class="btn btn-primary">Add</a>
        <a href="{{route('customer.trash')}}" class="btn btn-danger">Go to trash</a>
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
                <td style="display: flex;">
                    <!-- this is url method -->
                    <!-- <a href="{{url('/customer/delete/')}}/{{$customer->customer_id}}"> -->

                    <!-- this is route() method -->
                    <a href="{{route('customer.delete', ['id' => $customer->customer_id])}}">
                        <button class="btn btn-danger">Trash</button>
                    </a>
                    <a class="ml-2" href="{{route('customer.edit', ['id' => $customer->customer_id])}}">
                        <button class="btn btn-primary">Edit</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">

        <!-- pagination in laravel with bootstrap 4 and search filter work only first query then we request the next page the search query is empty and view all data with pagination. -->
        <!-- {{$customers->links()}} -->

        <!-- But it is work with search and without filter. -->
        {{$customers->appends(request()->input())->links()}}
    </div>
</div>
@endsection