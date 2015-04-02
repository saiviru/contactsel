<!DOCTYPE html>
<html>
    <head>
        <?php
            $dbc=mysqli_connect('localhost','root','12server','login')or die('Error connecting to               MySQL server.');

            $fname=$_POST['firstname'];
            $lname=$_POST['lastname'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            
            $query = "INSERT INTO login(first_name, last_name,email,password)" .
                "VALUES ('$fname', '$lname', '$email', '$password')";
            $result = mysqli_query($dbc, $query)or die('Error querying database.');

            mysqli_close($dbc);

            echo 'Thanks for registering<br />';
            echo 'firstname:'. $fname. '<br />';
            echo 'lastname:'. $lname .'<br />';
            echo 'Email:'.$email.'<br />';
            ?>

    </head>
</html>