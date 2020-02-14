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
         <?php echo View::make('parts.headerANG') ?>

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
    <?php echo View::make('parts.footerANG') ?>
    </body>
</html>
