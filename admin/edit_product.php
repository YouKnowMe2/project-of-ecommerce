<?php
include('includes/header.php');
include('../config/dbconn.php');
include('../functions/datbasequery.php');

// Get the ID of the category from the URL
$id = $_GET['id'];

// Get the current values of the category
$product = getOne('products', $id);
$row = mysqli_fetch_assoc($product);
?>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h2>Edit Product</h2>
            </div>
            <div class="card-body">
                <form action="code.php" method="post" enctype="multipart/form-data">


                    <div class="row">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                        <div class="col-md-6">
                            <label for="name">Product Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="<?php echo $row['name']; ?>">
                        </div>
                        <div class="col-md-12">
                            <label for="description">Product Description</label>
                            <textarea name="description" id="description" rows="3" class="form-control"><?php echo $row['description']; ?></textarea>

                        </div>
                        <div class="col-md-12">
                            <label for="image">Product Image</label>
                            <input type="file" class="form-control" name="image" id="image">
                            <label for="old_image">Current Image</label>
                            <input type="hidden" name="old_image" value="<?php echo $row['image']; ?>">
                            <img src="../uploads/<?php echo $row['image']; ?>" alt="">
                        </div>
                        <div class="col-md-12">
                            <label for="apk_file">APK File</label>
                            <input type="file" class="form-control" name="apk_file" id="apk_file">
                            <label for="old_apk">Current APK File: <?php echo $row['apk_file']; ?></label>
                            <input type="hidden" name="old_apk" value="<?php echo $row['apk_file']; ?>">
                         
                        </div>
                        <div class="col-md-12">
                            <button type="submit" name="update_product" class="btn btn-primary mt-3">Update Category</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
?>