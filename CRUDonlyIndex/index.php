<?php
require_once "./actions/db_connect.php";

$sql = "SELECT * from media";
$result = mysqli_query($conn, $sql);
$tbody = "";
// var_dump_pretty($result);
// $row = mysqli_fetch_assoc($result);
// var_dump_pretty($row);#
if (mysqli_num_rows($result) > 0) {
    while ($row =  mysqli_fetch_assoc($result)) {
        $tbody .= "
<tr>
      
<td><img class='img-thumbnail' src='" . $row['image_url'] . "'</td>
           <td>" . $row['title'] . "</td>
           <td>" . $row['short_description'] . "</td>
           <td>" . $row['ISBN'] . "</td>
           <td>" . $row['type'] . "</td>
           <td>" . $row['author_first_name'] . "</td>
           <td>" . $row['author_last_name'] . "</td>
           <td>" . $row['publisher_name'] . "</td>
           <td>" . $row['publisher_address'] . "</td>
           <td>" . $row['publish_date'] . "</td>
           <td>" . $row['availability'] . "</td>

           <td><a href='update.php?ISBN=" . $row['ISBN'] . "'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
           <a href='delete.php?ISBN=" . $row['ISBN'] . "'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
           
            </tr>
";
    }
} else {
    $tbody = "<tr><td colspan='4' class='text-center'>No data available</td></tr>";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "components/boot.php";
    ?>
    <style type="text/css">
    .manageProduct {
        margin: auto;
    }

    .img-thumbnail {
        width: 70px !important;
        height: 70px !important;
    }

    td {
        text-align: left;
        vertical-align: middle;

    }

    tr {
        text-align: center;
    }
    </style>

    <title>CRUD</title>
</head>

<body>
    <div class="manageProduct w-75 mt-3">
        <div class='mb-3'>
            <a href="create.php"><button class='btn btn-primary' type="button">Add media</button></a>
        </div>
        <p class='h2'>Media</p>
        <table class='table table-striped'>
            <thead class='table-success'>
                <tr>
                    <th>Picture</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>ISBN</th>
                    <th>Type</th>
                    <th>Author name</th>
                    <th>Author name</th>
                    <th>Publisher</th>
                    <th>Publisher adr.</th>
                    <th>Publish date</th>
                    <th>Availability</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $tbody; ?>
            </tbody>
        </table>
    </div>

</body>

</html>