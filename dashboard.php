<html>
    <?php 
        session_start();
        $name=$_SESSION['name'];
        $img=$_SESSION['img'];
        $email=$_SESSION['email'];
        echo "<p>".$name."</p><p>".$email."</p><p>xyz</p><img src='".$img."'/>";
    ?>
    <script type="text/javascript">
       //location.replace("dashboard.php");

    </script>
</html>