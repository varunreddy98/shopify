<?php
   class Books{
      var $price;
      var $title;
      var $image;
}
?>
<?php
            include 'connection.php';
            $sql = "SELECT * FROM items";
            $result = $con->query($sql);
        ?>
        <?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
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
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <div class="container">
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
                    
            $obj=new Books;
            $obj->price=$row['price'];
            $obj->title=$row['name'];
            $obj->image=$row['image'];
            $array[]=$obj;
         ?>
         <?php
           }
           }
           else
            { echo "No data found"; } ?>
<div class="container">
<div class="row">
<?php
$i=0;
foreach($array as $items) {
  echo '<div class="col-md-3 col-sm-6">';
  echo '<div class="thumbnail">';
       echo '<a href="cart.php">';
       echo '
       <img style="height:200px" src="data:image/jpeg;base64,' . base64_encode($items->image) . '" class="user_avatar" />
       ';
       echo '</a>';
       echo '<center>';
           echo '<div class="caption">';
               echo '<h3>'.$items->title.'</h3>';
               echo'<p>Price: Rs.'.$items->price.'</p>'; ?>
               <?php if(!isset($_SESSION['email'])){  ?>
                   echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
                   <?php
                   }
                   else{
                       if(check_if_added_to_cart(1)){
                           echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                       }else{
                           
                          echo '<a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>'; ?>
                           <?php
                       }
                   }
                   ?>
                   <?php
           echo '</div>';
       echo '</center>';
   echo '</div>';
echo '</div>';
  $i++;
  if ($i % 4 == 0) {echo '</div><div class="row">';}
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
</body>
</html>