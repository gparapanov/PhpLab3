<!DOCTYPE html>
<html>
<head></head>
<body>
<p>
    <?php
    session_start();

    $username="dog";
    $password="cat";
    $name=$_POST["userid"];
    $pass=$_POST["pass"];
    if (isset($_SESSION['name'])) {
        /// your code here
    }elseif((strcmp($username, $name) == 0)&&(strcmp($password, $pass) == 0)){
        $_SESSION['name']=$name;
        $_SESSION['access_level']="standard";

    }
    echo $_SESSION['name']."  type: ".$_SESSION['access_level'];

    /*
    function displayAccessLevelInformation($access_level) {
        if ($access_level == "standarduser") {
            echo "<p>You are currently logged in as a standard user</p>";
        }
        elseif ($access_level == "root") {
            echo "<p>You are currently logged in as a root user</p>";
            echo "<p>You now have access to additional administrative features</p>";
        }
    }

    $name=$_POST["userid"];
    $pass=$_POST["pass"];
    if((strcmp($username, $name) == 0)&&(strcmp($password, $pass) == 0)){
        setcookie('details',$name);
        setcookie('access_level','standarduser');
    }
    echo $name."<br>";
    displayAccessLevelInformation($_COOKIE['access_level']);*/
    ?>
</p>

</body>
</html>