
<?php
include ('./layout/header.php');
//create class to connect login to database using oop
?>

    <div class="container mt-5">

        <form action="./controller/login_controller.php" method="post">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="email" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="user_pass" value="user_pass" class="form-control" id="exampleInputPassword1">
          </div>
          
          <input type="submit" name="login_code" value="Submit" class="btn btn-primary">
        </form>  
    </div>

    <?php
include ('./layout/footer.php');

?>