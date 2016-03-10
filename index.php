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
                  <li role="presentation"><a href="#">什么</a></li>
                  <li role="presentation"><a href="#">ماذا</a></li>
                  <li role="presentation"><a href="#">什麼</a></li>
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
    </div>
      <!-----------------------./ MOD 4 The Carousel---------------->   
    
    
    <!-----------MOD 5 - The thumbnails------>
    
    <div class="container">

  <!----ThumbNails Projects---->
        
    <div class="container-fluid">
    <div class="row">     
  <div class="col-lg-8col-md-8 col-sm-8"><!---Thumb Project Rows--->
   
   <span><h1>Featured Project</h1></span>
   <div class="container-fluid"><!---Inside Company Content---->
    <!----Put thumbnail here---->
    <div class="row">  
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
   <!---Thumb Button--->
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
    
    <!---About the Company--->
    <div class="col-lg-11 col-md-11 col-sm-11">
        <div class="about">
            <h3>About the Ascendas Group</h3>
            <p class="">
                Company is Asia's leading provider of business space solutions with more than 30 years of experience.
                Based in Singapore, Company has built a strong regional presence and serves a global clientele of 
                over 2400 customers in 26 cities across 10 countries including Singapore, China, India, South Korea
                and Vietnam.
            </p>
        </div>
    </div><!--- ./ About the Company--->
    
    <!-----Services of the Company---->
    <style>
        .serv-button {background-color: #FFFAFA;} 
    </style>
   <div class="services">
   <div class="col-lg-4 services">
       <!---Corporate Video--->    
        
    <div  class="list-group">
         <button type="button" class="list-group-item serv-button">
         <img class="pull-left" src="Task_1/assets/1_1_Home_v3_1/corporatevideo.png" />
         &nbsp;&nbsp;&nbsp;<span class="text-black">Corporate Video</span></button>  
       </div>
    </div>
   
   <div class="col-lg-4 services" >
       <!---Brochure--->    
        
    <div  class="list-group">
         <button type="button" class="list-group-item serv-button">
         <img class="pull-left" src="Task_1/assets/1_1_Home_v3_1/downloadbrochure.png" width="20px"/>
            &nbsp;&nbsp;&nbsp;<span class="text-black">Download Brochure</span></button>  
       </div>
    </div>
   
   <div class="col-lg-4 services">
       <!---Testimonials--->    
        
    <div  class="list-group">
         <button  type="button" class="list-group-item serv-button">
         <img class="pull-left" src="Task_1/assets/1_1_Home_v3_1/testimonials.png" />
         &nbsp;&nbsp;&nbsp<span class="text-black">Testimonials</span></button>  
       </div>
    </div>
   </div> <!--Main div--->
    <!-----./Services of the Company---->
    
  </div><!---./.Thumb Project Rows--->
  
  <!----Contact Us Part---->
  <div class="col-lg-4">
      
      <span class="col-md-9"> 
      <h1>Contact Us</h1>                         
        <div class="thumbnail">
          <img src="Task_1/assets/1_1_Home_v3_1/contactus.jpg" alt="...">
          
       <!---Thumb Button--->
           <p class="thumb-button">
               <div  class="list-group">
                   
                 <button type="button" class="list-group-item">
                      <img  style ="margin-right: 10px" class="pull-left" src="Task_1/assets/1_1_Home_v3_1/callus.png" width="20px" height="20px"/>
                     <span class="divide-vertical"></span> 
                 <img class="pull-right" src="Task_1/assets/assets/arrowbig.png" />Call Us</button>  
               </div>
           </p>
           
           <p class="thumb-button">
               <div  class="list-group">
               
                 <button style="background-color: #40E0D0" type="button" class="list-group-item">
                  <img  style ="margin-right: 10px" class="pull-left" src="Task_1/assets/1_1_Home_v3_1/enquiry.png" width="20px" height="20px"/>
                     <span class="divide-vertical"></span>     
                      <span class="text-black">Submit Enquiry</span>
                 <img class="pull-right" src="Task_1/assets/assets/arrowbig.png" /></button>  
               </div>
           </p>
               
           <p class="thumb-button">
               <div  class="list-group">
                 <button style="background-color: #40E0D0" type="button" class="list-group-item">
                     <img  style ="margin-right: 10px" class="pull-left" src="Task_1/assets/1_1_Home_v3_1/suscribeascent.png" width="20px" height="20px"/>
                     <span class="divide-vertical"></span> 
                    <span class="text-black">Subscribe ASCENT</span>
                 <img class="pull-right" src="Task_1/assets/assets/arrowbig.png" /></button>  
               </div>
           </p>    
                
        </div>
        </span>
        <!---The articles and news part--->
        <div class="col-lg-12">
          <span class="article-news"> 
                <h4>Latest News</h4>
                <div>
                    <p class="thread">Something Something Something Something Something</p>
                     <span class="article-date">                    
                         <?php $mydate=getdate(date("U"));echo "$mydate[month] $mydate[mday], $mydate[year]"?>
                    </span>
                </div>
                <hr>
                <div>
                    <p class="thread">Something Something Something Something Something</p>
                    <?php $mydate=getdate(date("U"));echo "$mydate[month] $mydate[mday], $mydate[year]"?>
                </div>
                <hr>
                <div>
                    <p class="thread">Something Something Something Something Something</p>
                    <?php $mydate=getdate(date("U"));echo "$mydate[month] $mydate[mday], $mydate[year]"?>
                </div>
            </span>
            
            
        </div><!--- ./ The articles and news part--->
        
        
  </div> <!----../Contact Us Part--->
    
    <!---Printer Page--->
  
   
  
                </div>  <!----ThumbNails Projects ROW---->
             </div> <!----ThumbNails Projects---->        
         </div><!---- Below Carousel Container--->
    
    <!-----------./ MOD 5----->
    <!----MOD 6 : THE FOOTER---->
 <footer>
     <div class="container">
     <div class="container-fluid">
         <div class="row">
             <div>
                 
             </div>
             
         </div>
     </div>    
     </div>
     
 </footer>
 <!-----MOD 6 : THE FOOTER---->
       </div><!---./MAIN---> 
    <script src="xdone.js"></script>    
    </body>    
</html>