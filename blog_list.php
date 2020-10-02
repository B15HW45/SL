<?php
include 'includes/header.php';
?>
<br>
<h3 style="text-align: center;">This is the <mark>blog list<mark> section of web page and here lies the main content.</h3>
<br>
<?php
include_once 'Config/db_conn.php';
?>
<h3><a href="addblog.php">Add New Blog</a></h3>
<?php 
$sqlquery = "SELECT * FORM blog;";
$data = mysqli_query($conn,$sqlquery);
foreach ($data as $unitdata):?>
	<h5>
		Blog Id:
		<?php
		echo $unitdata['id'];
		?>
	</h5>
		<h1>
		<?php
		echo $unitdata['title'];
		?>
	</h1>
	<p>
		<?php
		echo $unitdata['details'];
		?>
	</p>
<a href="#">Read More</a>
<?php 
endforeach;
?>
<?php
include 'includes/footer.php'
?>
<br>