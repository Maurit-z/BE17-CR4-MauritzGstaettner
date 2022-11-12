<?php
require_once "./actions/db_connect.php";
if ($_GET['ISBN']) {
    $ISBN = $_GET['ISBN'];
    $sql = "SELECT * FROM media WHERE ISBN = $ISBN";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $image_url = $data['image_url'];
        $title = $data['title'];
        $short_description = $data['short_description'];
        $ISBN = $data['ISBN'];
        $type = $data['type'];
        $author_first_name = $data['author_first_name'];
        $author_last_name = $data['author_last_name'];
        $publisher_name = $data['publisher_name'];
        $publisher_address = $data['publisher_address'];
        $publish_date = $data['publish_date'];
        $availability = $data['availability'];

    } else {
        header("location: error.php");
    }
} else {
    header("location: error.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <?php require_once "components/boot.php"; ?>
    <style type="text/css">
    fieldset {
        margin: auto;
        margin-top: 100px;
        width: 70%;
    }

    .img-thumbnail {
        width: 70px !important;
        height: 70px !important;
    }
    </style>
</head>

<body>
    <fieldset>
        <legend class='h2 mb-3'>Delete request <img class='img-thumbnail rounded-circle'
                src='<?php echo $image_url ?>' alt="<?php echo $title ?>"></legend>
        <h5>You have selected the data below:</h5>
        <table class="table w-75 mt-3">
            <tr>
                <td><?= $title ?></td>
            </tr>
        </table>

        <h3 class="mb-4">Do you really want to delete this media?</h3>
        <form action="actions/a_delete.php" method="post">
            <input type="hidden" name="image_url" value="<?= $image_url ?>" />
            <input type="hidden" name="title" value="<?= $title ?>" />
            <input type="hidden" name="short_description" value="<?= $short_description ?>" />
            <input type="hidden" name="ISBN" value="<?= $ISBN ?>" />
            <input type="hidden" name="type" value="<?= $type ?>" />
            <input type="hidden" name="author_first_name" value="<?= $author_first_name ?>" />
            <input type="hidden" name="author_last_name" value="<?= $author_last_name ?>" />
            <input type="hidden" name="publisher_name" value="<?= $publisher_name ?>" />
            <input type="hidden" name="publisher_address" value="<?= $publisher_address ?>" />
            <input type="hidden" name="publish_date" value="<?= $publish_date ?>" />
            <input type="hidden" name="availability" value="<?= $availability ?>" />
            <button class="btn btn-danger" type="submit">Yes, delete it!</button>
            <a href="index.php"><button class="btn btn-warning" type="button">No, go back!</button></a>
        </form>
    </fieldset>

</body>

</html>