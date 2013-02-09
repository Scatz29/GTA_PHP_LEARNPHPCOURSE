<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html"; charset=utf-8/>
    <title>Update Profile</title>
</head>

<body>

<?php
    // Set Error Handling Info for Script to handle Pursue3-3.php form
    ini_set('display_errors', 1);
    error_reporting(E_ALL | E_STRICT);

    // This page receives the data from Pursue3-3.php
    // It will receive: title, name, email, username, areas of interest, twitter handle, comments, and submit in $_POST.

    // Create shorthand versions of the variables:
    $title = $_POST['title'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $interests = $_POST['interests'];
    $twitter = $_POST['twitter'];
    $comments = $_POST['comments'];

    // Print out received data from form Pursue3-3.php
    print "<p>$name, your profile has been updated.  Here is an updated view of your profile: </p>";
    print "<p>Title: $title <br /> Name: $name <br /> Username: $username <br /> Your Interests Are: $interests <br /> Twitter Handle: $twitter <br /> Comments you have: $comments <br /></p>";


?>



</body>

</html>