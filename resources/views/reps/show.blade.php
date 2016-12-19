@extends("layouts.master")

@section("title")
    Show: {{ $rep->rep }}    
@endsection

@section("overview")
        <br />
        <div class="container">
            <div class="jumbotron">
                <h1><span class="glyphicon glyphicon-grain"></span> Show</h1>
                <p>Show Sales Rep: {{ $rep->rep}}</p>
            </div>
        </div>
@endsection

@section("output")
    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Sales Rep</th>
                        <th>Team</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>{{ $rep->rep }}</td>
                            <td>{{ $rep->team }}</td>
                        </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <br />
            <div class="col-sm-4">
                <a class='button' href='/reps/{{ $rep->id }}/edit'><span class="glyphicon glyphicon-pencil"></span> Edit</a>
            </div>
            <div class="col-sm-4">
                <a class='button' href='/reps/{{ $rep->id }}/delete'><span class="glyphicon glyphicon-remove"></span> Delete</a>   
            </div>
            <div class="col-sm-4">
                 <a class='button' href='/reps '><span class="glyphicon glyphicon-search"></span> Search again</a>     
            </div>          
        </div>
        <br />
    </div>
@endsection
