\<?php 

session_start(); 

include "dbconnection.php";


if (isset($_POST['adminuname']) && isset($_POST['adminpassword'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['adminuname']);

    $pass = validate($_POST['adminpassword']);

    if (empty($uname)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM admin WHERE adminuname='$uname' AND adminpassword='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['adminuname'] === $uname && $row['adminpassword'] === $pass) {

                echo "Logged in!";

                $_SESSION['adminuname'] = $row['adminuname'];

                #$_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                header("Location: adminhome.php");

                exit();

            }else{

                header("Location: index.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: index.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}