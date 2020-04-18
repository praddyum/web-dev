<?php
    $success=" ";
    $error=" ";
    if(isset($_POST["email"])){
    $emailto=$_POST["email"];

    $subject=$_POST["subject"];

    $body=$_POST["message"];
    
    if(mail($emailto,$subject,$body)){
        $success='<div class="alert alert-success" role="alert">
        Successfully sent!
      </div>';  
    }
    else $error='<div class="alert alert-danger" role="alert">
    Error! Message not sent
  </div>';
}
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>MAILING CLIENT</title>
  </head>

  <body>
        <div class="container">
            <h1>Get in touch!</h1>
            <small id="emailHelp" class="form-text text-muted">Made with love by Praddyum</small>
            <div id="message"><?php echo $error.$success; ?>
            </div>

            <form method="post">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Subject</label>
                    <input type="text" name="subject" class="form-control" id="formGroupExampleInput">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">What would you like to ask us?</label>
                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group" >
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </div>
            
            </form>

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </div>

    </body>
</html>