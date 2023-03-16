<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>SLC Registration</title>
</head>
<body>
    
    <?php
    //Creates a session variable
    session_start();
    
    $password3 = $_POST['password3'];
    $username = $_POST['username'];
    //$school_number = $_POST['username'];
    $_SESSION["school_number"]= $username;

    // establish database connection
    $servername = "localhost";
    $dbusername = "bpareg"; 
    $dbpassword = "Planetary533TrollOhm";
    $dbname = "bpareg"; // fixed: added the database name to be used
    $con = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // perform update query
    $query = "UPDATE `login` SET `password3` =  :password WHERE `username` = :username";
    $stmt = $con->prepare($query);
    $stmt->bindParam(':password', $password3);
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    // fetch login details for verification
    $sql2 = "SELECT * FROM login WHERE username = :username";
    $stmt2 = $con->prepare($sql2);
    $stmt2->bindParam(':username', $username);
    $stmt2->execute();
    $login = $stmt2->fetch(PDO::FETCH_ASSOC);

    // check if login details are correct
    if ($login && $login['username'] == $username && $login['password3'] == $password3) {
        echo '<h2 align="left"><font face="Arial, Helvetica, sans-serif">Click the Next button to continue to your registration.</font></h2>';
        echo '<form name="form1" method="post" action="index-text-main.php">';
        //echo "<input type=\"hidden\" name=\"school_number\" value=\"$school_number\">";
        echo "<input type=\"hidden\" name=\"school_number\" value=\" $_SESSION["school_number"]\">";
        echo "<input type=\"submit\" value=\"Next\" name=\"Next\" id=\"Submit\" />";
        echo '</form>';
    } else {
        echo '<font face="Arial, Helvetica, sans-serif"><b>The username and/or password do not match what we have in our records. Please click the BACK button on your browser and try again. If you do not remember your username and/or password email <a href="mailto:mccloudtr@mvschool.org">Tina McCloud</a></b></font>';
    }
    ?>
</body>
</html>
