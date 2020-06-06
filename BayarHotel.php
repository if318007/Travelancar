<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <title>TEKNET 03</title>
        
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <script src="js/modernizr.custom.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home_style.css">
    </head>
    <body>
        <div class="container">
            <ul id="gn-menu" class="gn-menu-main">
                <li class="gn-trigger">
                    <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
                    <nav class="gn-menu-wrapper">
                        <div class="gn-scroller">
                            <ul class="gn-menu">
                                <li>
                                    <a class="gn-icon gn-icon-download" href="PilihanBayar.php">Bayar</a>
                                </li>
                                <li>
                                    <ul class="gn-menu">
                                        <li><a class="gn-icon gn-icon-article" href="DetailPembayaran.php">Riwayat Transaksi</a></li>
                                
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /gn-scroller -->
                    </nav>
                </li>
                <li><a href="login.php"><span>Logout</span></a></li>
            </ul>
            <header >
                <div class="flex-container-background" >
        <div class="flex-container" >
            <div class="flex-item-0" style="width:  50%" align="center">
                <h1 id="form_header">Anda dapat melakukan</h1>
                <h1 id="form_header">Pembayaran Booking Tiket Hotel disini !</h1>
            </div>
        </div>

        <div class="flex-container" >
            <div class="flex-item-1">
        <form action="formbayarHotel.php" method="POST">
            
            <table align="center">
                <tr>
                    <td>ID Pembayaran</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="id_pembayaran" id="id_pembayaran" required>
                    </td>
                    <tr>
                        
                    <td>No Rekening Bank</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="id_bank_pbyr" id="id_bank_pbyr" placeholder="" required>
                    </td>
                    </tr>
                </tr>
                <tr>
                    
                    <td>ID Order Tiket Hotel</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="id_booking_htl" id="id_booking_htl" placeholder="" ><br>
                    </td>
                </tr>
                <tr>
                    
                    <td>Tanggal Pembayaran</td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tgl_pembayaran" id="tgl_pembayaran" placeholder="Tanggal Bayar" required><br>
                    </td>
                </tr>
                  <tr>
                    <td colspan="3">
                        <button type="submit" style="width: 90%;">Bayar</button>
                    </td>
                </tr>
                
                
            </table>
         </form>
        
    </div>
   </div>

    </div>
            </header> 
        </div><!-- /container -->
        <script src="js/classie.js"></script>
        <script src="js/gnmenu.js"></script>
        <script>
            new gnMenu( document.getElementById( 'gn-menu' ) );
        </script>
    </body>
</html>