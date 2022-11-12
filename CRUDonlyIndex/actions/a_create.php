<?php
require_once "./db_connect.php";
require_once "./file_upload.php";

if ($_POST) {
    
    // $image_url = file_upload($_FILES['image_url']);
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
    // var_dump_pretty($_FILES['picture']);
    // echo "<br>";
    // var_dump_pretty($picture);
    $uploadError = '';
    $sql = "INSERT into media (image_url, title, short_description, ISBN, type, 
    author_first_name, author_last_name, publisher_name, publisher_address, 
    publish_date, availability) VALUES ('$image_url', '$title', '$short_description', '$ISBN', '$type', '$author_first_name', '$author_last_name', '$publisher_name','$publisher_address', '$publish_date', '$availability')";
    if (mysqli_query($conn, $sql)) {
        $class = "success";
        $message = "The entry below was successfully created <br>
    <table class='table w-50'><tr>
    <td>$image_url</td>
    <td>$title </td>
    <td>$short_description</td>
    <td>$ISBN</td>
    <td>$type</td>
    <td>$author_first_name</td>
    <td>$author_last_name</td>
    <td>$publisher_name</td>
    <td>$publisher_address</td>
    <td>$publish_date</td>
    <td>$availability</td>

    </tr></table><hr>";
        $uploadError = ($image_url->error != 0) ? $image_url->ErrorMessage : '';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $conn->error;
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
    <title>CRUD</title>
    <?php require_once "../components/boot.php"; ?>
</head>

<body>
    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Create request response</h1>
        </div>
        <div class="alert alert-<?= $class; ?>" role="alert">
            <p><?= $message; ?></p>
            <p><?= $uploadError; ?></p>
            <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
        </div>
    </div>

</body>

</html>