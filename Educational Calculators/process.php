<?php
// process.php

$degree = strtolower($_POST['degree']);
$branch = strtolower($_POST['branch']);
$year = $_POST['year'];
$subject = strtolower($_POST['subject']); // convert to lowercase

// Check if the condition is satisfied
if ($degree == "bsc" && $branch == "computer science" && $year == 3 && $subject == "operating systems") {
    // Redirect to os-1.php
    header("Location: os-1.html");
    exit(); // Ensure that no more code is executed after the header
} else {
    // Redirect to educational_main.html and display alert
    echo "<script>window.alert('No Calculator Found, Please Provide Correct Choice.');</script>";
    header("Location: Educational.html");
    exit();
}
?>
 