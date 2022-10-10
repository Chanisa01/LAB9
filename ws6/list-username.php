<?php include "connect.php" ?>
<html>
    <head><meta charset="utf-8">
        <script>
            function confirmDelete(username) { 
            var ans = confirm("ต้องการลบusernameนี้ " + username); 
            if (ans==true)
            document.location = "delete.php?username=" + username;
            }
        </script>
    </head>
    <body>
        <?php
            $stmt = $pdo->prepare("SELECT * FROM member");
            $stmt->execute();
            while ($row = $stmt->fetch()) {
                echo "Username : ".$row["username"]."<br>";
                echo "Password : ".$row["password"]."<br>";
                echo "Name : ".$row["name"]."<br>";
                echo "Address : ".$row["address"]."<br>";
                echo "Mobile: ".$row["mobile"]."<br>";
                echo "Email : ".$row["email"]."<br>";
        ?>    
                <a href= '#' onclick=confirmDelete("<?=$row["username"]?>")>ลบ</a>
                <?php echo "<hr>\n"; 
            }?>
    
    </body>
</html>