<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
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
</body>

</html>