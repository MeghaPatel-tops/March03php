<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('product.store')}}" method="post">
        @csrf

        <input type="submit" value="submit">
    </form>
    <h1>Welcome To app:{{$name}}</h1>

    @if($isAdmin)
        {{$name}}
    @endif

    @for($i=1; $i<=10;$i++)
        <p>{{$i}}</p>
    @endfor
</body>
</html>