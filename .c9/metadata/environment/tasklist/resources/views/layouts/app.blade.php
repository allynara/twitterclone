{"filter":false,"title":"app.blade.php","tooltip":"/tasklist/resources/views/layouts/app.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":22,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html>","    <head>","        <meta charset=\"utf-8\">","","        <title>MessageBoard</title>","","        <!-- Bootstrap -->","        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">","        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>","        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>","    </head>","","    <body>","        @include('commons.navbar')","        ","        <div class=\"container\">","            @include('commons.error_messages')","            ","            @yield('content')","        </div>","    </body>","</html>"],"id":3},{"start":{"row":0,"column":0},"end":{"row":23,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html>","    <head>","        <meta charset=\"utf-8\">","        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">","        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","","        <title>Microposts</title>","","        <!-- Bootstrap -->","        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">","        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>","        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>","    </head>","    <body>","        @include('commons.navbar')","","        <div class=\"container\">","            @include('commons.error_messages')","","            @yield('content')","        </div>","    </body>","</html>"]}],[{"start":{"row":0,"column":0},"end":{"row":23,"column":7},"action":"remove","lines":["<!DOCTYPE html>","<html>","    <head>","        <meta charset=\"utf-8\">","        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">","        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","","        <title>Microposts</title>","","        <!-- Bootstrap -->","        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">","        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>","        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>","    </head>","    <body>","        @include('commons.navbar')","","        <div class=\"container\">","            @include('commons.error_messages')","","            @yield('content')","        </div>","    </body>","</html>"],"id":4},{"start":{"row":0,"column":0},"end":{"row":4,"column":6},"action":"insert","lines":["@if (count($errors) > 0)","    @foreach ($errors->all() as $error)","        <div class=\"alert alert-warning\">{{ $error }}</div>","    @endforeach","@endif"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":8,"column":0},"end":{"row":8,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1529036447884,"hash":"f8fc763f6b951f089991d4acb35478123883e5df"}