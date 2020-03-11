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

        <?php echo View::make('parts.header') ?>





        <div class="container-contact100">

<div class="wrap-contact100">
    <form class="contact100-form validate-form" method="Post" action="{{ route('login_path') }}">

@csrf

        <span class="contact100-form-title">
            LOGIN :
        </span>

        <div class="wrap-input100 validate-input">
            <input type="name" class="input100 @error('name') is-invalid @enderror" name="name" placeholder="Nom">
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
        </div>
            @error('name')
                <div class="invalid-feedback">
                    {{ $errors->first('name') }}
                </div>
            @enderror
        <div class="wrap-input100 validate-input">
            <input type="password" class="input100 @error('password') is-invalid @enderror" name="password" placeholder="Motdepasse">
            
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
            
        </div>
            @error('password')
                <div class="invalid-feedback">
                    {{ $errors->first('password') }}
                </div>
            @enderror
        <div class="container-contact100-form-btn">
            <button class="contact100-form-btn">
                Se connecter
            </button>
        </div>
    </form>
</div>
</div>   










        
        <?php echo View::make('parts.footer') ?>
    </body>
</html>
