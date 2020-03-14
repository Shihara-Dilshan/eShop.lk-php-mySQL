<?php

    session_start();

?>

<?php

        $email = $password =  '' ;
        $errors = array('email' => '' , 'password' => '' );


     if(isset($_POST['submit']))
     {

        require('includes/config.php');     

        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
       
        if(empty($_POST['email']))
        {

            $errors['email'] = 'You must input a Email';
           

        }else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {

            $errors['email'] = 'Email address is not valid';
           

        }

        if(!array_filter($errors))
        {


        $sql = "INSERT INTO user(name , password) VALUES ('$email' , '$password')";

        if(mysqli_query($conn,$sql))
        {
            
            
             echo "<script>alert('successfully registered');
                 window.location.href='index.php';
                  </script>";

        }else
        {

            echo 'query error : ' .mysqli_error($conn);

        }

        }
        







     }









?>



<!DOCTYPE html>
  <html>
    <head>
      <link href="css/eShop.css" rel="stylesheet"> 
      <link href="css/fontawesome-free-5.12.1-web/css/all.css" rel="stylesheet"> <!--load all styles -->
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    
    

    <body id="Home" class="scrollspy test" background="image/woman-draw-a-light-bulb-in-white-board-37581051.jpg">
    

    <?php include('includes/header.php'); ?>     
      
     
      
      <form method="post" action="signup.php">
      <div class="container">
      
 <div class="card-panel z-depth-3 ">
  <div class="row">
        <div class="col s12">
            <div class="card-title center teal-text">
                <h4>Sign up Form</h4>
            </div>
        </div>
  </div>
  
  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12 m6">
          <input  id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s12 m6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email">
          <div style="color: red;"> <?php echo $errors['email']; ?> </div>
          <label for="email">Email</label>
        </div>
      </div>
        
        <div class="row">
        <div class="input-field col s12 m6">
          <input id="password" type="password" class="validate" name="password">
          <label for="password">Password</label>
        </div>
        <div class="input-field col s12 m6">
          <input id="cpassword" type="password" class="" name="cpassword">
          <label for="cpassword">Confirm Password</label>
        </div>
        </div>
    
       
        
        
        
        
      <div class="row">
        <div class="input-field col s12">
          <input disabled value="I am not editable" id="disabled" type="text" class="validate">
          <label for="disabled">Disabled</label>
        </div>
      </div>
      <div class="input-field col s12">
    <select>
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Materialize Select</label>
  </div>

  <div class="input-field col s12">
    <select multiple>
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Materialize Multiple Select</label>
  </div>
      
      
      <div class="row">
        <div class="col s12">
          This is an inline input field:
          <div class="input-field inline">
            <input id="email_inline" type="email" class="validate">
            <label for="email_inline">Email</label>
            <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
        <input type="submit" value="submit" class="btn" name="submit" style="width:100%;">
        
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
          $('select').formSelect();
          });
      </script>
      

      
      <?php include('includes/footer.php'); ?>   
    </body>
  </html>