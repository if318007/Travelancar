<!DOCTYPE html>
<html>
<head>
   

</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home_style.css">

<body >
     <div class="flex-container-background">
        <div class="flex-container">
            <div class="flex-item-0">
                <h1 id="form_header">Travelancar Banking</h1>
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-1">
        <form action="proccess_login.php?action=login" method="POST" >
             <div class="flex-item-login">
                        <h2>Welcome</h2>
                    </div>
            
                <div class="flex-item">
                    <input type="text" name="nama" placeholder="Username" required class="login-input">
                    </div>
                    <div class="flex-item">
                    <input type="password" name="sandi" placeholder="PIN" required class="login-input" >
                    </div>
                    <div>
                    <button type="submit" value="Login" class="login-input" style="height:40px;" >Login</button>
                    </div>
               
        </form>
    </div>
   </div>

    </div>

</body>
</html>