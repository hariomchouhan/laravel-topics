@extends('index')

@section('main')
    <div class="container">
        <div class="col-6 mx-auto shadow p-5 mt-5 rounded">
            <h1 class="text-center text-white p-2 rounded bg-primary ">{{$title}}</h1>
            




              <form action="{{$url}}" method="post">
                @csrf
                <input type="text" name="name" placeholder="Enter your Name" label="Name" value="{{$customer->name}}" />
                <input type="email" name="email" placeholder="Enter your email" label="Email" value="{{$customer->email}}" />
                <input type="password" name="password" placeholder="Enter your Password" label="Password" />
                <input type="text" name="state" placeholder="Enter your state" label="State" value="{{$customer->state}}" />
                <input type="text" name="country" placeholder="Enter your Country" label="Country" value="{{$customer->country}}" />
                <input type="text" name="address" placeholder="Enter your Address" label="Address" value="{{$customer->address}}" />
                <label for="">Gender</label>
                <br>
                <input type="radio" name="gender" id="male" value="M" {{$customer->gender == "M" ? "checked" : ""}}>
                <label for="male">Male</label>
                <input type="radio" name="gender" id="female" value="F" {{$customer->gender == "F" ? "checked" : ""}}>
                <label for="female">Female</label>
                <input type="radio" name="gender" id="other" value="O" {{$customer->gender == "O" ? "checked" : ""}}>
                <label for="other">Other</label>
                <input type="date" name="dob" placeholder="Enter Date" label="Date" value="{{$customer->dob}}" />
                <input type="number" name="points" placeholder="Enter your points" label="Points" value="{{$customer->points}}" />
                <label>Status</label>
                <br>
                <label for="active">
                <input type="radio" name="status" value="1" id="active" {{$customer->status == "1" ? "checked" : ""}}/>
                Active</label>
                <label for="deactive">
                <input type="radio" name="status" value="0" id="deactive" {{$customer->status == "0" ? "checked" : ""}}/>
                Deactive</label>

                <br>
                <button class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
    </div>
@endsection