<?php
   class Books{
      var $price;
      var $title;
      var $image;
      var $imgname;
      var $category;
}
$array
?>
<?php
            include 'connection.php';
            $sql = "SELECT * FROM items";
            $result = $con->query($sql);
        ?>

<html>
<body>
<a href='demo2.php?denims=true'>Run PHP Function</a>
<a href='demo2.php?watches=true'>Run PHP Function11</a>
<?php global $array;
        //Fetch Data form database
        if($result->num_rows > 0){
         while($row = $result->fetch_assoc()){

            if($row['gender']=='male'){
                    
            $obj=new Books;
            $obj->price=$row['price'];
            $obj->title=$row['name'];
            $obj->category=$row['category'];
            //$obj->image=$row['image'];
            $obj->imgname=$row['imgname'];
            $array[]=$obj;
            }
         ?>
         <?php
           }
           }
           else
            { echo "No data found"; } ?>
            <?php
  function runMyFunction($id4) {
    echo $id4;
    $i=0;
$ind=1;
global $array;
foreach($array as $items) {
    if($items->category==$id4){
    echo '<h3>'.$items->title.'</h3>';
    }
} 
  }

  if (isset($_GET['denims'])) {
    $id='denims';
    runMyFunction($id);
  }
  if (isset($_GET['watches'])) {
    $id='watches';
    runMyFunction($id);
  }
?>

</body>
</html>


<div class="container">
<div class="row" style="margin-left:100px">
<?php
$i=0;
$ind=1;
global $array;
foreach($array as $items) {
    
  echo '<div class="col-md-3 col-sm-6">';
  echo '<div class="thumbnail">';
       echo '<a href="cart.php">';
       $path='img/'.$items->imgname;
       echo '<img src='.$path.' style="height:200px"'.'>';
       echo '</a>';
       echo '<center>';
           echo '<div class="caption">';
               echo '<h3>'.$items->title.'</h3>';
               echo'<p>Price: Rs.'.$items->price.'</p>'; ?>
               <?php if(!isset($_SESSION['email'])){  ?>
                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                   <?php
                   }
                   else{
                       if(check_if_added_to_cart($ind)){
                           echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                       }else{
                           
                          echo '<a href="cart_add.php?id='.$ind.'" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>'; ?>
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
  $ind++;
  if ($i % 4== 0) {echo '</div><div class="row" style="margin-left:100px">';}
}

echo '</div>';
?>
</div>
</div>