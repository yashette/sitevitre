<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Vitrine - Max & Léo</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
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
                
                <div class="right">
                    <img src="./image/vitrine.jpg" alt="">
                </div>
                <div class="left">
                    <h1>HTML</h1>
                    <p>Réalisation de votre site vitrine </br>en HTML/CSS et responsive</p>
                </div>
            </div>

            <div class="card">
                <div class="left">
                    <h1>HTML/CSS</h1>
                    <p>Formation pour apprendre a faires</br> des sites</p>
                </div>
                <div class="right">
                    <img src="./image/htmlcss.png" alt="">
                </div>
            </div>
            
            <div class="card">
                
                <div class="right">
                    <img src="./image/bdd.jpg" alt="">
                </div>
                <div class="left">
                    <h1>Base de données</h1>
                    <p>Formation pour apprendre les</br> bases de données</p>
                </div>
            </div>
        </div>


    </section>

    <footer>
<?php include 'footer.php'; ?>
       
    </footer>
</body>
</html>