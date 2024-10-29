<?php
include("./layout/header.php");
include("./database/database.php");

$db=new Connection();
// $conn_db=$db->conn_db();
?>

<div class="container">
<div class="row justify-content-center">

    <div class="col-md-6">

        <div class="mt-4 card card-body shadow">

            <h4>Register</h4>
            <hr>
            

            <form action="./controller/registeration_user.php" method="POST" enctype="multipart/form-data">

                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" />
                </div>
                <div class="mb-3">
                    <label> Email</label>
                    <input type=" email" name="email" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Phone</label>
                    <input type="number"name="phone" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Password</label>

                    <input type="password" name="password" class="form-control" />
                </div>
                <div class="mb-3 d-flex justify-content-around">
                    <input type="submit" class="btn btn-success" name="reg_user" value="Add">
                
                
                    <a href="login_page.php" class="text-center btn btn-primary">Click here to Login</a>
               </div>

            </form>
        </div>

    </div>
</div>
</div>



<?php
include("./layout/footer.php")

?>