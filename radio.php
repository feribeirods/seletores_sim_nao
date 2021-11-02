<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <style>
    html {
  text-align: center;
  font-family: Georgia, "Times New Roman", serif;
}
.btn-switch {
  font-size: 0.5em;
	position: relative;
	display: inline-block;		
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
.btn-switch__radio {
	display: none;
}
.btn-switch__label {
	display: inline-block;	
	padding: .75em .5em .75em .75em;
	vertical-align: top;
	font-size: 1em;
	font-weight: 700;
	line-height: 1.5;
	color: rgb(255, 255, 255);
  cursor: pointer;
	transition: color .2s ease-in-out;
}
.btn-switch__label + .btn-switch__label {
  padding-right: .75em;
	padding-left: 0;
}
.btn-switch__txt {
	position: relative;
	z-index: 2;
  display: inline-block;
   min-width: 1.5em;
	opacity: 1;
	pointer-events: none;
	transition: opacity .2s ease-in-out;
}
.btn-switch__radio_no:checked ~ .btn-switch__label_yes .btn-switch__txt,
.btn-switch__radio_yes:checked ~ .btn-switch__label_no .btn-switch__txt {
	opacity: 0;
}
.btn-switch__label:before {
	content: "";
	position: absolute;
	z-index: -1;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background: #f04646;
	border-radius: 1.5em;
	box-shadow: inset 0 .0715em .3572em rgba(43,43,43,.05);
	transition: background .2s ease-in-out;
}
.btn-switch__radio_yes:checked ~ .btn-switch__label:before {
	background: #7ab341;
}
.btn-switch__label_no:after {
	content: "";
	position: absolute;
	z-index: 2;
	top: .5em;
	bottom: .5em;
	left: .5em;
	width: 2em;
	background: #fff;
	border-radius: 1em;	
	pointer-events: none;
	box-shadow: 0 .1429em .2143em rgba(43,43,43,.2), 0 .3572em .3572em rgba(43,43,43,.1);
	transition: left .2s ease-in-out, background .2s ease-in-out;
}
.btn-switch__radio_yes:checked ~ .btn-switch__label_no:after {
	left: calc(100% - 2.5em);
	background: #fff;
}
.btn-switch__radio_no:checked ~ .btn-switch__label_yes:before,
.btn-switch__radio_yes:checked ~ .btn-switch__label_no:before {
	z-index: 1;
}
.btn-switch__radio_yes:checked ~ .btn-switch__label_yes {
	color: #fff;
}

    </style>
</head>
<body>

    <form action="resultado.php" method="post">

		<div style="display: flex; align-items: center;">
			<p class="btn-switch">					
				<input value="certo" type="radio" id="yes_nome" name="dados_cliente_nome" class="btn-switch__radio btn-switch__radio_yes" />
				<input value="errado" type="radio" checked id="no_nome" name="dados_cliente_nome" class="btn-switch__radio btn-switch__radio_no" />		
				<label for="yes_nome" class="btn-switch__label btn-switch__label_yes"><span class="btn-switch__txt"><i class="fas fa-check"></i></span></label>	
				<label for="no_nome" class="btn-switch__label btn-switch__label_no"><span class="btn-switch__txt"><i class="fas fa-times"></i></span></label>							
			</p>
			<span style="margin-left: 5px;">Nome: Carlos José Pedro</span>
		</div>

		<div style="display: flex; align-items: center;">
			<p class="btn-switch">					
				<input value="certo" type="radio" id="yes_email" name="dados_cliente_email" class="btn-switch__radio btn-switch__radio_yes" />
				<input value="errado" type="radio" checked id="no_email" name="dados_cliente_email" class="btn-switch__radio btn-switch__radio_no" />		
				<label for="yes_email" class="btn-switch__label btn-switch__label_yes"><span class="btn-switch__txt"><i class="fas fa-check"></i></span></label>	
				<label for="no_email" class="btn-switch__label btn-switch__label_no"><span class="btn-switch__txt"><i class="fas fa-times"></i></span></label>							
			</p>
			<span style="margin-left: 5px;">E-mail: Carlos@carlos.com</span>
		</div>

		<div style="display: flex; align-items: center;">
			<p class="btn-switch">					
				<input value="certo" type="radio" id="yes_estado" name="dados_cliente_estado" class="btn-switch__radio btn-switch__radio_yes" />
				<input value="errado" type="radio" checked id="no_estado" name="dados_cliente_estado" class="btn-switch__radio btn-switch__radio_no" />		
				<label for="yes_estado" class="btn-switch__label btn-switch__label_yes"><span class="btn-switch__txt"><i class="fas fa-check"></i></span></label>	
				<label for="no_estado" class="btn-switch__label btn-switch__label_no"><span class="btn-switch__txt"><i class="fas fa-times"></i></span></label>							
			</p>
			<span style="margin-left: 5px;">Estado: Santa Catarina</span>
		</div>

		<div style="display: flex; align-items: center;">
			<p class="btn-switch">					
				<input value="certo" type="radio" id="yes_cidade" name="dados_cliente_cidade" class="btn-switch__radio btn-switch__radio_yes" />
				<input value="errado" type="radio" checked id="no_cidade" name="dados_cliente_cidade" class="btn-switch__radio btn-switch__radio_no" />		
				<label for="yes_cidade" class="btn-switch__label btn-switch__label_yes"><span class="btn-switch__txt"><i class="fas fa-check"></i></span></label>	
				<label for="no_cidade" class="btn-switch__label btn-switch__label_no"><span class="btn-switch__txt"><i class="fas fa-times"></i></span></label>							
			</p>
			<span style="margin-left: 5px;">Cidade: Porto Belo</span>
		</div>

		<div style="display: flex; align-items: center;">
			<p class="btn-switch">					
				<input value="certo" type="radio" id="yes_telefone" name="dados_cliente_telefone" class="btn-switch__radio btn-switch__radio_yes" />
				<input value="errado" type="radio" checked id="no_telefone" name="dados_cliente_telefone" class="btn-switch__radio btn-switch__radio_no" />		
				<label for="yes_telefone" class="btn-switch__label btn-switch__label_yes"><span class="btn-switch__txt"><i class="fas fa-check"></i></span></label>	
				<label for="no_telefone" class="btn-switch__label btn-switch__label_no"><span class="btn-switch__txt"><i class="fas fa-times"></i></span></label>							
			</p>
			<span style="margin-left: 5px;">Telefone: (47) 9 9999 9999</span>
		</div>

		<div style="display: flex; align-items: center;">
			<p class="btn-switch">					
				<input value="certo" type="radio" id="yes_nascimento" name="dados_cliente_nascimento" class="btn-switch__radio btn-switch__radio_yes" />
				<input value="errado" type="radio" checked id="no_nascimento" name="dados_cliente_nascimento" class="btn-switch__radio btn-switch__radio_no" />		
				<label for="yes_nascimento" class="btn-switch__label btn-switch__label_yes"><span class="btn-switch__txt"><i class="fas fa-check"></i></span></label>	
				<label for="no_nascimento" class="btn-switch__label btn-switch__label_no"><span class="btn-switch__txt"><i class="fas fa-times"></i></span></label>							
			</p>
			<span style="margin-left: 5px;">Data de Nascimento: 10/10/2010</span>
		</div>

        <button style="display: block;" type="submit">Enviar</button>
    </form>

      <script>
          
      </script>
</body>
</html>