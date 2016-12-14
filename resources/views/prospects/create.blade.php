@extends("layouts.master")

@section("title")
    Add client
@endsection

@section("overview")
        <br />
        <div class="container">
            <div class="jumbotron">
                <h1>New Company</h1>
            </div>
        </div>
@endsection

@section("forms")
    <div class="container">
        <form class="form-horizontal" method="post" action="/prospects/create">
            {{ csrf_field() }}
            <legend>SD Contact Point</legend>
            <div class="form-group">
                <label class="control-label col-sm-2" for="sdRep">SD Rep:</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <input type="text" class="form-control" name="rep" id="rep" placeholder="Enter SD Rep">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="consultant">Consultant:</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <input type="text" class="form-control" id="consultant" placeholder="Enter consultant">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="radio">
                        <label class="radio-inline"><input type="radio" name="optRegion" value="regionKanto">Kanto</label>
                        <label class="radio-inline"><input type="radio" name="optRegion" value="regionKansai">Kansai</label>
                        <label class="radio-inline"><input type="radio" name="optRegion" value="regionTokai">Tokai</label>
                        <label class="radio-inline"><input type="radio" name="optRegion" value="regionOther" disabled>Other</label>
                    </div>
                </div>
            </div>
            <legend>Company information:</legend>
            <div class="form-group">
                <label class="control-label col-sm-2" for="company">Company:</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <input type="text" class="form-control" name="prospect" id="prospect" placeholder="Enter company">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="industry">Industry:</label>
                <div class="col-sm-10">
                    <select class="form-control" id="industry">
                        <option>No industry selected</option>
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
                <label class="control-label col-sm-2" for="contactPerson">Cotact person:</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <input type="text" class="form-control" id="contactPerson" placeholder="Enter contact person">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="additionalInfo">Additional information:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="5" id="additionalInfo" placeholder="Enter any additional info"></textarea>
                </div>
            </div>
            <legend>Prospect information</legend>
            <div class="form-group">
                <label class="control-label col-sm-2" for="typeTraining">Type of solution:</label>
                <div class="col-sm-10">
                    <select class="form-control" id="typeTraining">
                        <option value="auto">No training type selected</option>
                        <option value="auto">Communications</option>
                        <option value="auto">Interculture</option>
                        <option value="energy">Leadership</option>
                        <option value="financial">Blended</option>
                        <option value="it">Coaching</option>
                        <option value="other">Other</option>
                   </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <label class="checkbox-inline"><input type="checkbox" id="stage" value="firstVisit">First visit</label>
                    <label class="checkbox-inline"><input type="checkbox" id="stage value="needsHearing">Needs hearing</label>
                    <label class="checkbox-inline"><input type="checkbox" id="stage value="proposal">Proposal submitted</label>
                    <label class="checkbox-inline"><input type="checkbox" id="stage value="followUp">Follow-up visit</label>
                    <label class="checkbox-inline"><input type="checkbox" id="stage value="quote">Quote submitted</label>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="potential">Potential:</label>
                <div class="col-sm-10">
                    <select class="form-control" id="potential">
                        <option value="20%">0 - 20% (Early days)</option>
                        <option value="40%">21% - 40% (Small chance)</option>
                        <option value="60%">41 - 60% (Reasonable chance)</option>
                        <option value="80%">61% - 80% (Good chance)</option>
                        <option value="80%+">81% - 99% (Very good chance)</option>
                        <option value="100%">100% (Absolute certainty)</option>
                   </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="additionalInfo2">Additional information:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="5" id="additionalInfo2" placeholder="Enter any additional info"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="industry">Deal size:</label>
                <div class="col-sm-10">
                    <div class="radio">
                        <label class="radio-inline"><input type="radio" name="optDealSize" value="smallDeal">Small</label>
                        <label class="radio-inline"><input type="radio" name="optDealSize" value="mediumDeal">Medium</label>
                        <label class="radio-inline"><input type="radio" name="optDealSize" value="largeDeal">Large</label>
                        <label class="radio-inline"><input type="radio" name="optDealSize" value="hugeDeal">Huge</label>
                    </div>
                </div>
            </div>
            <br />
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div><!-- end container -->
    <br />
@endsection

@section("error")
    <br>
    @if(count($errors) > 0)
        <ul class="error">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <br>
@endsection





