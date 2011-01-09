<style type="text/css">
	th { text-align:left; }
</style>

<h1>Users</h1>
<table>
	<tr>
		<th>Id</th>
		<th>Email</th>
		<th>Last Name</th>
		<th>First Name</th>
	</tr>

	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo $user['User']['_id']; ?></td>
		<td>
			<?php echo $html->link($user['User']['email'],
			array('controller' => 'users', 'action' => 'view', $user['User']['_id'])); ?>
		</td>
		<td><?php echo $user['User']['last_name']; ?></td>
		<td><?php echo $user['User']['first_name']; ?></td>
		<td>

			<?php echo
				$html->link("Add Favorite Places",
						array(
						"controller" => "places",
						"action" => "add",
						"?" => array("uid" => $user["User"]["_id"]),
						array(), "")
			);

			?>

		</td>
	</tr>
	<?php endforeach; ?>

</table>