<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Vitrine - Max & Léo</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body style="background-image:radial-gradient(white,grey,black);">
    <nav>
     <?php include 'navbar.php'; ?>
    </nav>
 
    <div class="bg-contact2" >
		<div class="container-contact2"  >
			<div class="wrap-contact2" >
                
                
    
     <form method="POST" action="validation.php"> 
         
     <span class="contact2-form-title">Nous contacter ?
         </span>
     
					<div class="wrap-input2 validate-input" data-validate="Name is required">
				    <input class="input2" type="text" value="" id="nom" name="nom" required/>
				    <span class="focus-input2" data-placeholder="NOM" ></span>
					</div>


  
    
    
				    <div class="wrap-input2 validate-input" data-validate="PRENOM est requis">
                    <input class="input2" type="text" id="prenom" name="prenom" value="" required>
				    <span class="focus-input2" data-placeholder="PRENOM"></span>
					</div>
    
  					<div class="wrap-input2 validate-input" data-validate="Telephone est requis">
                    <input class="input2" type="tel" id="tel" name="tel" maxlength="10" value="" placeholder="" required/>
				    <span class="focus-input2" data-placeholder="TELEPHONE"></span>
					</div>

   					<div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input2" type="text" value="" id="mail" name="mail" required/> 
				    <span class="focus-input2" data-placeholder="EMAIL"></span>
					</div>
        
                    <div class="wrap-input2 validate-input" data-validate = "Message is required">
				    <textarea class="input2" id="message" name="message" placeholder="" required></textarea>
				    <span class="focus-input2" data-placeholder="MESSAGE"></span>
					</div>

        


		            <div class="container-contact2-form-btn">
				    <div class="wrap-contact2-form-btn">
				    <div class="contact2-form-bgbtn"></div>
				    <input class="contact2-form-btn" type="submit" value="Envoyer votre message" id="submit" name="submit" /> 
				    </div>
					</div>
        
           
                          
     </form>

                       
        </div> 
                                 
        </div> 
        </div> 
        
        

        
    

    <footer>
<?php include 'footer.php'; ?>
    </footer>
          	<script src="js/jquery/jquery-3.2.1.min.js"></script>

	<script src="js/main.js"></script>
</body>
</html>