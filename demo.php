<?php
 require 'connection.php';
$sql = "SELECT id, name, image, price, rating, brand, category, gender FROM items";
$res= $con->query($sql);
while($record=$res->fetch_assoc()) {
?>
<div class="card hovercard">
<div class="cardheader">
<div class="avatar">
</div>
</div>
<div class="card-body info">
<div class="title">
<div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src=$record["image"] alt="Titan 201">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>record['name']</h3>
                                    <p>Price: Rs.record['price']</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
</div>
</div>
<?php } ?>