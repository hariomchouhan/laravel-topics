@extends('index')

@section('main')
<div class="">
    <div class="col-6 mx-auto shadow p-5 mt-5 rounded">
        <h1 class="text-center text-white p-2 rounded bg-primary ">{{$title}}</h1>

        <form action="{{$url}}" method="post">
            @csrf

            <div class="form-group row">
                <input type="text" name="name" placeholder="Enter your Name" label="Name" value="{{$customer->name}}" class="col mx-2" />
                <input type="email" name="email" placeholder="Enter your email" label="Email"
                    value="{{$customer->email}}" class="col mx-2" />
            </div>

            <div class="form-group row">
                <input type="text" name="state" placeholder="Enter your state" label="State"
                    value="{{$customer->state}}" class="col mx-2"  />
                <input type="text" name="country" placeholder="Enter your Country" label="Country"
                    value="{{$customer->country}}" class="col mx-2"  />
            </div>

            <div class="form-group row">
                <input type="text" name="address" placeholder="Enter your Address" label="Address"
                    value="{{$customer->address}}" class="col mx-2"  />
                <input type="password" name="password" placeholder="Enter your Password" label="Password" class="col mx-2"  />
            </div>

            <div class="form-group">
                <label>Gender</label>
                <label for="male" class="mx-2">
                <input type="radio" name="gender" id="male" value="M"  {{$customer->gender == "M" ? "checked" : ""}}>
                Male</label>
                <label for="female" class="mx-2">
                <input type="radio" name="gender" id="female" value="F"  {{$customer->gender == "F" ? "checked" : ""}}>
                Female</label>
                <label for="other" class="mx-2">
                <input type="radio" name="gender" id="other" value="O" {{$customer->gender == "O" ? "checked" : ""}}>
                Other</label>
                
            </div>

            <div class="form-group row">
                <input type="date" name="dob" placeholder="Enter Date" label="Date" value="{{$customer->dob}}" class="col mx-2"  />
                <input type="number" name="points" placeholder="Enter your points" label="Points"
                    value="{{$customer->points}}" class="col mx-2"  />
            </div>

            <div class="form-group">
                <label>Status</label>
                <label for="active" class="mx-2" >
                    <input type="radio" name="status" value="1" id="active" {{$customer->status == "1" ? "checked" :
                    ""}}/>
                    Active</label>

                <label for="deactive"  class="mx-2"  >
                    <input type="radio" name="status" value="0" id="deactive" {{$customer->status == "0" ? "checked" :
                    ""}}/>
                    Deactive</label>
            </div>

            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection