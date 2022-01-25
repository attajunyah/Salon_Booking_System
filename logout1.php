<?php
session_start();
session_destroy();

echo "<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js\"></script>

<script>
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>";
echo "<script>
   window.location.assign('loginmain.php');
</script>";
?>
<html>

</html>