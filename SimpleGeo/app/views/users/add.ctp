<h1>Add User</h1>

<?php

	echo $form->create("User");
	echo $form->input("first_name");
	echo $form->input("last_name");
	echo $form->input("email");
?>

<div>
	<p />Favorite Place
	<?php
		echo $form->input("User.favorite_places.0.name");
		echo $form->input("User.favorite_places.0.longitude");
		echo $form->input("User.favorite_places.0.latitude");
	?>
</div>

<?php echo $form->end("Save User"); ?>


