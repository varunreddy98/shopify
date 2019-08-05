 <?php
            include 'connection.php';
            $sql = "SELECT * FROM items";
            $result = $con->query($sql);
        ?>
      <!doctype html>
        <html>
          <body>
           <h1 align="center">CARDS</h1>
        <?php
        //Fetch Data form database
        if($result->num_rows > 0){
         while($row = $result->fetch_assoc()){
		 echo '<div class="col-md-3 col-sm-6">';
                        echo '<div class="thumbnail">';
                            echo '<a href="cart.php">';
                             $avatar=$row['image'];
                              echo '
      <img style="width:200px;height:200px;margin-left:650px" src="data:image/jpeg;base64,' . base64_encode($avatar) . '" class="user_avatar" />
      ';
                           echo '</a>';
                            echo '<center>';
                                echo '<div class="caption">';
                                    echo '<h3>'.$row['name'].'</h3>';
                                    echo '<p>'.'Price: Rs.'.$row['price'].'</p>'?>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <?php echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>'; ?>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                               <?php   echo '<a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>'; ?>
                                                <?php
                                            }
                                        }
                                        ?>
                          <?php      echo '</div>';
                            echo '</center>';
                        echo '</div>';
                    echo '</div>';
         ?>
         <?php
           }
           }
           else
            { echo "No data found"; } ?>
          </body>
        </html> 