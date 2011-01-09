<h1>Add User</h1>

<?php

	echo $form->create("User");
	echo $form->input("first_name");
	echo $form->input("last_name");
	echo $form->input("email");
	echo $form->end("Save User");

?>


