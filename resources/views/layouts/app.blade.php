<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Acme</title>
</head>
<body>
    @include('inc.navbar')

    <div id="main-container" class="container">
        @if(Request::is('/'))
            @include('inc.showcase')
        @endif
        <div class="row">
            <div id="content-container" class="col-md-8 col-lg-8">
                @include('inc.messages')
                @yield('content')
            </div>
    
            <div class="col-md-4 col-lg-4">
                @include('inc.sidebar')
            </div>
        </div>
    </div>
    
    @include('inc.footer')    

</body>
</html>