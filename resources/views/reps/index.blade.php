@extends("layouts.master")

@section("title")
    Index
@endsection


@section("overview")
    <br />
    <div class="container">
        <div class="jumbotron">
            <h1><span class="glyphicon glyphicon-grain"></span> Index</h1>
            <p>Lists all Sales Reps alphabetically</p>
        </div>
    </div>
@endsection

@section("output")
    <div class="container">
        <h3>Click on the Sales Rep below to make changes</h3>
        <br/>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Sales Rep</th>
                        <th>Team</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reps as $rep)
                        <tr>
                            <td><a href="/reps/{{ $rep->id }}">{{ $rep->rep }}</a></td>
                            <td>{{ $rep->team }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br/>
    </div>
@endsection


