<?php

if (isset($_POST['submit'])) {

    $vardas = trim ($_POST['vardas']);
    $email = trim ($_POST['email']);
    $zinute = trim ($_POST['zinute']);

    if(!empty($vardas) && !empty($email) && !empty($zinute)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            include ('db.php');
            $from = "$email";
            $to = "linenknots@gmail.com";
            $subject = "Nauja žinutė";
            $autorius = 'Nuo: ' . $vardas . ', ' . $email;
            $naujazinute = htmlspecialchars($zinute);
            // mail($to, $subject, $autorius, $naujazinute, $from);
        }
    }
}