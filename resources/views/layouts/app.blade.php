<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Task List</title>
        <link rel="stylesheet" href="/css/app.css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <body>
          @include('inc.navbar')
          <div class="container">
            @include('inc.messages')
            @yield('content')
          </div>

          <footer id="footer" class="text-center">
            <p>Copyright &copy; 2019</p>
          </footer>


    </body>
</html>
