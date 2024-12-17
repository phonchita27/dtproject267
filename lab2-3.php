<link rel = "stylesheet" href = "style.css">
<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<h2 class = "p1">
    <i class="fa-solid fa-list"></i> การดึงข้อมูลจากตารางมากกว่า 1 ตาราง (join table) </h2>
<div class = "content">   </div>

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
    include"dbcon.php"; //ติดต่อฐานข้อมูล
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

    <div>
        <a href = "lab2-4.php">
            <botton class = "btn btn-primary"> 
            <i class="fa-solid fa-plus"></i>  ADD ROOM </botton>
</a></div>

</div>

<h2 class = "p1">
    <i class="fa-solid fa-house-flag"></i> ทดสอบดึงตาราง tbroomtype </h2>
<div class = "content">
    <table class ="table table-striped table-bordered">
        <thead align="center">
            <th>ROOMTYPEID</th>
            <th>ROOMTYPENAME</th>
            <th>PRICE</th>
        </thead>
        <tbody>
<?php
    include"dbcon.php"; //ติดต่อฐานข้อมูล
    $sql = "SELECT * FROM tbroomtype";
    $query = $conn->query($sql);
    while($row = $query->fetch_object()){
?>
            <tr align="center">
                <td><?=$row->roomtypeid?></td>
                <td align="left"><?=$row->roomtypename?></td>
                <td><?=$row->price?></td>
            </tr>
<?php
    }
?>
        </tbody>
    </table>
</div>

<h2 class = "p1">
    <i class="fa-solid fa-igloo"></i> ทดสอบดึงตารางมากกว่า 1 ตาราง </h2>
<div class = "content">
    <table class ="table table-striped table-bordered">
        <thead align="center">
            <th>ROOMNAME</th>
            <th>ROOMTYPENAME</th>
            <th>PRICE</th>
        </thead>
        <tbody>
<?php
    include"dbcon.php"; //ติดต่อฐานข้อมูล
    $sql = "SELECT * FROM tbroom INNER JOIN tbroomtype ON tbroom.roomtypeid = tbroomtype.roomtypeid";
    $query = $conn->query($sql);
    while($row = $query->fetch_object()){
?>
            <tr align="center">
                <td><?=$row->roomname?></td>
                <td><?=$row->roomtypename?></td>
                <td><?=$row->price?></td>
            </tr>
<?php
    }
?>
        </tbody>
    </table>
</div>

<h2 class = "p1">
    <i class="fa-solid fa-book"></i> TBBOOK </h2>
<div class = "content">
    <table class ="table table-striped table-bordered">
        <thead align="center">
            <th>BOOKID</th>
            <th>BOOKNAME</th>
            <th>AUTHOR</th>
            <th>PRICE</th>
            <th>STOCK</th>
            <th>BOOKTYPE</th>
        </thead>
        <tbody>
<?php
    include"dbcon.php"; //ติดต่อฐานข้อมูล
    $sql = "SELECT * FROM tbbook";
    $query = $conn->query($sql);
    while($row = $query->fetch_object()){
?>

<?php
    include"dbcon.php"; //ติดต่อฐานข้อมูล
    $sql = "SELECT * FROM tbbook INNER JOIN tbbooktype ON tbbook.booktypeid = tbbooktype.booktypeid";
    $query = $conn->query($sql);
    while($row = $query->fetch_object()){
?>
            <tr align="center">
                <td><?=$row->bookid?></td>
                <td align = "left"><?=$row->bookname?></td>
                <td><?=$row->author?></td>
                <td><?=$row->price?></td>
                <td><?=$row->stock?></td>
                <td><?=$row->booktypeid?></td>
            </tr>
<?php
    }
}
?>
        </tbody>
    </table>

    <div>
        <a href = "lab3-1.php">
            <botton class = "btn btn-primary"> 
            <i class="fa-solid fa-plus"></i>  ADD BOOK </botton>
</a></div>

</div>

<h2 class = "p1">
    <i class="fa-solid fa-book"></i> TBBOOKTYPE </h2>
<div class = "content">
    <table class ="table table-striped table-bordered">
        <thead align="center">
            <th>BOOKTYPEID</th>
            <th>BOOKTYPENAME</th>
        </thead>
        <tbody>
<?php
    include"dbcon.php"; //ติดต่อฐานข้อมูล
    $sql = "SELECT * FROM tbbooktype";
    $query = $conn->query($sql);
    while($row = $query->fetch_object()){
?>
            <tr align="center">
                <td><?=$row->booktypeid?></td>
                <td align = "left"><?=$row->booktypename?></td>
            </tr>
<?php
    }
?>
        </tbody>
    </table>

    <div>
        <a href = "lab3-2.php">
            <botton class = "btn btn-primary"> 
            <i class="fa-solid fa-plus"></i>  ADD BOOKTYPE </botton>
</a></div>

</div>