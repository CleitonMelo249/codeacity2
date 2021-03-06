<?php
require '../crud.php';
$crud_class = new crud_application();
session_start();
if (isset($_POST['nome_condominio']) && isset($_SESSION['mail'])) {
	$nome_condominio = $_POST['nome_condominio'];
	$tipo = "Condominio";
	$cnpj = $_POST['cnpj'];
	$endereco_condominio = $_POST['endereco_condominio'];
	$numero_blocos = $_POST['numero_blocos'];
	$numero_pavimentos = $_POST['numero_pavimentos'];
	$numero_apartamentos = $_POST['numero_apartamentos'];
	$idade_condominio = 20;
	$area_construida = $_POST['area_construida'];
	$area_total_uso = $_POST['area_total_uso'];
	$get_mail = $_SESSION['mail'];
	$call_id = "SELECT id_sindico FROM sindico WHERE email_sindico = '$get_mail'";
	$get_id = $crud_class->call_value($call_id);
	$xgetid = $get_id['id_sindico'];
	$str_query = "INSERT INTO condominios(id_sindico, nome_condominio, tipo, cnpj, endereco_condominio, numero_blocos ,numero_pavimentos, numero_apartamentos, idade_condominio, area_construida, area_total_uso)
	 VALUES('$xgetid', '$nome_condominio', '$tipo', '$cnpj', '$endereco_condominio', '$numero_blocos', '$numero_pavimentos','$numero_apartamentos', '$idade_condominio', '$area_construida', '$area_total_uso')";
	echo $str_query;
	$btn_return = $crud_class->delete_insert_update($str_query);
	if (!$btn_return) {
		echo 'Error to process the information';
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>signup2</title>
	<style id="applicationStylesheet" type="text/css">
		body {
			margin: 0;
			padding: 0;
		}

		:root {
			--web-view-ids: signup___informa__es_do_condominio;
		}

		#signup___informa__es_do_condominio * {
			margin: 0;
			padding: 0;
		}

		#signup___informa__es_do_condominio {
			position: absolute;
			box-sizing: border-box;
			transform: translateX(-50%);
			left: 50%;
			background: #E5E5E5;
			width: 1920px;
			height: 1216px;
			background-color: rgba(255, 255, 255, 1);
			overflow: hidden;
			margin: 0;
			padding: 0;
			opacity: 1;
			--web-view-name: signup - informações do condominio;
			--web-view-id: signup___informa__es_do_condominio;
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
			height: 1216px;
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
			height: 1216px;
			left: 560px;
			top: 0px;
		}

		#btn_next {
			opacity: 1;
			position: absolute;
			width: 185px;
			height: 50px;
			left: 870px;
			top: 1015px;
			overflow: visible;
		}

		#Ret_ngulo_166 {
			opacity: 1;
			fill: rgba(0, 172, 255, 1);
		}

		.Ret_ngulo_166 {
			position: absolute;
			overflow: visible;
			width: 185px;
			height: 50px;
			left: 0px;
			top: 0px;
		}

		#Avan_ar {
			position: absolute;
			overflow: visible;
			width: 185px;
			height: 50px;
			left: 0px;
			top: 0px;
			opacity: 1;
			color: white;
			background-color: rgba(0, 172, 255, 1);
			border: 0px;
			border-radius: 6px;
		}

		#Form {
			opacity: 1;
			position: absolute;
			width: 400.329px;
			height: 446.809px;
			left: 753.92px;
			top: 457px;
			overflow: visible;
		}

		#area_total {
			opacity: 1;
			position: absolute;
			width: 187.329px;
			height: 30.809px;
			left: 213px;
			top: 416px;
			overflow: visible;
		}

		#_rea_total_de_uso {
			opacity: 1;
			position: absolute;
			left: 6.08px;
			top: 0px;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			overflow: visible;
			width: 106px;
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

		#area_construida {
			opacity: 1;
			position: absolute;
			width: 187.329px;
			height: 30.809px;
			left: 0px;
			top: 416px;
			overflow: visible;
		}

		#_rea_constru_da {
			opacity: 1;
			position: absolute;
			left: 6.08px;
			top: 0px;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			overflow: visible;
			width: 99px;
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
			width: 187.329px;
			height: 2px;
		}

		#apartamentos {
			opacity: 1;
			position: absolute;
			width: 227.933px;
			height: 35px;
			left: 4.16px;
			top: 345px;
			overflow: visible;
		}

		#Caminho_322 {
			opacity: 1;
			fill: rgba(255, 255, 255, 1);
			stroke: rgb(233, 233, 240);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Caminho_322 {
			transform: matrix(1, 0, 0, 1, 0, 0);
			overflow: visible;
			position: absolute;
			top: 0px;
			left: 172.92px;
			width: 55.013px;
			height: 35px;
		}

		#ID10_ {
			opacity: 0.5;
			position: absolute;
			left: 192.92px;
			top: 9px;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			overflow: visible;
			width: 17px;
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

		#N_mero_de_Apartamentos_ {
			opacity: 1;
			position: absolute;
			left: 0px;
			top: 8px;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			overflow: visible;
			width: 166px;
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

		#pavimentos {
			opacity: 1;
			position: absolute;
			width: 227.933px;
			height: 35px;
			left: 4.16px;
			top: 282px;
			overflow: visible;
		}

		#Caminho_322_A3_Path_4 {
			opacity: 1;
			fill: rgba(255, 255, 255, 1);
			stroke: rgb(233, 233, 240);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Caminho_322_A3_Path_4 {
			transform: matrix(1, 0, 0, 1, 0, 0);
			overflow: visible;
			position: absolute;
			top: 0px;
			left: 172.92px;
			width: 55.013px;
			height: 35px;
		}

		#ID10__A3_Text_6 {
			opacity: 0.5;
			position: absolute;
			left: 192.92px;
			top: 9px;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			overflow: visible;
			width: 17px;
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

		#N_mero_de_Pavimentos_ {
			opacity: 1;
			position: absolute;
			left: 0px;
			top: 8px;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			overflow: visible;
			width: 151px;
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

		#blocos {
			opacity: 1;
			position: absolute;
			width: 227.933px;
			height: 35px;
			left: 4.16px;
			top: 219px;
			overflow: visible;
		}

		#Caminho_322_A3_Path_5 {
			opacity: 1;
			fill: rgba(255, 255, 255, 1);
			stroke: rgb(233, 233, 240);
			stroke-width: 1px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Caminho_322_A3_Path_5 {
			transform: matrix(1, 0, 0, 1, 0, 0);
			overflow: visible;
			position: absolute;
			top: 0px;
			left: 172.92px;
			width: 55.013px;
			height: 35px;
		}

		#ID10__A3_Text_8 {
			opacity: 0.5;
			position: absolute;
			left: 192.92px;
			top: 9px;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			overflow: visible;
			width: 17px;
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

		#N_mero_de_Blocos_ {
			opacity: 1;
			position: absolute;
			left: 0px;
			top: 8px;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			overflow: visible;
			width: 119px;
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

		#address {
			opacity: 1;
			position: absolute;
			width: 400px;
			height: 30.809px;
			left: 0.08px;
			top: 152px;
			overflow: visible;
		}

		#Endere_o {
			opacity: 1;
			position: absolute;
			left: 6.08px;
			top: 0px;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			overflow: visible;
			width: 60px;
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

		#cnpj {
			opacity: 1;
			position: absolute;
			width: 400px;
			height: 30.809px;
			left: 0.08px;
			top: 76px;
			overflow: visible;
		}

		#CNPJ {
			opacity: 1;
			position: absolute;
			left: 6.08px;
			top: 0px;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			overflow: visible;
			width: 33px;
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

		#Caminho_297_A3_Path_7 {
			opacity: 1;
			fill: transparent;
			stroke: rgb(233, 233, 240);
			stroke-width: 2px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Caminho_297_A3_Path_7 {
			transform: matrix(1, 0, 0, 1, 0, 0);
			overflow: visible;
			position: absolute;
			top: 30.809px;
			left: 0px;
			width: 400px;
			height: 2px;
		}

		#condo_name {
			opacity: 1;
			position: absolute;
			width: 400px;
			height: 30.809px;
			left: 0.08px;
			top: 0px;
			overflow: visible;
		}

		#Nome_do_condom_nio___pr_dio {
			opacity: 1;
			position: absolute;
			left: 6.08px;
			top: 0px;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			overflow: visible;
			width: 189px;
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

		#Caminho_297_A3_Path_8 {
			opacity: 1;
			fill: transparent;
			stroke: rgb(233, 233, 240);
			stroke-width: 2px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Caminho_297_A3_Path_8 {
			transform: matrix(1, 0, 0, 1, 0, 0);
			overflow: visible;
			position: absolute;
			top: 30.809px;
			left: 0px;
			width: 400px;
			height: 2px;
		}

		#Precisamos_saber_um_pouco_sobr {
			opacity: 0.5;
			position: absolute;
			left: 825px;
			top: 333px;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			overflow: visible;
			width: 271px;
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

		#signup_steps {
			opacity: 1;
			position: absolute;
			width: 576px;
			height: 62px;
			left: 671px;
			top: 182px;
			overflow: visible;
		}

		#Grupo {
			opacity: 1;
			position: absolute;
			width: 270.5px;
			height: 62px;
			left: 0px;
			top: 0px;
			overflow: visible;
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
			fill: rgba(17, 153, 26, 1);
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

		#Caminho_293 {
			opacity: 1;
			fill: transparent;
			stroke: rgb(255, 255, 255);
			stroke-width: 2px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Caminho_293 {
			transform: matrix(1, 0, 0, 1, 0, 0);
			overflow: visible;
			position: absolute;
			top: 15.315px;
			left: 46.471px;
			width: 14.712px;
			height: 10.513px;
		}

		#Line {
			opacity: 1;
			fill: rgba(17, 153, 26, 1);
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

		#Grupo_A3_Group_14 {
			opacity: 1;
			position: absolute;
			width: 307.5px;
			height: 62px;
			left: 199px;
			top: 0px;
			overflow: visible;
		}

		#Line_A3_Path_12 {
			opacity: 1;
			fill: rgba(231, 242, 232, 1);
		}

		.Line_A3_Path_12 {
			transform: rotate(90deg);
			overflow: visible;
			position: absolute;
			top: 17.5px;
			left: 107.5px;
			width: 200px;
			height: 3px;
		}

		#step_A3_Group_15 {
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

		#Ellipse_A3_Path_13 {
			opacity: 1;
			fill: transparent;
			stroke: rgb(17, 153, 26);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_A3_Path_13 {
			transform: matrix(1, 0, 0, 1, 0, 0);
			overflow: visible;
			position: absolute;
			top: 0px;
			left: 71px;
			width: 38px;
			height: 38px;
		}

		#ID2 {
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
			color: rgba(17, 153, 26, 1);
		}

		#Grupo_A3_Group_16 {
			opacity: 1;
			position: absolute;
			width: 102px;
			height: 62px;
			left: 474px;
			top: 0px;
			overflow: visible;
		}

		#step_A3_Group_17 {
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

		#Ellipse_A3_Path_14 {
			opacity: 1;
			fill: transparent;
			stroke: rgb(231, 242, 232);
			stroke-width: 3px;
			stroke-linejoin: miter;
			stroke-linecap: butt;
			stroke-miterlimit: 4;
			shape-rendering: auto;
		}

		.Ellipse_A3_Path_14 {
			transform: matrix(1, 0, 0, 1, 0, 0);
			overflow: visible;
			position: absolute;
			top: 0px;
			left: 32px;
			width: 38px;
			height: 38px;
		}

		#ID3 {
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

		#Logo {
			opacity: 1;
			position: absolute;
			left: 873px;
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

		input[type='number'] {
			-moz-appearance: textfield;
		}

		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button {
			-webkit-appearance: none;
		}
	</style>
</head>

<body>
	<div id="signup___informa__es_do_condominio">
		<svg class="BG_1">
			<rect id="BG_1" rx="0" ry="0" x="0" y="0" width="1920" height="1216">
			</rect>
		</svg>
		<svg class="BG_2">
			<rect id="BG_2" rx="0" ry="0" x="0" y="0" width="800" height="1216">
			</rect>
		</svg>
		<div id="btn_next">

			<button type="submit" form="form_condominio" id="Avan_ar">
				Avançar
			</button>

		</div>
		<form method="POST" id="form_condominio">
			<div id="Form">

				<div id="area_total">

					<input style="border: none;outline: none; resize: none;" name="area_total_uso" placeholder="Área total de uso" rows="1" type="number" cols="35" />


					<svg class="Caminho_297" viewBox="-835.08 2509.809 187.329 2">
						<path id="Caminho_297" d="M -835.0799560546875 2509.80859375 C -835.0799560546875 2509.80859375 -647.7506713867188 2509.80859375 -647.7506713867188 2509.80859375">
						</path>
					</svg>
				</div>

				<div id="area_construida">
					<input style="border: none;outline: none; resize: none;"  placeholder="Área construída" name="area_construida" rows="1" type="number" cols="35" />


					<svg class="Caminho_297_A3_Path_2" viewBox="-835.08 2509.809 187.329 2">
						<path id="Caminho_297_A3_Path_2" d="M -835.0799560546875 2509.80859375 C -835.0799560546875 2509.80859375 -647.7506713867188 2509.80859375 -647.7506713867188 2509.80859375">
						</path>
					</svg>
				</div>
				<div id="apartamentos">
					<svg class="Caminho_297_A3_Path_7" viewBox="-835.08 2509.809 400 2">
						<path id="Caminho_297_A3_Path_7" d="M -835.0799560546875 2509.80859375 C -835.0799560546875 2509.80859375 -435.0799560546875 2509.80859375 -435.0799560546875 2509.80859375">
						</path>
					</svg>
					<input style="border: none;outline: none; resize: none;" name="numero_apartamentos" placeholder="Número de Apartamentos" rows="1" type="number" cols="35" />


				</div>
				<div id="pavimentos">
					<svg class="Caminho_297_A3_Path_7" viewBox="-835.08 2509.809 400 2">
						<path id="Caminho_297_A3_Path_7" d="M -835.0799560546875 2509.80859375 C -835.0799560546875 2509.80859375 -435.0799560546875 2509.80859375 -435.0799560546875 2509.80859375">
						</path>
					</svg>
					<input style="border: none;outline: none; resize: none;" name="numero_pavimentos" placeholder="Número de Pavimentos" rows="1" type="number" cols="35" />

				</div>
				<div id="blocos">
					<svg class="Caminho_297_A3_Path_7" viewBox="-835.08 2509.809 400 2">
						<path id="Caminho_297_A3_Path_7" d="M -835.0799560546875 2509.80859375 C -835.0799560546875 2509.80859375 -435.0799560546875 2509.80859375 -435.0799560546875 2509.80859375">
						</path>
					</svg>
					<input style="border: none;outline: none; resize: none;" name="numero_blocos" placeholder="Número de Blocos" rows="1" type="number" cols="35" />


				</div>
				<div id="address">
					<textarea style="border: none;outline: none; resize: none;" name="endereco_condominio" placeholder="Endereço" rows="1" cols="35"></textarea>

					<svg class="Caminho_297_A3_Path_6" viewBox="-835.08 2509.809 400 2">
						<path id="Caminho_297_A3_Path_6" d="M -835.0799560546875 2509.80859375 C -835.0799560546875 2509.80859375 -435.0799560546875 2509.80859375 -435.0799560546875 2509.80859375">
						</path>
					</svg>
				</div>
				<div id="cnpj">
					<textarea style="border: none;outline: none; resize: none;" name="cnpj" placeholder="CNPJ" rows="1" cols="35"></textarea>

					<svg class="Caminho_297_A3_Path_7" viewBox="-835.08 2509.809 400 2">
						<path id="Caminho_297_A3_Path_7" d="M -835.0799560546875 2509.80859375 C -835.0799560546875 2509.80859375 -435.0799560546875 2509.80859375 -435.0799560546875 2509.80859375">
						</path>
					</svg>
				</div>
				<div id="condo_name">
					<textarea style="border: none;outline: none; resize: none;" name="nome_condominio" placeholder="Nome do condomínio / prédio" rows="1" cols="35"></textarea>

					<svg class="Caminho_297_A3_Path_8" viewBox="-835.08 2509.809 400 2">
						<path id="Caminho_297_A3_Path_8" d="M -835.0799560546875 2509.80859375 C -835.0799560546875 2509.80859375 -435.0799560546875 2509.80859375 -435.0799560546875 2509.80859375">
						</path>
					</svg>
				</div>
			</div>
		</form>
		<div id="Precisamos_saber_um_pouco_sobr">
			<span>Precisamos saber um pouco sobre o<br />condomínio que você gerencia.</span>
		</div>
		<div id="signup_steps">
			<div id="Grupo">
				<div id="step">
					<div id="Informe_seus_dados">
						<span>Informe seus dados</span>
					</div>
					<svg class="Ellipse" viewBox="0 0 38 38">
						<path id="Ellipse" d="M 19 0 C 29.493408203125 0 38 8.506590843200684 38 19 C 38 29.493408203125 29.493408203125 38 19 38 C 8.506590843200684 38 0 29.493408203125 0 19 C 0 8.506590843200684 8.506590843200684 0 19 0 Z">
						</path>
					</svg>
					<svg class="Caminho_293" viewBox="1187.471 714.315 13.302 8.396">
						<path id="Caminho_293" d="M 1187.47119140625 717.879150390625 C 1187.47119140625 717.879150390625 1192.366821289063 722.711669921875 1192.366821289063 722.711669921875 C 1192.366821289063 722.711669921875 1200.773559570313 714.315185546875 1200.773559570313 714.315185546875">
						</path>
					</svg>
				</div>
				<svg class="Line" viewBox="0 0 3 200">
					<path id="Line" d="M 0 0 L 3 0 L 3 200 L 0 200 L 0 0 Z">
					</path>
				</svg>
			</div>
			<div id="Grupo_A3_Group_14">
				<svg class="Line_A3_Path_12" viewBox="0 0 3 200">
					<path id="Line_A3_Path_12" d="M 0 0 L 3 0 L 3 200 L 0 200 L 0 0 Z">
					</path>
				</svg>
				<div id="step_A3_Group_15">
					<div id="Informe_os_dados_do_condom_nio">
						<span>Informe os dados do condomínio</span>
					</div>
					<svg class="Ellipse_A3_Path_13" viewBox="0 0 38 38">
						<path id="Ellipse_A3_Path_13" d="M 19 0 C 29.493408203125 0 38 8.506590843200684 38 19 C 38 29.493408203125 29.493408203125 38 19 38 C 8.506590843200684 38 0 29.493408203125 0 19 C 0 8.506590843200684 8.506590843200684 0 19 0 Z">
						</path>
					</svg>
					<div id="ID2">
						<span>2</span>
					</div>
				</div>
			</div>
			<div id="Grupo_A3_Group_16">
				<div id="step_A3_Group_17">
					<div id="Agende_a_inspe__o">
						<span>Agende a inspeção</span>
					</div>
					<svg class="Ellipse_A3_Path_14" viewBox="0 0 38 38">
						<path id="Ellipse_A3_Path_14" d="M 19 0 C 29.493408203125 0 38 8.506590843200684 38 19 C 38 29.493408203125 29.493408203125 38 19 38 C 8.506590843200684 38 0 29.493408203125 0 19 C 0 8.506590843200684 8.506590843200684 0 19 0 Z">
						</path>
					</svg>
					<div id="ID3">
						<span>3</span>
					</div>
				</div>
			</div>
		</div>
		<div id="Logo">
			<span>sistema</span>
		</div>
	</div>
</body>

</html>