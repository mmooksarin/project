<?php
   require 'dbconnect.php';

   $q = "SELECT * FROM formlistnameuser";

   $result = mysqli_query($dbcon, $q);

   if ($result) {
      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo "เลขที่สมาชิก".$row['no_number']."<br>";
        echo "ชื่อ-นามสกุล".$row['name']."<br>";
        echo "ที่อยู่".$row['address']."<br>";
        echo "หมู่".$row['moo']."<br>";
        echo "รหัสประจำตัว".$row['id_card']."<br>";
        echo "หมายเหตุ".$row['note']."<br>";
        echo "<hr>";

      }

   }else {
     echo "ไม่สามารถแสดงข้อมูลได้";
   }
 ?>
