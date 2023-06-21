<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h2 class="text-center my-3">Blood Donation Camp Forms with PHP</h2>

    <div class="container">
      <form action="_dbconnect.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required placeholder="Enter Name" >
          </div>
          <div class="mb-3">
            <label for="conatct" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="contact" placeholder="Enter Contact Number" name="contact" required>
          </div>
          <div class="mb-3">
          <label for="bg" class="form-label">Blood Group </label>
            <input type="text" class="form-control" id="bg" name="bg" required placeholder="Enter Blood Group" >
          </div>
          <div class="mb-3">
          <label for="email" class="form-label">Email </label>
            <input type="text" class="form-control" id="email" name="email" required placeholder="Enter Email" >
          </div>

          <div class="col-12 d-flex justify-content-center align-items-center">
            <button type="submit" name="submit" id="submit" class="btn btn-primary ">Submit</button>
          </div>
        
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>