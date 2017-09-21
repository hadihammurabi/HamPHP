<?php

// Mode, true untuk mode produksi dan false untuk mode pengembangan
$env['production'] = false;

// Host setting
$env['host']		=	[
	'root'			=> 'http://localhost:8000'
];

// Struktur direktori
$env['dir']['app']			= 'app';
$env['dir']['controllers']	= $env['dir']['app'].	'/controllers';
$env['dir']['models']		= $env['dir']['app'].	'/models';
$env['dir']['views']		= $env['dir']['app'].	'/views';
$env['dir']['pages']		= $env['dir']['views'].	'/pages';

// Default pada controller, model, dan sebagainya
$env['default']['controller'] 	= 'Home';
$env['default']['model']		= '';

// Konfigurasi database
$env['db']['driver']		= 'mysql';
$env['db']['host']			= 'localhost';
$env['db']['username']		= 'root';
$env['db']['password']		= 'permana';
$env['db']['name']			= 'hamphp';
$env['db']['prefix']		= 'ham_';