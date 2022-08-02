<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header("location:login.php");
}
include_once "header.php";
include_once "connection.php";
?>
 <div class="container-fluid content table-responsive">
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-hover table-striped mt-5">
                            <tbody>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr><br><br>
                                <tr>
                                    <th></th>
                                    <th>Total</th>
                                    <th>Rs 0</th>
                                    <th><button class="btn btn-primary" type="submit"><a href="success.php" style="text-decoration: none;color: #fff;" target="_blank">Confirm Order</a></button></th>
                                </tr>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
      <?php include_once "footer.php";?>
