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

    $name = mysqli_real_escape_string($conn, $_POST['prodName']) ;
    $tags = mysqli_real_escape_string($conn, $_POST['tags']);
    $description = mysqli_real_escape_string($conn, $_POST['prodDesc']);

    echo $fileTmpName;
}
?>