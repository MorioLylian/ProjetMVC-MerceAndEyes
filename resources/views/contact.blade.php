<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MerchAndEyes</title>


        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 

        <style>
            
            @media (max-width: 576px) {
            .wrap-contact100 {
             padding: 62px 15px 65px 15px;
            }

            }               
            body { margin:0px !important;}

            .header {
                overflow: hidden;
                padding: 20px 10px;
                border-color : #8d3c93;
                background-color: white;
                box-shadow: 2px 2px 6px black;
                border-style: solid;
                border-width: 2px;
                margin:0px !important;
                }

            .header a {
                float: left;
                color: #8d3c93;
                padding: 12px;
                text-decoration: none;
                font-size: 18px;
                line-height: 25px;
                border-radius: 4px;
            }

            .header a.logo {
                font-size: 25px;
                font-weight: bold;
            }

            .oeil {
                width:10%;
                min-width:30px;
            }

            .logo :hover{
                cursor:pointer;
            }

            .header-right a:hover {
                text-decoration:underline;
                cursor:pointer;
            }

            .header a.active {
                background-color: #8d3c93;
                color: white;
            }

            .header-right {
                float: right;
            }

            @media screen and (max-width: 500px) {
                .header a {
                    float: none;
                    display: block;
                    text-align: left;
                }
                .header-right {
                    float: none;
                }
            }
            input {
	outline: none;
	border: none;
}

textarea {
  outline: none;
  border: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}


input::-webkit-input-placeholder { color: #999999;}
input:-moz-placeholder { color: #999999;}
input::-moz-placeholder { color: #999999;}
input:-ms-input-placeholder { color: #999999;}

textarea::-webkit-input-placeholder { color: #999999;}
textarea:-moz-placeholder { color: #999999;}
textarea::-moz-placeholder { color: #999999;}
textarea:-ms-input-placeholder { color: #999999;}

/*---------------------------------------------*/
button {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}

iframe {
	border: none !important;
}




/*//////////////////////////////////////////////////////////////////
[ Contact ]*/

.container-contact100 {
  min-height: 5px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
  background: transparent;
  position: relative;
  z-index: 1;
}

.contact100-map {
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
}

.wrap-contact100 {
  width: 500px;
  background: #fff;
  border-radius: 10px;
  overflow: hidden;
  padding: 62px 55px 65px 55px;

  box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
  -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
}


/*==================================================================
[ Form ]*/

.contact100-form {
  width: 100%;
}

.contact100-form-title {
  display: block;
  font-family: JosefinSans-Bold;
  font-size: 30px;
  color: #333333;
  line-height: 1.2;
  text-align: left;
  padding-bottom: 30px;
}

/*------------------------------------------------------------------
[ Input ]*/

.wrap-input100 {
  width: 100%;
  position: relative;
  background-color: #fff;
  border: 1px solid #e6e6e6;
  margin-bottom: 17px;
}

.input100 {
  display: block;
  width: 100%;
  background: transparent;
  font-family: JosefinSans-Bold;
  font-size: 15px;
  color: #8d3c93;
  line-height: 1.2;
}


/*---------------------------------------------*/
input.input100 {
  height: 62px;
  padding: 0 20px 0 23px;
}


textarea.input100 {
  min-height: 199px;
  padding: 19px 20px 0 23px;
}

/*------------------------------------------------------------------
[ Focus Input ]*/

.focus-input100-1, 
.focus-input100-2 {
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
}

.focus-input100-1::before,
.focus-input100-2::before {
  content: "";
  display: block;
  position: absolute;
  width: 0;
  height: 1px;
  background-color: #8d3c93;
}

.focus-input100-1::before {
  top: -1px;
  left: 0;
}

.focus-input100-2::before {
  bottom: -1px;
  right: 0;
}

.focus-input100-1::after,
.focus-input100-2::after {
  content: "";
  display: block;
  position: absolute;
  width: 1px;
  height: 0;
  background-color: #8d3c93;
}

.focus-input100-1::after {
  top: 0;
  right: -1px;
}

.focus-input100-2::after {
  bottom: 0;
  left: -1px;
}

.input100:focus + .focus-input100-1::before {
  -webkit-animation: full-w 0.2s linear 0s;
  animation: full-w 0.2s linear 0s;
  animation-fill-mode: both;
  -webkit-animation-fill-mode: both;
}

.input100:focus + .focus-input100-1::after {
  -webkit-animation: full-h 0.1s linear 0.2s;
  animation: full-h 0.1s linear 0.2s;
  animation-fill-mode: both;
  -webkit-animation-fill-mode: both;
}

.input100:focus + .focus-input100-1 + .focus-input100-2::before {
  -webkit-animation: full-w 0.2s linear 0.3s;
  animation: full-w 0.2s linear 0.3s;
  animation-fill-mode: both;
  -webkit-animation-fill-mode: both;
}

.input100:focus + .focus-input100-1 + .focus-input100-2::after {
  -webkit-animation: full-h 0.1s linear 0.5s;
  animation: full-h 0.1s linear 0.5s;
  animation-fill-mode: both;
  -webkit-animation-fill-mode: both;
}


@keyframes full-w {
  to {
    width: calc(100% + 1px);
  }
}

@keyframes full-h {
  to {
    height: calc(100% + 1px);
  }
}

/*------------------------------------------------------------------
[ Button ]*/
.container-contact100-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  margin-left: 32%;
  margin-top: 15%;
  padding-top: 13px;
}

.contact100-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  min-width: 160px;
  height: 42px;
  background-color: #8d3c93;

  font-family: JosefinSans-Bold;
  font-size: 14px;
  color: #fff;
  line-height: 1.2;
  text-transform: uppercase;
  padding-top: 5px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.contact100-form-btn:hover {
  background-color: #4e2352;
}





/*------------------------------------------------------------------
[ Alert validate ]*/

.validate-input {
  position: relative;
}

.alert-validate::before {
  content: attr(data-validate);
  position: absolute;
  max-width: 70%;
  background-color: #fff;
  border: 1px solid #8d3c93;
  border-radius: 2px;
  padding: 4px 25px 4px 10px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 2px;
  pointer-events: none;

  font-family: JosefinSans-Bold;
  color: #8d3c93;
  font-size: 13px;
  line-height: 1.4;
  text-align: left;

  visibility: hidden;
  opacity: 0;

  -webkit-transition: opacity 0.4s;
  -o-transition: opacity 0.4s;
  -moz-transition: opacity 0.4s;
  transition: opacity 0.4s;
}

.alert-validate::after {
  content: "\f12a";
  font-family: FontAwesome;
  display: block;
  position: absolute;
  color: #8d3c93;
  font-size: 16px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 8px;
}

.alert-validate:hover:before {
  visibility: visible;
  opacity: 1;
}

@media (max-width: 992px) {
  .alert-validate::before {
    visibility: visible;
    opacity: 1;
  }
}




.flex{
                display:flex;
            }

            .flex a:hover{
                cursor:pointer;
            }

            .resaux{
                max-width:50px;
                margin-left:1%;
            }
            
footer{
                overflow: hidden;
                padding: 20px 10px;
                border-color : #8d3c93;
                background-color: white;
                box-shadow: 2px -2px 3px black;
                border-style: solid;
                border-width: 2px;
                margin:0px !important;
                
            }

            footer div{
                width:50%;
                text-align:center; 
            }

            .footer{
                display:flex;
                width:70%;
                margin-left:15%;
            }

            .violet{
                color:#8d3c93;
                cursor:pointer;
            }

            footer a:hover{
                text-decoration:underline;
            }

            a:focus {
	        outline: none !important;
            }   

            a:hover {
	        text-decoration: none;
            }


        </style>
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
			<form class="contact100-form validate-form">
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
                    <a ><img class="resaux" src="images/logo_TWITTER.png" alt="Logo de twitter"/></a>
                    <a ><img class="resaux" src="images/logo_FB.png" alt="Logo de facebook"/></a>
                    <a ><img class="resaux" src="images/logo_INSTA.png" alt="Logo d'instagram"/></a>
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
