<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  
    <title>Hello, world!</title>
    
    
  </head>
  <style>


element.style {
}
.bg-purple {
    background-color: #0d6efd;
}
.rounded {
    border-radius: .25rem!important;
}
.text-white {
    color: #fff!important;
}
.p-3 {
    padding: 1rem!important;
}
.line{
  margin-left:38%;
}
.line2{
  margin-left: 34%;
  margin-right: 34%;
}
.line3{
  margin-left: 30%;
  
}
  </style>
  <body>
    <?php 
    session_start();

    $_SESSION['mp']=$_POST['phy'];
    
    $_SESSION['mb']=$_POST['bio'];
   
    $_SESSION['mch']=$_POST['chem'];

    $_SESSION['mm']=$_POST['math'];

    $_SESSION['mmr']=$_POST['marathi'];

    $_SESSION['me']=$_POST['eng'];

     $total = $_SESSION['mp'] + $_SESSION['mb'] + $_SESSION['mch'] + $_SESSION['mm'] + $_SESSION['mmr'] + $_SESSION['me'] ;
 
     $per =  ($total/600)*100 ;
     
echo "
  
  <div class='container  my-3'>
  <div class='d-flex align-items-center p-2 my-3 text-white bg-purple rounded shadow-sm line2 '>

      <h1 class='h4 mb-0 text-white lh-2 line3'>Student Details</h1>
      
    
  </div>
  
  <div class='row my-3'>
  <div class= 'col-sm-4'>
  </div>
  <div class= 'col-sm-4'>
  <table class='table table-bordered'>
  
    <tr>
      <th width='20%'>Name</th>
      <th width='3%'>:</th>
      <th>".$_SESSION['sn']." </th>   
    </tr>
  
    <tr>  
      <th>Class</th>
      <th width='3%'>:</th>
      <th>".$_SESSION['sc']." </th> 
    </tr>

    <tr>  
      <th>Adress  </th>
      <th width='3%'>:</th>
      <th>".$_SESSION['sas']." </th>  
    </tr>
</table>
  </div>
  <div class= 'col-sm-4'>
  </div>
</div>
</div>

<div class='container text-center my-2  ' >
<div class='d-flex align-items-center p-2 my-3 text-white bg-purple rounded shadow-sm line2 '>

      <h1 class='h4 mb-0 text-white lh-2 line'>MarkList</h1>
      
    
  </div>

  <div class='row my-3'>
  <div class= 'col-sm-4'>
  </div>
  <div class= 'col-sm-4'>
  <table class='table table-bordered'>
  <thead>
    <tr>
      <th scope='col'>Sr</th>
      <th scope='col'>Subject</th>
      <th scope='col'>Marks</th>
    </tr>
  </thead>
  <tbody>
    <tr>  
      <th scope='row'>1</th>
      <td>Physics</td>
      <td> ".$_SESSION['mp']."/100 </td> 
      
    </tr>
    <tr>
      <th scope='row'>2</th>
      <td>Biology</td>
      <td>".$_SESSION['mb']."/100  </td> 
    </tr>
    <tr>
      <th scope='row'>3</th>
      <td >Chemistry</td>
      <td>".$_SESSION['mch']."/100  </td> 
    </tr>
    <tr>
      <th scope='row'>4</th>
      <td >Mathematics</td>
      <td>".$_SESSION['mm']."/100  </td> 
    </tr>
    <tr>
      <th scope='row'>5</th>
      <td>Marathi</td>
      <td>".$_SESSION['mmr']."/100  </td> 
    </tr>
    <tr>
      <th scope='row'>6</th>
      <td>English</td>
      <td>".$_SESSION['me']."/100  </td> 
    </tr>
    <tr>
    <td colspan='2'>Total Marks</td>
    <td>$total/600</td>
    </tr>
    <tr>
    <td colspan='2'>Percentage</td>
    <td>$per%</td>
    </tr>
  </tbody>
</table>
  <div>
  <div class= 'col-sm-4'>
  </div>
    </div>
</div>

";   


?>

<div class="container text-center ">

<a class="btn btn-primary" href="logout.php" role="button">Logout</a>
</div>

 
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>