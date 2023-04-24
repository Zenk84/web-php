<?php
echo "Tên: <i>", $_POST['fullName'], '</i><br>';
// $gender = ($_POST['gender'] == 'f') ? 'Nữ' : 'Nam';
// echo "Giới tính: <i>{$gender}</i>";
switch ($_POST['gender']) {
    case 'f':
        echo "Giới tính: <i>Nữ</i>";
        break;
    case 'm':
        echo "Giới tính: <i>Nam</i>";
        break;
}
