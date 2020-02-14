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
            
            <a class="logo" href="welcomeANG"><img class="oeil" src="images/oeil.png" alt="Logo de notre site"/> MerchAndEyes </a>
            <div class="header-right">
                <a href="welcomeANG">Home</a>
                <a href="galerieANG">Gallery</a>
                <a class="active">Contact</a>
            </div>
        </header>
        <div class="container-contact100">

		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Contact us :
				</span>

				<div class="wrap-input100 validate-input" data-validate="You need your name !">
					<input class="input100" type="text" name="name" placeholder="Full name">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "You need your e-mail !">
					<input class="input100" type="text" name="email" placeholder="E-mail">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Type something please ! ">
					<textarea class="input100" name="message" placeholder="Your message"></textarea>
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>
                <div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Send
					</button>
				</div>
			</form>
		</div>
	</div>   
  <footer>
            <div class="footer">
                <div class="flex">
                    <p>Our social networks</p>
                    <div class="flex">
                    <a ><img class="resaux" src="images/logo_TWITTER.png" alt="Logo de twitter"/></a>
                    <a ><img class="resaux" src="images/logo_FB.png" alt="Logo de facebook"/></a>
                    <a ><img class="resaux" src="images/logo_INSTA.png" alt="Logo d'instagram"/></a>
                    </div>
                </div>
                    
                <div>
                    <p>Go to<a class="violet" href="welcomeANG"> Home </a><a class="violet" href="galerieANG"> Gallery </a><a class="violet"> Contact </a></p>
                </div>
                    
                <div class="flex">
                    <p>Display French site</p>
                    <a href="contact"><img class="resaux" src="images/logo_FR.png" alt="Logo France"/></a>
                </div>
            </div>
        </footer>
    </body>
</html>
