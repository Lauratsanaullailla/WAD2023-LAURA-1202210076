<?php
if(isset ($_POST['tinggi_badan'])){

    // **********************  1  ************************** 
    // ========== tangkap nilai tinggi_badan dan berat_badan yang ada pada form html
    // silakan taruh code kalian di bawah
    $tinggi_badan = $_POST['tinggi_badan'];
    $berat_badan = $_POST['berat_badan'];
    // **********************  1  ************************** 
    
    
    // **********************  2  ************************** 
    // ========== buatkan sebuah perkondisian di mana 
    // tinggi_badan atau $berat_badan tidak boleh kosong nilainya, kalau kosong buatkanlah pesan error
    // silakan taruh code kalian di bawah
    
    // **********************  2  ************************** 
    if(empty($tinggi_badan) ||empty($berat_badan)){
        $kosong = 'Inputan tidak boleh kosong';
    }
    else{
        // **********************  3  ************************** 
        // ========== buatkanlah perkondisian di mana Jika kesalahan Error-nya "empty", 
        // masukkan perhitungan BMI sesuai dengan rumus yang tertera pada jurnal
        // silakan taruh code kalian di bawah
        
        // **********************  3  ************************** 
        $meter_tinggi=$tinggi_badan/100;
        $hasil= ($berat_badan/($meter_tinggi*$meter_tinggi));
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator BMI</title>
    <link rel="stylesheet" href="css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
<<form action="" method="POST">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 p-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Kalkulator BMI</h4>

                    <form action="" method="POST">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="tinggi_badan" id="tinggi_badan" placeholder="175">
                            <label for="tinggi_badan">Tinggi Badan (CM)</label>
                        </div>

                        <div class="form-floating">
                            <input type="number" class="form-control" name="berat_badan" id="berat_badan" placeholder="53">
                            <label for="berat_badan">Berat Badan (KG)</label>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3 mt-3 w-100">Hitung BMI</button>
                    </form>

                    <!--  **********************  4  **************************     -->
                    <!-- Hasilnya perhitungan BMI taruh di sini yaaa!! 😊 -->
                    <!-- silakan taruh code kalian di bawah -->
                    <?php
                if(isset($hasil)){

                    if ($hasil <= 18.4){
                        echo "Hasil BMI adalah $hasil <br>";
                        echo 'Status BMI anda adalah Underweight';
                    }   
                    elseif($hasil >= 18.5 && $hasil <= 24.9){
                        echo "Hasil BMI adalah $hasil <br>";
                        echo 'Status BMI anda adalah Normal';
                    }
                    elseif($hasil >= 25.0 && $hasil <= 39.9){
                        echo "Hasil BMI adalah $hasil <br>";
                        echo 'Status BMI anda adalah Overweight';
                    }
                    elseif($hasil >= 40){
                        echo "Hasil BMI adalah $hasil <br>";
                        echo 'Status BMI anda adalah Obese';
                    }
                }
                if (isset ($kosong)){
                    echo $kosong;
                }
                    ?>
                    <!--  **********************  4  **************************     -->



                    <!--  **********************  5  **************************     -->
                    <!-- Hasil pesan error nya taruh di sini yaaa!! 😊  -->
                    <!-- silakan taruh code kalian di bawah -->
                    

                    <!--  **********************  5  **************************     -->

                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>