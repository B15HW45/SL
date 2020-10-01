<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blog Site</title>
	    <div class="myheader">
            <div class="social">
                    <div class="social-networks">
						<a href="index.php">Home</a> &nbsp;
						<a href="about.php">About Us</a>&nbsp;
						<a href="blog_list.php">Blog list</a>&nbsp;
						<a href="contact.php">Contact Us</a>&nbsp;
					</div>
			</div>
		</div>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
</head>
<style type="text/css">
	.myheader a {
    color: black;
    text-decoration: none;
}

.myheader a:hover,
.myheader a:focus {
    text-decoration: none;
    color: rgb(255, 102, 0);
}

.myheader .social-networks a {
    color: #f9f9f9;
    transition: 0.2s;
}
.myheader .social-networks a:hover {
    text-decoration: none;
}

@media screen and (max-width: 767px) {
    .myheader {
        text-align: center;
    }
</style>
<body>
<?php
	$randomcookie = "username";
	$cookievalue = "Bishwas Shrestha";

	setcookie($randomcookie,$cookievalue,time() + (86400 * 30));
	$_SESSION['userid'] = "bishwasshrestha@kbc.edu.np";
?>
