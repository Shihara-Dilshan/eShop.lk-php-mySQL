<?php

    session_start();

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


      

      
      
      <form action="logout.php">  
      <div class="container" id="myForm">
      
 <div class="card-panel z-depth-3 ">
  <div class="row">
        <div class="col s12">
            <div class="card-title center-align teal-text">
                <h4>Confirm Logout</h4>
            </div>
        </div>
  </div>
  <div class="row">
        <div class="input-field col s12">
            <input id="email" type="email" class="validate" name="email" placeholder="You are about to logout" disabled>
          
        </div>
      </div>
  
   <div class="row">
        <div class="input-field col s12">
            <input id="email" type="email" class="validate" name="email" placeholder="Your session will be destroyed" disabled>
          
        </div>
      </div>

       <div class="row">
        <div class="input-field col s12 ">
            <input id="email" type="email" class="validate" name="email" placeholder="make sure you complete your tasks" disabled>
          
        </div>
      </div>
      
      
      <div class="row">
        <div class="col s6">
        <input type="submit" value="Go back" class="btn" style="width:100%;">
        
        </div>
          <div class="col s6">
              <a href="logout">
                  <input type="submit" name='submit' value="Log out" class="btn red" style="width:100%;" onclick="removeValues()">
              </a>
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
      

      
      <%@ include file="includes\footer.jsp"  %> 
    </body>
  </html>