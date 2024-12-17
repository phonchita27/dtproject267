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
<div class="user-detail">
    <div class = "content">
    <h2>Insert User Data</h2>
    <p id="msg"></p>
    <form action = "action.php" id="userForm" method="POST">
        <div class = "mb-3">
          <label class="form-label">Full Name</label>
          <input type="text" class="form-control" placeholder="Enter Full Name" name="fullName" required></div>
        <div class = "mb-3">
          <label class="form-label">Email Address</label>
          <input type="email" class="form-control" placeholder="Enter Email Address" name="emailAddress" required></div>
        <div class = "mb-3">
          <label class="form-label">City</label>
          <input type="city" class="form-control" placeholder="Enter Full City" name="city" required></div>
        <div class = "mb-3">
          <label class="form-label">Country</label>
          <input type="text" class="form-control" placeholder="Enter Full Country" name="country" required> <br></div>
        <div class="col-auto" align = "center">
          <button type="submit" class="btn btn-success" name="submitAjax">Submit</button></div>
</div>
    </form>
        </div>
</div>

<h2 class="p1">
    <i class="fa-solid fa-caravan"></i> Show Data </h2>
<div class="content">
    <table class ="table table-striped table-bordered table-hover">
        <thead align="center">
            <th>ID</th>
            <th>FULLNAME</th>
            <th>EMAIL ADDRESS</th>
            <th>CITY</th>
            <th>COUNTRY</th>
            <th>DATETIME</th>
        </thead>
        <tbody>
<?php
    include"database.php"; //ติดต่อฐานข้อมูล
    $sql = "SELECT * FROM usertable";
    $query = $conn->query($sql);
    while($row = $query->fetch_object()){
?>
            <tr align="center">
                <td><?=$row->id?></td>
                <td><?=$row->fullName?></td>
                <td><?=$row->emailAddress?></td>
                <td><?=$row->city?></td>
                <td><?=$row->country?></td>
                <td><?=$row->created_at?></td>
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