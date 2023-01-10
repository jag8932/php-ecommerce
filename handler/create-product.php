<?php
if (isset($_POST["submit"])) {
    include_once './database-handler.php';
    include_once './helper-functions.php';

    $file = $_FILES["file"];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    // Check file type
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $acceptedTypes = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $acceptedTypes)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                //gives the file a unique name so it doesn't conflict with files 
                // of the same name
                $uniqueName = uniqid('', true).".".$fileActualExt;
                $fileDestination = '../uploads/'.$uniqueName;
                move_uploaded_file($fileTmpName, $fileDestination);
                createProduct($fileDestination);
                header("Location: ../index.php?product-created");
            }
        } else {
            echo "There was an error uploading your file.";
        }
    } else {
        echo "Incorrect file type";
    }

    $name = mysqli_real_escape_string($conn, $_POST['prodName']) ;
    $tags = mysqli_real_escape_string($conn, $_POST['tags']);
    $description = mysqli_real_escape_string($conn, $_POST['prodDesc']);

    echo $fileTmpName;
}
?>