@extends('layouts.app')

@section('content')
<br />
<div class="container">
    <div class="jumbotron">
        <h1>Welcome to the <span class="glyphicon glyphicon-grain"></span>Client Tracker</h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Dashboard</h3>
                </div>
                <div class="panel-body">
                    @if(Auth::user())
                        <p>You are logged in</p>
					<div class="panel-body">
						<ul class="nav nav-tabs">
							<li class="active"><a>Login</a></li>
                            <li><a href="/prospects">Home</a></li>
							<li><a href="prospects/create">Create prospect</a></li>
							<li><a href="prospects/search">Update prospect</a></li>
							<li><a href="prospects/search">Search prospects</a></li>
						</ul>
					</div>
                    @else
                        <p>Please login or register</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
