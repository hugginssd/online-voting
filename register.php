<script src='https://www.google.com/recaptcha/api.js'></script>
<?php include "header.php";
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<br>
<br>
	<center>
		<legend> <h3> Register </h3></legend> 
	</center>
<?php global $nam; echo $nam; ?> 
<?php global $error; echo $error; ?>
	<center>
		<form action= "reg_action.php" method= "post" id="myform" >
				<div class="form-group col-md-4">
					<div class="form-group row">
								<label for="inputFirstname3" class="col-sm-2 col-form-label">Firstname</label>
								<div class="col-sm-10">
									<input type="text" name="firstname" value="" class="form-control" id="inputFirstname3" placeholder="Firstname">
								</div>
					</div>
							<br>
					<div class="form-group row">
								<label for="inputLastname3" class="col-sm-2 col-form-label">Lastname</label>
								<div class="col-sm-10">
									<input type="text" name="lastname" value="" class="form-control" id="inputLastname3" placeholder="Lastname">
								</div>
					</div>
							<br>
					<div class="form-group row">
								<label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
								<div class="col-sm-10">
									<input type="email" name="username" value="" class="form-control" id="inputEmail3" placeholder="Username">
								</div>
					</div>
							<br>
					<div class="form-group row">
								<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
								<div class="col-sm-10">
									<input type="password" name="password" value="" class="form-control" id="inputPassword3" placeholder="Password">
								</div>
					</div>
								<br>
									<div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div> 
								<br>
							<br>
						<input type="submit" class="btn btn-primary" name="submit" value="Next" />
				</div>
		</form>
	</center>
	<script type= "text/javascript" >
	var frmvalidator = new Validator("myform"); 
	frmvalidator.addValidation("firstname","req","Please enter student firstname"); 
	frmvalidator.addValidation("firstname","maxlen=50");
	frmvalidator.addValidation("lastname","req","Please enter student lastname"); 
	frmvalidator.addValidation("lastname","maxlen=50");
	frmvalidator.addValidation("username","req","Please enter student username"); 
	frmvalidator.addValidation("username","maxlen=50");
	frmvalidator.addValidation("password","req","Please enter student password"); 
	frmvalidator.addValidation("password","minlen=6","Password must not be less than 6 characters.");
</script>
<?php include "footer.php" ;?>
