<?php
   class Books{
      var $price;
      var $title;
      var $image;
      var $imgname;
      var $category;
      var $id;
}
?>
<?php
            include 'connection.php';
            $sql = "SELECT * FROM items";
            $result = $con->query($sql);
        ?>
        <?php
    session_start();
    $_SESSION['gender']='women';
    require 'check_if_added.php';
    require 'check_if_added_to_wishlist.php';
?>
<!DOCTYPE html>
<html>
    <head>
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
    <style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #ffffff;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

hr{
    margin-top:1px;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}



.button-like {
  border: 2px solid #8a8a8a;
  background-color: transparent;
  text-decoration: none;
  padding: 1rem;
  position: relative;
  vertical-align: middle;
  text-align: center;
  display: inline-block;
  border-radius: 3rem;
  color: #8a8a8a;
  transition: all ease 0.4s;
}

.button-like span {
  margin-left: 0.5rem;
}

.button-like .fa,
.button-like span {
  transition: all ease 0.4s;
}

.button-like:focus {
  background-color: transparent;
}

.button-like:focus .fa,
.button-like:focus span {
  color: #8a8a8a;
}

.button-like:hover {
  border-color: #cc4b37;
  background-color: transparent;
}

.button-like:hover .fa,
.button-like:hover span {
  color: #cc4b37;
}

.liked {
  background-color: #cc4b37;
  border-color: #cc4b37;
}

.liked .fa,
.liked span {
  color: #fefefe;
}

.liked:focus {
  background-color: #cc4b37;
}

.liked:focus .fa,
.liked:focus span {
  color: #fefefe;
}

.liked:hover {
  background-color: #cc4b37;
  border-color: #cc4b37;
}

.liked:hover .fa,
.liked:hover span {
  color: #fefefe;
}

.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 200px;
  right: 595px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

</style>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
    <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
        <div>
            <?php
                require 'header4.php';
            ?>
            <div class="container" >
                <div class="jumbotron">
                    <h1>Welcome to Shopify!</h1>
                    <p>We have the best Fashion for you.We prdict what u want.</p>
                </div>
            </div>
        <?php
        $array=NULL;
        //Fetch Data form database
        if($result->num_rows > 0){
         while($row = $result->fetch_assoc()){
            if($row['gender']=='female'){
            $obj=new Books;
            $obj->price=$row['price'];
            $obj->title=$row['name'];
            $obj->category=$row['category'];
            $obj->imgname=$row['imgname'];
            $obj->id=$row['id'];
            $array[]=$obj;
            }
         ?>
         <?php
           }
           }
           else
            { echo "No data found"; } ?>
<div class="container" id="aaa">
<div class="row" style="margin-left:100px">
<?php
$i=0;
$ind=1;
foreach($array as $items) {
  echo '<div class="col-md-3 col-sm-6">';
  echo '<div class="thumbnail">';
       echo '<a href="cart.php">';
       $path='img/'.$items->imgname;
       echo '<img src='.$path.' style="height:200px"'.'>';
       echo '</a>';
       $it=$items->id;
       echo '<center>';
           echo '<div class="caption">';
               echo '<h3>'.$items->title.'</h3>';
               echo'<p>Price: Rs.'.$items->price.'</p>'; ?>
               <?php if(!isset($_SESSION['email'])){  ?>
                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
              
                   <?php
                   }
                   else{
                       if(check_if_added_to_cart($items->id)){
                           echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                       }else{
                           
                          echo '<a href="cart_add.php?id='.$items->id.'" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>'; ?>
                           <?php
                       }
                   } 
                   echo '<br>';
                    if(check_if_added_to_wishlist($items->id)){
                           echo '<a href="#" style="color:red" class=btn btn-block btn-success disabled>Added to wishlist</a>';
                       }else{ ?>
                       <form action='add_wishlist.php' method='post'>
                        <button class="button button-like">
                        <input type="hidden" name="itemid" value="<?=$items->id;?>" />
                        <i class="fa fa-heart"></i>
                        <span>Wishlist</span>
                      </button> 
                       </form>
                        <?php } ?>
                   <?php
           echo '</div>';
       echo '</center>';
   echo '</div>';
echo '</div>';
  $i++;
  $ind++;
  if ($i % 4== 0) {echo '</div><div class="row" style="margin-left:100px">';}
}

echo '</div>';
?>
</div>
</div>
<br><br><br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
               </div>
           </footer>
    </div>
<?php

function runMyFunction($id4) { 
    // $_SESSION['shirts']=0;
    // $_SESSION['tshirts']=0;
    // $_SESSION['watches']=0;
    // $_SESSION['denims']=0;
    // $_SESSION['jackets']=0;
    //$_SESSION[$id4]=1;
    //$tt=$_SESSION[$id4].$id4;
    //echo "<script type='text/javascript'>alert('$tt');</script>";
    global $cat;
    $cat=$id4;
    global $array;
    $array1=NULL;
    foreach($array as $items)
    {

          if($items->category==$id4)
          {
            $array1[]=$items;    

          }

    }

   ?>
<script type="text/javascript">
 $("#aaa").remove();
</script>
<div class="container" id="aaa">
<div class="row" style="margin-left:100px">
<?php
$i=0;
$ind=1;
foreach($array1 as $items) {
  
  echo '<div class="col-md-3 col-sm-6">';
  echo '<div class="thumbnail">';
       echo '<a href="cart.php">';
       $path='img/'.$items->imgname;
       echo '<img src='.$path.' style="height:200px"'.'>';
       echo '</a>';
       echo '<center>';
           echo '<div class="caption">';
               echo '<h3>'.$items->title
               .'</h3>';
               echo'<p>Price: Rs.'.$items->price.'</p>'; ?>
               <?php if(!isset($_SESSION['email'])){  ?>
                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                   <?php
                   }
                   else{
                       if(check_if_added_to_cart($items->id)){
                           echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                       }else{
                           global $cat;
                           $_SESSION['cat']=$cat;
                          echo '<a href="add_cart1.php?id='.$items->id.'" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>'; ?>
                           <?php
                       }
                   }
                   echo '<br>';
                   if(check_if_added_to_wishlist($items->id)){
                          echo '<a href="#" style="color:red" class=btn btn-block btn-success disabled>Added to wishlist</a>';
                      }else{ ?>
                      <form action='add_wishlist1.php' method='post'>
                       <button class="button button-like">
                       <input type="hidden" name="itemid" value="<?=$items->id;?>" />
                       <i class="fa fa-heart"></i>
                       <span>Wishlist</span>
                     </button> 
                      </form>
                       <?php } ?>
                   <?php
           echo '</div>';
       echo '</center>';
   echo '</div>';
echo '</div>';
  $i++;
  $ind++;
  if ($i % 4== 0) {echo '</div><div class="row" style="margin-left:100px">';}
}
echo '</div>';
?>
</div>
</div>
<br><br><br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
               </div>
           </footer>
    </div>
   <?php
  }

  if (isset($_GET['sarees'])) {
    $id='sarees';
    runMyFunction($id);
    return;
  }
  if (isset($_GET['kurtas'])) {
    $id='kurtas';
    runMyFunction($id);
    return;
  }
  if (isset($_GET['tshirts'])) {
    $id='tshirts';
    runMyFunction($id);
    return;
  }
  if (isset($_GET['denims'])) {
    $id='denims';
    runMyFunction($id);
    return;
  }
  if (isset($_GET['footwear'])) {
    $id='footwear';
    runMyFunction($id);
    return;
  }

  if (isset($_GET['accessories'])) {
    $id='accessories';
    runMyFunction($id);
    return;
  }

?>
</body>
</html>