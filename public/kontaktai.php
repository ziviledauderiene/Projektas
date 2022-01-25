<?php $page = 'kontaktai'; ?>
<?php
require __DIR__ . '/../app/src/app.php'; 
?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Macramé dekoracijos iš lino</title>

    <script src="https://kit.fontawesome.com/6036d3f269.js"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">   
    
    <link rel="stylesheet" href="../app/css/normalize.css">
    <link rel="stylesheet" href="../app/css/style.css">
</head>

<body>

<!-- HEADER -->
<?php include_once ('../app/views/header.php'); ?>



<!-- KONTAKTAI -->
    <section class="contact">

        <div class="container flex-container"> 

            <div class="section-heading">
                <h2>Susisiekime</h2>
                <p>Esame atviri įvairioms iniciatyvoms ir bendradarbiavimui. Kviečiame susisiekti jeigu turite bet kokių klausimų ar idėjų. Užpildykite kontaktinę formą ir mes netrukus susisieksime.</p>
            </div>

            <div class="section-content">
                <form class="contact-form flex-container" action="kontaktai.php" method="post">
                    <div class="input-row flex-container">
                        <input type="text" name="vardas" placeholder="Vardas" autofocus required>
                        <input type="email" name="email" placeholder="El. paštas" required>
                    </div>
                    <textarea name="zinute" rows="8" placeholder="Jūsų žinutė" required></textarea>
                    <input type="submit" class="btn btn-form" name="submit" value="Siųsti">
                </form>
            </div>

        </div>

    </section>
<!-- KONTAKTAI pabaiga-->



<!-- FOOTER -->
    <?php include_once ('../app/views/footer.php'); ?>

    <script src="/app/js/jquery.min.js"></script>
    <script src="/app/js/app.js"></script>
</body>

</html>