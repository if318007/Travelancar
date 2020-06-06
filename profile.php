<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <title>TEKNET 03</title>
        
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <script src="js/myjs.js"></script>
    </head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home_style.css">

    <body>
        <div class="container">
            <ul id="gn-menu" class="gn-menu-main">
                <li class="gn-trigger">
                    <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
                    <nav class="gn-menu-wrapper">
                        <div class="gn-scroller">
                            <ul class="gn-menu">
                                <li>
                                    <a class="gn-icon gn-icon-download" href="Bayar.php">Bayar</a>
                                </li>
                                <li>
                                    <ul class="gn-submenu">
                                        <li><a class="gn-icon gn-icon-article">Aktivitas Transaksi</a></li>
                                        <li><a class="gn-icon gn-icon-cog">Settings</a></li>
                                        <li><a class="gn-icon gn-icon-help">Help</a></li>
                                
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /gn-scroller -->
                    </nav>
                </li>
                <li style="font-family: Roboto-Thin; font-size: 15px"><a href="profile.php">Account Profile</a></li>
                <li style="font-family: Roboto-Thin; font-size: 15px"><a href="login.php"><span>Logout</span></a></li>
            </ul>
            <header>
                <div class="flex-container-background">
        <div class="flex-container">
            <div class="flex-item-0">
                <h1 id="form_header">Your Accounts Detail</h1>
            </div>
        </div>
        <div class="flex-container">
            <div class="flex-item-1">
                 <?php
            require_once 'functions.php';
          ?>
                 <form action="" method="POST">
                <div class="flex-item-login">
                     <?php
                    include 'connect.php';

                
                $Akun = GetData(); 
                    foreach ($Akun as $akun)
                     {
                ?> 
                <div class="flex-item">
                 <tr><b>Username:</b>
                        <td><?php echo $akun['username'];?> </td>
                    </tr>
                </div>
                <div class="flex-item">
                    <tr><b>PIN:</b>
                        <td><?php echo $akun['password'];?> </td>
                    </tr>
                </div>
                <div class="flex-item">
                    <tr><b>Nama:</b>
                        <td><?php echo $akun['nama'];?></td>
                    </tr>
                </div>
                    <div class="flex-item">
                    <tr><b>Alamat:</b>
                        <td><?php echo $akun['alamat'];?></td>
                    </tr>
                </div>
                <div class="flex-item">
                    <tr><b>Tanggal Lahir:</b>
                        <td><?php echo $akun['tgl_lahir'];?></td>
                    </tr>
                </div>
                <div class="flex-item">
                    <tr><b>No Rekening:</b>
                        <td><?php echo $akun['no_rek'];?></td>
                    </tr>
                </div>
                <div class="flex-item">
                    <tr><b>Saldo: </b>
                        <td><?php echo $akun['uang'];?></td>
                    </tr>
                </div>
                    
                    
                    
                    <?php
                    }
                ?>
            </div>
        </form>
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