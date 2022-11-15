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
    <?php require_once "./components/boot.php"; ?>
    <style type="text/css">
    fieldset {
        margin: auto;
        margin-top: 100px;
        width: 60%;
    }

    .img-thumbnail {
        width: 70px !important;
        height: 70px !important;
    }
    </style>

</head>

<body>
    <fieldset>
        <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='./pictures/<?= $image_url ?>'
                alt=""></legend>
        <form action="actions/a_update.php" method="post" enctype="multipart/form-data">
            <table class="table">



            <tr>
                    <th>Image</th>
                    <td><input class="form-control" type="text" name="image_url" placeholder="Image URL"
                            value="<?= $image_url ?>" /></td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td><input class="form-control" type="text" name="title" step="any" placeholder="Title"
                            value="<?= $title ?>" /></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><input class="form-control" type="text" name="description" placeholder="Description"
                            value="<?= $short_description ?>" /></td>
                </tr>

                <tr>
                    <th>ISBN</th>
                    <td><input class="form-control" type="number" name="ISBN" step="any" placeholder="ISBN"
                            value="<?= $ISBN ?>" /></td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td><input class="form-control" type="text" name="type" step="any" placeholder="Type"
                            value="<?= $type ?>" /></td>
                </tr>
                <tr>
                    <th>Author first name</th>
                    <td><input class="form-control" type="text" name="author_first_name" step="any" placeholder="Author first name"
                            value="<?= $author_first_name ?>" /></td>
                </tr>
                <tr>
                    <th>Author last name</th>
                    <td><input class="form-control" type="text" name="author_last_name" step="any" placeholder="Author last name"
                            value="<?= $author_last_name ?>" /></td>
                </tr>
                <tr>
                    <th>Publisher</th>
                    <td><input class="form-control" type="text" name="publisher" step="any" placeholder="Publisher"
                            value="<?= $publisher_name ?>" /></td>
                </tr>
                <tr>
                    <th>Publisher adr.</th>
                    <td><input class="form-control" type="text" name="publisher_address" step="any" placeholder="Publisher adr."
                            value="<?= $publisher_address ?>" /></td>
                </tr>
                <tr>
                    <th>Publish date</th>
                    <td><input class="form-control" type="date" name="publish_date" step="any" placeholder="Publish date"
                            value="<?= $publish_date ?>" /></td>
                </tr>
                <tr>
                    <th>Availability</th>
                    <td><input class="form-control" type="text" name="availability" step="any" placeholder="Availability"
                            value="<?= $availability ?>" /></td>
                </tr>


                <tr>
                    <input type="hidden" name="id" value="<?= $ISBN ?>" />

                    <input type="hidden" name="picture" value="<?= $image_url ?>" />
                    <td><button class="btn btn-success" type="submit">Save Changes</button></td>
                    <td><a href="index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>