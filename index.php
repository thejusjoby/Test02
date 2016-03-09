<!DOCTYPE html>
<html>
    <head>
    <?php include 'cdn.php'?>
    </head>
    <body>
       <div id="main" class="container"> <!----MAIN---->
           
        <!---MOD - 1. The header containing LOGO and Language Selection--->
        <div id="head" class="container-fluid">  
            <span class="row">
                
                <!---LOGO--->
           <span id="logo" class="col-lg-4">
               <img src="Task_1/assets/assets/XD_screensaver.png" width="240px" height="100px" />
            </span>
                         
                <!---Language Selection--->         
        <div class="pull-right col-lg-8">
        
         <span class="col-lg-7">   
            <ul class="nav nav-pills">
                  <li role="presentation" class="active"><a href="#">English</a></li>
                  <li role="presentation"><a href="#">Chinese</a></li>
                  <li role="presentation"><a href="#">Russian</a></li>
                  <li role="presentation"><a href="#">Hindi</a></li>
                </ul>
         </span>
                
              <!---Search Bar---->
         <span class="col-lg-5 pull-left">     
                 <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><img src="Task_1/assets/assets/search.png"></button>
                  </span>
                 
                </div><!-- /input-group -->
         </span>
         
         </div>
            </span><!---./row-->
            </div>
        </div>    
   
        <!----MOD - 1/.--->
        
 <!---------MOD - 2 The Navbar------------->
  
      <div  style="background-color: #00CED1"class="navbar-wrapper">
        <nav style="background-color: #00CED1" class="navbar navbar-default">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!---<a class="navbar-brand" href="#">Project name</a>--->
            </div>
            <div  id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#"><img src="Task_1/assets/assets/homeicon.png" /></a></li>
                <li><a href="#about"><b>About Us</b></a></li>
                <li class="divider-vertical"></li>
                <li><a href="#contact"><b>Our Properties</b></a></li>
                <li class="divider-vertical"></li>
                <li><a href="#publication"><b>Our Funds</b></a></li>
                <li class="divider-vertical"></li>
                 <li><a href="#about"><b>e-Services</b></a></li>
                 <li class="divider-vertical"></li>
                <li><a href="#contact"><b>News & Publications</b></a></li>
                <li class="divider-vertical"></li>
                <li><a href="#publication"><b>Join Us</b></a></li>
                <li class="divider-vertical"></li>
                <li><a href="#contact"><b>Contact Us</b></a></li>
                <li class="divider-vertical"></li>
                
              </ul>
            </div>
          </div>
        </nav>  
    </div>

        
        
 <!------./ MOD 2------>       
 
        
        <!---------------MOD 3 - THE CAROUSEL-------------->
<div class="bs-example">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
 <!--           <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>-->
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="Task_1/assets/1_1_Home_v3_1/sliderimg.jpg" alt="First Slide">
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span style="position: absolute; top: 50%; display: inline-block; z-index: 5;">
                <img src="Task_1/assets/assets/arrowbig.png" />
            </span>
        </a>
    </div>
        
      <!-----------------------./ MOD 4 The Carousel---------------->   
    <!-----------MOD 5 - The thumbnails------>
    
    <div class="container">
        
     <div class="container-fluid">
<span class="feat-head"><h2>Featured Projects</h2></span>
  <div class="row">
  <div class="col-lg-8col-md-8 col-sm-8">
   
   <div class="container-fluid"><!---Inside Company Content---->
    <div class="row"> <!----Put thumbnail here----> 
       <span class="col-md-4">                      
        <div class="thumbnail">
          <img src="Task_1/assets/1_1_Home_v3_1/img01.jpg" alt="...">
          <div class="caption">
            <h4>Company OneHub Gurgaon, India</h4>
            <p>Our Science, Business, IT Parks, with their lushly landscaped grounds and integration of 
                a wide range of retail...</p>
   <!---Thumb Button--->
   <p>
       <div  class="list-group">
         <button type="button" class="list-group-item">Read More 
         <img class="pull-right" src="Task_1/assets/assets/arrowbig.png" /></button>  
       </div>
   </p>
          </div>
        </div>
        </span>
       
       <span class="col-md-4">                      
        <div class="thumbnail">
          <img src="Task_1/assets/1_1_Home_v3_1/img01.jpg" alt="...">
          <div class="caption">
            <h4>Company OneHub Gurgaon, India</h4>
            <p>Our Science, Business, IT Parks, with their lushly landscaped grounds and integration of 
                a wide range of retail...</p>
   
   <!---Thumb Button--->
   <p>
       <div  class="list-group">
         <button type="button" class="list-group-item">Read More 
         <img class="pull-right" src="Task_1/assets/assets/arrowbig.png" /></button>  
       </div>
   </p> 
          </div>
        </div>
        </span>
       
       <span class="col-md-4">                      
        <div class="thumbnail">
          <img src="Task_1/assets/1_1_Home_v3_1/img01.jpg" alt="...">
          <div class="caption">
            <h4>Company OneHub Gurgaon, India</h4>
            <p>Our Science, Business, IT Parks, with their lushly landscaped grounds and integration of 
                a wide range of retail...</p>
       <!---Thumb Button--->
   <p class="thumb-button">
       <div  class="list-group">
         <button type="button" class="list-group-item">Read More 
         <img class="pull-right" src="Task_1/assets/assets/arrowbig.png" /></button>  
       </div>
   </p>
        </div>
        </div>
        </span>
        
        <!---./thumbnails--->
    </div>
    </div>
    
  </div><!---- Col-md-8--->
</div>
             </div>
             
             
             
         </div>
     </div>
        
        
        
        
    </div>
    
    
    
    <!-----------./ MOD 5----->
    
 
 
       </div><!---./MAIN---> 
    <script src="xdone.js"></script>    
    </body>    
</html>