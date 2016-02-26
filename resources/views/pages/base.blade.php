<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <title>myBlog</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{--class="col-md-6 col-md-offset-3 jumbotron text-center"--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">
    </script>
    <style>
        body {
            font-family: 'Lato';
        }
        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
            margin: 0;
            padding: 0;
            height: auto;
            width: 100%;
            background-repeat: no-repeat;
            background-position: center;
            display: table;
            font-weight: bolder;
            background-image: url({{ URL::asset('rommel.png') }});
        }
        .content {
            text-align: center;
            display: inline-block;
        }
        .title {
            font-size: 96px;
            opacity: 2;
            color: black;
        }
        .navigation {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: bold;
            font-size: 38px;
        }
    </style>
</head>
<body>
    <header>
        <div class="container"><a href="/">
            <div class="content">
                    <div class="title">ErwinRommel'sBLOG</div>
            </div></a>
        </div>
        <div class="navigation">
            <div class="row text-center col-sm-offset-2">
                <a href="/">
                <div class="col-xs-6 col-sm-3">
                    Home
                </div>
                </a>
                <a href="./newposts">
                <div class="col-xs-6 col-sm-3">
                    New Post
                </div>
            </a>
            <a href="./aboutme">
                <div class="col-xs-6 col-sm-3">
                    AboutMe
                </div>
            </a>
            </div>
        </div>
        {{--@yield('title')--}}
    </header>
        <div style='font-family: "Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif'>
            @yield('content')
        </div>
    <footer>
    </footer>
</body>
</html>