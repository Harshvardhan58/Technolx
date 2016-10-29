<?php
    session_start();
    unset($_SESSION['email']);
?>
<script>
    window.open('logout.php');
    window.location="index.html";
</script>