<?php
$koneksi = new PDO("mysql:host=localhost;dbname=ppmukk", "root","");
$query = $koneksi->query("SELECT FROM masyarakat where username='$username' AND password='$password' ");
?>
<h1>masyarakat</h1>
<?php while($result = $query->fetchAll()){
    ?>
    <p><?=$result['username']; ?>
    <?php } ?>

