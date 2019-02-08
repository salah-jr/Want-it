<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Todo List</title>
</head>
<body>

    <div class="container">
            @include('inc.nav')
            <br><br>

            @include('inc.messages')
            
            @yield('content')
    </div>
    <br><br><br>
    <footer class="footer">
            <div class="container">
              <span class="text-muted">Copyright &copy; 2019 Want IT</span>
            </div>
    </footer>
</body>
</html>