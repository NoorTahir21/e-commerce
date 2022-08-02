<?php 
session_start();
include_once "header.php";
include_once "connection.php";?>
<div class="container signup">
            <div class="row">
                <div class="col-xs-4"></div>
                <div class="col-xs-4 form">
                    <h1> Sign up </h1>
                    <form action="form-handler.php" method="POST">
                        <div class="form-group">
                                <input class="form-control" placeholder="Name" type="text" name="username" required="true">
            
                                <br>

                                <input class="form-control" placeholder="Email" type="text" name="useremail">
            
                                <br>

                                <input class="form-control" placeholder="Password" type="password" name="userpassword">
            
                                <br>
            
                                <input class="form-control" placeholder="Contact" type="number" name="userphone" required="true">
            
                                <br>

                                <input class="form-control" placeholder="City" type="text" name="usercity" required="true">

                                <br>
                                <input class="form-control" placeholder="Address" type="text" name="useraddress" required="true">

                                <br>
            
                    <center><button class="btn btn-primary" style="padding:15px;" type="submit" name="signupbtn">Sign Up</button></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once "footer.php";?>