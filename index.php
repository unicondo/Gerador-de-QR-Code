<!DOCTYPE html>
<html lang="pt-BR" >
<head>
  <meta charset="UTF-8">
  <title>Gerador de Código QR</title>
  <link rel="stylesheet" href="css/style.css">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<link rel="manifest" href="./site.webmanifest">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">


</head>
<body>
      <script src="./jquery.js"></script>
  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <!-- <h1><a href="" rel="dofollow">Controle de Acesso de Veículos</a></h1> -->
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              
              <form id="stripe-login">
                  
                <div class="field padding-bottom--24">
                   
                  <label for="text">CONTEÚDO</label>
                  <input type="text" placeholder="Texto, telefone ou site..." id="texto" />
                </div>
            
            <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                 <!-- 
                  <label for="checkbox">
                    <input type="checkbox" name="img" value="P" checked="checked" />
					PNG
                  </label>  -->
                </div>
                <div class="field padding-bottom--24">
                 <input type="submit" style="background-color: rgb(84, 105, 212);
  box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.12) 0px 1px 1px 0px, rgb(84, 105, 212) 0px 0px 0px 1px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(60, 66, 87, 0.08) 0px 2px 5px 0px;
  border: none;
  color: #fff;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-weight: 600;
  font-size: 16px;
  line-height: 28px;
  padding: 8px 16px;
  width: 100%;
  min-height: 44px;
  border: unset;
  border-radius: 4px;
  cursor: pointer;" id="botao" value="Gerar QR Code" id="button" />
                  
                </div>
 	
		
              </form>
             <center> <?php
			$aux = 'qr_img0.50j/php/qr_img.php?';
			$aux .= 'd=Aguardando dados&';
			$aux .= 'e=H&';
			$aux .= 's=10&';
			$aux .= 't=J';
		?>
		</center>
			<img src="<?php echo $aux; ?>" />
            </div>
          </div>
          <div class="footer-link padding-top--24">
            <span>Desenvolvido por: <a href="https://allvz.com.br">Bruno Ferreira Alves</a>.
            <br /><img src="https://camo.githubusercontent.com/8b923e3e5ed2c92f88089c16ffd05939a524093b1558c47dfa98dfdfe5e0766c/68747470733a2f2f6d6c796c696565663072666e2e692e6f7074696d6f6c652e636f6d2f63623a514134542e31616537342f773a6175746f2f683a35302f713a6d6175746f2f663a617669662f68747470733a2f2f616c6c767a2e636f6d2e62722f77702d636f6e74656e742f75706c6f6164732f323032322f31302f6c6f676f2d636f6d6d6f6e2d312e77656270" alt="Logo" data-canonical-src="https://mlylieef0rfn.i.optimole.com/cb:QA4T.1ae74/w:auto/h:50/q:mauto/f:avif/https://allvz.com.br/wp-content/uploads/2022/10/logo-common-1.webp" style="max-width: 100%;"></span>
                      </div>
        </div>
      </div>
    </div>
  </div>
  <div class="field padding-bottom--24 hidden">
                  <div class="grid--50-50">
                    <label for="text">Configurações</label>   
                  </div>
                  <select id="nivel">
					
						<option value="H">Nível redundâcia H</option>
				</select>
				<select id="pixels">
					<option value="8">quadradinho de 10px</option>
				</select>
                </div>
 <script type="text/javascript" src="./jquery-1.10.2.min.js"></script>
		<script type="text/javascript">
			$('#botao').click(function(e){
				e.preventDefault();
				var texto = $('#texto').val();
				var nivel = $('#nivel').val();
				var pixels = $('#pixels').val();
				var tipo = $('input[name="img"]:checked').val();
				
				if(texto.length == 0){
					alert('Informe um texto');
					return(false);
				}
				
				$('img').attr('src', 'qr_img0.50j/php/qr_img.php?d='+texto+'&e='+nivel+'&s='+pixels+'&t='+tipo);
			});
			

			
			
		</script>
		

		
</body>
</html>
