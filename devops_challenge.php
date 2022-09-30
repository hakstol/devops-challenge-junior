
/**
 * @package Devops_challenge_Junior
 * @version 1.0
 */
/*
Plugin Name: Devops challenge Júnior
Plugin URI: https://apiki.com/
Description: Sabe de nada, inocente! Ordinária!!
Author: Apiki WordPress
Version: 1.0
*/

function apiki_segura_o_tchan() {
	$lyrics = "Pau que nasce torto nunca se endireita
Menina que requebra a mãe pega na cabeça
Pau que nasce torto nunca se endireita
Menina que requebra a mãe pega na cabeça
Domingo ela não vai (vai, vai)
Domingo ela não vai não (vai, vai, vai)
Olha, domingo ela não vai (vai, vai)
Domingo ela não vai não (vai, vai, vai)
O pau que nasce torto nunca se endireita
Menina que requebra a mãe pega na cabeça
Pau que nasce torto nunca se endireita
Menina que requebra a mãe pega na cabeça
Segure o tchan
Amarre o tchan
Segure o tchan tchan tchan tchan
Depois de nove meses você vê o resultado
Esse é o Gera Samba arrebentando no pedaço
Joga ela no meio, mete em cima, mete embaixo";

	$lyrics = explode( "\n", $lyrics )

	return wptexturize( $lyrics[ mt_rand( 0, count( $lyrics ) - 1 ) ] );
}

function devops_challenge() {
	// Essa função deve ser executada no contexto de avisos no admin WordPress
	$chosen = apiki_segura_o_tchan();
	$lang   = '';
	if ( 'en_' !== substr( get_user_locale(), 0, 3 ) ) {
		$lang = ' lang="en"';
	}

	printf(
		'<p id="devop"><span class="screen-reader-text">%s </span><span dir="ltr"%s>%s</span></p>',
		__( 'Segure o Tchan, by Apiki WordPress:' ),
		$lang,
		$chosen
	);
}

add_action( '', 'devops_challenge' );

function devop_css() {
	echo "
	<style type='text/css'>
	#devop {
		float: right;
		padding: 5px 10px;
		margin: 0;
		font-size: 12px;
		line-height: 1.6666;
	}
	.rtl #devop {
		float: left;
	}
	.block-editor-page #devop {
		display: none;
	}
	@media screen and (max-width: 782px) {
		#devop,
		.rtl #devop {
			float: none;
			padding-left: 0;
			padding-right: 0;
		}
	}
	</style>
	";
}

add_action( 'admin_head', 'devop_css' );
