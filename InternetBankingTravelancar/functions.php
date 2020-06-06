<?php
session_start();
    include 'connect.php';

	function ExecuteQuery($query){
        global $dbconnect;
        $result = mysqli_query($dbconnect,$query);

        return $result;
    }
   

	 function LoginAkun($nama,$sandi){
        $query = "SELECT * FROM akun WHERE nama='$nama' AND sandi='$sandi'";

        $login = ExecuteQuery($query);

        return $login;
    }
    function InsertBayar($id_pembayaran, $id_bank_pbyr, $id_order_tiket, $id_booking_htl, $tgl_pembayaran){
        global $dbconnect;
       
        $query = "INSERT INTO bukti_pembayaran VALUES ('$id_pembayaran','$id_bank_pbyr', '$id_order_tiket', '$id_booking_htl', '$tgl_pembayaran')";
        $result = ExecuteQuery($query);

    }
    function GetAllTransaksi(){
        $query = "SELECT * FROM bukti_pembayaran";
        $result = ExecuteQuery($query);
        $data = [];

        while($bukti_pembayaran = mysqli_fetch_assoc($result)){
            $data[] = $bukti_pembayaran; 
        }

        return $data;
    }

    //  function GetData(){
    //     $query = "SELECT * FROM akun";
    //     $result = ExecuteQuery($query);
    //     $data = [];

    //     while($akun = mysqli_fetch_assoc($result)){
    //         $data[] = $akun; 
    //     }

    //     return $data;
    // }
    // function GetPembayaran($id_booking, $harga){
    //     $query = "SELECT * FROM booking WHERE id_booking='$id_booking' AND harga = '$harga'";

    //     $bayar = ExecuteQuery($query);

    //     return $bayar;
    
    // }
    // function GetRiwayatPembayaran(){
    //     $query = "SELECT a.*, b.*, c.* FROM booking INNER JOIN hotel ON booking.id_hotel = hotel.id_hotel INNER JOIN tiket ON booking.id_tiket = tiket.id_tiket";
    //         $result = ExecuteQuery($query);
    //     $data = [];

    //     while($booking = mysqli_fetch_assoc($result)){
    //         $data[] = $booking; 
    //     }

    //     return $data;
    // }
    ?>