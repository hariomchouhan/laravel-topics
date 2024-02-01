@extends('index')

@section('title', 'Customer')
@section('main')
<div class="">
    <div class="col-6 mx-auto shadow p-5 mt-5 rounded">
        <h1 class="text-center text-white p-2 rounded bg-primary ">{{$title}}</h1>

        <!-- <form action="{{$url}}" method="post"> -->
        {!! Form::open([
        'url' => $url,
        'method' => 'post',
        'id' => 'contact',
        'role' => 'form',
        'class' => 'bv-form',
        'enctype' => 'multipart/form-data'
        ]) !!}
        <!-- @csrf -->

        <div class="form-group row">
            {!! Form::text('name', $customer->name, [
            'id' => "name", 'required' => "", 'placeholder' => "Name", 'class' => "col mx-2"
            ]) !!}
            {!! Form::email('email', $customer->email, [
            'id' => "email", 'required' => "", 'placeholder' => "email", 'class' => "col mx-2"
            ]) !!}
        </div>

        <div class="form-group row">
            {!! Form::text('state', $customer->state, [
            'id' => "state", 'required' => "", 'placeholder' => "state", 'class' => "col mx-2"
            ]) !!}
            {!! Form::select('country',[
             "1" => "Afghanistan",
             "2" => "Albania",
             "3" => "Algeria",
             "4" => "India",
            ],
            '4', [
            'id' => "country", 'required' => "", 'class' => "col mx-2"
            ]) !!}
            <!-- <input type="text" name="country" placeholder="Enter your Country" label="Country"
                    value="{{$customer->country}}" class="col mx-2"  /> -->
        </div>

        <div class="form-group row">
            {!! Form::text('address', $customer->address, [
            'id' => "address", 'required' => "", 'placeholder' => "address", 'class' => "col mx-2"
            ]) !!}
            {!! Form::password('password', [
            'id' => "password", 'required' => "", 'placeholder' => "password", 'class' => "col mx-2"
            ]) !!}

        </div>

        <div class="form-group">
            <label>Gender</label>
            <label for="male" class="mx-2">
                <input type="radio" name="gender" id="male" value="M" {{$customer->gender == "M" ? "checked" : ""}}>
                Male</label>
            <label for="female" class="mx-2">
                <input type="radio" name="gender" id="female" value="F" {{$customer->gender == "F" ? "checked" : ""}}>
                Female</label>
            <label for="other" class="mx-2">
                <input type="radio" name="gender" id="other" value="O" {{$customer->gender == "O" ? "checked" : ""}}>
                Other</label>

        </div>

        <div class="form-group row">
                {!! Form::date('dob', \Carbon\Carbon::parse($customer->dob)->format('Y-m-d'), [
            'id' => "dob", 'required' => "", 'class' => "col mx-2"
            ]) !!}
            <!-- <input type="date" name="dob" placeholder="Enter Date" label="Date" value="{{$customer->dob}}" class="col mx-2"  /> -->
                {!! Form::number('points', $customer->points, [
            'id' => "points", 'required' => "", 'placeholder' => "points", 'class' => "col mx-2"
            ]) !!}
        </div>

        <div class="form-group">
            <label>Status</label>
            <label for="active" class="mx-2">
                <input type="radio" name="status" value="1" id="active" {{$customer->status == "1" ? "checked" :
                ""}}/>
                Active</label>

            <label for="deactive" class="mx-2">
                <input type="radio" name="status" value="0" id="deactive" {{$customer->status == "0" ? "checked" :
                ""}}/>
                Deactive</label>
        </div>

        <!-- <button class="btn btn-primary">Submit</button> -->
        <!-- </form> -->
        {!! Form::submit('Submit', [
            'id' => "points", 'required' => "", 'placeholder' => "points", 'class' => "btn btn-primary"
            ]) !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection