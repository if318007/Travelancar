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
           <?php
              require_once 'functions.php';
           ?>
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
              <h2>Daftar Riwayat Transaksi Anda</h2>
                <div class="flex-container-background" >
                <div class="flex-container" >
                 
                     
                     <form action="" method="POST">
                      <table align="center" cellpadding="5" cellspacing="0" border="1" style=" background-color:black;font-family:sans-serif;">
                      <tr>
                        <td><b>ID PEMBAYARAN</b></td>
                        <td><b>No REKENING BANK</b></td>
                        <td><b>ID TIKET MASKAPAI PESAWAT</b></td>
                        <td><b>ID TIKET HOTEL</b></td>
                        <td><b>TANGGAL PEMBAYARAN</b></td>
                      </tr>
                      <?php
                        include 'connect.php';
                        
                        $AllBuktiPembayaran = GetAllTransaksi(); 
                        foreach ($AllBuktiPembayaran as $bukti_pembayaran)
                         {
                      ?>

                      <tr style="text-align: center;">
                        
                        <td><?php echo $bukti_pembayaran['id_pembayaran'];?> </td>
                        <td><?php echo $bukti_pembayaran['id_bank_pbyr'];?> </td>
                        <td><?php echo $bukti_pembayaran['id_order_tiket'];?></td>
                        <td><?php echo $bukti_pembayaran['id_booking_htl'];?></td>
                        <td><?php echo $bukti_pembayaran['tgl_pembayaran'];?></td>
                      </tr>

                          <?php
                            }
                          ?>
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
