<!DOCTYPE html>
<html>
<body>
<?php
session_start();
echo "Bienvenido";
echo $_SESSION[''] = ;


?>
</body>
</html>
<?php
    $query = "SELECT * from LIBROS";
    $resp = pg_fetch_array($result);
    pg_close($con);
?>