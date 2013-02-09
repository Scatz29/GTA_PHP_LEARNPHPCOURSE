<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html"; charset=utf-8/>
    <title>Hello!!!</title>
</head>

<body>

<?php

// Processing Script for Pursue3-1.php

ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);

$firstname= $_GET['firstname'];
$lastname= $_GET['lastname'];
print "<p>Hello, <span style=\"font-weight: bold; \">$firstname $lastname</span>!</p>";
?>

</body>

</html>