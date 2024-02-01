@extends('index')

@section('title', 'Register')
@section('main')
    <div class="container">

        <div class="col-6 mx-auto shadow p-5 mt-5 rounded">
            <h1 class="text-center text-white p-2 rounded bg-primary ">Registration</h1>
            <form action="{{url('/')}}/register" method="post">
                @csrf
                <x-input type="text" name="name" placeholder="Enter your Name" label="Name" />
                <x-input type="email" name="email" placeholder="Enter your email" label="Email" />
                <x-input type="password" name="password" placeholder="Enter your Password" label="Password" />
                <x-input type="password" name="password_confirmation" placeholder="Confirmed Password" label="Confirmed Password" />
                <button class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
    </div>
@endsection