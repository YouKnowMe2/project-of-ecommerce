<header>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12 col-12">
        <div class="btn-group">
          <button class="btn border dropdown-toggle my-md-4 my-2 text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">usd</button>
          <div class="dropdown-menu">
            <a href="#" class="dropdown-item">ERU-ERROR</a>
            <p class="dropdown-item">USD</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-12 text-center">
        <h2 class="my-md-3 site-tittle text-white">online store</h2>
      </div>
      <div class="col-md-4 col-12 text-right">
        <p class="my-md-4 header-links">
          <?php
          if (isset($_SESSION['auth'])) {
          ?>
            <a href="profile.php" class="px-1"><?php echo $_SESSION['auth_user']['name'] ?></a>
            <a href="logout.php" class="px-2">log out</a>
    
      <?php
          } else {
      ?>
        <a href="login.php" class="px-2">sign in</a>
        <a href="register.php" class="px-1">create a new account</a>
      <?php
          }
      ?>

      </p>
      </div>
    </div>
  </div>
  <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-white">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Feature</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Collection</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About US</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
      <div class="navbar-nav">
        <li class="nav-item border round-circle mx-2 basket-icon">
          <i class="fas fa-shopping-basket p-2">

          </i>
        </li>
      </div>
    </nav>
  </div>
</header>