<?php
include('includes/header.php');
include('../config/dbconn.php');
include('../functions/datbasequery.php');
?>
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h2>Categories</h2>
            </div>
            <div class="card-body">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Popular</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $categories =  getAll('categories');   

                        if (mysqli_num_rows($categories) > 0) {
                            while ($row = mysqli_fetch_assoc($categories)) {
                        ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['slug']; ?></td>
                                    <td><?php echo $row['description']; ?></td>
                                    <td><img src="../uploads/<?php echo $row['image']; ?>" width="100px" height="100px" alt=""></td>
                                    <td><?php echo $row['status']; ?></td>
                                    <td><?php echo $row['popular']; ?></td>
                                    <td>
                                        <a href="edit_category.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                                        <a href="code.php?delete_category=<?php echo $row['id']; ?>" class="btn btn-danger" name="delete_categroy" type="submit">Delete</a>
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