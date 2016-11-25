<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        @yield("title")
    </title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- local styles -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                <a class="navbar-brand" href="#">Client Tracker</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <!-- DROP DOWN LIST -->
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Clients<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">New client</a></li>
                            <li><a href="#">Update client</a></li>
                        </ul>
                    </li>
                    <!-- DROP DOWN LIST -->
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Training<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">New training</a></li>
                            <li><a href="#">Update training</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Search</a></li>
                    <li><a href="#">Request delete</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="overview">
        @yield("overview")
    </div>

    <div class="forms">
        @yield("forms")
    </div>

    <div class = "error">
        @yield("error")
    </div>

    <div class="output">
        @yield("output")
    </div>

    <footer>
            <div class="container-fluid">
                <div class="well">
                    <h4>The Client Trackers</h4>
                </div>
            </div>
    </footer>

</body>
</html>