
<?php
$host = 'localhost';
$user = 'root';
$password = ''; // Sesuaikan jika ada password
$database = '14_MohammadNorBintangAndikaIlhami';
$socket = '/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock';

$conn = new mysqli($host, $user, $password, $database, null, $socket);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
