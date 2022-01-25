<?php
session_start();
session_destroy();
echo "<script>alert('Logout Successful!! Have a nice day                    {$_SESSION["fname"]}'); window.location.assign('logout1.php');
        </script>";

?>