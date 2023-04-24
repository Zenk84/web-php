<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Tên: <i>", $_POST['fullName'], '</i><br>';
    $gender = ($_POST['gender'] == 'f') ? 'Nữ' : 'Nam';
    echo "Giới tính: <i>{$gender}</i>";
    die;
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bai 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Họ và tên:</label>
                <input type="text" class="form-control" id="name" name="fullName" placeholder="Nguyễn Văn An">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Gender:</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="genderM" value="m" checked>
                    <label class="form-check-label" for="genderM">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="genderF" value="f">
                    <label class="form-check-label" for="genderF">Female</label>
                </div>
            </div>
            <div class="mb-3">
                <button type="submit">Send</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>