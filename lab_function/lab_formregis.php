<link rel = "stylesheet" href = "../style.css">
<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<h2 class = "p1">
    <i class="fa-solid fa-inbox"></i> หน้าจอเพิ่มข้อมูลผู้ใช้ </h2>
<div class = "content">
    <form action = "../action.php" method = "post">
        <div class = "mb-3">
            <label for="exampleFormControlInput1" class="form-label"> FIRSTNAME </label>
            <input class="form-control" type="text" name="tfirstname" placeholder="ระบุชื่อ..." aria-label="default input example" required></div>

        <div class = "mb-3">
            <label for="exampleFormControlInput1" class="form-label"> LASTNAME </label>
            <input class="form-control" type="text" name="tlastname" placeholder="ระบุนามสกุล..." aria-label="default input example" required></div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"> USERNAME </label>
            <input class="form-control" type="text" name="tusername" aria-label="default input example" placeholder="ระบุชื่อผู้ใช้..." required></div>

        <div class = "mb-3">
            <label class="form-label"> PASSWORD </label>
            <input class="form-control" type="password" name="tpassword" aria-label="default input example" placeholder="ระบุรหัสผ่าน..." required></div>
            
            <div align = "center">
            <input type="submit" class="btn btn-primary mb-3" name="submitFormregis" value="SUBMIT"></div>
            </select>
        </div>
    </form>
</div>
