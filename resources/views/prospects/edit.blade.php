@extends("layouts.master")

@section("title")
    Edit {{ $prospect->prospect }}
@endsection

@section("overview")
        <br />
        <div class="container">
            <div class="jumbotron">
                <h1><span class="glyphicon glyphicon-grain"></span> Edit</h1>
                <p>Edit the prospect: {{ $prospect->prospect }}</p>
            </div>
        </div>
@endsection

@section("forms")
   <div class="container">
        <form class="form-horizontal" method="post" action="/prospects/{{ $prospect->id }}">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <input name='id' value='{{$prospect->id}}' type='hidden'>
            <div class="form-group">
                <label class="control-label col-sm-2" for="prospect">Prospect:</label>
                <div class="col-sm-10"> 
                    <div class="input-group">
                        <input type="text" class="form-control" name="prospect" id="prospect" value='{{ old('prospect', $prospect->prospect) }}'>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="contact">Contact person:</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <input type="text" class="form-control" id="contact" name="contact" value='{{ old('contact', $prospect->contact) }}'>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    </div>
                </div>
            </div>
           <div class="form-group">
                <label class="control-label col-sm-2" for="industry">Industry:</label>
                <div class="col-sm-10">
                   <div class="input-group">
                        <input type="text" class="form-control" id="industry" name="industry" value='{{ old('industry', $prospect->industry) }}'>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                    </div>
                </div>
           </div>
           <div class="form-group">
                <label class="control-label col-sm-2" for="consultant">Consultant:</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <input type="text" class="form-control" id="consultant" name="consultant" value='{{ old('consultant', $prospect->consultant) }}'>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    </div>
                </div>
           </div>
          <div class="form-group">
                <label class="control-label col-sm-2" for="region">Region:</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <input type="text" class="form-control" id="region" name="region" value='{{ old('region', $prospect->region) }}'>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
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






