<?php
include_once "connection.php";
session_start();
include_once "header.php";
$id=$_SESSION['user_id'];
if (empty($_SESSION['user_id'])) {
    header("location:login.php");
}
$select="SELECT * FROM signup WHERE user_id='$id'";
$query=mysqli_query($conn,$select);
$row=mysqli_fetch_array($query);
$name=$row['user_name'];
?>
<body>
   <div class="container settings">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 form">
                    <center><h2> USER PROFILE </h2></center>
                    <form action="form-handler.php" method="POST">
                        <input type="file" name="image" accept="image/*" id="file" onchange="loadFile(event)" style="display: none;">
                        <p><center><label for="file" class="bg bg-primary" style="cursor: pointer;color: #fff;padding: 15px;">Upload Image</label></center></p>
                        <p><center><img id="output" width="200" /></p></center>
                        <input type="hidden" name="id" value="<?php echo $id?>">
                        <div class="form-group">
                                <input class="form-control" placeholder="Username" type="text" name="username" value="<?php echo $row['user_name']; ?> " required>
            
                                <br>

                                <input class="form-control" placeholder="password" type="password" name="userpassword" value="<?php echo $row['user_pass']; ?>" required>
            
                                <br>
            
                                <input class="form-control" placeholder="Email" type="email" name="useremail" value="<?php echo $row['user_email']; ?>" required>

                                <br>
                                 <input class="form-control" placeholder="Contact" type="number" name="usercontact" value="<?php echo $row['user_contact']; ?>" required>
                                 <br>
                                  <input class="form-control" placeholder="Address" type="text" name="useraddress" value="<?php echo $row['user_address']; ?>" required>
                                 <br>
                                  <input class="form-control" placeholder="Address" type="text" name="usercity" value="<?php echo $row['user_city']; ?>" required>
                                 <br>
            
                    <center><button class="btn btn-success " type="submit" name="updatebtn" style="padding: 15px;">Update</button></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
        <script>
var loadFile = function(event) {
    var image = document.getElementById('output');
    image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
        <?php include_once "footer.php";?>