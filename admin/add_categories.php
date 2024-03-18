<?php
include('includes/header.php');
?>
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Add Category</h2>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">

                            <div class="col-md-6">
                                <label for="name">Category Name</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="col-md-6">
                                <label for="slug">Category Slug</label>
                                <input type="text" class="form-control" name="slug" id="slug">
                            </div>
                            <div class="col-md-12">
                                <label for="description">Category Description</label>
                                <textarea name="description" id="description" rows="3" class="form-control"></textarea>

                            </div>
                            <div class="col-md-12">
                                <label for="image">Category Image</label>
                                <input type="file" class="form-control" name="image" id="image">
                            </div>
                            <div class="col-md-6">
                                <label for="status">Category Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>

                            </div>
                            <div class="col-md-6">
                                <label for="popular">Popular</label>
                                <select name="popular" id="popular" class="form-control">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>

                            </div>
                            <div class="col-md-12">
                                <button type="submit" name="add_category" class="btn btn-primary mt-3">Add Category</button>

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