
<?php

session_start();

?>


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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="unmin.css">
  <link rel="stylesheet" href="minified.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="font-awesome-animation.min.css">
  
    <link rel="stylesheet" href="swiper.min.css">
    <link rel="stylesheet" href="details.css">

    
    <script src="script2.js"></script>

    <style>
    .nav-item
    {
      font-size:25px;
     text-align:center;
     margin-left:80px;

    }
    body
{
  background-image:url("bookdetails3.jpg");
  background-size:100% 100%;
  background-attachment: fixed;
}
    .navbar-brand
    {
      color:blue;
    }
    button
    {
      margin-top:20px;
      border-top-left-radius: 25px;
      border-bottom-right-radius: 25px;
      width:150px;
      border-color:blue;
      box-shadow: 10px 10px 10px grey;
      /* float:left; */
      /* margin-left:-25px; */
    }
    
    ul li 
    {
      list-style-type:none;
    }

    .card
	{
		height:300px;
    width:200px;
    border:none;
  }
  #card2
  {
    margin-left:30px;
  }
  #card3
  {
    margin-left:50px;
  }
  #btnall
	{
		margin-left:130px;
  }
  #drama
  {
    margin-left:70px;
  }
  #btnprog
  {
    margin-left:-55px;
  }
  #card1
  {
    margin-left:120px;
  }
  #card2
  {
    margin-left:60px;
  }
  #card3
  {
    margin-left:20px;
  }
  #card11
  {
    margin-left:120px;
  }
  #card22
  {
    margin-left:60px;
  }
  #card33
  {
    margin-left:20px;
  }
  .card-header
  {
    height:300px;
  }
  .card-footer
  {
    height:35px;background-color:white;
    border:none;
  }

  .card-body
  {
    height:30px;
  }

  #head1
  {
    background-image:url("book30.jpg");
    background-size:100% 100%;
  }
  #head2
  {
    background-image:url("book34.jpg");
    background-size:100% 100%;
  }
  #head3
  {
    background-image:url("book35.jpg");
    background-size:100% 100%;
  }
  #head4
  {
    background-image:url("book11.jpg");
    background-size:100% 100%;
  }
  input
  {
    /* margin-top:-100px; */
    margin-left:50px;
  }
  .btn-group
  {
    width:100px;
    height:70px;
    margin-left:-20px;
    margin-top:-25px;
  }
  #btnnav
  {
    height:30px;
    width:30px;
  }
  .card
  {
    display:none;
  }
  #head11
    {
      background-image:url("book27.jpg");
      background-size:100% 100%;
    }
    #head22
    {
      background-image:url("book28.jpg");
      background-size:100% 100%;
    }
    #head33
    {
      background-image:url("book30.jpg");
      background-size:100% 100%;
    }
    #head44
    {
      background-image:url("book31.jpg");
      background-size:100% 100%;
    }
    #card-footer
    {
      background-color:none;
    }

    #typewriter
    {
      background-color:black;
      opacity:0.5;
      margin-top:50px;
    }

    #typewriter h1
{
  overflow:hidden;
white-space:nowrap;
margin:0 auto;
letter-spacing: .15em;
  animation: typing 3.5s steps(80,end),
blink-caret .75s step-end infinite;

}

#text1 h1
{
  overflow:hidden;
white-space:nowrap;
margin:0 auto;
letter-spacing: .15em;
  animation: typing2 3.5s steps(80,end) linear infinite,
blink-caret2 .75s step-end linear infinite;

}

@keyframes typing2
{
  from
  {
    width:0
  }

  to
  { width:100%}
}

@keyframes blink-caret2

{
  from,to{border-color:transpasrent}
  50% {border-color:white}
}


  @media (max-width:800px)
	{
		#btnall
		{
			margin-left:90px;
    }
    #drama
    {
      margin-left:85px;
    }
    #bthorrer
    {
      margin-left:85px;
    }
    #btnprog
    {
      margin-left:85px;
    }
    #card1
    {
      margin-left:75px;
    }
    #card2
    {
      margin-left:73px; 
      margin-top:90px;
    }
    #card3
    {
      margin-left:73px; 
      margin-top:90px;
    }
    #card4
    {
      margin-left:100px; 
      margin-top:90px;
     
    }
    #card11
    {
      margin-left:75px;
      
    }
    
    #card22
    {
      margin-left:73px; 
      margin-top:90px;
      
    }
    #card33
    {
      margin-left:73px; 
      margin-top:90px;
      
    }
    
    #card44
    {
      margin-left:100px; 
      margin-top:90px;
      
    }
    
	}
    </style>
</head>
<body>
    <!-- <script src="swiper.min.js"></script> -->
      <h2 style="color:white;">WELCOME <? php $_SESSION['name']; ?></h2>

    <nav class="navbar navbar-default navbar-active ">
        <div class="container">
            <div class="navbar-header">
                    <a class="navbar-brand em-text" href="#">Bookie</a>
                    <button type="button" id="btnnav" class="navbar-toggle" data-toggle="collapse" data-target="#abc"><i class="fa fa-bars faa-wrench  animated" style="font-size:20px;color:red"></i>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>      
                    </button>
            </div>
            <div id="abc" class="collapse navbar-collapse">
                <div class="list-group">
                    <ul class="nav navbar-nav " >
                            <li class="active"><a href="#"  >Home</a></li>
                            <li><a href="#" >Login</a></li>
                            <li><a href="#pb1" >Add to cart</a></li>
                            <li><a href="logout.php" >Logout</a></li>
                            
                        </ul>
                    </div>

                    </div>
            </div>
         </nav>

    <!-- <nav class="navbar navbar-expand-sm  navbar-dark fixed-top" id="mynav">
  <a class="navbar-brand"  style="font-size:30px;">Bookie.com</a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a  href="#" class="active">Home</a>
    </li>
    <li class="nav-item">
      <a href="#">Login</a>
    </li>
    <li class="nav-item">
      <a href="#">Go to cart</a>
    </li>

  </ul>
</nav><br> -->

 
    <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url(book9.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(book11.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(book34.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(book18.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(book30.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(book32.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(book34.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(book35.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(book37.jpg)"></div>
      <!-- <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/10)"></div> -->
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div><br>



    <div class="jumbotron" style="background-color:none;">
    <div class="row">
    <div class="col-md-3">
    <button id="btnall">All Books</button>
    </div>
    <div class="col-md-3">
    <button id="drama">Drama</button>
    </div>
    <div class="col-md-3">
    <button id="bthorrer">Horror</button>
    </div>
    <div class="col-md-3">
    <button id="btnprog">Programming</button>
    </div>
    </div>
    </div>


  <!-- <div class="jumbotron" id="j2">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
        <ul id="buttons">
      <li><a href="#"><button id="btnall">All Books</button></a></li>
      <li><a href="#"><button id="drama">Drama</button></a></li>
      <li><a href="#""><button id="btnall">Horrer</button></a></li>
      <li><a href="#"><button id="btnall">Programming</button></li>

  </ul>
  </div>
</div> -->

  <div class="coontainer-fluid">
    <div class="row">
      <div class="col-md-3">
      <div class="container">
  		
  <div class="card" id="card1">
    <div class="card-header" id="head1"></div>
    <div class="card-body"><input type="number" id="num" style="width:50px;height:20px;"></div> 
    
      <div class="btn btn-group">
      <button type="button" class="btn btn-danger"><a href="detailsbook1.php">Details</a></button>
      <button type="button" class="btn btn-danger">AddToCart</button>
      </div>
   
  </div>
</div>
</div>
<div class="col-md-3">
<div class="container">
 
  <div class="card" id="card2">
    <div class="card-header" id="head2"></div>
    <div class="card-body"><input type="number" id="num" style="width:50px;height:20px;"></div> 
   
    <div class="btn btn-group">
      <button type="button" class="btn btn-danger" ><a href="detailsbook1.php">Details</a></button>
      <button type="button" class="btn btn-danger">AddToCart</button>
      </div>
   
  </div>
</div>
</div>


<div class="col-md-3">
<div class="container">
 
  <div class="card" id="card3">
    <div class="card-header" id="head3"></div>
    <div class="card-body"><input type="number" id="num" style="width:50px;height:20px;"></div> 
    
    <div class="btn btn-group">
      <button type="button" class="btn btn-danger" ><a href="detailsbook1.php">Details</a></button>
      <button type="button" class="btn btn-danger">AddToCart</button>
      </div>
    
  </div>
</div>
</div>

<div class="card" id="card4">
    <div class="card-header" id="head4"></div>
    <div class="card-body"><input type="number" id="num" style="width:50px;height:20px;"></div> 
    
    <div class="btn btn-group">
      <button type="button" class="btn btn-danger" ><a href="detailsbook1.php">Details</a></button>
      <button type="button" class="btn btn-danger">AddToCart</button>
      </div>
  
  </div>
</div>
</div>

  <!-- </div>

  </div>
  </div>  -->


  </div>

  <br><br><br><br>

  
  <div class="coontainer-fluid">
    <div class="row">
      <div class="col-md-3">
      <div class="container">
  		
  <div class="card" id="card11">
    <div class="card-header" id="head11"></div>
    <div class="card-body"><input type="number" id="num" style="width:50px;height:20px;"></div> 
   
      <div class="btn btn-group">
      <button type="button" class="btn btn-danger" ><a href="detailsbook1.php">Details</a></button>
      <button type="button" class="btn btn-danger">AddToCart</button>
      </div>
   
  </div>
</div>
</div>
<div class="col-md-3">
<div class="container">
 
  <div class="card" id="card22">
    <div class="card-header" id="head22"></div>
    <div class="card-body"><input type="number" id="num" style="width:50px;height:20px;"></div> 
    
    <div class="btn btn-group">
      <button type="button" class="btn btn-danger" ><a href="detailsbook1.php">Details</a></button>
      <button type="button" class="btn btn-danger">AddToCart</button>
      </div>
   
  </div>
</div>
</div>


<div class="col-md-3">
<div class="container">
 
  <div class="card" id="card33">
    <div class="card-header" id="head33"></div>
    <div class="card-body"><input type="number" id="num" style="width:50px;height:20px;"></div> 
    
    <div class="btn btn-group">
      <button type="button" class="btn btn-danger" ><a href="detailsbook1.php">Details</a></button>
      <button type="button" class="btn btn-danger">AddToCart</button>
      </div>
   
  </div>
</div>
</div>

<div class="card" id="card44">
    <div class="card-header" id="head44"></div>
    <div class="card-body"><input type="number" id="num" style="width:50px;height:20px;"></div> 
    
    <div class="btn btn-group">
      <button type="button" class="btn btn-danger" ><a href="detailsbook1.php">Details</a></button>
      <button type="button" class="btn btn-danger">AddToCart</button>
      </div>
   
  </div>
</div>
</div>

  <!-- </div>

  </div>
  </div>  -->


  </div>
<br><br><br><br>

<div class="jumbotron" id="typewriter" style="background-color:black; opacity:0.5;">
        <h1 style="color:white;text-align:center;">Reading makes the world go round...! </h1>
        <!-- <p id="textlast"></p> -->
        </div>




  <!-- Swiper JS -->
  <!-- <script src="../dist/js/swiper.min.js"></script> -->
  <script src="swiper.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', 
    {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect:
       {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: 
      {
        el: '.swiper-pagination',
      },
    });


   $(document).ready(function()
                        {
                          $(window).scroll(function()
                            {
                       if($(Document).scrollTop()>50)
                       {
                           $('#mynav').css('background','black');
                       }
                       else
                       {
                           $('#mynav').css('background','transparent');
                       }
                  
                            })



                            $("#btnall").click(function(){
                              $("#card1,#card2,#card3,#card4,#card11,#card22,#card33,#card44").show('fast');
                            });

                            $("#drama").click(function(){
                              $("#card1,#card2,#card3,#card4").show('fast');
                              $("#card11,#card22,#card33,#card44").hide();
                            });

                            $("#bthorrer").click(function(){
                              $("#card11,#card22,#card33,#card44").show('fast');
                              $("#card1,#card2,#card3,#card4").hide();
                            });

                            $("#btnprog").click(function(){
                              $("#card1,#card2,#card3,#card4").show('fast');
                              $("#card11,#card22,#card33,#card44").hide();
                            });
                       });


  </script> 
</body>
</html>