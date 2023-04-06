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
    // Grab password from a post variable
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    
    // Grab username/school_number from a post variable
    $username = $_POST['username'];
    $school_number = $username;

    // Database connection info
    $servername = "localhost";
    $db_username = "bpareg";
    $db_password = "Planetary533TrollOhm";
    $db_name = "bpareg";
    
    
    print("Password = ".$password);
    print("Password2 = ".$password2);
    print("Username = ".$username);

    
    // Attempt to create a new account
    try 
    {
        print("Making DB connection");
        // Make sure database connection works.
        $con = new PDO("mysql:host=$servername;dbname=$db_name", $db_username, $db_password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Set blank variable for password, this should be set to something other than null before we write to database.
        $pw = null;
        
        // If the the two passwords match
        if ($password == $password2) 
        {
            print("Passwords match");
            // Check the length to make sure it's complex enough
            if (strlen($password) >= 6 && strlen($password) <= 12) 
            {
                print("hashing");
                 // create hashed password
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $pw = $hashed_password;
                print("Hashed PW = ".$pw);
            } 
            // If not then tell them it isn't complex enough.
            else 
            {
                $password = null;
                echo '<h2 align="left"><font face="Arial, Helvetica, sans-serif">Your password needs to be at least 6 characters and no more than 12 characters. Please click the BACK button on your browser and re-enter your username and password.</h2></font>';
                exit;
            }
        } 
        // If the password and confirmation fields don't match, give an error.
        else 
        {
            $password = null;
            echo '<h2 align="left"><font face="Arial, Helvetica, sans-serif">Your password did not match the confirmed password! Please click the BACK button on your browser and re-enter your username and password.</h2></font>';
            exit;
        }
       
        // If the password variable was set we should be able to create an account.
        if (! is_null($pw))
        {
            // Check to see if the user exists, we'll create one if not and update if so.   
            $query2 = "SELECT username FROM login WHERE username ='$username'";
            $result = $con->query($query2);
            $count = $result->fetchColumn();
            
            // Users are tied to schools, we need to make sure the school exists before creating a user.
            $query3 = "SELECT school_number FROM schools WHERE school_number='$school_number'";
            $result2 = $con->query($query3);
            $count2 = $result2->fetchColumn();
            
            // If the account doesn't exist we'll create it.
            if ($count == 0) 
            {
                // If the school exists we can continue
                if ($count2 == 1) 
                {
                    echo '<h2 align="left"><font face="Arial, Helvetica, sans-serif">Your username and password have been created. Click the Next button to continue the registration process.</h2></font>';
                    $sql = "INSERT INTO `login` (`password`, `password2`, `password3`, `username`) VALUES ('$hashed_password', '$hashed_password', $hashed_password', '$username')";
                    $con->query($sql);
                    echo '<form name="form1" method="post" action="/SLCReg/index.php?school_number=' . $school_number . '"><input type="submit" value="Next" name="Next" id="Submit" /></form>';
                } 
            }
            // School doesn't exist; so we need to give an error.
            else 
            {
                echo '<h2 align="left"><font face="Arial, Helvetica, sans-serif">You have entered an invalid school number as your username. Please verify your school number on the School List file and click the BACK button on your browser to re-enter your username and password.</font></h2>';
            }
        }
    }
    catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
    ?>
</body>
</html>      
  






