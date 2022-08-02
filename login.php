<?php 
include_once "header.php";
include_once "connection.php";
if (isset($_POST['loginbtn'])) {
    $email=$_POST['useremail'];
    $password=$_POST['userpassword'];
    $select="SELECT * FROM signup WHERE user_email='$email' AND user_pass='$password'";
    $query=mysqli_query($conn,$select);
    $row=mysqli_fetch_array($query);
    if (mysqli_num_rows($query)>0) {
        session_start();
        $_SESSION['user_id']=$row['user_id'];
        header("location:index.php");
    }
    else {
        session_start();
        $_SESSION['message']="<center>Email and password doesn't match</center>";
        echo $_SESSION['message'];
    }
}
?>
 <div class="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>LOGIN</h4>
                                <?php 
                                if (empty($_SESSION['message'])) {
                                    echo "";
                                }
                                else {
                                     echo '<div class="alert alert-danger">'.$_SESSION['message'].'</div>';
                                      unset($_SESSION['message']);
                                }
                                ?>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Login to make a purchase</i><p>
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="useremail" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="userpassword" required = "true">
                                    </div>
                                    <button type="submit" name="loginbtn" class="btn btn-primary">Login</button><br><br>
                                </form><br/>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php" style="text-decoration: none; color: #000;">Register</a></p>
                                <a href="admin/adminlogin.php" style="font-weight: bold;text-decoration: none; color: #000;">Admin? Login here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once "footer.php";?>