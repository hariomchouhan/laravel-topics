@extends('index')

@section('main')
    <div class="container">

        <div class="col-6 mx-auto shadow p-5 mt-5 rounded">
            <h1 class="text-center text-white p-2 rounded bg-primary ">Customer Registration</h1>
            <form action="{{url('/')}}/customer" method="post">
                @csrf
                <x-input type="text" name="name" placeholder="Enter your Name" label="Name" />
                <x-input type="email" name="email" placeholder="Enter your email" label="Email" />
                <x-input type="password" name="password" placeholder="Enter your Password" label="Password" />
                <x-input type="text" name="state" placeholder="Enter your state" label="State" />
                <x-input type="text" name="country" placeholder="Enter your Country" label="Country" />
                <x-input type="text" name="address" placeholder="Enter your Address" label="Address" />
                <label for="">Gender</label>
                <br>
                <input type="radio" name="gender" id="male" value="M">
                <label for="male">Male</label>
                <input type="radio" name="gender" id="female" value="F">
                <label for="female">Female</label>
                <input type="radio" name="gender" id="other" value="O">
                <label for="other">Other</label>
                <x-input type="date" name="dob" placeholder="Enter Date" label="Date" />
                <x-input type="number" name="points" placeholder="Enter your points" label="Points" />
                <label for="status">Status</label>
                <input type="radio" name="status" id="status"/>

                <br>
                <button class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
    </div>
@endsection