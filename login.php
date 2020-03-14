<?php

    session_start();

?>

<?php

    if(isset($_POST['submit'])){

        require('includes/config.php');

        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);

        $sql = " SELECT id , name , password FROM  user WHERE name = '$email' AND password = '$password' ";    
        
        $result = mysqli_query($conn, $sql);

        $rows=mysqli_fetch_array( $result , MYSQLI_ASSOC);

        if(mysqli_num_rows($result)==1)
        {
            
         
           
            $email = 'defaultemail';
            $id = 'defaultid';
           

            $_SESSION['login'] = true;

            $_SESSION['email'] = $email;
            
            $_SESSION['uid'] = $rows['id'];
           
           
         
            
            
            
            header('Location: index.php');

        }else
        {
            
            
            //header('Location: userlogin.php');
            //echo "<script> alert('Invalid credentials') </script> ";  

            //header('Location: userlogin.php');

            echo "<script>alert('Invalid credentials');
                 window.location.href='login.php';
                  </script>";
            
    
        }












    }






?>




  <!DOCTYPE html>
  <html>
    <head>
    <title>eShop.lk</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/fontawesome-free-5.12.1-web/css/all.css" rel="stylesheet"> <!--load all styles -->
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/myDesign.css">
      
      
    </head>
    

    <body id="Home" class="scrollspy test" background="image/woman-draw-a-light-bulb-in-white-board-37581051.jpg">
    
      <?php include('includes/header.php'); ?>     

      
      <form action="login.php" method="post">  
      <div class="container" id="myForm">
      
      <div class="card-panel z-depth-3">
      <div class="row">
        <div class="col s12">
            <div class="card-title center-align teal-text">
                <h4>Login</h4>
            </div>
        </div>
  </div>
  <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" name='email' class="validate" name="email">
          <label for="email">Email</label>
        </div>
      </div>
  
  <div class="row">
    <form class="col s12">
      
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" name='password' class="validate" name="password">
          <label for="password">Password</label>
        </div>
      </div>

      <p class="center">
      <label>
        <input type="checkbox" class="filled-in" checked="checked" />
        <span>Remeber me</span>
      </label>
     </p>
      
      
      <div class="row">
        <div class="col s12">
        <input type="submit" value="Log in" name='submit' class="btn" style="width:100%;">
        
        </div>
      
      </div>
    </form>
  </div>
  </div>
      
      </div>
      </form>

      
     
 <!--JavaScript at end of body for optimized loading-->
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/removeVal.js"></script>
      <script>
          $(document).ready(function(){
          $('.sidenav').sidenav();
        
          });

          $(document).ready(function(){
          $('.slider').slider({indicators: false, height: 350, transition : 500,interval : 6000});
          });

          $(document).ready(function(){
          $('.materialboxed').materialbox();
          });
          
          $(document).ready(function(){
          $('input.autocomplete').autocomplete({
                data: {
                       "Nike": null,
                       "Asus": null,
                       "Laptop": null,
                       "Laptops": null,
                       "Adiddas": null,
                       "Toys": null,
                       "Shoes": null,
                       "PC": null,
                       "Paintings": null,
                       "Mobile Phones": null,
                       "Samsung": null,
                       "Apple": null,
                       "LG": null,
                       "Huwaei": null,
                       "Television": null,
                       "Fasion": null,
                       "Perfumes": null,
                       "Clothes": null,
                       "Rings": 'https://placehold.it/250x250'
          },
          });
          });
          
      </script>

    <?php include('includes/footer.php'); ?>      
</body>
</html>