<?php
    header("Content-Type: text/html; charset=UTF-8");
     require('dbconnect2.php')

    $conn = new mysqli($servername, $username, $password, $dbname);
    mysql_select_db($no_number,$conn); // เลือกฐานข้อมูล
    mysql_query("SET NAMES utf8"); // กำหนด charset ให้ฐานข้อมูล เพื่ออ่านภาษาไทย

?>
<html>
<head>
    <title>PHP MySql Demo</title>
</head>
<body>
<table border="1" width="500">
    <tbody>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Lastname</th>
        </tr>
        <?php
            $sql="Select * From data"; // คำสั่ง sql อ่านข้อมูลจากตาราง tbl_name
            $result=mysql_query($sql); // คิวรี่คำสั่ง sql
            $num=mysql_num_rows($result); // ตรวจสอบจำนวน record ที่คิวรี่ออกมา
            if($num>0){ // ถ้าจำนวน record มากกว่า 0
                $count=1; // กำหนดตัวแปร count เพื่อระบุตำแหน่ง record
                while($recordset=mysql_fetch_assoc($result)){ // วน loop ดึงข้อมูลออกมา ทีละ record
        ?>
        <tr>
            <td align="center"><?php echo $count; ?></td>
            <td><?php echo $recordset['no_number']; ?></td>
            <td><?php echo $recordset['name']; ?></td>
            <td><?php echo $recordset['number']; ?></td>
        </tr>
        <?
                    $count+=1; // เพิ่ม count ทีละ 1
                }
            }
        ?>
    </tbody>
</table>
</body>
</html>
