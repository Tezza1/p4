@extends("layouts.master")

@section("title")
    Index
@endsection

@section("overview")
        <br />
        <div class="container">
            <div class="jumbotron">
                <h1>New Company</h1>
            </div>
        </div>
@endsection

@section("output")
        <br />
        @foreach($prospects as $prospect)
             {{ $prospect }}
             <br>
        @endforeach
@endsection