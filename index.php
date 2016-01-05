<html>
<body>
<form id="form" name="form" class="form-horizontal" action="#" method="post">
<fieldset>

<!-- Form Name -->
<legend>Please enter your search address</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="address">Address</label>
  <div class="col-md-4">
  <input id="address" name="address" type="text" placeholder="Please type your address" class="form-control input-md" >
  <span class="help-block"></span>
  </div>
</div>

<!-- City and state -->
<div class="form-group">
  <label class="col-md-4 control-label" for="city">City</label>
  <div class="col-md-4">
    <input id="city" name="city" type="search" placeholder="Please type your city" class="form-control input-md" >
    <p class="help-block"></p>
  </div>
</div>

<!-- State -->
<div class="form-group">
  <label class="col-md-4 control-label" for="state">State</label>
  <div class="col-md-4">
    <select id="state" name="state" class="form-control" >
		<option value="">Please select your state</option>
		<option value="AK">Alaska</option>
		<option value="AL">Alabama</option>
		<option value="AR">Arkansas</option>
		<option value="AZ">Arizona</option>
		<option value="CA">California</option>
		<option value="CO">Colorado</option>
		<option value="CT">Connecticut</option>
		<option value="DC">District of Columbia</option>
		<option value="DE">Delaware</option>
		<option value="FL">Florida</option>
		<option value="GA">Georgia</option>
		<option value="HI">Hawaii</option>
		<option value="IA">Iowa</option>
		<option value="ID">Idaho</option>
		<option value="IL">Illinois</option>
		<option value="IN">Indiana</option>
		<option value="KS">Kansas</option>
		<option value="KY">Kentucky</option>
		<option value="LA">Louisiana</option>
		<option value="MA">Massachusetts</option>
		<option value="MD">Maryland</option>
		<option value="ME">Maine</option>
		<option value="MI">Michigan</option>
		<option value="MN">Minnesota</option>
		<option value="MO">Missouri</option>
		<option value="MS">Mississippi</option>
		<option value="MT">Montana</option>
		<option value="NC">North Carolina</option>
		<option value="ND">North Dakota</option>
		<option value="NE">Nebraska</option>
		<option value="NH">New Hampshire</option>
		<option value="NJ">New Jersey</option>
		<option value="NM">New Mexico</option>
		<option value="NV">Nevada</option>
		<option value="NY">New York</option>
		<option value="OH">Ohio</option>
		<option value="OK">Oklahoma</option>
		<option value="OR">Oregon</option>
		<option value="PA">Pennsylvania</option>
		<option value="PR">Puerto Rico</option>
		<option value="RI">Rhode Island</option>
		<option value="SC">South Carolina</option>
		<option value="SD">South Dakota</option>
		<option value="TN">Tennessee</option>
		<option value="TX">Texas</option>
		<option value="UT">Utah</option>
		<option value="VA">Virginia</option>
		<option value="VT">Vermont</option>
		<option value="WA">Washington</option>
		<option value="WI">Wisconsin</option>
		<option value="WV">West Virginia</option>
		<option value="WY">Wyoming</option>
    </select>
  </div>
</div>

<!-- Label for zip -->
<div class="form-group">
  <label class="col-md-4 control-label">Or</label>
</div>

<!-- Zip -->
<div class="form-group">
  <label class="col-md-4 control-label" for="zip" >Zip</label>
  <div class="col-md-4">
  <input id="zip" name="zip" type="text" placeholder="Zip code" class="form-control input-md" >
  <span class="help-block"></span>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <input id="submit" name="submit" class="btn btn-primary" text="Submit" type="submit">
  </div>
</div>

<div class="form-group">
	<label class="col-md-4" for="responseContainer"></label>
	<div id="responseContainer" class="col-md-4">
	</div>
</div>

</fieldset>
</form>

<!-- jQuery -->
<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<!-- jQuery validation -->
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<!-- Custom CSS & JS-->
<link rel="stylesheet" href="css/style.css">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700&amp;subset=latin" rel="stylesheet" type="text/css">
<script src="js/scripts.js"></script>
</body>
</html>