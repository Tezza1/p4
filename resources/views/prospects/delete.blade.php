@extends("layouts.master")

@section("title")
    Confirm deletion: {{ $prospect->prospect }}
@endsection

@section("overview")
        <br />
        <div class="container">
            <div class="jumbotron">
                <h1><span class="glyphicon glyphicon-grain"></span> Delete</h1>
                <p>Confirm deletion: {{ $prospect->prospect }}</p>
            </div>
        </div>
@endsection

@section('output')
    <div class="container">
        <div class="alert alert-warning">
            <form method='POST' action='/prospects/{{ $prospect->id }}'>
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <br>
                <h2>Final confirmation</h2>
                <p>Confirm request to <strong>{{ $prospect->prospect }}</strong></p>
                <br>
                 <button type="submit" class="btn btn-danger">Delete</button
            </form>
            <br/>
        </div>
    </div>




       
        
  

@endsection

