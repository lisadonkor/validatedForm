<?php include('form.php');?>


<html>
    <head>
        <title></title>
        <link href="form.css" rel="stylesheet">
    </head>

    <body>
        <div class="main">
            <p><h2>Sign Up</h2></p>
            <h4>Please fill this form to create an account!</h4>
            <hr><br>
		
  
			<form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
				<div id="set1">
					<div id="set0">
						<input type="text" size="20px"placeholder="First name" name= "firstname" value="<?= $firstname ?>">
						<span class="error"><?= $firstname_error ?></span>
					</div><br>
					<div id="set2">
						<span class="error" style="padding-top-left: 20px;"><input type="text" size="20px"placeholder="Last name" name= "lastname" value="<?= $lastname ?>"><?= $lastname_error ?></span><br><br>
					</div>
				</div>
				
				<div id="set3">
					<div id=01>
						<input type="text" size="20" placeholder="Telephone" name= "telephone" value="<?= $telephone ?>">
						<span class="error"><?= $telephone_error ?></span>
					</div><br>
					<div id="set4">
						<span class="error" style="padding-top-left: 30px;"><input type="text" size="30" placeholder="Company" name= "company" value="<?= $company ?>"><?= $company_error ?></span><br><br>
					</div>
				</div>

				<div id="set5">
					<input type="password" size="35" placeholder="Password" name= "password" id="myInput" value="<?= $password ?>">
					<br><span class="error"><?= $password_error ?></span><br>
					<div id="set6">
						<input type="password" size="35" placeholder="Confirm Password" name= "passwordconfirmation" value="<?= $passwordconfirmation ?>">
						<br><span class="error"><?= $passwordconfirmation_error ?></span>
					</div>
				</div>

				
				<h4><input type="checkbox">
					I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></h4>
				<br><button onclick="myfunction()" class="signbaq">Sign Up</button>
				
				<div class="success"><?= $success ?></div>
				
			<form>  
        </div>
    </body>
</html>