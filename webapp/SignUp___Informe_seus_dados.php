<?php
require '../crud.php';
$crud_class = new crud_application();

if(isset($_POST['email']))
{
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['password'];
    $c_senha = $_POST['password_confirm'];

    if($senha == $c_senha)
    {
        session_start();
        $_SESSION['mail'] = $email;
        $nome = $nome . " " . $sobrenome;
        $str_query = "INSERT INTO sindico(nome_sindico, email_sindico, telefone_sindico, id_payment, senha_sindico) VALUES('$nome', '$email', '$telefone', 'NULL', '$senha')";
        echo $str_query;
        $btn_return = $crud_class->delete_insert_update($str_query);
        if(!$btn_return)
        {
            echo 'Error to process the information';
        }
    }
    else
    {
        echo 'The Password need equals other passoword';
    }
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>XD html</title>
	<style id="applicationStylesheet" type="text/css">
		body {
			margin: 0;
			padding: 0;
		}

		:root {
			--web-view-ids: SignUp___Informe_seus_dados;
		}

		#SignUp___Informe_seus_dados * {
			margin: 0;
			padding: 0;
		}

		#SignUp___Informe_seus_dados {
			position: absolute;
			box-sizing: border-box;
			transform: translateX(-50%);
			left: 50%;
			background: #E5E5E5;
			width: 1920px;
			height: 1080px;
			background-color: rgba(255, 255, 255, 1);
			overflow: hidden;
			margin: 0;
			padding: 0;
			opacity: 1;
			--web-view-name: SignUp - Informe seus dados;
			--web-view-id: SignUp___Informe_seus_dados;
			--web-enable-deep-linking: true;
		}

		#BG_1 {
			opacity: 1;
			fill: rgba(233, 233, 233, 1);
		}

		.BG_1 {
			position: absolute;
			overflow: visible;
			width: 1920px;
			height: 1080px;
			left: 0px;
			top: 0px;
		}

		#BG_2 {
			opacity: 1;
			fill: rgba(255, 255, 255, 1);
		}

		.BG_2 {
			position: absolute;
			overflow: visible;
			width: 800px;
			height: 1080px;
			left: 560px;
			top: 0px;
		}

		#btn_next {
			opacity: 1;
			position: absolute;
			width: 185px;
			height: 50px;
			left: 868px;
			top: 902px;
			overflow: visible;
		}

		.Ret_ngulo_166 {
			background-color: rgba(0, 172, 255, 1);
			color: white;
		}

		#Avan_ar {
			opacity: 1;
			position: absolute;
			left: 59px;
			top: 14px;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			overflow: visible;
			width: 61px;
			white-space: nowrap;
			text-align: center;
			font-family: Source Sans Pro;
			font-style: normal;
			font-weight: normal;
			font-size: 18px;
			color: rgba(255, 255, 255, 1);
		}

		#Form {
			opacity: 1;
			position: absolute;
			width: 401.249px;
			height: 333.809px;
			left: 760px;
			top: 462px;
			overflow: visible;
		}

		#frist_name {
			opacity: 1;
			position: absolute;
			width: 187.329px;
			height: 30.809px;
			left: 0.92px;
			top: 0px;
			overflow: visible;
		}

		#Nome {
			opacity: 1;
			position: absolute;
			left: 6.08px;
			top: 0px;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			overflow: visible;
			width: 39px;
			white-space: nowrap;
			line-height: 25px;
			margin-top: -5px;
			text-align: left;
			font-family: Source Sans Pro;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(67, 66, 93, 1);
		}

		#Caminho_297 {
			opacity: 1;
			fill: transparent;
			stroke: rgb(233, 233, 240);
			stroke-width: 2px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Caminho_297 {
			transform: matrix(1, 0, 0, 1, 0, 0);
			overflow: visible;
			position: absolute;
			top: 30.809px;
			left: 0px;
			width: 187.329px;
			height: 2px;
		}

		#last_name {
			opacity: 1;
			position: absolute;
			width: 187.329px;
			height: 30.809px;
			left: 213.92px;
			top: 0px;
			overflow: visible;
		}

		#Sobrenome {
			opacity: 1;
			position: absolute;
			left: 6.08px;
			top: 0px;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			overflow: visible;
			width: 74px;
			white-space: nowrap;
			line-height: 25px;
			margin-top: -5px;
			text-align: left;
			font-family: Source Sans Pro;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(67, 66, 93, 1);
		}

		#Caminho_297_A3_Path_2 {
			opacity: 1;
			fill: transparent;
			stroke: rgb(233, 233, 240);
			stroke-width: 2px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Caminho_297_A3_Path_2 {
			transform: matrix(1, 0, 0, 1, 0, 0);
			overflow: visible;
			position: absolute;
			top: 30.809px;
			left: 0px;
			width: 187.33px;
			height: 2px;
		}

		#e_mail {
			opacity: 1;
			position: absolute;
			width: 400px;
			height: 30.809px;
			left: 0px;
			top: 75px;
			overflow: visible;
		}

		#Seu_e_mail {
			opacity: 1;
			position: absolute;
			left: 6.08px;
			top: 0px;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			overflow: visible;
			width: 67px;
			white-space: nowrap;
			line-height: 25px;
			margin-top: -5px;
			text-align: left;
			font-family: Source Sans Pro;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(67, 66, 93, 1);
		}

		#Caminho_297_A3_Path_3 {
			opacity: 1;
			fill: transparent;
			stroke: rgb(233, 233, 240);
			stroke-width: 2px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Caminho_297_A3_Path_3 {
			transform: matrix(1, 0, 0, 1, 0, 0);
			overflow: visible;
			position: absolute;
			top: 30.809px;
			left: 0px;
			width: 400px;
			height: 2px;
		}

		#phone_number {
			opacity: 1;
			position: absolute;
			width: 400px;
			height: 30.809px;
			left: 0px;
			top: 151px;
			overflow: visible;
		}

		#Seu_telefone {
			opacity: 1;
			position: absolute;
			left: 6.08px;
			top: 0px;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			overflow: visible;
			width: 79px;
			white-space: nowrap;
			line-height: 25px;
			margin-top: -5px;
			text-align: left;
			font-family: Source Sans Pro;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(67, 66, 93, 1);
		}

		#Caminho_297_A3_Path_4 {
			opacity: 1;
			fill: transparent;
			stroke: rgb(233, 233, 240);
			stroke-width: 2px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Caminho_297_A3_Path_4 {
			transform: matrix(1, 0, 0, 1, 0, 0);
			overflow: visible;
			position: absolute;
			top: 30.809px;
			left: 0px;
			width: 400px;
			height: 2px;
		}

		#password {
			opacity: 1;
			position: absolute;
			width: 400px;
			height: 30.809px;
			left: 0px;
			top: 227px;
			overflow: visible;
		}

		#Senha {
			opacity: 1;
			position: absolute;
			left: 6.08px;
			top: 0px;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			overflow: visible;
			width: 40px;
			white-space: nowrap;
			line-height: 25px;
			margin-top: -5px;
			text-align: left;
			font-family: Source Sans Pro;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(67, 66, 93, 1);
		}

		#Caminho_297_A3_Path_5 {
			opacity: 1;
			fill: transparent;
			stroke: rgb(233, 233, 240);
			stroke-width: 2px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Caminho_297_A3_Path_5 {
			transform: matrix(1, 0, 0, 1, 0, 0);
			overflow: visible;
			position: absolute;
			top: 30.809px;
			left: 0px;
			width: 400px;
			height: 2px;
		}

		#password_confirm {
			opacity: 1;
			position: absolute;
			width: 400px;
			height: 30.809px;
			left: 0px;
			top: 303px;
			overflow: visible;
		}

		#Confirme_sua_senha {
			opacity: 1;
			position: absolute;
			left: 6.08px;
			top: 0px;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			overflow: visible;
			width: 125px;
			white-space: nowrap;
			line-height: 25px;
			margin-top: -5px;
			text-align: left;
			font-family: Source Sans Pro;
			font-style: normal;
			font-weight: normal;
			font-size: 15px;
			color: rgba(67, 66, 93, 1);
		}

		#Caminho_297_A3_Path_6 {
			opacity: 1;
			fill: transparent;
			stroke: rgb(233, 233, 240);
			stroke-width: 2px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Caminho_297_A3_Path_6 {
			transform: matrix(1, 0, 0, 1, 0, 0);
			overflow: visible;
			position: absolute;
			top: 30.809px;
			left: 0px;
			width: 400px;
			height: 2px;
		}

		#Sign_up_steps {
			opacity: 1;
			position: absolute;
			width: 576px;
			height: 62px;
			left: 672px;
			top: 182px;
			overflow: visible;
		}

		#ID1 {
			opacity: 1;
			position: absolute;
			width: 270.5px;
			height: 62px;
			left: 0px;
			top: 0px;
			overflow: visible;
		}

		#Line {
			opacity: 1;
			fill: rgba(231, 242, 232, 1);
		}

		.Line {
			transform: rotate(90deg);
			overflow: visible;
			position: absolute;
			top: 17.5px;
			left: 70.5px;
			width: 200px;
			height: 3px;
		}

		#step {
			opacity: 1;
			position: absolute;
			width: 106px;
			height: 62px;
			left: 0px;
			top: 0px;
			overflow: visible;
		}

		#Informe_seus_dados {
			opacity: 1;
			position: absolute;
			left: 0px;
			top: 45px;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			overflow: visible;
			width: 107px;
			white-space: nowrap;
			line-height: 20px;
			margin-top: -3.5px;
			text-align: center;
			font-family: Source Sans Pro;
			font-style: normal;
			font-weight: normal;
			font-size: 13px;
			color: rgba(77, 79, 92, 1);
		}

		#Ellipse {
			opacity: 1;
			fill: transparent;
			stroke: rgb(17, 153, 26);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse {
			transform: matrix(1, 0, 0, 1, 0, 0);
			overflow: visible;
			position: absolute;
			top: 0px;
			left: 34px;
			width: 38px;
			height: 38px;
		}

		#ID1_A3_Text_9 {
			opacity: 1;
			position: absolute;
			left: 50px;
			top: 11px;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			overflow: visible;
			width: 7px;
			white-space: nowrap;
			text-align: center;
			font-family: Source Sans Pro;
			font-style: normal;
			font-weight: bold;
			font-size: 13px;
			color: rgba(17, 153, 26, 1);
		}

		#ID2 {
			opacity: 1;
			position: absolute;
			width: 307.5px;
			height: 62px;
			left: 199px;
			top: 0px;
			overflow: visible;
		}

		#step_A3_Group_13 {
			opacity: 1;
			position: absolute;
			width: 180px;
			height: 62px;
			left: 0px;
			top: 0px;
			overflow: visible;
		}

		#Informe_os_dados_do_condom_nio {
			opacity: 1;
			position: absolute;
			left: 0px;
			top: 45px;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			overflow: visible;
			width: 181px;
			white-space: nowrap;
			line-height: 20px;
			margin-top: -3.5px;
			text-align: center;
			font-family: Source Sans Pro;
			font-style: normal;
			font-weight: normal;
			font-size: 13px;
			color: rgba(77, 79, 92, 1);
		}

		#Ellipse_A3_Path_9 {
			opacity: 1;
			fill: transparent;
			stroke: rgb(231, 242, 232);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_A3_Path_9 {
			transform: matrix(1, 0, 0, 1, 0, 0);
			overflow: visible;
			position: absolute;
			top: 0px;
			left: 71px;
			width: 38px;
			height: 38px;
		}

		#ID2_A3_Text_11 {
			opacity: 1;
			position: absolute;
			left: 87px;
			top: 11px;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			overflow: visible;
			width: 7px;
			white-space: nowrap;
			text-align: center;
			font-family: Source Sans Pro;
			font-style: normal;
			font-weight: bold;
			font-size: 13px;
			color: rgba(231, 242, 232, 1);
		}

		#Line_A3_Path_10 {
			opacity: 1;
			fill: rgba(231, 242, 232, 1);
		}

		.Line_A3_Path_10 {
			transform: rotate(90deg);
			overflow: visible;
			position: absolute;
			top: 17.5px;
			left: 107.5px;
			width: 200px;
			height: 3px;
		}

		#ID3 {
			opacity: 1;
			position: absolute;
			width: 102px;
			height: 62px;
			left: 474px;
			top: 0px;
			overflow: visible;
		}

		#step_A3_Group_15 {
			opacity: 1;
			position: absolute;
			width: 102px;
			height: 62px;
			left: 0px;
			top: 0px;
			overflow: visible;
		}

		#Agende_a_inspe__o {
			opacity: 1;
			position: absolute;
			left: 0px;
			top: 45px;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			overflow: visible;
			width: 103px;
			white-space: nowrap;
			line-height: 20px;
			margin-top: -3.5px;
			text-align: center;
			font-family: Source Sans Pro;
			font-style: normal;
			font-weight: normal;
			font-size: 13px;
			color: rgba(77, 79, 92, 1);
		}

		#Ellipse_A3_Path_11 {
			opacity: 1;
			fill: transparent;
			stroke: rgb(231, 242, 232);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_A3_Path_11 {
			transform: matrix(1, 0, 0, 1, 0, 0);
			overflow: visible;
			position: absolute;
			top: 0px;
			left: 32px;
			width: 38px;
			height: 38px;
		}

		#ID3_A3_Text_13 {
			opacity: 1;
			position: absolute;
			left: 48px;
			top: 11px;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			overflow: visible;
			width: 7px;
			white-space: nowrap;
			text-align: center;
			font-family: Source Sans Pro;
			font-style: normal;
			font-weight: bold;
			font-size: 13px;
			color: rgba(231, 242, 232, 1);
		}

		#Para_come_ar__informe_seus_dad {
			opacity: 0.5;
			position: absolute;
			left: 798px;
			top: 333px;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			overflow: visible;
			width: 325px;
			white-space: nowrap;
			line-height: 22px;
			margin-top: -2px;
			text-align: center;
			font-family: Source Sans Pro;
			font-style: normal;
			font-weight: normal;
			font-size: 18px;
			color: rgba(77, 79, 92, 1);
		}

		#Logo {
			opacity: 1;
			position: absolute;
			left: 879px;
			top: 72px;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			overflow: visible;
			width: 163px;
			white-space: nowrap;
			text-align: center;
			font-family: Source Sans Pro;
			font-style: normal;
			font-weight: bold;
			font-size: 35px;
			color: rgba(67, 66, 93, 1);
			letter-spacing: 2px;
		}
	</style>
</head>

<body>
	<div id="SignUp___Informe_seus_dados">
		<svg class="BG_1">
			<rect id="BG_1" rx="0" ry="0" x="0" y="0" width="1920" height="1080">
			</rect>
		</svg>
		<svg class="BG_2">
			<rect id="BG_2" rx="0" ry="0" x="0" y="0" width="800" height="1080">
			</rect>
		</svg>
		<button id="btn_next" type="submit" form="form_sindico" class="Ret_ngulo_166">
			Avançar
        </button>
        <form method="POST" id="form_sindico">
		<div id="Form">
			<div class="row">
				<div class="col-sm">
					<div id="frist_name">
						<textarea style="border: none;outline: none; resize: none;" placeholder="Nome" rows="1"
							cols="35" name="nome"></textarea>

						<svg class="Caminho_297" viewBox="-835.08 2509.809 187.329 2">
							<path id="Caminho_297"
								d="M -835.0799560546875 2509.80859375 C -835.0799560546875 2509.80859375 -647.7506713867188 2509.80859375 -647.7506713867188 2509.80859375">
							</path>
						</svg>
					</div>
				</div>
				<div class="col-sm">
					<div id="last_name">

						<textarea style="border: none;outline: none; resize: none;" placeholder="Sobrenome" rows="1"
							cols="35" name="sobrenome"></textarea>

						<svg class="Caminho_297_A3_Path_2" viewBox="-835.08 2509.809 187.329 2">
							<path id="Caminho_297_A3_Path_2"
								d="M -835.0799560546875 2509.80859375 C -835.0799560546875 2509.80859375 -647.7506713867188 2509.80859375 -647.7506713867188 2509.80859375">
							</path>
						</svg>
					</div>
				</div>
				<div class="col-sm">
					<div id="e_mail">
						<textarea style="border: none;outline: none; resize: none;" placeholder="E-mail" rows="1"
							cols="35" name="email"></textarea>

						<svg class="Caminho_297_A3_Path_3" viewBox="-835.08 2509.809 400 2">
							<path id="Caminho_297_A3_Path_3"
								d="M -835.0799560546875 2509.80859375 C -835.0799560546875 2509.80859375 -435.0799560546875 2509.80859375 -435.0799560546875 2509.80859375">
							</path>
						</svg>
					</div>
				</div>
				<div class="col-sm">
					<div id="phone_number">
						<textarea style="border: none;outline: none; resize: none;" placeholder="telefone" rows="1"
							cols="35" name="telefone"></textarea>
						<svg class="Caminho_297_A3_Path_4" viewBox="-835.08 2509.809 400 2">
							<path id="Caminho_297_A3_Path_4"
								d="M -835.0799560546875 2509.80859375 C -835.0799560546875 2509.80859375 -435.0799560546875 2509.80859375 -435.0799560546875 2509.80859375">
							</path>
						</svg>
					</div>
                </div>				 
                
				<div class="col-sm">
					<div id="password">
						<input style="border: none;outline: none; resize: none;" placeholder="Senha" rows="1"
							type="password" name="password" cols="35" /> 

						<svg class="Caminho_297_A3_Path_5" viewBox="-835.08 2509.809 400 2">
							<path id="Caminho_297_A3_Path_5"
								d="M -835.0799560546875 2509.80859375 C -835.0799560546875 2509.80859375 -435.0799560546875 2509.80859375 -435.0799560546875 2509.80859375">
							</path>
						</svg>
					</div>
				</div>
				<div class="col-sm">
					<div id="password_confirm">
							<input style="border: none;outline: none; resize: none;" placeholder="Confirme sua senha" rows="1"
							type="password" name="password_confirm" cols="35" />
					 
						<svg class="Caminho_297_A3_Path_6" viewBox="-835.08 2509.809 400 2">
							<path id="Caminho_297_A3_Path_6"
								d="M -835.0799560546875 2509.80859375 C -835.0799560546875 2509.80859375 -435.0799560546875 2509.80859375 -435.0799560546875 2509.80859375">
							</path>
						</svg>
					</div>
				</div>
			</div>
        </div>
        </form>
		<div id="Sign_up_steps">
			<div id="ID1">
				<svg class="Line" viewBox="0 0 3 200">
					<path id="Line" d="M 0 0 L 3 0 L 3 200 L 0 200 L 0 0 Z">
					</path>
				</svg>
				<div id="step">
					<div id="Informe_seus_dados">
						<span>Informe seus dados</span>
					</div>
					<svg class="Ellipse" viewBox="0 0 38 38">
						<path id="Ellipse"
							d="M 19 0 C 29.493408203125 0 38 8.506590843200684 38 19 C 38 29.493408203125 29.493408203125 38 19 38 C 8.506590843200684 38 0 29.493408203125 0 19 C 0 8.506590843200684 8.506590843200684 0 19 0 Z">
						</path>
					</svg>
					<div id="ID1_A3_Text_9">
						<span>1</span>
					</div>
				</div>
			</div>
			<div id="ID2">
				<div id="step_A3_Group_13">
					<div id="Informe_os_dados_do_condom_nio">
						<span>Informe os dados do condomínio</span>
					</div>
					<svg class="Ellipse_A3_Path_9" viewBox="0 0 38 38">
						<path id="Ellipse_A3_Path_9"
							d="M 19 0 C 29.493408203125 0 38 8.506590843200684 38 19 C 38 29.493408203125 29.493408203125 38 19 38 C 8.506590843200684 38 0 29.493408203125 0 19 C 0 8.506590843200684 8.506590843200684 0 19 0 Z">
						</path>
					</svg>
					<div id="ID2_A3_Text_11">
						<span>2</span>
					</div>
				</div>
				<svg class="Line_A3_Path_10" viewBox="0 0 3 200">
					<path id="Line_A3_Path_10" d="M 0 0 L 3 0 L 3 200 L 0 200 L 0 0 Z">
					</path>
				</svg>
			</div>
			<div id="ID3">
				<div id="step_A3_Group_15">
					<div id="Agende_a_inspe__o">
						<span>Agende a inspeção</span>
					</div>
					<svg class="Ellipse_A3_Path_11" viewBox="0 0 38 38">
						<path id="Ellipse_A3_Path_11"
							d="M 19 0 C 29.493408203125 0 38 8.506590843200684 38 19 C 38 29.493408203125 29.493408203125 38 19 38 C 8.506590843200684 38 0 29.493408203125 0 19 C 0 8.506590843200684 8.506590843200684 0 19 0 Z">
						</path>
					</svg>
					<div id="ID3_A3_Text_13">
						<span>3</span>
					</div>
				</div>
			</div>
		</div>
		<div id="Para_come_ar__informe_seus_dad">
			<span>Para começar, informe seus dados pessoais<br />e a senha que você deseja usar no sistema.</span>
		</div>
		<div id="Logo">
			<span>sistema</span>
		</div>
	</div>
</body>

</html>