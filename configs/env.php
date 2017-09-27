<?php

// Mode, true untuk mode produksi dan false untuk mode pengembangan
$env['production'] = false;

// Host setting
$env['host']['root']      	 	= 'localhost';
// Struktur direktori
$env['dir']['app']            	= 'app';
$env['dir']['controllers']    	= $env['dir']['app'].    '/controllers';
$env['dir']['models']        	= $env['dir']['app'].    '/models';
$env['dir']['views']        	= $env['dir']['app'].    '/views';
$env['dir']['pages']        	= $env['dir']['views'].    '/pages';

// Default pada controller, model, dan sebagainya
$env['default']['controller']  	= 'Home';
$env['default']['model']        = '';

// Konfigurasi database
$env['db']['driver']      		= 'mysql';
$env['db']['host']            	= 'localhost';
$env['db']['username']        	= 'debian-sys-maint';
$env['db']['password']        	= '';
$env['db']['name']            	= 'pgice';
$env['db']['port']            	= '3306';
$env['db']['prefix']        	= 'ham_';
