<?php

    if(array_key_exists('Mail',$_POST) OR array_key_exists('Password',$_POST))
    {

        $link=mysqli_connect("localhost","root","","web_app");

        if(mysqli_connect_error()){
            die("Unable to connect");
        }
    
        
        if($_POST['Mail']==''){
            echo "<p>Email address required</p>";
        }
        
        else if($_POST['Password']==''){
            echo "<p>Password is required</p>";
        }

        else{
            
            $query="SELECT `id` FROM `users` WHERE email='".mysqli_real_escape_string($link,$_POST['Mail'])."'";
            
            $result=mysqli_query($link,$query);
            
            if(mysqli_num_rows($result)>0){                               //Checks wheather the result contain any number of row[data] or not
                echo "Already taken";
            }
            else{
                $query="    INSERT INTO `users` (`email`,`password`) VALUES('".mysqli_real_escape_string($link,$_POST['Mail'])."'   ,   '".mysqli_real_escape_string($link,$_POST['Password'])."')    ";
                if(mysqli_query($link,$query))
                    echo "Account Created";

                else echo"Error"; 
            }   
        }
    }
?>

<form method="post">
    <input type="text" name="Mail" id="Mail">
    <input type="text" name="Password" id="pass">
    <button type="submit">Submit</button>
</form>