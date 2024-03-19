<?php
session_start();
include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>


<?php
if (isset($_SESSION['message'])) { ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">

        <?php echo $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
    unset($_SESSION['message']);
}

?>



<!-- navbar -->


<!-- banner -->

<div class="card mb-3 container border-0 py-5 mt-5 bg-transparent">
    <div class="row g-0 justify-content-between  align-items-center">
        <div class="col-md-5">
            <img src="./Photos/office-365.png" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <h5 class="card-title text-danger fw-bold ls-1 fs-1">OFFICE 365</h5>
                <h5 class="card-title ls-1  fw-bold fs-1">GET ALL THE OFFICE</h5>
                <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur
                    quae quam
                    autem beatae quos nemo alias nam deleniti vitae officia.</p>

                <button type="button" class="btn btn-primary"><i class="fa-solid fa-cart-shopping me-2"></i>Buy
                    Now</button>
            </div>
        </div>
    </div>
</div>


<!-- service -->

<div class="card container border-0 bg-transparent mt-5">
    <div class="row g-0 justify-content-between align-items-center">

        <div class="col-md-5  ">
            <div class="card  border-0 rounded-0">
                <div class="row g-0 p-2 align-items-center justify-content-between">
                    <div class="col-md-4 text-center">
                        <img src="./Logo/image 12.png" class="img-thumbnail border-0 rounded-start" style="width: 80px;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title font-bold text-md-start text-center ">Find The Perfect Fit</h5>
                            <p class="card-text text-muted fs-6 text-md-start text-center">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, vero.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-4 border-0 rounded-0">
                <div class="row g-0 p-4 align-items-center justify-content-between ">
                    <div class="col-md-4 text-center">
                        <img src="./Logo/image 13.png" class="img-thumbnail border-0 rounded-start" style="width: 80px;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title font-bold text-md-start text-center">Free Exchange</h5>
                            <p class="card-text text-muted fs-6 text-md-start text-center">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, vero.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-4 border-0 rounded-0">
                <div class="row g-0 p-4 align-items-center justify-content-between">
                    <div class="col-md-4 text-center">
                        <img src="./Logo/image 14.png" class="img-thumbnail border-0 rounded-start" style="width: 80px;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title font-bold text-md-start text-center">Contact Our Seller</h5>
                            <p class="card-text text-muted fs-6 text-md-start text-center">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, vero.
                            </p>

                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="col-md-6">
            <img src="./Logo/XMLID 2.png" class="img-fluid rounded-start">
        </div>
    </div>
</div>

<!-- casual shoes -->


<div class="container mt-5 py-5">
    <h1 class="text-uppercase fw-bold mt-5">SOFTWARE LIST</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
        <div class="col ">
            <div class="card h-100 p-3 border-0 shadow-lg item">
                <img src="./Photos/photohsop.jpg" class="img-thumbnail " alt="card example" style="background-color: rgba(128, 128, 128, 0.155); height: 400px;" />
                <div class="card-body justify-content-between d-flex flex-column">
                    <h2 class="card-title fw-bold">Nike Shoes</h2>
                    <p class="card-text text-muted text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Eligendi, reiciendis!</p>
                    <div class="price d-flex flex-lg-row flex-md-column flex-row  justify-content-between align-items-lg-center  mt-4">
                        <h4 class="card-title fw-bold text-danger">$ 512</h4>
                        <button type="button" onclick="addCart(1)" class="btn btn-primary"><i class="fa-solid fa-cart-shopping me-2"></i>Add To Cart
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <div class="col ">
            <div class="card h-100 p-3 border-0 shadow-lg">
                <img src="./Photos/figma.png" class="img-thumbnail " alt="card example" style="background-color: rgba(128, 128, 128, 0.155); height: 400px;" />
                <div class="card-body justify-content-between d-flex flex-column">
                    <h5 class="card-title fw-bold">Figma</h5>
                    <p class="card-text text-muted text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Eligendi, reiciendis!</p>
                    <div class="d-flex flex-lg-row flex-md-column flex-row  justify-content-between align-items-lg-center  mt-4">
                        <h4 class="card-title fw-bold text-danger">$ 1441</h4>
                        <button type="button" class="btn btn-primary"><i class="fa-solid fa-cart-shopping me-2"></i>Buy
                            Now</button>
                    </div>
                </div>
            </div>

        </div>
        <div class="col ">
            <div class="card h-100 p-3 border-0 shadow-lg">
                <img src="./Photos/vscode.png" class="img-thumbnail" alt="card example" style="background-color: rgba(128, 128, 128, 0.155); height: 400px;" />
                <div class="card-body justify-content-between d-flex flex-column">
                    <h5 class="card-title fw-bold">VS CODE</h5>
                    <p class="card-text text-muted text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Eligendi, reiciendis!</p>
                    <div class="d-flex flex-lg-row flex-md-column flex-row  justify-content-between align-items-lg-center  mt-4">
                        <h4 class="card-title fw-bold text-danger">$ 7025</h4>
                        <button type="button" class="btn btn-primary"><i class="fa-solid fa-cart-shopping me-2"></i>Buy
                            Now</button>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>


<!-- Formal shoes -->

<div class="container ">
    <h1 class="text-uppercase fw-bold mt-5">Popular Software</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
        <div class="col ">
            <div class="card h-100 p-3 border-0 shadow-lg">
                <img src="./Photos/office-365.png" class="img-thumbnail border-0" alt="card example" style=" height: 400px;" />
                <div class="card-body justify-content-between d-flex flex-column ">
                    <h5 class="card-title fw-bold">Microsoft 365</h5>
                    <p class="card-text text-muted text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Eligendi, reiciendis!</p>
                    <div class="d-flex flex-lg-row flex-md-column flex-row  justify-content-between align-items-lg-center  mt-4">
                        <h4 class="card-title fw-bold text-danger">$ 6125</h4>
                        <button type="button" class="btn btn-primary"><i class="fa-solid fa-cart-shopping me-2"></i>Buy
                            Now</button>
                    </div>
                </div>
            </div>

        </div>
        <div class="col ">
            <div class="card h-100 p-3 border-0 shadow-lg">
                <img src="./Photos/figma.png" class="img-thumbnail border-0" alt="card example" style=" height: 400px;" />
                <div class="card-body justify-content-between d-flex flex-column">
                    <h5 class="card-title fw-bold">Figma/h5>
                    <p class="card-text text-muted text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Eligendi, reiciendis!</p>
                    <div class="d-flex flex-lg-row flex-md-column flex-row  justify-content-between align-items-lg-center  mt-4">
                        <h4 class="card-title fw-bold text-danger">$ 8591</h4>
                        <button type="button" class="btn btn-primary"><i class="fa-solid fa-cart-shopping me-2"></i>Buy
                            Now</button>
                    </div>
                </div>
            </div>

        </div>
        <div class="col ">
            <div class="card h-100 p-3 border-0 shadow-lg">
                <img src="./Photos/photohsop.jpg" class="img-thumbnail border-0" alt="card example" style="height: 400px;" />
                <div class="card-body justify-content-between d-flex flex-column">
                    <h5 class="card-title fw-bold">Adobe photohsop</h5>
                    <p class="card-text text-muted text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Eligendi, reiciendis!</p>
                    <div class="d-flex flex-lg-row flex-md-column flex-row  justify-content-between align-items-lg-center  mt-4">
                        <h4 class="card-title fw-bold text-danger">$ 17025</h4>
                        <button type="button" class="btn btn-primary"><i class="fa-solid fa-cart-shopping me-2"></i>Buy
                            Now</button>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>


<!-- newsletter -->

<div class="container " style="margin-top: 150px;">
    <div class="rounded shadow-lg  p-5 bg-white">
        <h1 class="text-capitalize text-center fw-bold mb-5">Subscribe to our newsletter</h1>
        <div class="input-group mb-3 ">
            <input type="text" class="form-control form-control-lg " placeholder="Enter your email " aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-primary  btn-lg" type="button" id="button-addon2">Subscribe</button>
        </div>
    </div>
</div>


<!-- footer -->







<?php include 'includes/footer.php'; ?>