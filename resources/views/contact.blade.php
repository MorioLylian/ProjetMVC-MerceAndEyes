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

				<div class="wrap-input100 validate-input">
					<input type="text" class="input100 @error('name') is-invalid @enderror" name="name" placeholder="Nom et Prénom (Full name)">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>
					@error('name')
						<div class="invalid-feedback">
							{{ $errors->first('name') }}
						</div>
					@enderror
				<div class="wrap-input100 validate-input">
					<input type="email" class="input100 @error('email') is-invalid @enderror" name="email" placeholder="Email">
					
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
					
				</div>
					@error('email')
						<div class="invalid-feedback">
							{{ $errors->first('email') }}
						</div>
					@enderror
				<div class="wrap-input100 validate-input">
					<textarea type="text" class="input100 @error('message') is-invalid @enderror" name="message" placeholder="Message"></textarea>
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>
					@error('message')
						<div class="invalid-feedback">
							{{ $errors->first('message') }}
						</div>
					@enderror
                <div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						ENVOYER / SEND
					</button>
				</div>
			</form>
		</div>
	</div>   
    <?php echo View::make('parts.footer') ?>
    </body>
</html>
