<?php
$con = mysqli_connect("localhost", "root", "" , "file");

if (isset($_POST['upload'])){
    $file = $_FILES['file']['name'];

    $err = array();

}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/boottrap/4.4.1/css/bootstrap/4.4.1/css/bootstrap.min.css">



</head>
<body>
    <div class="container">
        <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
            <h3 class="text-center">Upload A File</h3>
            <form class="my-5" method="post" enctype="multipart/form-data">
            <input type="file" name="file" class="form-control">
            <input type="submit" name="upload" value="UPLOAD" class="btn btn-success my-3"> 
</form>

            </div>

            <div class="col-md-6">
            <h3 class="text-center">Display A File</h3>



</div>
</div>
</div>
</div>
</body>
</html>