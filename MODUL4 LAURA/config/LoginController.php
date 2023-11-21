<?php

require 'connect.php';

// function untuk melakukan login
function login($input) {

    // (1) Panggil variabel global $db dari file config
    global $connect;
    // 

    // (2) Ambil nilai input dari form login
        // a. Ambil nilai input email
        $email = $input['email'];
        // b. Ambil nilai input password
        $password = $input['password'];
    // 

    // (3) Buat dan lakukan query untuk mencari data dengan email yang sama
    $que = "SELECT * FROM users WHERE email = '$email'";
    $hasil = mysqli_query($connect, $que);
    // 

    // (4) Buatlah perkondisian ketika email ditemukan ( gunakan mysqli_num_rows == 1 )
    if(mysqli_num_rows($hasil) == 1){
        // a. Simpan hasil query menjadi array asosiatif menggunakan fungsi mysqli_fetch_assoc
        $data = mysqli_fetch_assoc($hasil);
        // 

        // b. Lakukan verifikasi password menggunakan fungsi password_verify
            if(password_verify($password, $data['password'])){
               
        
            // c. Set variabel session dengan key login untuk menyimpan status login
            $_SESSION["login"] = true;
            $_SESSION["email"] = $data['email'];
            // d. Set variabel session dengan key id untuk menyimpan id user
            $_SESSION['id'] = $data['id'];
            //
            // e. Buat kondisi untuk mengecek apakah checkbox "remember me" terisi kemudian set cookie dan isi dengan id
            if (isset($input['remember'])) {
                setcookie("id", $data['id'], time() +3600);
            }   

            // 
        // f. Buat kondisi else dan isi dengan variabel session dengan key message untuk meanmpilkan pesan error ketika password tidak sesuai
        
        // 
    // 
        }else{
        $_SESSION['message'] = 'Password Tidak Sesuai';
        $_SESSION['color'] = 'danger';
    
    // (5) Buat kondisi else, kemudian di dalamnya
    //     Buat variabel session dengan key message untuk menampilkan pesan error ketika email tidak ditemukan
    }
    // 
}else{
        $_SESSION['message'] = 'Email tidak ditemukan';
        $_SESSION['color'] = 'danger';
}
// 
}

// function untuk fitur "Remember Me"
function rememberMe($cookie)
{
    // (6) Panggil variabel global $db dari file config
    global $connect;
    // 

    // (7) Ambil nilai cookie yang ada
    $id = $cookie['id'];
    // 

    // (8) Buat dan lakukan query untuk mencari data dengan id yang sama
    $qu = "SELECT * FROM users WHERE id = '$id";
    $hasil_id = mysqli_query($connect, $qu);
    // 

    // (9) Buatlah perkondisian ketika id ditemukan ( gunakan mysqli_num_rows == 1 )
    if(mysqli_num_rows($hasil_id) == 1){
        $dataa = mysqli_fetch_assoc($hasil_id);

        $_SESSION['login'] = true;
        $_SESSION['id'] = $dataa['id'];
    }
        // a. Simpan hasil query menjadi array asosiatif menggunakan fungsi mysqli_fetch_assoc

        // b. Set variabel session dengan key login untuk menyimpan status login
        
        // c. Set variabel session dengan key id untuk menyimpan id user
        
    
    // 
}
// 

?>