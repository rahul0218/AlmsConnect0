<?php
session_start();
session_destroy();
echo "<script> alert('Organization is logged out !!!!') </script>";
echo "<script> window.location.href='../index.php'</script>";
?>