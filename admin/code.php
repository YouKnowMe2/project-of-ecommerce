<?php
include '../config/dbconn.php';

if (isset($_POST['add_category'])) {
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $popular = $_POST['popular'];

    $image = $_FILES['image']['name'];
    $path = "../uploads";

    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time() . '.' . $image_ext;

    $cate_query = "INSERT INTO categories (name, slug, description, image, status, popular) VALUES ('$name', '$slug', '$description', '$filename', '$status', '$popular')";
    $cate_query_run = mysqli_query($con, $cate_query);

    if ($cate_query_run) {
        move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $filename);
        $_SESSION['message'] = "Category added successfully";
        header('Location: categories.php');
        exit();
    } else {
        $_SESSION['message'] = "Category not added";
        header('Location: categories.php');
        exit();
    }
}

if (isset($_POST['update_category'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $popular = $_POST['popular'];

    $new_image = $_FILES['image']['name'];

    $old_image = $_POST['old_image'];

    if ($new_image != '') {
        $path = "../uploads";

        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $filename = time() . '.' . $image_ext;

        $update_filename = $filename;
    } else {
        $update_filename = $old_image;
    }


    $cate_query = "UPDATE categories SET name = '$name', slug = '$slug', description = '$description', image = '$update_filename', status = '$status', popular = '$popular' WHERE id = $id";
    $cate_query_run = mysqli_query($con, $cate_query);

    if ($cate_query_run) {

        if ($new_image != '') {
            move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $filename);
            if (file_exists(("../uploads/" . $old_image))) {
                unlink("../uploads/" . $old_image);
            }
        }
        $_SESSION['message'] = "Category updated successfully";
        header('Location: categories.php');
        exit();
    } else {
        $_SESSION['message'] = "Category not updated";
        header('Location: categories.php');
        exit();
    }
}
if (isset($_GET['delete_category'])) {
    $id = $_GET['delete_category'];

    // Get the image filename from the database
    $query = "SELECT image FROM categories WHERE id = $id";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    $image = $row['image'];

    // Delete the category from the database
    $delete_query = "DELETE FROM categories WHERE id = $id";
    $delete_query_run = mysqli_query($con, $delete_query);

    if ($delete_query_run) {
        // Delete the image file
        $path = "../uploads";
        unlink($path . '/' . $image);

        $_SESSION['message'] = "Category deleted successfully";
        header('Location: categories.php');
        exit();
    } else {
        $_SESSION['message'] = "Category not deleted";
        header('Location: categories.php');
        exit();
    }
}