<div>
	Add a favorite place for user with email <?php echo $user["email"] ?>

	<?php

	echo $form->create("Place");
	echo $form->input("User.favorite_places.longitude");
	echo $form->input("User.favorite_places.latitude");


	?>

	<input type="hidden" name="uid" value="<?php echo $user["_id"] ?>" />

	<?php

	echo $form->end("Save Place");

	?>


</div>
