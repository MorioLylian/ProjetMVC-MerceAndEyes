<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MerchAndEyes</title>


        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 

        <?php echo View::make('parts.style') ?>

    </head>
        <?php echo View::make('parts.header') ?>
    <body>

        <div class="container-contact100">

		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="Post" action="{{ route('contact_path') }}">

      @csrf
        
				<span class="contact100-form-title">
					CONTACT :
				</span>

				<div class="wrap-input100 validate-input" data-validate="Il faut le nom !">
					<input class="input100" type="text" name="name" placeholder="Nom et Prénom (Full name)">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Il faut un mail !">
					<input class="input100" type="text" name="email" placeholder="Email">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Il faut un message ">
					<textarea class="input100" name="message" placeholder="Message"></textarea>
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
    <?php echo View::make('parts.footer') ?>
    </body>
</html>
