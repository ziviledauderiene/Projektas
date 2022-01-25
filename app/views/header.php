<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LinenKnots - Lininiai pinikai</title>

    <script src="https://kit.fontawesome.com/6036d3f269.js"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">   
    
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
    />

    <link rel="stylesheet" href="../app/css/normalize.css">
    <link rel="stylesheet" href="../app/css/style.css">

    <script>
        function myFunction() {
            var x = document.getElementById("mMenu");
            if (x.style.display === "block") {
                x.style.display = "none";
            }
            else {
                x.style.display = "block";
            }
        }
    </script>

</head>

<body>

    <header id="header" class="site-header">

        <div class="container flex-container">

            <div class="logo">
                <a href="index.php"><img src="../app/images/logo.jpg"  alt="LinenKnots" height="100"></a>
            </div>

            <nav class="main-nav">
                <ul id="nav-active" class="flex-container">
                    
                    <li><a href="index.php" class="<?= ($page != 'titulinis') ? : 'active';  ?>">Pagrindinis</a></li>
                    <li class="dropdown">
                        <a href="parduotuve.php" class="<?= ($page != 'parduotuve') ? : 'active';  ?>">Parduotuvė</a>
                            <div class="dropdown-content">
                                <a href="parduotuve#Gyvybes-medeliai.html">Gyvybės medeliai</a>
                                <a href="parduotuve#sienos-dekoracijos.html">Sienos dekoracijos</a>
                                <a href="parduotuve#geliu-laikikliai.html">Gėlių laikikliai</a>
                                <a href="parduotuve#stalo-dekoracijos.html">Stalo dekoracijos</a>
                                <a href="parduotuve#pinti-maisiukai.html">Pinti maišiukai</a>
                                <a href="parduotuve#aksesuarai.html">Aksesuarai</a>
                                <a href="parduotuve#kaledines-dekoracijos.html">Kalėdinės dekoracijos</a>
                            </div>
                    </li>
                    <li><a href="individualus-uzsakymai.php" class="<?= ($page != 'uzsakymai') ? : 'active';  ?>">Individualūs užsakymai</a></li>
                    <li><a href="apie.php" class="<?= ($page != 'apie') ? : 'active';  ?>">Apie</a></li>
                    <li><a href="kontaktai.php" class="<?= ($page != 'kontaktai') ? : 'active';  ?>">Kontaktai</a></li>
                </ul>
            </nav>

            <div class="header-icons">
                <ul class="flex-container">
                    <li><a href="#"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M832 312H696v-16c0-101.6-82.4-184-184-184s-184 82.4-184 184v16H192c-17.7 0-32 14.3-32 32v536c0 17.7 14.3 32 32 32h640c17.7 0 32-14.3 32-32V344c0-17.7-14.3-32-32-32zm-432-16c0-61.9 50.1-112 112-112s112 50.1 112 112v16H400v-16zm392 544H232V384h96v88c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8v-88h224v88c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8v-88h96v456z"></path></svg></a></li>
                    <li><a href="#"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><g><path fill="none" d="M0 0H24V24H0z"></path><path d="M16.5 3C19.538 3 22 5.5 22 9c0 7-7.5 11-10 12.5C9.5 20 2 16 2 9c0-3.5 2.5-6 5.5-6C9.36 3 11 4 12 5c1-1 2.64-2 4.5-2zm-3.566 15.604c.881-.556 1.676-1.109 2.42-1.701C18.335 14.533 20 11.943 20 9c0-2.36-1.537-4-3.5-4-1.076 0-2.24.57-3.086 1.414L12 7.828l-1.414-1.414C9.74 5.57 8.576 5 7.5 5 5.56 5 4 6.656 4 9c0 2.944 1.666 5.533 4.645 7.903.745.592 1.54 1.145 2.421 1.7.299.189.595.37.934.572.339-.202.635-.383.934-.571z"></path></g></svg></a></li>
                </ul>
            </div>

            <nav class="mobile-nav">
                <ul id="mMenu" class="flex-container">
                    <li><a href="index.php">Pagrindinis</a></li>
                    <li><a href="parduotuve.php">Parduotuvė</a></li>
                    <li><a href="individualus-uzsakymai.php">Individualūs užsakymai</a></li>
                    <li><a href="apie.php">Apie</a></li>
                    <li><a href="kontaktai.php">Kontaktai</a></li>
                    <li><a href="krepselis.php"><b>Prekių krepšelis</b></a></li>
                </ul>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </nav>
            
        </div>

    </header>