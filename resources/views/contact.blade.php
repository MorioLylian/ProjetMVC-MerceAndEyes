<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MerchAndEyes</title>


        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 

        <?php echo View::make('parts.style') ?>

    </head>
    <body>
        <header class="header">
            
            <a class="logo" href="/"><img class="oeil" src="images/oeil.png" alt="Logo de notre site"/> MerchAndEyes </a>
            <div class="header-right">
                <a href="/">Accueil</a>
                <a href="galerie">Galerie</a>
                <a class="active">Contact</a>
            </div>
        </header>
        <div class="container-contact100">

		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="Post" action="{{ route('contact_path') }}">

      @csrf
        
				<span class="contact100-form-title">
					Nous contacter :
				</span>

				<div class="wrap-input100 validate-input" data-validate="Il faut le nom !">
					<input class="input100" type="text" name="name" placeholder="Nom et Prénom">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Il faut un mail !">
					<input class="input100" type="text" name="email" placeholder="Email">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Il faut un message ">
					<textarea class="input100" name="message" placeholder="Votre message"></textarea>
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>
                <div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Envoyer
					</button>
				</div>
			</form>
		</div>
	</div>   
  <footer>
            <div class="footer">
                <div class="flex">
                    <p>Nos Résaux</p>
                    <div class="flex">
                    <a href="https://twitter.com/EyesMerchand"><img class="resaux" src="images/logo_TWITTER.png" alt="Logo de twitter"/></a>
                    <a href="https://www.facebook.com/merchand.eyes.1"><img class="resaux" src="images/logo_FB.png" alt="Logo de facebook"/></a>
                    <a href="https://www.instagram.com/hm"><img class="resaux" src="images/logo_INSTA.png" alt="Logo d'instagram"/></a>
                    </div>
                </div>
                    
                <div>
                    <p>Naviguer vers <a class="violet" href="/"> Accueil </a><a class="violet" href="galerie"> Galerie </a><a class="violet"> Contact </a></p>
                </div>
                    
                <div class="flex">
                    <p>Passer en Anglais</p>
                    <a href="contactANG"><img class="resaux" src="images/logo_ANG.png" alt="Logo Angleterre"/></a>
                </div>
            </div>
        </footer>
    </body>
</html>
