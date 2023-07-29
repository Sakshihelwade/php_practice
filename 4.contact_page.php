<!DOCTYPE html>
<html lang="en">
<head>
  <title>contact us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="background-color:rgb(240, 240, 240);"><br><br>

  <div class="container bg-white p-5">

    <!-- form always start between container and row -->
    <form action="4.contact_page.be.php" method="post">

     <div class="row">

      <div class="col-md-12">
      <h3>Contact us</h3>
      <h6>Feel free to connect us</h6>
      </div>

      <div class="col-md-6">
        <label>Full name</label>
        <input type="text" name="full_name" class="form-control">
      </div>

      <div class="col-md-6">
        <label>Mobile no</label>
        <input type="text" name="mobile" class="form-control">
      </div>

      <div class="col-md-6">
        <label>Email-id</label>
        <input type="text" name="email" class="form-control">
      </div>

      <div class="col-md-12">
        <label>Message</label>
        <textarea name="message" class="form-control" rows="5"></textarea>
      </div>

      <div class="col-md-12 mt-3">
        <button class="btn-primary text-center">Submit</button>
        <a href="4.contact_list.php"> <button type="button" class="btn btn-primary">Feedback_list</button></a>
      </div>

    </div>
   </form>
  </div>
</body>
</html>