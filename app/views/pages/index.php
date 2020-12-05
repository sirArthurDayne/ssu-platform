<?php
    echo "<p>mvc is working, default view loaded!</p>";
    echo "APPROOT: " . APPROOT . "<br>";
    echo "URLROOT: ". URLROOT . "<br>";
    echo "SITENAME: " . SITENAME . "<br>";

    //recover data from model transfer
    foreach ($data['users'] as $user)
    {
        echo "<p>user_name: " . $user["user_name"] . "password: " .
            $user["password"] . "</p>";
    }
?>
