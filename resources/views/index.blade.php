<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
 
    <div class="container-fluid bg-primary mb-4">
        <div class="container">
            <nav class="nav justify-content-center text-white py-3">
                <a class="nav-link active text-white font-weight-bold" href="/">Home</a>
                <a class="nav-link text-white font-weight-bold" href="/hariom">Hariom</a>
                <a class="nav-link text-white font-weight-bold" href="/about">About</a>
                <a class="nav-link text-white font-weight-bold" href="/register">Register</a>
                <a class="nav-link text-white font-weight-bold" href="/contact">Contact</a>
                <a class="nav-link text-white font-weight-bold" href="/customer/view">Customer View</a>
                <a class="nav-link text-white font-weight-bold" href="{{route('customer.create')}}">Customer</a>
            </nav>
        </div>
    </div>
    <div class="container">
        @yield('main')
    </div>
</body>

</html>