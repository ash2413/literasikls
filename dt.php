<?php
        include "koneksi.php";
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT *From akun");
        while ($row = mysqli_fetch_array($data)) {
        ?>