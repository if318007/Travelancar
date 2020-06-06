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
           
                <h1 id="form_header">Transaksi Pembayaran Anda Berhasil dilakukan</h1>
            </div>
            <h2>Klik <a href="DetailPembayaran.php"><u>disini</u></a> untuk melihat detail transaksi !</h2>
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