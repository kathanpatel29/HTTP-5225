<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ontario Public Schools</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <?php include './resuable/nav.php'; ?>
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="display-4 mt-5 mb-5">Update School</h1>
        </div>
      </div>
    </div>
  </div>
  <?php include('./inc/functions.php'); ?>
  <div class="container-fluid">
    <div class="container">
    <div class="row">
        <div class="col">
          <?php get_messages(); ?>
          </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <form action="./inc/updateSchool.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_POST['id'] ?>">
            <div class="mb-3">
              <label for="schoolName" class="form-label">School Name</label>
              <input type="text" class="form-control" id="schoolName" aria-describedby="schoolName" placeholder="Enter school name" name="schoolName" value="<?php echo $_POST['schoolName'] ?>">
            </div>
            <div class="mb-3">
              <label for="schoolType" class="form-label">School Type</label>
              <input type="text" class="form-control" id="schoolType" placeholder="eg. Primary, Middle, High" name="schoolType" value="<?php echo $_POST['schoolLevel'] ?>">
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Phone</label>
              <input type="text" class="form-control" id="phone" placeholder="eg. 416-123-4567" name="phone" value="<?php echo $_POST['phone'] ?>">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="eg. test@example.com" name="email" value="<?php echo $_POST['email'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update School</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>