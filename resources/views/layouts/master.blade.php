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
                <a class="navbar-brand" href="/prospects"><span class="glyphicon glyphicon-grain"></span> Client Tracker</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="/prospects">Home</a></li>
                    <!-- DROP DOWN LIST PROSPECTS -->
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Prospects<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/prospects">Index</a></li>
                            <li><a href="/prospects/create">Create</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Reps<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/reps">Index</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
					<!-- CUSTOMIZE BASED ON LOGIN STTAUS -->
					@if(Auth::check())
					    <li><a>{{ Auth::user()->name }}</a></li>
						<li><a href="/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					@else
						<li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>	
					@endif
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
                    <h4>Client Tracker</h4>
                </div>
            </div>
    </footer>

</body>
</html>