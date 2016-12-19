@extends("layouts.master")

@section("title")
    Edit {{ $rep->rep}}
@endsection

@section("overview")
        <br />
        <div class="container">
            <div class="jumbotron">
                <h1><span class="glyphicon glyphicon-grain"></span> Edit</h1>
                <p>Edit the Sales Rep: {{ $rep->rep }}</p>
            </div>
        </div>
@endsection

@section("forms")
   <div class="container">
        <form class="form-horizontal" method="post" action="/reps/{{ $rep->id }}">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <input name='id' value='{{$rep->id}}' type='hidden'>
            <div class="form-group">
                <label class="control-label col-sm-2" for="prospect">Sales Rep:</label>
                <div class="col-sm-10"> 
                    <div class="input-group">
                        <input type="text" class="form-control" name="rep" id="rep" value='{{ old('rep', $rep->rep) }}'>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="team">Team:</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <input type="text" class="form-control" id="team" name="team" value='{{ old('team', $rep->team) }}'>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Edit prospect</button>
                </div>
            </div>
        </form>
    </div><!-- end container -->
    <br />
@endsection

@section("error")
    <br>
    @if(count($errors) > 0)
        <div class="container">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li><strong>{{ $error }}</strong></li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <br>
@endsection






