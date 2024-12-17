<link rel = "stylesheet" href = "style.css">
<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<h2 class = "p1">
    <i class="fa-solid fa-inbox"></i> ADDBOOK </h2>
<div class = "content">
    <form action = "action.php" method = "post">
        <div class = "mb-3">
            <label for="exampleFormControlInput1" class="form-label"> BOOKNAME </label>
            <input class="form-control" type="text" name="tbookname" placeholder="ระบุชื่อหนังสือ..." aria-label="default input example"></div>

        <div class = "mb-3">
            <label for="exampleFormControlInput1" class="form-label"> AUTHOR </label>
            <input class="form-control" type="text" name="tbookauthor" placeholder="ระบุชื่อผู้แต่ง..." aria-label="default input example"></div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"> PRICE </label>
            <input class="form-control" type="number" name="tbookprice" aria-label="default input example" value="0"></div>

        <div class = "mb-3">
            <label class="form-label"> STOCK </label>
            <input class="form-control" type="number" name="tbookstock" aria-label="default input example" value="0"></div>
            

        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label"> BOOKTYPEID </label>
        <select class = "form-control" name = "tbooktypeid">

<?php
    include"dbcon.php";
    $sql = "SELECT * FROM tbbooktype";
    $query = $conn->query($sql);
    while($row = $query->fetch_object()){
?>
                <option value="<?=$row->booktypeid?>">
                    <?=$row->booktypename?>
                </option>
<?php } ?>
            </select>
        </div>

        <div class="col-auto" align = "center">
            <input type="submit" class="btn btn-primary mb-3" name="bSubmitbook"></div>
    </form>
</div>