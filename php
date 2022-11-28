<?php
 $no = 0;
 $query = mysqli_query($conn, "SELECT * FROM tbl_jenis_hosting");
 while ($row = mysqli_fetch_assoc($query)) {
 $no++;
?>
