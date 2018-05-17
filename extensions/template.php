<?php


if(function_exists('stencil')) {
	stencil()->option(
		[
			'name' => 'theme',
			'title' => 'Theme Control',
			'options' => [
				[
					'type' => 'file_input',
					'name' => 'Logo Light',
					'id'   => 'logo_light'
				],
				[
					'type' => 'text',
					'name' => 'Join Link',
					'id'   => 'join_link'
				]
			]
		]
	);



	stencil()->template('static', [
		'name' => 'home',
		'template' => 'static/home.php'
	]);
	stencil()->template('static', [
		'name' => 'home-demo',
		'template' => 'static/home-demo.php'
	]);
	stencil()->template('static', [
		'name' => 'about-demo',
		'template' => 'static/about-demo.php'
	]);
	stencil()->template('static', [
		'name' => 'emergency-demo',
		'template' => 'static/emergency-demo.php'
	]);
	stencil()->template('static', [
		'name' => 'contact-demo',
		'template' => 'static/contact-demo.php'
	]);

}






