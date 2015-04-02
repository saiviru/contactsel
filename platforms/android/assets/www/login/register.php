<!DOCTYPE html>
<html>
    <head>
        <?php
            $dbc=mysqli_connect('localhost','root','12server','company')or die('Error connecting to               MySQL server.');
            
            $id=$_POST['id'];
            $fname=$_POST['firstname'];
            $lname=$_POST['lastname'];
            $username=$_POST['username'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            
            $query = "INSERT INTO login(firstname, lastname,username,id,email,password)".
                "VALUES ('$fname', '$lname','$username','$id', '$email', '$password')";
            $result = mysqli_query($dbc, $query)or die('Errors querying database.');

            mysqli_close($dbc);

            echo 'Thanks for registering<br />';
            echo 'id'.$id.'<br />';
            echo 'firstname:'. $fname. '<br />';
            echo 'lastname:'. $lname .'<br />';
            echo 'Email:'.$email.'<br />';
            echo 'You will be redirecting in 5 seconds if you don\'t click<a href="index.php">'.    ' here</a>';

            header( "refresh:5;url=index.php" );
            ?>
        

    </head>

</html>