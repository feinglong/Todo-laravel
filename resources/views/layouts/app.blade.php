<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10 Task List App</title>
    @yield('styles')
    <style>
        .alert-success {
            color: green;
            border: 1px solid green;
            padding: 10px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <h1>@yield('title')</h1>
    <div class="container">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif  
        @yield('content')
    </div>
</body>

</html>