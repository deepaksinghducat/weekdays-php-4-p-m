<!-- $_GET 

$_POST

$_FILES -->

<?php

define("HOST", "localhost");
define("DB", "crud");
define("USERNAME", "root");
define("PASSWORD", "");

$connection = new PDO("mysql:host=localhost;dbname=crud", USERNAME, PASSWORD );

if(isset($_GET['submit'])) {
    
    $name = $_GET['name'];

    $sql = "INSERT INTO students(name) values('$name')";
    $query = $connection->exec($sql);
    if($query) {
        echo "inserted successfully";
    }else {
        echo "something went wrong";
    }
}

if(isset($_POST['submit'])) {

    $student_name  = $_POST['name'];

    $image_path = '';

    if(isset($_FILES['image'])) {
        $name = $_FILES['image']['name'];

        $dir = 'uploads/'. $name;

        $tmp_name = $_FILES['image']['tmp_name'];

        $extension =  pathinfo($name, PATHINFO_EXTENSION);

        // $mimeType = ['png', 'jpeg'];

        // if(! in_array($extension, $mimeType)) {
        //     echo "Please enter the valid file with extension png or jpeg";
        // }

        if($_FILES['image']['error'] == UPLOAD_ERR_NO_FILE ) {
            echo "Please upload image file";
        }

        // if($_FILES['image']['size'] >  200) {
        //     echo "<br> Please upload image file with size less than 200";
        // }

        move_uploaded_file($tmp_name, $dir);

        $image_path = $dir;
    }


    $sql = "INSERT INTO students(name,file) values('$name', '$image_path')";
    $query = $connection->exec($sql);
    if($query) {
        echo "inserted successfully";
    }else {
        echo "something went wrong";
    }
}

$sql = "select * from students";

$stmt = $connection->prepare($sql);

$query = $stmt->execute();

$students = [];

if($query) {
    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>

        <div>
            <label for="image">Image</label>
            <input type="file" name="image" id="image" multiple>
        </div>

        <input type="submit" value="Submit" name="submit">
    </form>

    <table>
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Image</th>
        </thead>
        <tbody>
            <?php foreach ($students as $key => $value): ?>
                <tr>
                    <td><?=$value['id']?></td>
                    <td><?=$value['name']?></td>
                    <td><img src="<?=$value['file']?>" alt="<?=$value['name']?>" ></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

