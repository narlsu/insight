<?php
namespace App\Controllers;

use App\Views\AccountView;
use App\models\UsersModel;
use App\Views\LoginView;

Class AccountController
{
	public function show(){
		$view = new AccountView();
     	$view->render();
     }

    public function showLoginForm() {
    	$view = new LoginView();
    	$view->render();
    }

    public function processLoginForm(){
    	// make sure the email has been provided
    	// make sure the password has been provided
    	// It should aslo be at least 8 chars,
    	// no point bugging the database with a password
    	// that is is obviously wrong

    	// use the Users model
    	$user = new UsersModel();
    	$result = $user->attemptLogin();
    	// If bad then generate error messages
    	$errors['login-error'] = 'invalid credentials';

    	// Show the view
    	$view = new LoginView($errors);
    	$view->render();
    }

     public function newPost() {
            

        // Validation

        // If good validation

        // Upload the file, make thumbnail too

        // PostModel

        // Redirect to home page
        



    }
}
