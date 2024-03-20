</main>
<footer class="mt-5 shadow " style="background-color: #4954682b;">
        <div class="footer-big ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget">
                            <div class="footer-menu">
                                <h4 class="footer-widget-title fw-bold">Feature</h4>
                                <ul>
                                    <li>
                                        <a href="#">Holiday gift guide</a>
                                    </li>
                                    <li>
                                        <a href="#">Airforce</a>
                                    </li>
                                    <li>
                                        <a href="#">Jordan 1</a>
                                    </li>
                                    <li>
                                        <a href="#">Air max 2090</a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget">
                            <div class="footer-menu">
                                <h4 class="footer-widget-title">Shoes</h4>
                                <ul>
                                    <li>
                                        <a href="#">All shoes</a>
                                    </li>
                                    <li>
                                        <a href="#">Running shoes</a>
                                    </li>
                                    <li>
                                        <a href="#">Jordan shoes</a>
                                    </li>
                                    <li>
                                        <a href="#">Basketball shoes</a>
                                    </li>
                                 
                                </ul>
                            </div>
                        </div>

                    </div>
           
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget">
                            <div class="footer-menu">
                                <h4 class="footer-widget-title">Clothing</h4>
                                <ul>
                                    <li>
                                        <a href="#">All clothing</a>
                                    </li>
                                    <li>
                                        <a href="#">Top's & t'shirts</a>
                                    </li>
                                    <li>
                                        <a href="#">Shorts</a>
                                    </li>
                                    <li>
                                        <a href="#">Hoddie</a>
                                    </li>
                                  
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget">
                            <div class="footer-menu p-0">
                                <h4 class="footer-widget-title">Socer</h4>
                                <ul>
                                    <li>
                                        <a href="#">Infant & Toodler shoes</a>
                                    </li>
                                    <li>
                                        <a href="#">Kid's shoes</a>
                                    </li>
                                    <li>
                                        <a href="#">Kid's basketball shoes</a>
                                    </li>
                                    <li>
                                        <a href="#">Kid's running shoes</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
       
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="fs-5 text-center">
                        <p class="text-danger">© Coded by M rahman drubo 
                          <span class="text-black"> | All Rights Reserved By</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
    <!-- <script src="../assets/js/main.js" defer></script> -->

    <script src="https://kit.fontawesome.com/2f082401bf.js" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <?php
  

    $all_products = getAll('products');
 

    $m_products;
    foreach ($all_products as $product) {
        $m_products[] = [
            "id" => $product['id'],
            "name" => $product['name'],
            "price" => $product['price'],
            "image" => $product['image']
        ];
    }
    
// $products = [
//     ["id" => 1, "name" => "Nike Shoes", "price" => 512, "image" => "./Photos/image 5.png"],
//     ["id" =>2, "name" => "Microsoft 365", "price" =>512, "image"  => "./Photos/office-365.png"]
//     // More products...
// ];
?>

    <script>
    var products = <?php echo json_encode($m_products); ?>;
</script>
<script src="../assets/js/checkout.js"></script>
    <script src="../assets/js//cart.js"></script>
 


</body>
</html>