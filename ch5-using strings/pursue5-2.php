<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html"; charset=utf-8/>
    <title>Forum Posting - pursue5-2.php</title>
</head>

<body>

<?php // Script - pursue5-2.php - for handling pursue5-1.html data
// Error Handling
ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);

// Assign form data to local variables
// Script 5.7 - Using str_ireplace() and trim()
/* This script receives five values from posting.html: first_name, last_name, email, posting, submit */
// Get the values from the $_POST array
// Strip away extra spaces using trim():
$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$posting = trim(nl2br($_POST['posting']));
$email = trim(nl2br($_POST['email']));

// Create new full name variable using concatenation
$name = $first_name . ' ' . $last_name;

// Get a word count:
$words = str_word_count($posting);

// Take out bad words:
$posting = str_ireplace('badword1', 'XXXXX', $posting);
$posting = str_ireplace('badword2', 'XXXXXX', $posting);
$posting = str_ireplace('badword3', 'XXXXXX', $posting);

// Encoding the Strings
// Print a message
print "<div>
            Thank you, $name, for your posting:
            <p>$posting</p>
            <p>($words words)</p>


      </div>";

// Make a link to another page:
$name = urlencode($name);
$email = urlencode($email);
print 'Click <a href="pursue5-3.php?name=' . $name . '&email=' . $email . '">here</a> to continue.'


?>


</body>

</html>