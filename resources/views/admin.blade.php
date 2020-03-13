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
            
            <a class="logo"><img class="oeil" src="images/oeil.png" alt="Logo de notre site"/> MerchAndEyes </a>
            
            <div class="header-right">
                <a  href="login">Logout</a>
            </div>
    </header>




        <div class="pagelogin">

		<div class="supr">
			<form  method="Post" action="{{ route('admin_path') }}">

      @csrf
        
				<span class="contact100-form-title">
					Suprimer
				</span>

				<div class="wrap-input100 validate-input">
                <select class="input100" name="supr" id="select_supr">
                    <option value="">DOIT VENIR DE LA BDD</option>
                    <option value="1">tshirtrose</option>
                    <option value="2">jean1</option>
                </select>
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>
                <div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						ENVOYER / SEND
					</button>
				</div>
			</form>
		</div>



        <div class="supr">
			<form  method="Post" action="{{ route('admin_path') }}">

      @csrf
        
				<span class="contact100-form-title">
					Ajouter :
				</span>

                <div class="wrap-input100 validate-input">
                <select class="input100" name="categorie" id="select_categorie">
                    <option value="">DOIT VENIR DE LA BDD</option>
                    <option value="1">tshirt</option>
                    <option value="2">jean</option>
                    <option value="3">sweat</option>
                </select>
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>

                <div class="wrap-input100 validate-input">
					<input type="text" class="input100 @error('name') is-invalid @enderror" name="name" placeholder="Nom du produit">
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>
					@error('name')
						<div class="invalid-feedback">
							{{ $errors->first('name') }}
						</div>
					@enderror


                <div class="wrap-input100 validate-input">
                <select class="input100" name="prix" id="select_prix">
                    <option value="">DOIT VENIR DE LA BDD</option>
                    <option value="1">35</option>
                    <option value="2">50</option>
                    <option value="3">45</option>
                </select>
					<span class="focus-input100-1"></span>
					<span class="focus-input100-2"></span>
				</div>

                <div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Ajouter
					</button>
				</div>
			</form>
		</div>
	</div>   
    </body>
</html>
