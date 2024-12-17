<link rel = "stylesheet" href = "style.css">
<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

<link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<h2 class = "p1">
    <i class="fa-solid fa-house-chimney"></i> ความหมายของ CSS </h2>
<div class = "content">
CSS ย่อมาจาก Cascading Style Sheets คือภาษาที่ใช้อธิบายรูปร่างและลักษณะของ ไฟล์ HTML • Style Sheet คือไฟล์ที่เขียนด้วยภาษา CSS เพื่อให้ไฟล์ HTML อ้างอิงการกำหนดรูปร่าง และลักษณะ ซึ่งไฟล์นี้จะมีนามสกุลเป็น .css • ในการเรียกใช้ไฟล์ .css ใน HTML เราจะเพิ่มแท็ก <link> ระหว่างแท็ก <head></div>

<h2 class = "p1">
    <i class="fa-solid fa-list"></i> รูปการใช้งาน CSS </h2>
<div class = "content">การเขียน CSS มีหลายรูปแบบในการจัดการหลัก ๆ มีอยู่ 3 รูปแบบ ซึ่งในแต่ละรูปแบบก้จะมีจุดประส์ในการใช้งานที่แตกต่างกัน แต่ยังใช้ไวยากรณ์ของภาษา CSS ยังคงเดิม เพียงแค่รูปแบบการจัดวางที่แตกต่างกัน โดยทั้งทั้งหมด 3 รูปแบบ ดังนี้ Inline Style Sheet Internal Style Sheet External Style Sheet</div>

<h2 class = "p1">
    <i class="fa-solid fa-inbox"></i> การสร้างฟอร์ม (FORM) </h2>
<div class = "content">
    <form action = "action.php" method = "post">
        <div class = "mb-3">
            <label for="exampleFormControlInput1" class="form-label">Firstname</label>
            <input class="form-control" type="text" name="tfirstname" placeholder="Firstname" aria-label="default input example">

        <div class = "mb-3">
            <label for="exampleFormControlInput1" class="form-label">Lastname</label>
            <input class="form-control" type="text" placeholder="Lastname" aria-label="default input example" name="tlastname"><br>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="temail"></div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Address</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="taddress"></textarea></div>

        <div class="col-auto" align = "center">
            <button type="submit" class="btn btn-primary mb-3" name="bSubmitStudent"><i class="fa-solid fa-check"></i> บันทึกข้อมูล </button></div>
    </form>
</div>