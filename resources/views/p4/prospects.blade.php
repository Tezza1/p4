@extends("p4.layouts.master")

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
	    <form class="form-horizontal">
	        <legend>SD Contact Point</legend>
	        <div class="form-group">
	            <label class="control-label col-sm-2" for="sdRep">SD Rep:</label>
	            <div class="col-sm-10">
	                <input type="text" class="form-control" id="sdRep" placeholder="Enter SD Rep">
	            </div>
	        </div>
	        <div class="form-group">
	            <label class="control-label col-sm-2" for="consultant">Consultant:</label>
	            <div class="col-sm-10">
	                <input type="text" class="form-control" id="consultant" placeholder="Enter consultant">
	            </div>
	        </div>
	        <div class="form-group">
	            <div class="col-sm-offset-2 col-sm-10">
	                <label class="radio-inline"><input type="radio" name="optKanto">Kanto</label>
	                <label class="radio-inline"><input type="radio" name="optKansai">Kansai</label>
	                <label class="radio-inline"><input type="radio" name="optTokai">Tokai</label>
	                <label class="radio-inline"><input type="radio" name="optOther" disabled>Other</label>
	            </div>
	        </div>
	        <legend>Company information:</legend>
	        <div class="form-group">
	            <label class="control-label col-sm-2" for="company">Company:</label>
	            <div class="col-sm-10">
	                <input type="text" class="form-control" id="company" placeholder="Enter company">
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
	                <input type="text" class="form-control" id="contactPerson" placeholder="Enter contact person">
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
	            <label class="control-label col-sm-2" for="industry">Type of solution:</label>
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
	                <label class="checkbox-inline"><input type="checkbox" value="">First visit</label>
	                <label class="checkbox-inline"><input type="checkbox" value="">Needs hearing</label>
	                <label class="checkbox-inline"><input type="checkbox" value="">Proposal submitted</label>
	                <label class="checkbox-inline"><input type="checkbox" value="">Follow-up visit</label>
	                <label class="checkbox-inline"><input type="checkbox" value="">Quote submitted</label>
	            </div>
	        </div>
	        <div class="form-group">
	            <label class="control-label col-sm-2" for="potential">Potential:</label>
	            <div class="col-sm-10">
	                <select class="form-control" id="industry">
	                    <option value="auto">0 - 20% (Early days)</option>
	                    <option value="energy">21% - 40% (Small chance)</option>
	                    <option value="financial">41 - 60% (Reasonable chance)</option>
	                    <option value="it">61% - 80% (Good chance)</option>
	                    <option value="manufacturing">81% - 99% (Very good chance)</option>
	                    <option value="pharma">100% (Absolute certainty)</option>
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
	                <label class="radio-inline"><input type="radio" name="optKanto">Small</label>
	                <label class="radio-inline"><input type="radio" name="optKansai">Medium</label>
	                <label class="radio-inline"><input type="radio" name="optTokai">Large</label>
	                <label class="radio-inline"><input type="radio" name="optOther">Huge</label>
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

