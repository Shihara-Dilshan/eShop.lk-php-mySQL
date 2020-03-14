<?php if(1 == 1)
{
?>
<!--UNREGISTERED USER'S HEADER-->

</script>

<div class="navbar-fixed">
<nav class="teal">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"> eShop.lk</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
       
        <li><a href="#">Home</a></li>
        <li><a href="#">Search</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#" onclick="showMSG()">Sign up</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#" class="btn-floating teal darken-4 z-depth-0">
          <i class="material-icons">add_shopping_cart</i>
        
        </a></li>
        <li>
        <span class="badge white-text red"> in cart
        
        5
        </span>
        </li>
      </ul>
    </div>
  </nav>
</div>
  <ul class="sidenav" id="mobile-demo">
       
         <li><a href="#">Home</a></li>
        <li><a href="#">Search</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#" onclick="showMSG()">Sign up</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="https://www.facebook.com" class="btn-floating white darken-4 z-depth-0">
          <i class="material-icons">add_shopping_cart</i>
        
        </a></li>
        <li>
        
        <span class="badge white-text red">5 items in cart
        
        </span>
        </li>
  </ul>
<?php } ?>
<!--REGISTERED USER'S HEADER-->

<?php if(1==2) 
{

?>
<div class="navbar-fixed">
<nav class="teal">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"> eShop.lk</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
       
        <li><a href="#">Home</a></li>
        <li><a href="#">Search</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">My Account</a></li>
        <li><a href="#">logout</a></li>
        <li><a href="#" class="btn-floating teal darken-4 z-depth-0">
          <i class="material-icons">add_shopping_cart</i>
        
        </a></li>
        <li>
        <span class="badge white-text red"> in cart
        
        5
        </span>
        </li>
      </ul>
    </div>
  </nav>
</div>
  <ul class="sidenav" id="mobile-demo">
       
         <li><a href="index.jsp">Home</a></li>
        <li><a href="#">Search</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">My Account</a></li>
        <li><a href="#">logout</a></li>
        <li><a href="#" class="btn-floating white darken-4 z-depth-0">
          <i class="material-icons">add_shopping_cart</i>
        
        </a></li>
        <li>
        
        <span class="badge white-text red">5 items in cart
        
        </span>
        </li>
  </ul>

  
<?php } ?>
	