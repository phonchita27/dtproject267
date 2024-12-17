<link rel = "stylesheet" href = "style.css">
<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<h2 class = "p1">
    <i class="fa-solid fa-inbox"></i> เพิ่มข้อมูลห้องพัก </h2>
<div class = "content">
    <form action = "action.php" method = "post">
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
    include"dbcon.php";
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
            <input type="submit" class="btn btn-primary mb-3" name="bSubmitroom"></div>
    </form>
</div>