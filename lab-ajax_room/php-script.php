<?php

include('database.php');
$db=$conn;// database connection  

//legal input values
 $roomname = legal_input($_POST['troomname']);
 $detail = legal_input($_POST['tdetail']);
 $roomtypeid = legal_input($_POST['troomtypeid']);

 //$created_at = date("Y-m-d H:i:s");
 //
   
if(!empty($roomname) && !empty($detail) && !empty($roomtypeid)) {
    //  Sql Query to insert user data into database table
    Insert_data($roomname,$detail,$roomtypeid);
}else{
 echo "All fields are required";
}
 
// convert illegal input value to ligal value formate
function legal_input($value) {
    $value = trim($value);
    $value = stripslashes($value);
    //$value = htmlspecialchars($value);
    return $value;
}

// // function to insert user data into database table
 function insert_data($roomname,$detail,$roomtypeid){
 
     global $db;

      $query="INSERT INTO tbroom(roomname,detail,roomtypeid) VALUES('$roomname','$detail','$roomtypeid')";

     $execute=mysqli_query($db,$query);
     if($execute==true)
     {
       echo "User data was inserted successfully";
       echo "<META HTTP-EQUIV='refresh' CONTENT='2; URL=user-form.php'> ";
     }else{
      echo  "Error: " . $sql . "<br>" . mysqli_error($db);
     }
 }

?>