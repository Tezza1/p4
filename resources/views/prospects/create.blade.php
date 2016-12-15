@extends("layouts.master")

@section("title")
    Create propsect
@endsection

@section("overview")
        <br />
        <div class="container">
            <div class="jumbotron">
                <h1><span class="glyphicon glyphicon-grain"></span> Create</h1>
				<p>Create a new prospect</p>
            </div>
        </div>
@endsection

@section("forms")
    <div class="container">
        <form class="form-horizontal" method="post" action="/prospects">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="control-label col-sm-2" for="rep">Sales Rep:</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <input type="text" class="form-control" name="rep" id="rep" placeholder="Enter sales sep">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="consultant">Consultant:</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <input type="text" class="form-control" id="consultant" name="consultant" placeholder="Enter consultant">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="prospect">Prospect:</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <input type="text" class="form-control" name="prospect" id="prospect" placeholder="Enter prospect">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="contact">Contact person:</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter contact person">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    </div>
                </div>
            </div>
			<div class="form-group">
                <label class="control-label col-sm-2" for="industry">Industry:</label>
                <div class="col-sm-10">
                    <select class="form-control" id="industry" name="industry">
                        <option value="">No industry selected</option>
                        <option value="auto">Automotive</option>
                        <option value="energy">Energy</option>
                        <option value="financial">Financial</option>
                        <option value="it">Information Technology</option>
                        <option value="manufacturing">Manufacturing</option>
                        <option value="pharma">Pharmaceutical</option>
                        <option value="telecom">Telecommunications</option>
                        <option value="other">Other</option>
                   </select>
                </div>
            </div>
			<div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="radio" id="region">
                        <label class="radio-inline"><input type="radio" name="optRegion" value="kanto">Kanto</label>
                        <label class="radio-inline"><input type="radio" name="optRegion" value="kansai">Kansai</label>
                        <label class="radio-inline"><input type="radio" name="optRegion" value="tokai">Tokai</label>
                        <label class="radio-inline"><input type="radio" name="optRegion" value="other" disabled>Other</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Create prospect</button>
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





