<?php 

session_start();
//menghancurkan

session_destroy();

echo "<script>alert('anda telah logout')</script>";
echo "<script>location='index.php'</script>";

?>