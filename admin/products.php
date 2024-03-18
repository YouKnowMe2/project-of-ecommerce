<?php
include('includes/header.php');
include('../config/dbconn.php');
include('../functions/datbasequery.php');
?>
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h2>Products</h2>
            </div>
            <div class="card-body">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>APK</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $products =  getAll('products');   

                        if (mysqli_num_rows($products) > 0) {
                            while ($row = mysqli_fetch_assoc($products)) {
                        ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['description']; ?></td>
                                    <td><img src="../uploads/<?php echo $row['image']; ?>" width="100px" height="100px" alt=""></td>
                                    <td><a href="../uploads/<?php echo $row['apk_file']; ?>" download>Download</a></td>
                                    <td><?php echo $row['price']; ?></td>
                                    <td>
                                        <a href="edit_product.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                                        <a href="code.php?delete_product=<?php echo $row['id']; ?>" class="btn btn-danger" name="delete_product" type="submit">Delete</a>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "No record found";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
?>