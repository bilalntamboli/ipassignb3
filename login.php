
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Details</title>
  </head>
  <style>

.bg-purple {
    background-color: #0d6efd;
}

.line2{
  margin-left: 37.5%;
  margin-right: 37.5%;
  
}
.line{
  margin-left : 23%;
}
</style>
 
  <body>
    
  
 <!-- Login Form-->
 <div class= container  col-xl-3 mx-auto>
<div class='container text-center my-5  ' >
<div class='d-flex align-items-center p-2 my-3 text-white bg-purple rounded shadow-sm line2  '>

      <h1 class='h4 mb-0 text-white lh-2 line'>Fill the details</h1></h1>
      
    
  </div>
 
 <div class="container my-5 col-xl-3 mx-auto border ">
 <form method=post action="details.php">
 
  <div class="mb-2 my-3 ">
    
    <label for="exampleInputEmail1" class="form-label">Enter Your Name</label>
    <input type="text" class="form-control"  name="sname" required>
  </div>
  <div class="mb-3  ">
    <label for="exampleInputPassword1" class="form-label">Enter Your Class</label>
    <input type="text" class="form-control "  name="sclass" required>
  </div>
  <div class="mb-3  ">
    <label for="exampleInputPassword1" class="form-label">Enter Your Address</label>
    <input type="text" class="form-control"  name="saddr" required>
  </div>
  
  <div class="d-grid gap-2 col-6 col-xl-4 mx-auto my-3">
  <button type="submit" class="btn btn-primary">Next</button>
  </div>
</form> 
 </div>
  

    <!-- Optional JavaScript; choose one of the two! -->

    
  </body>
</html>
