<?php
 $firstname_error = $lastname_error = $telephone_error = $company_error = $password_error = $passwordconfirmation_error = "";
 $firstname = $lastname = $telephone = $company = $password = $passwordconfirmation = $success = "";
 
 function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
 
 if($_SERVER["REQUEST_METHOD"] == "POST") {
	 if(empty($_POST["firstname"])) {
			$firstname_error = "First name is required!";
		}
		else{
			$firstname = test_input($_POST["firstname"]);
		
			if(!preg_match("/^[a-zA-Z ]*$/", $firstname)){ //preg_match test $strings against perl-cpmpatible regular expression $regex
				$firstname_error = "Invalid entry!";
			}
		
		}
		
	 if(empty($_POST["lastname"])) {
			$lastname_error = "Last name is required!";
		}
		else{
			$lastname = test_input($_POST["lastname"]);
		
			if(!preg_match("/^[a-zA-Z ]*$/",$lastname)){ //preg_match test $strings against perl-cpmpatible regular expression $regex
				$lastname_error = "Invalid entry!";
			}
		}
		
		
		
		if(empty($_POST["telephone"])) {
			$telephone_error = "Telephone is required!";
		}
		else{
			$telephone = test_input($_POST["telephone"]);
	
			if(!preg_match("/^\+233[0-9]{9}$/",$telephone)){ 
				$telephone_error = "Invalid entry, begin with country code!";
			}
		}
		
		
		
		if(empty($_POST["company"])) {
			$company_error = "Company is required!";
		}
		else{
			$company = test_input($_POST["company"]);
		
			if(!preg_match("/^[a-zA-Z ]*$/",$company)){ 
				$company_error = "Invalid entry!";
			}
		}
		
		
		
		
		if(empty($_POST["password"])) {
			$password_error = "Password is required!";
		}
		else{
			$password = test_input($_POST["password"]);
		
			if(!preg_match("/.{6,}/",$password)){ 
				$password_error = "Invalid entry; enter more than 6 characters!";
			}
		}
		
		if(empty($_POST["passwordconfirmation"])) {
			$passwordconfirmation_error = "Password confirmation is required!";
		}
		else{
			$passwordconfirmation = test_input($_POST["passwordconfirmation"]);
			
			if(0 !== strcmp($_POST["password"], $_POST["passwordconfirmation"])){
			 $passwordconfirmation_error = "Passwords do not match!";
			}
			
		}
		
		
		if($firstname_error == '' and $lastname_error == '' and $telephone_error == '' and $company_error == '' and $password_error == ''){
			$message_body = '';
			unset($_POST['submit']);
			foreach($_POST as $key => $value){
				$message_body .= "$key : $value\n";
			}
			
			$to = 'aliciaquoode17@gmail.com';
			$subject = 'Form submit';
			if(mail($to, $subject, $message_body)){
				$success = "Message sent successfully!";
				$firstname = $lastname = $telephone = $company = $password = $passwordconfirmation = '';
			}
		}
		
		
		
	}
	
	
?>