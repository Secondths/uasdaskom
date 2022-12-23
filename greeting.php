<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <title>Salim Adiseto's Website</title>
    <link rel="shortcut icon" href="assets/PartaiKucingMerah.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color: lightgray;">

    

    <div class="wrapper">
        <img src="assets/PartaiKucingMerah.jpg" height="60px" alt="logo">
    <button class="button b1">
        <a href="index.html">Home</a> 
    </button>
    <button class="button b2">
        <a href="profile.html">Profile</a>    
    </button>
    <button class="button b3">
        <a href="cv.html">CV</a>    
    </button>
    <button class="button b4">
        <a href="gallery.html">Gallery</a>    
    </button>
    <button class="button b5">
        <a href="contact.html">Contact</a>    
    </button>
    <button class="button b6">
        <a href="greeting.php">HAI</a>    
    </button>
    </div>

    <hr>

    <p style="text-align: center;"><b> 
        <?php

        date_default_timezone_set("Asia/Jakarta");

        $b = time();
        $hour = date("G",$b);

        if ($hour>=0 && $hour<=11)
        {
        echo "Selamat Pagi ";
        }
        elseif ($hour >=12 && $hour<=14)
        {
        echo "Selamat Siang  ";
        }
        elseif ($hour >=15 && $hour<=17)
        {
        echo "Selamat Sore  ";
        }
        elseif ($hour >=17 && $hour<=18)
        {
        echo "Selamat Petang  ";
        }
        elseif ($hour >=19 && $hour<=23)
        {
        echo "Selamat Malam  ";
        }

        ?> <b></p>


    <hr>
    <footer style="text-align: center;">
        <p>Copyright &copy; 2022 Salim Adiseto.</p>
        <p id="hari" style="text-align: right;"></p>
    </footer>
    <script src="js/app.js"></script>
</body>
</html>