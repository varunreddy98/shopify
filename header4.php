<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href='products_women.php?kurtas=true'>kurtas</a>
  <hr>
  <a href="products_women.php?sarees=true">sarees</a>
  <hr>
  <a href="products_women.php?tshirts=true">tshirts</a>
  <hr>
  <a href="products_women.php?denims=true">denims</a>
  <hr>
  <a href='products_women.php?footwear=true'>footwear</a>
  <hr>
  <a href="products_women.php?accessories=true">accessories</a>
</div>
                       <span style="font-size:29px;cursor:pointer;color:#818181;margin-top:5px" onMouseOver="this.style.color='white'" onMouseOut="this.style.color='#818181'" onclick="openNav()">&#9776; Categories</span>
                    
                   </div>
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           <li> <a href="index.php"><span class="fa fa-home"></span>Home</a></li>
                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                           <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                           <li><a href="wishlist.php">
          <span class="glyphicon glyphicon-heart"></span> Wishlist
        </a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                           <?php
                           }else{
                            ?>
                                 <li> <a href="products.php"><span class="fa fa-home"></span>Home</a></li>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>