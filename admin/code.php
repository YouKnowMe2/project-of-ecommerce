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


if (isset($_POST['add_product'])) {
    $product_name = $_POST['name'];
    $category_id = $_POST['category_id'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $timestamp = time();

    $image_ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    $image = $timestamp . '.' . $image_ext;

    $apk_ext = pathinfo($_FILES['apk']['name'], PATHINFO_EXTENSION);
    $apk = $timestamp . '.' . $apk_ext;
    
    $path = "../uploads";
    
    // Move the uploaded files to the uploads directory
    move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $image);
    move_uploaded_file($_FILES['apk']['tmp_name'], $path . '/' . $apk);

    // Insert the product data into the database
    $query = "INSERT INTO products (name,category_id, description, price, image, apk_file) VALUES ('$product_name','$category_id', '$description', '$price', '$image', '$apk')";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Product added successfully";
        header('Location: products.php');
        exit();
    } else {
        $_SESSION['message'] = "Product not added";
        header('Location: products.php');
        exit();
    }
}



if (isset($_POST['update_product'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];

    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];

    $new_apk = $_FILES['apk_file']['name'];
    $old_apk = $_POST['old_apk'];

    if ($new_image != '') {
        $path = "../uploads";

        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $filename = time() . '.' . $image_ext;

        $update_image_filename = $filename;
    } else {
        $update_image_filename = $old_image;
    }

    if ($new_apk != '') {
        $path = "../uploads";

        $apk_ext = pathinfo($new_apk, PATHINFO_EXTENSION);
        $filename = time() . '.' . $apk_ext;

        $update_apk_filename = $filename;
    } else {
        $update_apk_filename = $old_apk;
    }

    $product_query = "UPDATE products SET name = '$name', description = '$description', image = '$update_image_filename', apk_file = '$update_apk_filename' WHERE id = $id";
    $product_query_run = mysqli_query($con, $product_query);

    if ($product_query_run) {

        if ($new_image != '') {
            move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $update_image_filename);
            if (file_exists(("../uploads/" . $old_image))) {
                unlink("../uploads/" . $old_image);
            }
        }

        if ($new_apk != '') {
            move_uploaded_file($_FILES['apk_file']['tmp_name'], $path . '/' . $update_apk_filename);
            if (file_exists(("../uploads/" . $old_apk))) {
                unlink("../uploads/" . $old_apk);
            }
        }

        $_SESSION['message'] = "Product updated successfully";
        header('Location: products.php');
        exit();
    } else {
        $_SESSION['message'] = "Product not updated";
        header('Location: products.php');
        exit();
    }
}


if (isset($_GET['delete_product'])) {
    $id = $_GET['delete_product'];


    // Get the product data from the database
    $query = "SELECT image, apk_file FROM products WHERE id = $id";
    $query_run = mysqli_query($con, $query);
    $product = mysqli_fetch_assoc($query_run);
    

    // Delete the product from the database
    $query = "DELETE FROM products WHERE id = $id";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        // Unlink the image and APK files
        if (file_exists("../uploads/" . $product['image'])) {
            unlink("../uploads/" . $product['image']);
        }
        if (file_exists("../uploads/" . $product['apk_file'])) {
            unlink("../uploads/" . $product['apk_file']);
        }

        $_SESSION['message'] = "Product deleted successfully";
        header('Location: products.php');
        exit();
    } else {
        $_SESSION['message'] = "Product not deleted";
        header('Location: products.php');
        exit();
    }
}