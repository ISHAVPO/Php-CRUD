<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>create</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
  .error{
    color: red;
  }
</style>
</head>
<body>
  <form id="form" action="" method="post">

  <div class="mb-3">
      <label for="name" class="form-label">NAME</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
  
    <div class="mb-3">
      <label for="InputPassword" class="form-label">Password</label>
      <input type="password" class="form-control" id="InputPassword" name="password">
    </div>
    
    <div class="mb-3">
      <label for="confirmPassword" class="form-label">ConfirmPassword</label>
      <input type="password" class="form-control" id="confirmPassword" name="confirmpassword">
    </div>
    
    <div class="mb-3">
      <label for="sal" class="form-label">SALARY</label>
      <input type="number" class="form-control" id="sal" name="salary">
    </div>
    
    <div class="mb-3 form-check">
      <label class="form-check-label" for="exampleCheck1">Check me out<br></label>
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check">
      
    </div>
    
    <button type="submit" class="btn btn-success" name="sub">Submit</button>
  </form>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
<script src="validate.js"></script>

</body>
</html>