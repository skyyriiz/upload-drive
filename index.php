<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" type="image/png" sizes="16x16" href="img/veepee.png">
    <link rel="ico" type="image/png" sizes="16x16" href="img/veepee.png">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>File Upload</title>
</head>
<body background="img/back.jpg">
    <div class="box">
        <div class="logo">
            <img src="img/logo.png">
        </div>

        <div class="top">
            <p class="title">PHP Google Drive Api</p>
            <a class="link" href="submit.php?list_files_and_folders=1">Click here to list all files and folders</a>
        </div>

        <div class="box1">
            <p class="title">File Upload</p>
            <form action="submit.php" method="post" enctype="multipart/form-data" >
                <p>Pick your file</p>
                <div class="form-group">
                    <input class="form-control-file" type="file" name="file" accept="image/*">
                </div>
                <div class="form-group">
                    <input class="sub form-control" type="submit" name="submit" value="Submit"></input>
                </div>
            </form>
        </div>
    </div>
</body>
</html> 