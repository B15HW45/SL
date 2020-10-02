<?php
include 'includes/header.php';
?>
<style type="">
	form{
		padding-top:80px;
	}
</style>
<form method="POST" action="Config/insert_in_db.php">
<label>Title:<input type="text" name="titlee"></label><br>
<label>Content:<input type="text" name="contentt"></label><br>
<button class="btn btn-outline-light" name="submit">Create Blog</button>
</form>
<?php
include 'includes/footer.php';
?>