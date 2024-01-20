<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Contact</title>
</head>
<body>
    <h1>{!!$name!!} Chouhan</h1>
    @if($name == "") 
        {{"Name is empty"}}
    
    @elseif($name != "Hariom") 
        {{"Name is correct"}}
    
    @elseif($name)
        {{"Name is incorrect"}}
    @endif

    @unless($name == "Hariom")
        Name is incorrect
    @endunless


    <div>
    @for ($i=1; $i<10; $i++)
        <h2>
            {{$i}}
        </h2>
    @endfor
    </div>

    @for($i=1; $i<=10; $i++)
        @if($i == 7)
        Thala for a Reason
        <!-- @continue; -->
        @break;
        @endif
        <h2>{{$i}}</h2>
    @endfor
</body>
</html>