<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAI</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
    
    <header>

        
        <div class="nav">
            <ul>
                <li class="home" id="home"><a href="#"><i class="material-icons">home</i>HOME</a></li>
                <li class="about"><a class="active" href="#">ABOUT</a></li>
                <li class="contact" id="contact"><a href="#">CONTACT</a></li>
                <li class="member"><a href="#"><i class="material-icons">accessibility</i>MEMBER</a>
                    <ul>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </header>

    <div class="menubar">
        <div class="container">
            <div class="logo">
                <h1>NAI</h1>
            </div>
            <ul class="menu">
                <li>
                    <a href="#">รวมภาพสวยๆ พร้อมให้คุณดาวน์โหลด Free!!</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="maindiv"></div>
    
    <footer>
        <p> UBU &copy; 2020 | NAI</p>
    </footer>

    <script>
    var contacthome = document.getElementById('contact');
    var homehome = document.getElementById('home');
    contacthome.onclick = function () {
      alert("Ubon Ratchathani University : Faculty of Science");
    }
    homehome.onclick = function () {
      alert("กรุณาเข้าสู่ระบบ Please login!!");
    }
    </script>

</body>
</html>