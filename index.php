<!-- 
Jan Roddy
Advanced Web Programming Spring 2020

credits: 
Bootstrap: https://getbootstrap.com/

-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Animals Think That You're Cool</title>
  <link rel="stylesheet" type="text/css" href="main.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
  <div  id="background" class="container mt-5">
    <form action="makePDF.php" method="post" class="offset-md-2 col-md-8">
      <h1>Animals Think That You're Cool</h1>
      <img src="img/camel.jpg">
      <h2>Feeling Down?</h2>
      <p>Fill out the deets below to find out why animals think you are cool</p>
      
      <div class="row md-2"> 
        <div class="col-md-6">
          <input type="text" name="fname" placeholder="First Name" class="form-control" required>
        </div>  
        
        <div class="col-md-6">
          <input type="text" name="lname" placeholder="Last Name" class="form-control" required="">
        </div>
      </div> 
        <br>
       <div class="row md-2">
        <div row="col-md-6">
          <br>
          <button type="submit" class="btn btn btn-info btn-lg btn-block">Get My Compliment!</button>
        </div>
      </div> 
      </div> 

    </form>
  </div>

<footer>
</footer>




</body>  
</html>



