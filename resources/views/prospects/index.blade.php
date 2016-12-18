@extends("layouts.master")

@section("title")
    Index
@endsection


@section("overview")
    <br />
    <div class="container">
        <div class="jumbotron">
            <h1><span class="glyphicon glyphicon-grain"></span> Index</h1>
            <p>Lists all avaialble prospects</p>
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
                        <th>Consultant</th>
                        <th>Prospect</th>
                        <th>Contact</th>
                        <th>Industry</th>
                        <th>Region</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($prospects as $prospect)
                        <tr>
                            <td>{{ $prospect->rep->rep }}</td>
                            <td>{{ $prospect->consultant }}</td>
                            <td>{{ $prospect->prospect }}</td>
                            <td>{{ $prospect->contact }}</td>
                            <td>{{ $prospect->industry }}</td>
                            <td>{{ $prospect->region }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


