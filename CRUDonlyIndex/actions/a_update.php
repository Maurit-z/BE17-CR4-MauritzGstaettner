<?php
require_once "./db_connect.php";
require_once "./file_upload.php";
if ($_POST) {

    $image_url = $_POST['image_url'];
    $title = $_POST['title'];
    $short_description = $_POST['short_description'];
    $ISBN = $_POST['ISBN'];
    $type = $_POST['type'];
    $author_first_name = $_POST['author_first_name'];
    $author_last_name = $_POST['author_last_name'];
    $publisher_name = $_POST['publisher_name'];
    $publisher_address = $_POST['publisher_address'];
    $publish_date = $_POST['publish_date'];
    $availability = $_POST['availability'];
    $uploadError = '';
    if ($image_url->error === 0) {
        ($_POST['image_url'] == "product.png" ?: unlink("../pictures/$_POST[picture]"));
        $sql = "UPDATE media SET title='$title', ISBN=$ISBN, picture='$image_url' WHERE ISBN = $ISBN";
    } else {
        $sql = "UPDATE media SET title='$title', ISBN=$ISBN WHERE ISBN = $ISBN";
    }
    if (mysqli_query($conn, $sql)) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($image_url->error != 0) ? $image_url->ErrorMessage : '';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
        $uploadError = ($image_url->error != 0) ? $image_url->ErrorMessage : '';
    }
} else {
    header("location: ../error.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "../components/boot.php"; ?>
    <title>CRUD</title>
</head>

<body>
    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Update request response</h1>
        </div>
        <div class="alert alert-<?php echo $class; ?>" role="alert">
            <p><?php echo $message; ?></p>
            <p><?php echo $uploadError; ?></p>
            <a href='../update.php?ISBN=<?= $ISBN ?>'><button class="btn btn-warning" type='button'>Back</button></a>
            <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
        </div>
    </div>

</body>

</html>