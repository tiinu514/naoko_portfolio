<!DOCTYPE html>
<html lang="en">
<title>Sign up</title>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <?php include 'xheader.php'; ?>

</head>

<body>

  <!-- Navigation -->
 <?php include 'xNavigation.php'; ?>
<!-- <div class="container">
  <table  class="table table-striped">
    <tbody>
      <tr>
        <td>Full name</td>
        <td><input type="text" class="full_name"></td>
      </tr>
    </tbody>
  </table>
</div> -->
<div class="container jumbotron mt-4"> 
<div class="container text-center">
<form action="action.php" method="post">
   <!-- Login -->
     <div class="col-md-12 pt-3">
         <h2 class="text-center">New Customer Registration Form</h2>
      </div>
      <div class="row">
              <div class="col-md-12 p-3">
                <div class="input-group">
                 <label class="col-md-12" for="">Full name</label>
                 <input type="text" name="full_name" class="form-control col-md-4 mx-auto" required>
                </div>
              </div>
              <div class="col-md-12 pb-3">
                <div class="input-group">
                <label class="col-md-12" for="">Address</label>
                <input type="text" name="address" class="form-control col-md-4 mx-auto" required><br>
                </div>
              </div>
              <div class="col-md-12 pb-3">
                <div class="input-group">
                <label class="col-md-12" for="">Birthday</label>
                <input type="date" name="date_of_birth" class="form-control col-md-4 mx-auto" required>
                </div>
              </div>
              <div class="col-md-12 pb-3">
                <div class="input-group">
                  <label class="col-md-12" for="">Visa calidity</label>
                  <input type="date" name="visa_validity" class="form-control col-md-4 mx-auto"required>
                </div>
              </div>
              <div class="col-md-12 pb-3">
                <div class="input-group">
                  <label class="col-md-12" for="">Contact number</label>
                  <input type="number" name="contact_number"  class="form-control col-md-4 mx-auto" required>
                </div>
              </div>
              <div class="col-md-12 pb-3">
                <div class="input-group">
                  <label class="col-md-12" for="">Category</label>
                  <select type="text" name="category" class="form-control col-md-4 mx-auto" required><br>
                  <option value="individual" name="category">Individual</option>
                  <option value="corporate" name="category">Corporate</option>
                 </select>
                </div>
               </div>
               <div class="col-md-12 pb-3">
                <div class="input-group">
                  <label class="col-md-12" for=""> Password</label>
                  <input type="password" name="password" class="form-control col-md-4 mx-auto" required>
                </div>
               </div>
               <div class="col-md-12">
                 <button class="btn bg-success text-white col-md-4 mt-5" type="submit" name="sign_up">Sign up</button>
                 </div>
           </form>
        </div>
        </div>
        </div>

  <!-- Footer -->
  <?php include 'xFooter.php'; ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
