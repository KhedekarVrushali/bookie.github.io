<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="detailsbook1.css">
  <!-- <link rel="stylesheet" href="bookcss.css"> -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <script src="script2.js"></script>

  <style>
  
  #btnmore
{
    float:left;
    border-radius: 30px;
    background-color: black;
    color: white;
    border: 1px solid white;
    margin-top:-100px;
    margin-left:280px;
    width:100px;
    height:30px;
    
}
#btnmore:hover
{
    background-color:gray;
}
.navbar-default
{
    position:absolute;
    z-index: 10;
    margin-top:80px;
    /* margin-left:80px; */
    background: transparent;
    border: none;
    
}
.navbar-nav 
{
    margin-left:250px;
    /* float: right;
     */
     font-size: 20px;
     
}
.nav.navbar-nav li a
{
    color: red;
}
.nav.navbar-nav li a:hover
{
   /* border-radius: 25px; */
   /* background-color: red; */
   border-bottom: 2px solid rgb(7, 228, 217);
   color:white;
}
.navbar-header .navbar-brand 
      {
        color: white;
        font-size: 30px;
        margin-right:-50px;
      }

      @media only screen and (max-width:800px) 
      {
        #btnmore
        {
            float:left;
            margin-left:-1px;
        }
       
      }
  </style>
</head>
<body >   
                 


            <div class="jumbotron" id="jumbodetails" style="height:800px;">
                <div class="jumbotron" id="innerjumbo">
                <div class="container">
                    <div class="rows">
                        <div class="col-md-6">
                            <div class="well" id="well1detail"><br>
                            <div class="well" id="wellotherbooks">
                                <div class="container-fluid"> 
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="well" id="small1">
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="well" id="small2">
                                               
                                            </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="well" id="small3">
                                                    
                                                </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="well" id="small4">
                                                       
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br><br>


                        <div class="col-md-6">
                            <h1 id="title">
                                    Humans Of New York:Stories 
                                </h1><br>
                                <p id="paratitle1">What can you do to save money with<br>
                                     online shopping? <br>
                                    You may be wondering if finding coupons<br> and sales is time consuming.<br> 
                                    If you aren’t into that, there are other options. <br>
                                    You simply need to heed the tips in this piece<br> and act on them.</p><br>

                                    <div class="panel panel-default" id="panelrs">
                                        <div class="panel-heading" id="panheading" >
                                            <h1 id="rs1" style="text-align: center; font-size:35px; color:black;">Rs.150</h1>
                                        </div>
                                        <div class="panel-body" id="panbody" >
                                            <h1 id="stock" style="font-size: 15px; float:left;">280 in stock</h1><br>
                                            <input type="number" id="num" name="number">
                                            <button id="cart">Add To Cart</button>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="jumbotron" id="jumbotable" style="height:550px;">
                <div class="col-md-6">
                    <h2 id="detailtable">Deatils</h2><br>

                        <table class="table table-striped table-hover table-responsive">

                            <thead>
                            <tr>
                                <th>Pages</th>
                               <td>200</td> 
                            </tr>
                        </thead>

                            <thead>                          
                                 <tr>
                                    <th>Cover Design</th>
                                  <td>Rebbeca L.</td> 
                                </tr><br>
                            </thead>
 

                                <thead>                              
                                     <tr>
                                        <th>Publisher</th>
                                        <td>Spartan S & S</td> 
                                    </tr><br>
                                </thead>
                                
                                    <thead>
                                         <tr>
                                            <th>Language</th>
                                           <td>English</td> 
                                        </tr>
                                    </thead>
   

                                        <thead>
                                        <tr>
                                                <th>ISBN</th>
                                              <td>78500</td> 
                                            </tr>
                                        </thead>  
                                        
                                        <thead>
                                            <tr>
                                                    <th>Released</th>
                                                   <td>july 2013</td> 
                                                </tr>
                                            </thead>        
                        </table>
                    </div>

                <div class="col-md-6">
                        <h1 id="author">About Auther</h1><br>
                        <h2 id="nameauther">Saifudin A.</h2>

                        <p id="autherpara">
                                How to Build a Successful Blog Business is a straight forward guide to 
                                building a publishing business online that covers everything from 
                                choosing a niche to hiring staff, registering a business to selling it.
                                Finding traffic to monetizing it whether you are 
                                interested in creating an additional income stream or 
                                building a fully-fledged business, this is an essential read 
                                for web entrepreneurs and online publishers.


                        </p>
                </div>
            </div>
        </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="jumbotron" id="description" style="height:600px;" >
                    <div class="col-md-12">
                        <h2 id="desc">Description</h2>
                        <p id="descpara">

                                If you want to buy books online, you’ll get a better deal if you get them used. Depending on the condition you get them in, you may just end up paying a few cents plus shipping. Make sure you read through the description of the book to see if there are any damages you should be aware of.
                                
                                Be sure to read everything about the item that you want to buy. A picture of a product can be deceiving. They can make products look much smaller or bigger that they really are. Reading the description will allow you to be confident in the item you are purchasing.
                                
                                Look into online shopping clubs. Sites like ebates.com have some tremendous offers. You not only find out about sales going on at different sites, but they pay you a percentage of your purchase when you buy from those sites. It is a great way to get a bonus check every four months and get the things you need.
                                
                                Be aware of shipping order laws for online merchants. The company is supposed to send your order within the time frame listed in its ad. By law, they have 30 days to send you your order or give you an option to cancel your order. If you do not receive your order within this time frame, call the company to let them know.
                                </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="background-color:black;">
                <h1 id="Like" style="color:white; font-size:25px;">You May Also Like...</h1>
                <div class="row">
                    <div class="col-md-3">
                        
                            <div class="panel panel-default" id="p1">
                                <div class="panel-heading" id="h1"></div>
                                <div class="panel-body" id="b1">Humans Of New York:Stories <br>
                                    <h1 id="rs1">Rs.50</h1>
                                                </div>
                               
                            </div>
                            
                       
                    </div>
    
                    <div class="col-md-3">
                        <div class="panel panel-default" id="p2">
                            <div class="panel-heading" id="h2"></div>
                            <div class="panel-body" id="b2">Lyrics Of The DDLJ Music <br>
                                <h1 id="rs2">Rs.100</h1>
                            </div>
                            
                        </div>
                    </div>
    
                    <div class="col-md-3">
                            <div class="panel panel-default" id="p3">
                                    <div class="panel-heading" id="h3"></div>
                                    <div class="panel-body" id="b2">The Dead Compendium <br>
                                        <h1 id="rs2">Rs.80</h1>
                                    </div>
                                    
                                </div>
                       
                    </div>
    
                    <div class="col-md-3">
                        <div class="panel panel-default" id="p4">
                                <div class="panel-heading" id="h4"></div>
                                <div class="panel-body" id="b2">The Dead Compendium <br>
                                    <h1 id="rs2">Rs.80</h1>
                                </div>
                               
                        </div>
                    </div>
               </div>
            </div><br><br>
           
</body>
</html>





