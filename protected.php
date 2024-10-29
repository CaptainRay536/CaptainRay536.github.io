<?php
$correctPassword = '12345'; // Example password

if ($_POST['password'] === $correctPassword) {
    // Correct password: display the embedded content
    echo '<iframe src="https://www.example.com" width="600" height="400"></iframe>';
} else {
    // Incorrect password: display an error message
    echo 'Incorrect password! <a href="index.html">Try again</a>';
}
?>
