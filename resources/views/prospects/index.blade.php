@extends("layouts.master")

@section("title")
    Index
@endsection

@section("overview")
        <br />
        <div class="container">
            <div class="jumbotron">
                <h1>Index of all relevant companies</h1>
            </div>
        </div>
@endsection

@section("output")
        <br/>
        @foreach($prospects as $prospect)
            {{ $prospect }}
        @endforeach
@endsection