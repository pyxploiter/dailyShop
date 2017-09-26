<script>
$( document ).ready(function() {
    $('#quick-view-modal').on('hidden.bs.modal', function () {
          $(this).removeData('bs.modal');
    });
});
</script>

<?php
include('includes/db.php');

					$prod_Id = $_GET['Id'];
					
					$get_products = "select * from products p join category c on (p.cat_id=c.cat_id) where product_id='$prod_Id'";
					$run_products = mysqli_query($conn,$get_products);
					
					while($row_products = mysqli_fetch_array($run_products)){
					
						$pro_id = $row_products['product_id'];
						$pro_title = $row_products['product_title'];
						$pro_cat = $row_products['cat_title'];
						$pro_brand = $row_products['brand_id'];
						$pro_desc = $row_products['product_desc'];
						$pro_price = $row_products['price'];
						$pro_img1 = $row_products['product_img1'];
						$pro_img2 = $row_products['product_img2'];
						$pro_img3 = $row_products['product_img3'];

echo "
			<div class='modal-body'>
                      <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                      <div class='row'> 
                        <!-- Modal view slider -->
                        <div class='col-md-6 col-sm-6 col-xs-12'>
                          <div class='aa-product-view-slider'>
                            <div class='simpleLens-gallery-container' id='demo-1'>
                              <div class='simpleLens-container'>
                                <div class='simpleLens-big-image-container'> <a class='simpleLens-lens-image' data-lens-image='img/view-slider/large/polo-shirt-1.png'> <img src='admin_area/product_images/$pro_img1' height='300' width='250' class='simpleLens-big-image'> </a> </div>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                        <!-- Modal view content -->
                        <div class='col-md-6 col-sm-6 col-xs-12'>
                          <div class='aa-product-view-content'>
                            <h3>$pro_title</h3>
							  <div class='aa-price-block'> <span class='aa-product-view-price'>$
								$pro_price
                            </span>
                              <p class='aa-product-avilability'>Availability: <span>In stock</span></p>
                            </div>
                            <p>$pro_desc</p>
                            <div class='aa-prod-quantity'>
                              <form action=''>
                                <select name='' id=''>
                                  <option value='0' selected='1'>1</option>
                                  <option value='1'>2</option>
                                  <option value='2'>3</option>
                                  <option value='3'>4</option>
                                  <option value='4'>5</option>
                                  <option value='5'>6</option>
                                </select>
                              </form>
                              <p class='aa-prod-category'> Category: <a href='#'>$pro_cat</a> </p>
                            </div>
                            <div class='aa-prod-view-bottom'> <a href='index.php?add_cart=$pro_id' class='aa-add-to-cart-btn'><span class='fa fa-shopping-cart'></span>Add To Cart</a> 
                          </div>
                        </div>
                      </div>
                    </div>
                    ";
					}
 ?>                   

	


