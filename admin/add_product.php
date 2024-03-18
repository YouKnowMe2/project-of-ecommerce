<?php
include('includes/header.php');
include('../functions/datbasequery.php');
?>
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Add Product</h2>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">

                            <div class="col-md-6">
                                <label for="name">Product Name</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="col-md-6">
                                <label for="slug">Proudct Category</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value="">Select Category</option>
                                    <?php
                                    $categories =  getAll('categories');
                                    if (mysqli_num_rows($categories) > 0) {
                                        while ($row = mysqli_fetch_assoc($categories)) {
                                    ?>
                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                    <?php
                                        }
                                    } else {
                                        echo "No record found";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="description">Product Description</label>
                                <textarea name="description" id="description" rows="3" class="form-control"></textarea>

                            </div>
                            <div class="col-md-12">
                                <label for="image">Product Image</label>
                                <input type="file" class="form-control" name="image" id="image">
                            </div>
                            <div class="col-md-6">
                                <label for="price">Product Price</label>
                                <input type="text" class="form-control" name="price" id="price">
                            </div>

                            <div class="col-md-12">
                                <label for="apk">APK File</label>
                                <input type="file" class="form-control" name="apk" id="apk" accept=".apk">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" name="add_product" class="btn btn-primary mt-3">Add Product</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');
?>