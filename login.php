<?php
    require "InstagramAPI.php";
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Instagram Log In</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container" style ="margin-top:100px;">
            <div class="row justify-content-center">
                <div class="col-md-6 col-md-offset-3" align="center">
                    <img src="images/simplelogo.png"><br><br>
                    <form>
                        <input class="form-control" type="email" placeholder="Email..." name="email"><br>
                        <input class="form-control" type="password" placeholder="Password..." name="password"><br>
                        <input type="submit" value="Log In">
                        <input onclick="javascript: window.location='<?php echo $Instagram->getLoginURL()?>'"type="button" value="Log In With Instagram">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>