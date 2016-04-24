<?php
    // load up your config file
    require_once("../resources/config.php");

    require_once(TEMPLATES_PATH . "/header.php");

    require_once(LIBRARY_PATH . "/templateFunctions.php");
?>



<div class="row">
	<div class="col-xs-1"></div>
	<div class="col-xs-10 page">
		<div class="page-header">
			<h1>Sign in <small>...</small></h1>
		</div>
		<div class="alert alert-warning" role="alert">
			<a href="signup.php" class="alert-link">Don't have an account yet? <strong>Sign up </strong></a>
		</div>

		<form method="POST" action="verify.php" class="form-horizontal">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
					<input type="email" id="inputEmail3" placeholder="Email" name="email">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
					<input type="password" id="inputPassword3" placeholder="Password" name="password">
				</div>
			</div>

			<div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      	<div class="checkbox">
			        	<label>
			          		<input type="checkbox" name="admin"> Log in as admin
			        	</label>
			      	</div>
			    </div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<input type="submit" value="Sign in">
				</div>
			</div>
		</form>
	</div>

	<div class="col-xs-1"></div>
</div>
	<br />
	<br />
<?php
    require_once(TEMPLATES_PATH . "/footer.php");
?>
