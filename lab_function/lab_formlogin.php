<link rel = "stylesheet" href = "../style.css">
<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<div class = "content col-4 m-auto">
<div><h2 class = "text-center">USER LOGIN </h2></div>
    <form action = "../action.php" method = "post">
        <div class = "mb-3">
            <label class="form-label"> USERNAME </label>
            <input class="form-control form-control-lg" type="text" name="tusername" placeholder="ระบุชื่อผู้ใช้..." required></div>

        <div class = "mb-3">
            <label class="form-label"> PASSWORD </label>
            <input class="form-control form-control-lg" type="password" name="tpassword" placeholder="ระบุรหัสผ่าน..." required></div>
            
            <div align = "center">
            <input type="submit" class="btn btn-primary mb-3" name="bLogin" value="LOGIN"></div>
        </div>
    </form>
</div>
