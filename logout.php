<?php
session_start();
session_destroy();

echo '<script>alert("anda berhasil Kaluar");window.location = "login.php"</script>';