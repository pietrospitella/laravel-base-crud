<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Comics</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @include('partials.header')
                
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{asset('../resources/js/app.js')}}"></script>
</body>
</html>