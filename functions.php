<?php

define( 'STL_GBL_VERSION', '1.0.0' );
define( 'STL_GBL_CORE', get_stylesheet_directory() .'/' );
define( 'STL_GBL_ASSET', get_stylesheet_directory_uri().'/assets/' );

include_once 'inc/loader.php';
function wpdocs_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

class STL_Theme_Global	{

	public function init() {
		add_action('plugins_loaded', array($this, 'load_textdomain'));
		add_action('wp_enqueue_scripts', array($this, 'assets'));
		register_activation_hook( __FILE__, array($this, 'activate') );
		register_deactivation_hook(__FILE__, array($this, 'deactivate') );
		$this->reset();
		$this->includes();
		require_once STL_GBL_CORE . 'extensions/template.php';
		add_action('plugins_loaded', array($this, 'extensions'), 10);
	} 

	public function extensions() {
		require_once STL_GBL_CORE . 'extensions/template.php';
	}

	public function reset() {
		
	}

	public function assets() {
		wp_enqueue_script( 'stl_global', STL_GBL_ASSET.'js/app.js',  array('stencil'), STL_GBL_VERSION, true);
		wp_enqueue_style( 'stl_global', STL_GBL_ASSET.'css/app.css',  array('stencil'), STL_GBL_VERSION, false);
	}

	public function activate() {
		
	}

	public function deactivate() {
	
	}

	public function load_textdomain() {
		load_plugin_textdomain( 'stencil-child', FALSE, basename( dirname( __FILE__ ) ).'/assets/langs/' );
	}

	

	public function includes() {
		//require_once('vendors/bootstrap.php');
	}
}

$STL = new STL_Theme_Global();
$STL->init();


add_action('stencil/_cover_content_end', 'custom_appointment');
function custom_appointment() {
	$output = '';
	ob_start();
	?>
	<div class="ux-block appointment">
		<div class="heading">
			<h3>Book Your</h3>
			<p class="lead">Appointment</p>
		</div>
		<div class="text">
			<p>Use our online booking system to book your next appointment, initial consultation or session with our hygienist.</p>
		</div>
		<div class="action">
			<?php
			date_default_timezone_set('Europe/London');
			$dt1 = new DateTime();
			$start = date('H:i:s',strtotime("09 AM"));
			$end = date('H:i:s',strtotime("05 PM"));
			if($start < $dt1->format('H:i:s') && $end > $dt1->format('H:i:s')){
				?>
				<button class="btn btn-primary btn-call">44 1482 642736</button>
				<?php
			} else {
				?>
				<a class="btn btn-primary btn-call" href="mailto:someone@example.com?Subject=Inquiry">SENT E-MAIL</a>
				<?php 
			} 
			?>
		</div>
	</div>
	<?php
	$output .= ob_get_clean();
	echo $output;
	
}
