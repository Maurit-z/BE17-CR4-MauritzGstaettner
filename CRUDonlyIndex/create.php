<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <?php require_once "./components/boot.php" ?>
    <style>
    fieldset {
        margin: auto;
        margin-top: 100px;
        width: 60%;
    }
    </style>

</head>

<body>
    <fieldset>
        <legend class='h2'>Add Media</legend>
        <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
            <table class='table'>
                <tr>
                    <th>Picture</th>
                    <td><input class='form-control' type="text" name="image_url" placeholder="Image URL" /></td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td><input class='form-control' type="text" name="title" placeholder="Title" /></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><input class='form-control' type="text" name="short_description" placeholder="Description" /></td>
                </tr>
                <tr>
                    <th>ISBN</th>
                    <td><input class='form-control' type="text" name="ISBN" placeholder="ISBN" /></td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td><input class='form-control' type="text" name="type" placeholder="Type" /></td>
                </tr>
                <tr>
                    <th>Author first name</th>
                    <td><input class='form-control' type="text" name="author_first_name" placeholder="Author first name" /></td>
                </tr>
                <tr>
                    <th>Author last name</th>
                    <td><input class='form-control' type="text" name="author_last_name" placeholder="Author last name" step="any" /></td>
                </tr>
                <tr>
                    <th>Publisher</th>
                    <td><input class='form-control' type="text" name="publisher_name" placeholder="Publisher" step="any" /></td>
                </tr>
                <tr>
                    <th>Publisher address</th>
                    <td><input class='form-control' type="text" name="publisher_address" placeholder="Publisher address" step="any" /></td>
                </tr>
                <tr>
                    <th>Publish date</th>
                    <td><input class='form-control' type="text" name="publish_date" placeholder="Publish date" step="any" /></td>
                </tr>
                <tr>
                    <th>Availability</th>
                    <td><input class='form-control' type="text" name="availability" placeholder="Availability" step="any" /></td>
                </tr>


                




                
                
                <tr>
                    <td><button class='btn btn-success' type="submit">Insert Media</button></td>
                    <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                </tr>
            </table>
        </form>
    </fieldset>

</body>

</html>