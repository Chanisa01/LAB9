<?php include "connect.php" ?>
<html>
    <head><meta charset="utf-8"></head>
    <body>
        <?php
            $stmt = $pdo->prepare("SELECT * FROM member where username = ?");
            $stmt->bindParam(1,$_GET["username"]);
            $stmt->execute();
            $row=$stmt->fetch();
        ?>
            ชื่อ : <?=$row["name"]?><br>
            username : <?=$row["username"]?><br>
            รหัสผ่าน : <?=$row["password"]?><br>
            ที่อยู่: <?=$row["address"]?><br>
            โทรศัพท์: <?=$row["mobile"]?><br>
            อีเมล์: <?=$row["email"]?><br>
    </body>
</html>