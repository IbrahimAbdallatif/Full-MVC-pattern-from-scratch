<?php require('app/views/partials/head.php'); 

?>

<h1>All Users</h1>


<ul>
	<?php foreach ($users as $user) { ?>
	
		<li>

			<?php echo $user->name; ?>
		</li>
	<?php } ?>
</ul>

<h2>Submit Your Name</h2>

<form action="/users" method="POST">
	<input type="text" name="name">
	<button type="submit">Submit</button>
</form>

<?php require('app/views/partials/footer.php'); ?>