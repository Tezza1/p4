@extends("layouts.master")

@section("title")
    Request deletion: {{ $rep->rep }}
@endsection

@section("overview")
        <br />
        <div class="container">
            <div class="jumbotron">
                <h1><span class="glyphicon glyphicon-grain"></span> Delete</h1>
                <p>Request deletion: {{ $rep->rep }}</p>
            </div>
        </div>
@endsection

@section('output')
    <div class="container">
        <div class="alert alert-warning">
            <h2>Request delete confirmation</h2>
                <p>Confirm request to delete <strong>{{ $rep->rep }}</strong></p>
                <p>Please contact your systems adiminsitrator to complete this action</p>
                <br>
                <a class='button' href='/reps '><span class="glyphicon glyphicon-search"></span> Search again</a>     
            <br/>
        </div>
    </div>




       
        
  

@endsection

