<?php
include('config.php');
 
 session_start();
 $user = $_POST['user'];
 $password = $_POST['password'];
 
 $strSQL = "SELECT * FROM login_admin WHERE user = '".$user."' 
 AND password = '".$password."'";
 $qry = mysqli_query($conn,$strSQL) or die('ไม่สามารถเชื่อมต่อฐานข้อมูลได้ Error : '. mysql_error());
 $row = mysqli_fetch_assoc($qry);
 if(!$row)
 {
   echo "

ชื่อผู้ใช้ หรือ รหัสผ่าน ไม่ถูกต้อง!
 
";
 }
 else
 {
   //สร้าง SESSION เพื่อใช้ในหน้าอื่น ที่ต้องการตรวจสอบข้อมูลผู้ใช้ในขณะนั้น
   $_SESSION["user"] = $row["user"];
   

   header("location:home.php");//ย้ายไปยังหน้าหลัก
 }
?>