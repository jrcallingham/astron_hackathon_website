<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $profession = $_POST['profession'];
    $workplace = $_POST['workplace'];
    // $Gender = $_POST['Gender'];
    $from = 'From: TangledDemo'; 
    $to = 'hackathon@astron.nl'; 
    $subject = 'Test';

    $body = "From: $name\n E-Mail: $email\n Profession:\n $profession ";

if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Your message has been sent!</p>';
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
}
?>