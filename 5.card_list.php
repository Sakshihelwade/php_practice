<?php
include("5.navbar.php");
include("5.connection.php");
?>
<br><br>
<!-- <div class="container">
  <div class="row">
    <div class="col-md-12">
      <table class="table table-bordered table-striped table-sm table-hover">
        <tr>
          <th>action</th>
          <th>SN</th>
          <th>icon</th>
          <th>name</th>
          <th>mobile</th>
          <th>email</th>
          <th>address</th>
          <th>position</th>
          <th>company</th>
        </tr>
        <?php

        
        $data=mysqli_query($con, "SELECT * FROM card");

        foreach($data as $key => $row){
          ?>
          <tr>
            <td></td>
            <td><?=$key+1?></td>
            <td><?=$row['icon']?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['mobile']?></td>
            <td><?=$row['email']?></td>
            <td><?=$row['address']?></td>
            <td><?=$row['position']?></td>
            <td><?=$row['company']?></td>
          </tr>
          <?php
        }
        ?>
      </table>
    </div>
  </div>
</div> -->


<!-- OR -->

<div class="container">
  <div class="row">
        <?php

        
        $data=mysqli_query($con, "SELECT * FROM card");

        foreach($data as $key => $row){
          ?>
          <div class="col-md-3 mt-3 ">
            <div style="border:1px solid black;padding: 10px;position: relative; height: 100%;width: 100%;" >
              <center>
              <div style="display: inline-block; padding:5px;border:1px solid black;border-radius:50%;height:80px ;width: 80px; ">
                <i class="<?=$row['icon']?>" style="font-size: 50px;margin-top: 10px;"></i>
              </div><br>
                <b><td><?=$row['position']?></td></b><br>
                <td><?=$row['company']?></td><br>
             </center>
                <td><?=$row['name']?></td><br>
                <a href="tel:<?=$row['mobile']?>">
                  <td><?=$row['mobile']?></td>
                </a><br>
                <a href="<?=$row['email']?>">
                  <td><?=$row['email']?></td>
                </a><br>
                <td><?=$row['address']?></td><br><br>
                <a href="https://wa.me/91<?=$row['mobile']?>" style="position:absolute;bottom: 0px;right: 5px;">
                  <button class="btn">
                   <i class="fa fa-whatsapp" style="color:green;font-size: 25px;"></i>
                  </button>
                </a>
            </div>
          </div>
          <?php
        }
        ?>
  </div>
</div>
