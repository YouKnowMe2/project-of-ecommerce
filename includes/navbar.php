<header>

  <div class="container-fluid p-0">
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white shadow-sm">
      <div class="container ">
        <a class="navbar-brand fw-bold text-danger fs-4 d-flex  align-items-center" href="/">
          <img src="./Logo/cover.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
          Software Store
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
       

        <div class="collapse navbar-collapse justify-content-lg-end text-center " id="navbarNav">
          <ul class="navbar-nav ">

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <?php
            if (isset($_SESSION['auth'])) {
            ?><li class="nav-item">
                <a href=" profile.php" class="nav-link px-1"><?php echo $_SESSION['auth_user']['name'] ?></a>
              </li>
              <li class="nav-item">
                <a href="logout.php" class=" nav-link px-2">log out</a>
              </li>
            <?php
            } else {
            ?>
              <li class="nav-item">
                <a href="login.php" class="px-2 nav-link">SIGN IN</a>
              </li>
              <li class="nav-item">
                <a href="register.php" class="px-1 nav-link">Create a New Account</a>
              </li>
            <?php
            }
            ?>

          </ul>
          
        </div>

      </div>
      
    </nav>
    <div class="container">
          <header>
            <div class="iconCart">
              <img src="../Logo/icon.png">
              <div class="totalQuantity">0</div>
            </div>

          </header>
   

        </div>
    

    <div class="cart" style="z-index: 10000;">
    <h2>
        CART
    </h2>

    <div class="listCart">


        <div class="item">
            <img src="images/1.webp">
            <div class="content">
                <div class="name">CoPilot / Black / Automatic</div>
                <div class="price">$550 / 1 product</div>
            </div>
            <div class="quantity">
                <button>-</button>
                <span class="value">3</span>
                <button>+</button>
            </div>
        </div>


    </div>

    <div class="buttons">
        <div class="close">
            CLOSE
        </div>
        <div class="checkout">
            <a href="checkout.php">CHECKOUT</a>
        </div>
    </div>
</div>
  </div>
</header>