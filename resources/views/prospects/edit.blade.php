@extends("layouts.master")

@section("title")
    Edit {{ $prospect->prospect }}
@endsection

@section("overview")
        <br />
        <div class="container">
            <div class="jumbotron">
                <h1>Edit</h1>
                <p>Edit the rpsoect: {{ $prospect->prospect }}</p>
            </div>
        </div>
@endsection

@section("forms")
    <div class="container">
        <form class="form-horizontal" method="post" action="/prospects">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <input name='id' value='{{$prospects->id}}' type='hidden'>
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
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Edit prospect</button>
                </div>
            </div>
        </form>
    </div><!-- end container -->
    <br />
@endsection

@section("output")
        <br />
        @foreach($prospects as $prospect)
             {{ $prospect }}
             <br>
        @endforeach
@endsection