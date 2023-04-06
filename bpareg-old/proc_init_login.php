<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Language" content="en-us">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="GENERATOR" content="Microsoft FrontPage 4.0">
    <meta name="ProgId" content="FrontPage.Editor.Document">
    <title>SLC Registration</title>
    <link href="style_sheet.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#FFFFFF" text="#000000" link="#0000FF" vlink="#0000FF" alink="#0000FF">
    <?php
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $username = $_POST['username'];
    session_start();
    $school_number = $_SESSION['school_number'];

    // create hashed password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $servername = "localhost";
    $db_username = "bpareg";
    $db_password = "Planetary533TrollOhm";
    $db_name = "bpareg";

    try {
        $con = new PDO("mysql:host=$servername;dbname=$db_name", $db_username, $db_password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $pw = null;

        if ($password == $password2) {
    if (strlen($password) >= 6 && strlen($password) <= 12) {
        $pw = $password;
    } else {
        $password = null;
        echo '<h2 align="left"><font face="Arial, Helvetica, sans-serif">Your password needs to be at least 6 characters and no more than 12 characters. Please click the BACK button on your browser and re-enter your username and password.</h2></font>';
        exit;
    }
} else {
    $password = null;
    echo '<h2 align="left"><font face="Arial, Helvetica, sans-serif">Your password did not match the confirmed password! Please click the BACK button on your browser and re-enter your username and password.</h2></font>';
    exit;
}

if ($pw) {
    $query2 = "SELECT username FROM login WHERE username ='$username'";
    $result = $con->query($query2);
    $count = $result->fetchColumn();

    $query3 = "SELECT school_number FROM schools WHERE school_number='$school_number'";
    $result2 = $con->query($query3);
    $count2 = $result2->fetchColumn();

    if ($count == 0) {
        if ($count2 == 1) {
            echo '<h2 align="left"><font face="Arial, Helvetica, sans-serif">Your username and password have been created. Click the Next button to continue the registration process.</h2></font>';
            $sql = "INSERT INTO `login` (`password`, `password2`, `username`) VALUES ('$hashed_password', '$hashed_password', '$username')";
            $con->query($sql);
            echo '<form name="form1" method="post" action="/SLCReg/index.php?school_number=' . $school_number . '"><input type="submit" value="Next" name="Next" id="Submit" /></form>';
        } else {
            echo '<h2 align="left"><font face="Arial, Helvetica, sans-serif">You have entered an invalid school number as your username. Please verify your school number on the School List file and click the BACK button on your browser to re-enter your username and password.</font></h2>';
        }
    }
}
}





