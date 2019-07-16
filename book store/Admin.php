<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="unmin.css">
  <link rel="stylesheet" href="minified.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="font-awesome-animation.min.css">
  <link rel="stylesheet" href="admincss.css">
  <script src="script2.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="logo.png"  style="width:50px;height:50px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">logout</a>
    </li>
  </ul>
</nav>
<div class="jumbotron" id="jumbo1">
  <div class="container">
  <div class="row">
  <div class="col-md-12">
    <h1 id="welcome">Welcome Admin</h2>
  </div>

  </div>
  </div>
</div>


<div class="coontainer-fluid">
    <div class="row">
      <div class="col-md-4">
      <div class="container">
  		
  <div class="card" id="card1">
  
    <div class="card-header" id="head1" style="height:400px;"> </div>

    <button type="button" class="btn btn-primary" id="btnmot">Drama</button>
    
      <button type="button" class="btn btn-danger" id="btndrama">Edit</button>
    
   
  </div>
</div>
</div>
<div class="col-md-4">
<div class="container">
 
  <div class="card" id="card2">
    <div class="card-header" id="head2"style="height:400px;"></div>
    <button type="button" class="btn btn-primary" id="btnmot">Motivational</button>
      <button type="button" class="btn btn-danger" id="btnmot">Edit</button>
     
   
  </div>
</div>
</div>


<div class="col-md-4">
<div class="container">
 
  <div class="card" id="card3">
    <div class="card-header" id="head3"style="height:400px;"></div>
    <button type="button" class="btn btn-primary" id="btnmot">Programming</button>
   
      <button type="button" class="btn btn-danger" id="btnprog">Edit</button>
     
    
  </div>
</div>
</div>

<div class="container" style="background-color:pink; margin-top:50px;">
    <h1 style="text-align:center;">Books</h1>
    
    <button class="btn btn-default"><a href="AddForm.php">+Add</a></button>
     <div class="jumbotron">
    <table class="table table-bordered table-striped">
    <thead>

    <tr class="info">
       
        <th>Book Name</th>
        <th>Author</th>
        <th>Price</th>
        <th>Quantity</th>
       
</tr>
</thead>   



 <?php
include 'connection.php';

    $query="SELECT * FROM emp";
    $result=mysqli_query($con,$query);
?>
    
    <?php
            while ($row=mysqli_fetch_array($result)){

            
    ?>
            
            <tr>
                <td><?=$row['id']?></td>
                <td><?=$row['name']?></td>
                <td><?=$row['address']?></td>
                <td><?=$row['contact']?></td>
                <td><?=$row['salary']?></td>
                <td><?=$row['department']?></td>

                <td><a href="delete.php?id=<?=$row['id']?>">delete</a></td>
                <td><a href="updateData.php?id=<?=$row['id']?>">update</a></td>
                
                
                </tr>

                    <?php
            }
            ?> 
    
</table>    
</div>


</body>
</html>