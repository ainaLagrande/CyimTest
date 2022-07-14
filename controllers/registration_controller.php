<?php
require_once './models/registration_manager.php';

if(!empty($_POST)){

	if(checkUser() === false)
    {
        $errors = "*Email déjà utilisé*";
    }
    elseif(emailValidate() === false)
    {
        $errors = "*Email non valide*";
    }
	elseif(isUserFormValid() && isUserFormSubmitted() && empty($errors))
	{
		registerUserValidate();
        $succes = "Merci de votre inscription!";
	}
	else {
		$errors = "*Saisi incorrect*";
	}
}

require './views/registration.phtml';