<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    
        <div class="col-6 mx-auto shadow p-5 mt-5 rounded">
            <h1 class="text-center text-white p-2 rounded bg-primary ">Registration</h1>
        <form action="{{url('/')}}/register" method="post">
        @csrf
            <input type="text" name="name" placeholder="Enter your Name" class="form-control mt-5" value="{{old('name')}}">
            <span class="text-danger">
                @error('name')
                    {{$message}}
                @enderror
            </span>
            <input type="email" name="email" placeholder="Enter your Email" class="form-control mt-3" value="{{old('email')}}">
            <span class="text-danger">
                @error('email')
                    {{$message}}
                @enderror
            </span>
            <input type="password" name="password" placeholder="Enter your Password" class="form-control mt-3" value="{{old('password')}}">
            <span class="text-danger">
                @error('password')
                    {{$message}}
                @enderror
            </span>
            <input type="password" name="password_confirmation" placeholder="Enter your Password" class="form-control mt-3" value="{{old('password_confirmation')}}">
            <span class="text-danger">
                @error('password_confirmation')
                    {{$message}}
                @enderror
            </span>
            <br>
            <button class="btn btn-primary mt-4">Submit</button>
        </form>
        </div>
    </div>
</body>
</html>