@extends("layouts.master")

@section("title")
    Show clients
@endsection

@section("overview")
        <br />
        <div class="container">
            <div class="jumbotron">
                <h1>Show a search request for a client</h1>
            </div>
        </div>
@endsection

@section("output")
        <br>
        @foreach($prospects as $prospect)
            {{ $prospect["company"] }}
			{{ $prospect->company }}
             <br>
        @endforeach
@endsection

 