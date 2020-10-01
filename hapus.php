<?php 
include 'config/koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM mahasiswa WHERE id = $id";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
  header('Location: mahasiswa.php');
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
?>