<html>
    <head> 
        <title> Magic Shop</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Let's make your mini concert!!</h1>
   <?php
   if(isset($_GET['pesan'])) {
    if($_GET['pesan']=="gagal"){
        echo "<div class='alert'>username dan password tidak sesuai!</div>";
    }
   }
   ?>

   <div class="kotak_login">
    <p class="tulisan_login">Silahkan Login</p>

    <form action="cek_login.php" method="post">
        <label>Username</label>
        <input type="text" name="username" class="form_login" placeholder="Username.." required="required">

        <label>Password</label>
        <input type="password" name="password" class="form_login" placeholder="password.." required="required">
        
        <input type="submit" class="tombol_login" value="LOGIN">

        <br/>
        <br/>
        <center>
        <a class="link" href="">kembali</a>
</center>
</form>
</div>
</body>
</html>

