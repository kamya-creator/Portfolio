<?php

include("config.php");

$mysqli=mysqli_connect("localhost","root","","portfolio");


        if(isset($_POST['submit']))
        {
            $fname =htmlentities(mysqli_real_escape_string($mysqli,$_POST['fname']));
            $lname =htmlentities(mysqli_real_escape_string($mysqli,$_POST['lname']));
            

            $services =htmlentities(mysqli_real_escape_string($mysqli,$_POST['services']));

            $service1 =htmlentities(mysqli_real_escape_string($mysqli,$_POST['service1']));

            $service2 =htmlentities(mysqli_real_escape_string($mysqli,$_POST['service2']));


            $service3 =htmlentities(mysqli_real_escape_string($mysqli,$_POST['service3']));

            $service4 =htmlentities(mysqli_real_escape_string($mysqli,$_POST['service4']));

            $recentproject1 =htmlentities(mysqli_real_escape_string($mysqli,$_POST['project1']));
            
            $recentproject2=htmlentities(mysqli_real_escape_string($mysqli,$_POST['project2']));
            $recentproject3=htmlentities(mysqli_real_escape_string($mysqli,$_POST['project3']));
            $recentproject4=htmlentities(mysqli_real_escape_string($mysqli,$_POST['project4']));
            $recentproject5=htmlentities(mysqli_real_escape_string($mysqli,$_POST['project5']));
            $aboutme=htmlentities(mysqli_real_escape_string($mysqli,$_POST['aboutme']));
        
            $name = $_FILES['image']['name'];
            $target_dir ="cover/";
            $target_file = $target_dir . basename($_FILES['image']['name']);

            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            $extenssion_arr = array("jpg","jpeg","png");

            if(in_array($imageFileType, $extenssion_arr)){
                
                    move_uploaded_file($_FILES['image']['tmp_name'], $target_dir.$name);
                
            }

            
            $phone=htmlentities(mysqli_real_escape_string($mysqli,$_POST['phone']));
            $email=htmlentities(mysqli_real_escape_string($mysqli,$_POST['email']));;
            $address=htmlentities(mysqli_real_escape_string($mysqli,$_POST['address']));;

            $newgid = sprintf('%05d',rand(0,999999));
            $id =strtolower($fname."_".$newgid);
             
             $insert="INSERT into data values('$id','$fname','$lname','$services','$service1','$service2','$service3','$service4','$recentproject1','$recentproject2','$recentproject3','$recentproject4','$recentproject5','$aboutme','$name','$phone','$email','$address')";
           
             
            $result=mysqli_query($mysqli,$insert);


            

    
           
            
            if($result!='0')
            {
                echo "<script>alert('Well Done $fname ,you are good to go. ')</script>";
                echo "<script>window.open('home.php','_self')</script>";
            }
            else
            {
                echo "fail";
                
            }
            session_start();
            $_SESSION['id']= $id;

    
        }


        
?>