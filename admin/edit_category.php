<?php
include('includes/header.php');
include('../config/dbconn.php');
include('../functions/datbasequery.php');

// Get the ID of the category from the URL
$id = $_GET['id'];

// Get the current values of the category
$category = getOne('categories', $id);
$row = mysqli_fetch_assoc($category);
?>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h2>Edit Category</h2>
            </div>
            <div class="card-body">
                <form action="code.php" method="post" enctype="multipart/form-data">


                    <div class="row">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                        <div class="col-md-6">
                            <label for="name">Category Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="<?php echo $row['name']; ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="slug">Category Slug</label>
                            <input type="text" class="form-control" name="slug" id="slug" value="<?php echo $row['slug']; ?>">
                        </div>
                        <div class="col-md-12">
                            <label for="description">Category Description</label>
                            <textarea name="description" id="description" rows="3" class="form-control"><?php echo $row['description']; ?></textarea>

                        </div>
                        <div class="col-md-12">
                            <label for="image">Category Image</label>
                            <input type="file" class="form-control" name="image" id="image">
                            <label for="old_image">Current Image</label>
                            <input type="hidden" name="old_image" value="<?php echo $row['image']; ?>">
                            <img src="../uploads/<?php echo $row['image']; ?>" alt="">
                        </div>
                        <div class="col-md-6">
                            <label for="status">Category Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1" <?php if ($row['status'] == 1) echo 'selected'; ?>>Active</option>
                                <option value="0" <?php if ($row['status'] == 0) echo 'selected'; ?>>Inactive</option>
                            </select>

                        </div>
                        <div class="col-md-6">
                            <label for="popular">Popular</label>
                            <select name="popular" id="popular" class="form-control">
                                <option value="1" <?php if ($row['popular'] == 1) echo 'selected'; ?>>Yes</option>
                                <option value="0" <?php if ($row['popular'] == 0) echo 'selected'; ?>>No</option>
                            </select>

                        </div>
                        <div class="col-md-12">
                            <button type="submit" name="update_category" class="btn btn-primary mt-3">Update Category</button>

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