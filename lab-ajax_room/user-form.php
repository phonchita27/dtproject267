<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" href = "../style.css">
<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<!--====form section start====-->
<h2 class = "p1">
    <i class="fa-solid fa-inbox"></i> เพิ่มข้อมูลห้องพัก </h2>
<div class = "content">

<p id="msg"></p>

    <form id="userForm" method = "post">
        <div class = "mb-3">
            <label for="exampleFormControlInput1" class="form-label">ROOMNAME</label>
            <input class="form-control" type="text" name="troomname" placeholder="ระบุชื่อห้อง..." aria-label="default input example"></div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">DETAIL</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tdetail"></textarea></div>

        <div class = "mb-3">
            <label class="form-label">ROOMTYPE</label>
            <select class = "form-control" name = "troomtypeid">
<?php
    include"database.php";
    $sql = "SELECT * FROM tbroomtype";
    $query = $conn->query($sql);
    while($row = $query->fetch_object()){
?>
                <option value="<?=$row->roomtypeid?>">
                    <?=$row->roomtypename?></option>
<?php } ?>
            </select>
        </div>

        <div class="col-auto" align = "center">
        <button type="submit" class="btn btn-success" name="submitAjax">Submit</button></div>
    </form>
</div>

<h2 class = "p1">
    <i class="fa-solid fa-caravan"></i> ทดสอบดึงตาราง tbroom </h2>
<div class = "content">
    <table class ="table table-striped table-bordered">
        <thead align="center">
            <th>ROOMID</th>
            <th>ROOMNAME</th>
            <th>DETAIL</th>
            <th>ROOMTYPEID</th>
        </thead>
        <tbody>
<?php
    include"database.php"; //ติดต่อฐานข้อมูล
    $sql = "SELECT * FROM tbroom";
    $query = $conn->query($sql);
    while($row = $query->fetch_object()){
?>
            <tr align="center">
                <td><?=$row->roomid?></td>
                <td><?=$row->roomname?></td>
                <td align="left"><?=$row->detail?></td>
                <td><?=$row->roomtypeid?></td>
            </tr>
<?php
    }
?>
        </tbody>
    </table>

</div>
<!--====form section start====-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="ajax-script.js"></script>
</body>
</html>