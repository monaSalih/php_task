<?php

include('./layout/header.php');
require('conn.php');
?>
<div class="container mt-5">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">User Id</th>
                <th scope="col">User name</th>
                <th scope="col">User Email</th>
                <th colspan="2" class="text-center">Action</th>
                <!-- <th scope="col">Action</th> -->
            </tr>
        </thead>
        <tbody>
          
                <?php
                $query="SELECT * FROM `crud`";
                $users=$dbconnection->query($query);
              

                if(!isset($users)){
                echo ("empty table");
                }else{
                    foreach($users as $user)
              {  echo "  <tr>
                <td>$user[user_id] </td>
                <td>$user[user_name] </td>
                <td>$user[user_email] </td>
                 <td><button class='btn btn-primary'>Edit</button></td>
                 <td><button class='btn btn-danger'>Delete</button></td>
               </tr> ";
}
                }
                ?>

            
        </tbody>
    </table>
</div>


<?php

include('./layout/footer.php');
?>