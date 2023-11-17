<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <table class = "table">
            <h1>List Mobil</h1>

                <tr>
                    <th scope="col">Nama Mobil</th>
                    <th scope="col">Brand Mobil</th>
                    <th scope="col">Warna Mobil</th>
                    <th scope="col">Tipe Mobil</th>
                    <th scope="col">Harga Mobil</th>
                </tr>
            <?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
            $query = mysqli_query($connect, "SELECT * FROM showroom_mobil");
            if($query -> num_rows > 0){
        
            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan dalam bentuk tabel 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->
                while($select = mysqli_fetch_assoc($query)){
    ?>
    <tr>
        <th scope="row"><?= $select['id']?></th>
        <td><?= $selects ['Nama_Mobil']?></td>
        <td><?= $selects ['Brand_Mobil']?></td>
        <td><?= $selects ['Warna_Mobil']?></td>
        <td><?= $selects ['Tipe_Mobil']?></td>
        <td><?= $selects ['Harga_Mobil']?></td>
        
        <td>
            <a type ="button" class="btn btn-primary" href="form_detail_mobil.php?id=<?php echo$select['id']?>">Detail</a>
    </tr>
    <?php
                }
            }
            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->

            
            

            
            else{
                echo "<script>alert('Tidak ada data dalam tabel')</script>";
            }
            //<!--  **********************  2  **************************     -->
            ?>
        </div>
    </center>
</body>
</html>
