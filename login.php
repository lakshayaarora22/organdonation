<?php
     $server = "localhost:8809";
     $username = "root";
     $password = "";
     $con = mysqli_connect($server, $username, $password,"organdonation" );
     if(mysqli_connect_errno())
     {
           die("connection to this database failed due to".mysqli_connect_error()); 
     }
     $email=$_POST['email'];
     $password=$_POST['password'];
     $flag=0;
     $record=mysqli_query($con,"select email,password from organdonation");
     while($data=mysqli_fetch_assoc($record))
           {
               if($data['email']==$email && $data['password']==$password)
               {
                  header('Location: successful.html');
                 
               }  
              else{                
                  echo '<script type="text/javascript">'; 
                  echo 'alert("Incorrect Password");'; 
                  echo 'window.location.href = "login.html";';
                  echo '</script>';
              }              
           }
?>