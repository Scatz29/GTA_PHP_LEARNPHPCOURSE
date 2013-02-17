<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html"; charset=utf-8/>
    <title>pursue5-5.php</title>
</head>

<body>
<?php
// Script for receiving pursue5-4.html form data
// Error Handling
ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);

// Create and sanctify local variables for form inputs $first_name, $last_name, $email1, $email2, $posting from $_POST array
$first_name = trim(htmlentities($_POST['first_name']));
$last_name = trim(htmlentities($_POST['last_name']));
$email1 = trim(htmlentities($_POST['email1']));
$email2 = trim(htmlentities($_POST['email2']));
$posting = trim(htmlentities($_POST['posting']));

// Create a full name variable
$name = $first_name . ' ' . $last_name;

// Get a word count
$words = str_word_count($posting);

// Remove unkind words
$posting = str_ireplace('stupid', 'smart', $posting);
$posting = str_ireplace('ugly', 'beautiful', $posting);
$posting = str_ireplace('obese', 'chiseled', $posting);
$posting = str_ireplace('slow', 'fast', $posting);

// Print message
print "<div>
            Thanks for your post $name!  We will contact you by email at $email1 if we have any questions.  Please verify the following as your post:
            <p>$posting</p>
            <p>($words words)</p>
      </div>";

// Make a link to another page:
$name = urlencode($name);
$email1 = urlencode($_POST['email1']);
print 'Thanks for your post!  Click <a href="pursue5-4.html?name=' . '' . '&email=' . '' . '">here</a> to return to the form.';
?>


</body>

</html>