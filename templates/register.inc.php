<h1>Register new account</h1>

<form action="./?page=register.store" method="post">

	<div>
		<label for="email">E-Mail address: </label>
		<?php $email = isset($_POST['email']) ? $_POST['email']: '' ?>
		<input type="email" value="<?= $email ?>" name="email" id="email">
		<?= isset ($this->data['email'])? $this->data ['email'] : "" ?>
	</div>

	<div>
		<label for="password">Password (8 character minimum): </label>
		<input type="password" name="password" id="password">
		<?= isset ($this->data['password'])? $this->data ['password'] : "" ?>
	</div>

	<div>
		<label for="password2">Confirm Password: </label>
		<input type="password" name="password2" id="password2">
	</div>

	
	<div class="row">
        <fieldset class="large-12 medium-12 columns">
              <button class="button" type="submit" name="register" value="Register!">Register!</button>
        </fieldset>
    </div>
	
</form>