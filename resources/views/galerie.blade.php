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

        <div class="divpink">
            <div class="divcaseblanc">
                <p class="boldcenter">SWEAT</p><p>50€ unitaire</p><p>
                120€ par commande de 3</p>
            </div>
            <div class="divimages">
                   
                    @foreach($produit as $product)
                        @if ($product->categorie_id == 1)
                            <img src={{ $product->image  }} alt= {{ $product->name }}>
                        @endif
                    @endforeach 

            </div>
        </div>
        <div class=divblank>
            <div class="divcaserose">
                <p class="boldcenter">T-SHIRT</p><p>30€ unitaire</p>
                <p>80€ par commande de 3</p>
            </div>
            <div class="divimages">
                    
                    @foreach($produit as $product)
                        @if ($product->categorie_id == 2)
                            <img src={{ $product->image  }} alt= {{ $product->name }}>
                        @endif
                    @endforeach 

            </div>
        </div>
        <div class="divpink">
            <div class="divcaseblanc">
                <p class="boldcenter">JEAN</p><p>45€ unitaire</p><p>
                110€ par commande de 3</p>
            </div>
            <div class="divimages">
                               
                    @foreach($produit as $product)
                        @if ($product->categorie_id == 3)
                            <img src={{ $product->image  }} alt= {{ $product->name }}>
                        @endif
                    @endforeach 
            </div>
        </div>
        <?php echo View::make('parts.footer') ?>
    </body>
</html>
