<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Vitrine - Max & Léo</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-image:radial-gradient(white,grey,black);">
    <nav>
     <?php include 'navbar.php'; ?>
    </nav>

    <header>
       
<?php include 'header.php'; ?>


    </header>

    <section class="main" id="produits">

        <div class="content">
            <div class="card">
                <div class="left" style="border-radius:15%;">
                    <h1>Leo Poulet</h1>
                    <p>Actuellement en première année de BTS SIO. J'aime la technologie, le réseau et les jeux vidéos</p>
                </div>
                <div class="right">
                    <img src="./image/i2.png" alt="">
                </div>
            </div>

            <div class="card">
                <div class="left" style="border-radius:15%;">
                    <h1>Max Poulet</h1>
                    <p> Actuellement en première année de BTS S.I.O au Pôle Superieur Baudimont Saint-Charles.
Je suis passionné par tout ce qui concerne le domaine du réseau et des nouvelles technologies.</p>
                </div>
                <div class="right">
                    <img src="./image/i3.png" alt="">
                </div>
            </div>
            
           
        </div>


    </section>

    <footer>
<?php include 'footer.php'; ?>
       
    </footer>
</body>
</html>