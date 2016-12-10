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
                <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-grain"></span> Client Tracker</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <!-- DROP DOWN LIST PROSPECTS -->
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Prospects<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="prospects">New prospect</a></li>
                            <li><a href="#">Update prospect</a></li>
                            <li><a href="#">Search</a></li>
                        </ul>
                    </li>
                    <!-- DROP DOWN LIST CLIENTS-->
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Clients<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">New client</a></li>
                            <li><a href="#">Update client</a></li>
                            <li><a href="#">Search</a></li>
                        </ul>
                    </li>
                    <!-- DROP DOWN LIST TRAINING-->
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Training<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">New training</a></li>
                            <li><a href="#">Update training</a></li>
                            <li><a href="#">Search</a></li>
                        </ul>
                    </li>
                    <!-- DROP DOWN LIST OPEN COURSES-->
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Open Courses<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">HOC</a></li>
                            <li><a href="#">LOC</a></li>
                            <li><a href="#">Search</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Request delete</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
					<!-- CUSTOMIZE BASED ON LOGIN STTAUS -->
					@if(Auth::check())
						<li><a href="logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					@else
						<li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>	
					@endif                 
					<li><a href="register"><span class="glyphicon glyphicon-user"></span> Register</a></li>
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
                    <a href="#">Client Tracker</a>
                </div>
            </div>
    </footer>

</body>
</html>