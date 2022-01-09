<?php 

require_once "./src/views/commons/message.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang thông tin người hiến máu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .table{
            border: solid;
        }
    </style>

</head>

<body>
    <div class="container text-center">
        <h1>Chương trình dự án về BĐKH, Trung tâm KTTV quốc gia</h1>
    <a href="index.php?controller=manage&action=add" class="btn-success btn">
    Thêm mới dự án
</a>
<table class="table mt-3 ">
    <thead>
    <tr>
        <th>Mã dự án</th>
        <th>Tên dự án</th>
        <th>Năm thực hiện</th>
        <th>Lĩnh vực</th>
        <th>Nhiệm vụ</th>
        <th>Cơ quan thực hiện</th>
        <th></th>
    </tr>
    </thead>

    <tbody>
    <?php if (!empty($bloods)): ?>
        <?php foreach ($bloods AS $blood) : ?>
            <tr>
                <td><?php echo $blood['maduan'] ?></td>
                <td><?php echo $blood['tenduan'] ?></td>
                <td><?php echo $blood['namthuchien'] ?></td>
                <td><?php echo $blood['linhvuc'] ?></td>
                <td><?php echo $blood['nhiemvu'] ?></td>
                <td><?php echo $blood['coquanthuchien'] ?></td>
              
                <td>
                    <?php
                    //khai báo 3 url xem, sửa, xóa
                    $urlDetail =
                        "index.php?controller=manage&action=detail&id=" . $blood['maduan'];
                    $urlEdit =
                        "index.php?controller=manage&action=edit&id=" . $blood['maduan'];
                    $urlDelete =
                        "index.php?controller=manage&action=delete&id=" . $blood['maduan'];
                    ?>
                    <!-- <a class="btn btn-light" href="<?php echo $urlDetail?>">Chi tiết</a> &nbsp; -->
                    <a class="btn btn-warning" href="<?php echo $urlEdit?>">Edit</a> &nbsp;
                    <a class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')"
                       href="<?php echo $urlDelete?>">
                        Xóa
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="2">KHông có dữ liệu</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>