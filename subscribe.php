<?php
$email = $_POST['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $fp = fopen('data.txt', 'a');
    fwrite($fp, $email . PHP_EOL);
    fclose($fp);
    echo '<script type="text/javascript">';
    echo 'alert("You have been subscribed successfully.")';
    echo '</script>';
} else {
    echo '<script type="text/javascript">';
    echo 'alert("Please, put a working email.")';
    echo '</script>';
}
?>