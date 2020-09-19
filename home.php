
<?php 
session_start();
$mysqli=mysqli_connect("localhost","root","","portfolio");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My Website</title>
</head>
<body>
    <!--Header-->
    

    <?php 
            global $FName;
            if(isset(($_SESSION['id']))){
                  $k= $_SESSION['id'];
                  
                 $get_name= "select fname  from data where id= '$k' ";
                 

                if($run_name= mysqli_query($mysqli,$get_name))
                {

                
                while( $run = mysqli_fetch_array($run_name))
                 {   
                    
                
                 $FName= $run['fname'];
                  }  
                }
              }  
                ?> 
        <section id="header">
        <div class="header container">
            <div class="nav-bar">
                <div class="brand">
                    <?php 
                        global $first;
                        $first=$FName;
                    ?>
            <?php 
            global $LName;
            if(isset(($_SESSION['id']))){
                  $k= $_SESSION['id'];
                  
                 $get_name= "select lname  from data where id= '$k' ";
                 

                if($run_name= mysqli_query($mysqli,$get_name))
                {

                
                while( $run = mysqli_fetch_array($run_name))
                 {   
                    
                
                 $LName= $run['lname'];
                  }  
                }
              }  
                ?> 
                 <?php 
                        global $last;
                        $last=$LName;
                    ?>

                <a href="#hero"><h1><span><?php echo $first[0];?></span><?php echo substr($first,1) ; ?>

                <span><?php echo $last[0] ;?></span><?php echo substr($last,1) ; ?></h1></a>

                </div>
                <div class="nav-list">
                    
                    <div class="hamburger"><div class="bar"></div></div>
                    <ul>
                    <li><a href="#" data-after="Home">Home</a></li>
                    <li><a href="#" data-after="Service">Service</a></li>
                    <li><a href="#" data-after="Projects">Projects</a></li>
                    <li><a href="#" data-after="About">About</a></li>
                    <li><a href="#" data-after="Contact">Contact</a></li>
                </ul>
             </div>
          </div>
        </div>
    </section> 
    <!--End of Header-->



     <!--Hero Section-->
     <section id="hero">
        <div class="hero container">
            
        <div>
             
            <h1>Hello ,<span></span></h1>
             <h1>My Name is <span></span></h1>
             <h1><?php echo $FName.' '.$LName; ?><span></span></h1>
            <a href="#" type="button" class="cta">Portfolio</a>
        </div>
    </div>
     </section>
     <!--End Hero section-->
 <!-- Service Section-->
 <section id="services">
     <div class="services container">
         <div class="service-top">
             <h1 class="section-title">Serv<span>i</span>ces</h1>
             <p>
                <?php 
                
                if(isset(($_SESSION['id']))){
                  $k= $_SESSION['id'];
                  
                 $get_service= "select services  from data where id= '$k' ";
                 

                if($run_service= mysqli_query($mysqli,$get_service))
                {

               // echo "Krishna";
                while( $run = mysqli_fetch_array($run_service))
                 {   
                    
                
                
                echo $run['services'];
                  }   
                 }
                
        }
               ?>     
                </p>
         </div>


                 <?php 
                
                  global $service1;
                if(isset(($_SESSION['id']))){
                  $k= $_SESSION['id'];
                 $get_service1= "select service1  from data where id= '$k' ";
                 

                if($run_service1= mysqli_query($mysqli,$get_service1))
                {

            
                while( $run = mysqli_fetch_array($run_service1))
                 {   
                $service1= $run['service1'];
                
                  }   
                 }
                
                 }
               ?> 
            <?php

              global $service2;
                if(isset(($_SESSION['id']))){
                  $k= $_SESSION['id'];
                 $get_service2= "select service2  from data where id= '$k' ";
                 

                if($run_service2= mysqli_query($mysqli,$get_service2))
                {

            
                while( $run = mysqli_fetch_array($run_service2))
                 {   
                $service2= $run['service2'];
                
                  }   
                 }
                
                 }
            ?>

            <?php

              global $service3;
                if(isset(($_SESSION['id']))){
                  $k= $_SESSION['id'];
                 $get_service3= "select service3  from data where id= '$k' ";
                 

                if($run_service3= mysqli_query($mysqli,$get_service3))
                {

            
                while( $run = mysqli_fetch_array($run_service3))
                 {   
                $service3= $run['service3'];
                
                  }   
                 }
                
                 }
            ?>

            <?php

              global $service4;
                if(isset(($_SESSION['id']))){
                  $k= $_SESSION['id'];
                 $get_service4= "select service4  from data where id= '$k' ";
                 

                if($run_service4= mysqli_query($mysqli,$get_service4))
                {

            
                while( $run = mysqli_fetch_array($run_service4))
                 {   
                $service4= $run['service4'];
                
                  }   
                 }
                
                 }
            ?>
           <div class="service-bottom">
             <div class="service-item">
                 <div class="icon"><img src="https://img.icons8.com/bubbles/50/000000/services.png"/>
                 </div>
                 <h2>Service 1</h2>
                 <p><?php echo $service1;?></p>
                </div>
                <div class="service-item">
                    <div class="icon"><img src="https://img.icons8.com/bubbles/50/000000/services.png"/>
                    </div>
                    <h2>Service 2</h2>
                    <p><?php echo $service2;?></p>
                   </div>
                   <div class="service-item">
                    <div class="icon"><img src="https://img.icons8.com/bubbles/50/000000/services.png"/>
                    </div>
                    <h2>Service 3</h2>
                    <p><?php echo $service3;?></p>
                   </div>
                   <div class="service-item">
                    <div class="icon"><img src="https://img.icons8.com/bubbles/50/000000/services.png"/>
                    </div>
                    <h2>Service 4</h2>
                    <p><?php echo $service4;?></p>
                   </div>
         </div>
     </div>
 </section>
 <!--End of Service Section-->


 <!--Project Section-->
    <section id="projects">
        <div class="projects container">
            <div class="projects header">
                <h1 class="section-title">Recent <span> Projects</span> </h1>
            </div>
            <div class="all projects">
                <div class="project-item">
                    <div class="project-info">
                        <h1>Project 1</h1>
            <?php 
            global $Project1;
            if(isset(($_SESSION['id']))){
                  $k= $_SESSION['id'];
                  
                 $get_project1= "select recentproject1  from data where id= '$k' ";
                 

                if($run_project1= mysqli_query($mysqli,$get_project1))
                {

                
                while( $run = mysqli_fetch_array($run_project1))
                 {  
                 $Project1= $run['recentproject1'];
                  }  
                }
              }  
                ?> 
                        <p><?php echo $Project1; ?>
                        </p>
                    </div>
                    <div class="project-img">
                            <img src="./img/img-1.png" alt="img"/>
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-info">
                        <h1>Project 2</h1>
                        <?php 
                        global $Project2;
                         if(isset(($_SESSION['id']))){
                          $k= $_SESSION['id'];
                          
                         $get_project2= "select recentproject2  from data where id= '$k' ";
                         

                        if($run_project2= mysqli_query($mysqli,$get_project2))
                        {

                        
                        while( $run = mysqli_fetch_array($run_project2))
                         {   
                            
                         $Project2= $run['recentproject2'];
                          }  
                        }
                      }  
                        ?>
                        <p><?php echo $Project2; ?></p>
                    </div>
                    <div class="project-img">
                            <img src="./img/img-1.png" alt="img"/>
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-info">
                        <h1>Project 3</h1>
                        <?php

                    global $Project3;
                    if(isset(($_SESSION['id']))){
                          $k= $_SESSION['id'];
                          
                         $get_project3= "select recentproject3  from data where id= '$k' ";
                         

                        if($run_project3= mysqli_query($mysqli,$get_project3))
                        {

                        
                        while( $run = mysqli_fetch_array($run_project3))
                         {   
                            
                        
                         $Project3= $run['recentproject3'];
                          }  
                        }
                      }  
                        ?>
                        <p><?php echo $Project3; ?>
                        </p>
                    </div>
                    <div class="project-img">
                            <img src="./img/img-1.png" alt="img"/>
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-info">
                        <h1>Project 4</h1>
                        <?php 
                        global $Project4;
                        if(isset(($_SESSION['id']))){
                              $k= $_SESSION['id'];
                              
                             $get_project4= "select recentproject4  from data where id= '$k' ";
                             

                            if($run_project4= mysqli_query($mysqli,$get_project4))
                            {

                            
                            while( $run = mysqli_fetch_array($run_project4))
                             {  
                             $Project4= $run['recentproject4'];
                              }  
                            }
                          }  
                            ?>
                        <p><?php echo $Project4; ?>
                        </p>
                    </div>
                    <div class="project-img">
                            <img src="./img/img-1.png" alt="img"/>
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-info">
                        <h1>Project 5</h1>
                        <?php
                        global $Project1;
                        if(isset(($_SESSION['id']))){
                              $k= $_SESSION['id'];
                              
                             $get_project5= "select recentproject5  from data where id= '$k' ";
                             

                            if($run_project5= mysqli_query($mysqli,$get_project5))
                            {

                            
                            while( $run = mysqli_fetch_array($run_project5))
                             { 
                            
                             $Project5= $run['recentproject5'];
                              }  
                            }
                          }  
                            ?>
                        <p><?php echo $Project5; ?>
                        </p>
                    </div>
                    <div class="project-img">
                            <img src="./img/img-1.png" alt="img"/>
                    </div>
                </div>
            </div>
        </div>

    </section>
 <!--End Project section-->
<!--About Section-->   
    <section id="about">
        <div class="about container">
            <div class="col-left">
                <div class="about-img" >
                    <?php 
                        
                        if(isset(($_SESSION['id']))){
                              $k= $_SESSION['id'];
                              
                              
                             $get_image= "select img from data where id= '$k' ";
                             $run_image= mysqli_query($mysqli,$get_image);
                             $row = mysqli_fetch_array($run_image);

                             $image = $row['img'];
                             $image_src = "cover/".$image;                            
                          }  
                        ?>
                        <img src= '<?php echo $image_src; ?>' >
                </div>
            </div>
            <div class="col-right">
                <h1 class="section-title">About <span>me</span></h1>
                <h2>Front End Developer</h2>
                <?php 
                    global $AboutMe;
                    if(isset(($_SESSION['id']))){
                          $k= $_SESSION['id'];
                          
                         $get_aboutme= "select aboutme from data where id= '$k' ";
                         

                        if($run_aboutme= mysqli_query($mysqli,$get_aboutme))
                        {

                        
                        while( $run = mysqli_fetch_array($run_aboutme))
                         {   
                        
                         $AboutMe= $run['aboutme'];
                          }  
                        }
                      }  
                        ?>
                <p><?php echo $AboutMe; ?></p>
                 <a href="#" class="cta">Download Resume</a>   
            </div>
        </div>
    </section>
<!--End About Section-->  

<!--Contact Section--> 
<section id="contact">
    <div class="contact container">
        <div><h1 class="section-title">Contact <span>info</span></h1></div>
        <div class="contact-items">
            <div class="contact-item">
                <div class="icon"><img src="https://img.icons8.com/bubbles/50/000000/phone.png"/></div>
                <div class="contact-info">
                    <h1>Phone</h1>
                    <?php
                       
                    global $Phone;
                    if(isset(($_SESSION['id']))){
                      $k= $_SESSION['id'];
                      
                     $get_phone= "select phone  from data where id= '$k' ";
                     

                    if($run_phone= mysqli_query($mysqli,$get_phone))
                    {

                    
                    while( $run = mysqli_fetch_array($run_phone))
                     {   
                    
                     $Phone= $run['phone'];
                     echo $Phone;
                      }  
                    }
                  }  
                ?>  
                    <h2><?php echo $Phone; ?></h2>
                </div>
            </div>
            <div class="contact-item">
                <div class="icon"><img src="https://img.icons8.com/bubbles/50/000000/new-post.png"/></div>
                <div class="contact-info">
                    <h1>Email</h1>
                    <?php 
                    global $Email;
                    if(isset(($_SESSION['id']))){
                        $k= $_SESSION['id'];
                  
                    $get_email= "select email  from data where id= '$k' ";
                 

                if($run_email= mysqli_query($mysqli,$get_email))
                {

                
                while( $run = mysqli_fetch_array($run_email))
                 {   
                    
                
                
                 $Email= $run['email'];
                  }  
                }
              }  
                ?>
                    <h2><?php echo $Email;?></h2>
                </div>
            </div>
            <div class="contact-item">
                <div class="icon"><img src="https://img.icons8.com/bubbles/50/000000/address.png"/></div>
                <div class="contact-info">

                      
                    <h1>Address</h1>

                    <?php
                       
                    global $Address;
                    if(isset(($_SESSION['id']))){
                      $k= $_SESSION['id'];
                      
                     $get_address= "select address  from data where id= '$k' ";
                     

                    if($run_address= mysqli_query($mysqli,$get_address))
                    {

                    
                    while( $run = mysqli_fetch_array($run_address))
                     {   
                        
                
                    
                     $Address= $run['address'];
                      }  
                    }
                  }  
                ?>  
                    <h2><?php echo $Address; ?></h2>
                </div>
            </div>
        
        </div>
    </div>
</section> 
<!--End Contact Section-->  
<!--Footer Section--> 
<section id="footer">
    <div class="footer container">
        <div class="brand"><h1><span><?php echo $first[0] ;?></span><?php echo substr($first,1) ?></h1></div>
        <h2>Your Complete Website Solution</h2>
        <div class="social-icon">
            <div class="social-item">
                <a href="#"><img src="https://img.icons8.com/ios-filled/50/000000/facebook-new.png"/></a>
            </div>
            <div class="social-item">
                <a href="#"><img src="https://img.icons8.com/ios-filled/50/000000/instagram.png"/></a>
            </div>
            <div class="social-item">
                <a href="#"><img src="https://img.icons8.com/ios-filled/50/000000/twitter-circled.png"/></a>
            </div>
            <div class="social-item">
                <a href="#"><img src="https://img.icons8.com/ios-filled/50/000000/slack.png"/></a>
            </div>
        </div>
        <p>Copyright © 2000 Kamya . All rights reserved </p>
    </div>
</section> 
<!--End Footer Section-->  
<script src="./app.js"></script>
</body>
</html>
