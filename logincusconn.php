<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="sweetalert.min.js"></script>
</head>
<body>

<?php
session_start();
$conn=mysqli_connect("localhost","root","","milkcompany") or die("connection failed");
if(!empty($_POST['log']))
{
    $username=$_POST['us'];
    $password=$_POST['pw'];
    $_SESSION['username']=$username;
    $query="select * from customer where username='$username' and passwd='$password'";
    $result=mysqli_query($conn,$query);
    $count=mysqli_num_rows($result);
    if($count>0)
    {
        ?>
                <script type='text/javascript'>
                
                swal({
                    title: "login Successfully!",
                    icon: "success",
                    button: "okey", 
                    }).then(function() {
                    window.location = "cusdir.php";
                    });
                </script>
                <?php
    }
    else
    {
        ?>
                <script type='text/javascript'>
                swal({
                    title: "login failed!",
                    icon: "error",
                    button: "okey", 
                    }).then(function() {
                    window.location = "logincus.php";
                    });
                </script>
                <?php
    }
}
?>
</body>
</html>
