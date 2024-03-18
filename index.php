<?php
session_start();
include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>


<?php
       if(isset($_SESSION['message']))
       { ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">

            <?php echo $_SESSION['message']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>       
<?php
  unset($_SESSION['message']);
      }

?>
        <!--first slider--->
        <!-- <div class="container-fluid p-0">
            <div class="site-slider">
                <div class="silder-one">
                    <div>
                        <img src="./assets/item-1.jpg" class="img-fluid" alt="banner-1">
                    </div>
                    <div>
                        <img src="./assets/item-2.jpg" class="img-fluid" alt="banner-2">
                    </div>
                    <div>
                        <img src="./assets/item-3.jpg" class="img-fluid" alt="banner-3">
                    </div>
                </div>
                <div class="slider-btn">
                  <span class="prev position-top">
                    <i class="fas fa-chevron-left"></i>
                  </span>
                  <span class="next position-top right-0">
                    <i class="fas fa-chevron-right"></i>
                  </span>
                </div>
            </div>
        </div> -->
        <!--/first slider-->

        <!--/2nd slider-->
        <!-- <div class="container-fluid">
          <div class="site-slider-two px-md-4">
            <div class="row slider-two text-center">
              <div class="col-md-2 product pt-md-5 pt-4">
                <img src="./assets/id-9-cat-1.jpg" alt="product-1">
                <span class="border site-btn btn-span">SOFA & CHAIRS</span>
              </div>
              <div class="col-md-2 product pt-md-5 pt-4">
                <img src="./assets/id-9-cat-2.jpg" alt="product-2">
                <span class="border site-btn btn-span">Furniture and Decorators</span>
              </div>
              <div class="col-md-2 product pt-md-5 pt-4">
                <img src="./assets/id-9-cat-3.jpg" alt="product-3">
                <span class="border site-btn btn-span">Lamp & Lighting</span>
              </div>
              <div class="col-md-2 product pt-md-5 pt-4">
                <img src="./assets/id-9-cat-4.jpg" alt="product-4">
                <span class="border site-btn btn-span">Sound & Life</span>
              </div>
              <div class="col-md-2 product pt-md-5 pt-4">
                <img src="./assets/id-9-cat-5.jpg" alt="product-5">
                <span class="border site-btn btn-span">Appliences</span>
              </div>
              <div class="col-md-2 product pt-md-5 pt-4">
                <img src="./assets/id-9-cat-4.jpg" alt="product-6">
                <span class="border site-btn btn-span">Sound & Life</span>
              </div>
            </div>
            <div class="slider-btn">
              <span class="prev position-top">
                <i class="fas fa-chevron-left fa-2x text-secondary"></i>
              </span>
              <span class="next position-top right-0">
                <i class="fas fa-chevron-right fa-2x text-secondary"></i>
              </span>
            </div>
          </div>
        </div> -->
        <!--/2nd slider-->
 
<?php include 'includes/footer.php'; ?>