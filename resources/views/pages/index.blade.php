<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Welcome to my website</h3>
    
    {{-- @if(count($names) > 0)
        @foreach($names as $name)
            {{ $name }}
        @endforeach 
    @endif --}}
    @php
        $a = 1;
        $b = 2;
        $c = 3;
    @endphp
    
   @foreach(range(1, 10) as $number)
        {{ $number }}
   @endforeach
 
</body>
</html>