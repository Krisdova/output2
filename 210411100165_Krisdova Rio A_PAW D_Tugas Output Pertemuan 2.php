<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Output 2 Krisdova</title>
</head>
<body>
    <!-- saya menggunakan tag <h2> sebagai heading agar kata terlihat tebal -->
    <h2>Berikut biodata anak yang telah minum Marjan :</h2>
    <?php
    // Saya membuat fungsi yang bernama "biodata"
    // dengan 3 parameter yang saya gunakan yaitu :
    // $NamaPanggilan ==> sebagai parameter yang akan saya gunakan untuk keterangan nama
    // $Umur ==> sebagai parameter yang akan saya gunakan untuk keterangan umur
    // $Alamat ==> sebagai parameter yang akan saya gunakan untuk keterangan alamat

        function biodata($NamaPanggilan, $Umur, $Alamat) {
            // kemudian setelah itu akan menjalankan perintah untuk
            // menampilkan pada layar berisi "nama" yang berumur "umur" tahun, sedang tinggal di "alamat"
            echo("$NamaPanggilan yang berumur $Umur tahun, sedang tinggal di  $Alamat<br>");
            // penggunaan tag <br> bertujuan agar setiap output menghasilkan baris baru pada layar
        }
    // setelah itu saya memanggil fungsi di atas dengan mengisi ketiga parameter tersebut
        biodata("Hehe", "12", "Varis");
        biodata("LhaKok", "11", "Ameringa");
        biodata("NdakTahu", "13", "Konoha");
    ?>
</body>
</html>
