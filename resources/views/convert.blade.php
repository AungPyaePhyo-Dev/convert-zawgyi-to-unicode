<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Convert From Zawgyi to Unicode</h3>

    @if(session()->has('message'))
        <h4 style="color: green;">{{ session()->get('message') }}</h4>
    @endif

    <form action="{{ route('convert') }}" method="post">
        @csrf
        <button type="submit">Convert</button>
    </form>

    <hr>

    <form action="{{ route('convert.series') }}" method="post">
        @csrf
        <button type="submit">Convert Series</button>
    </form>

    <hr>

    <form action="{{ route('convert.publisher') }}" method="post">
        @csrf
        <button type="submit">Convert Publisher</button>
    </form>

    <hr>

    <h3>Mongo Database</h3>
    <form action="{{ route('convert.mongo.series') }}" method="post">
        @csrf
        <button type="submit">Convert Mongo Series</button>
    </form>
    <hr>
    <form action="{{ route('convert.mongo.publisher') }}" method="post">
        @csrf
        <button type="submit">Convert Mongo Publisher</button>
    </form>

</body>
</html>