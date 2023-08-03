<?php
include("5.navbar.php");
?>

<br>
<form action="5.add_card_be.php" method="post">
    <div class="container p-3 border border-dark mt-5 bg-info">
      <div class="row">
        <div class="col-md-12">
          <h3>Add new card</h3>
        </div>

        <div class="col-md-3">
          <label>Enter icon</label>
          <input type="text" name="icon" class="form-control">
        </div>
        <div class="col-md-3">
          <label>Enter name</label>
          <input type="text" name="name" class="form-control">
        </div>
        <div class="col-md-3">
          <label>Enter mobile</label>
          <input type="number" name="mobile" class="form-control">
        </div>
        <div class="col-md-3">
          <label>Enter email</label>
          <input type="email" name="email" class="form-control">
        </div>
        <div class="col-md-6">
          <label>Enter position</label>
          <input type="text" name="position" class="form-control">
        </div>
        <div class="col-md-6">
          <label>Enter company</label>
          <input type="text" name="company" class="form-control">
        </div>
        <div class="col-md-12">
          <label>Address</label>
          <textarea class="form-control" name="address"></textarea>
        </div>
        <div class="col-md-12 text-center mt-3">
          <button class="btn btn-dark">Submit details</button>
        </div>

      </div>
    </div>
  </form>

