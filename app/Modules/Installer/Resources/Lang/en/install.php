<?php

// module


return [

	'artisan_commands'				=> 'Installation: Artisan Commands',
	'install_check'					=> 'Installation: Check',
	'title'							=> 'Rakko Installer',

	'ask' => [
// 		'delete'					=> 'Delete this Module?',
	],

	'command' => [
// 		'create'					=> 'Create',
// 		'update'					=> 'Update',
// 		'edit'						=> 'Edit',
// 		'delete'					=> 'Delete',
	],

	'success' => [
		'gd'						=> 'GD Extension is Enabled',
		'image'						=> '/images Directory is Writable',
		'php_version'				=> 'PHP Version Compatible',
		'pdo'						=> 'PDO is Enabled',
		'migrate'					=> 'The Tables were Migrated',
		'mcrypt'					=> 'Mcrypt Extension is Enabled',
		'seed'						=> 'The Tables were Seeded',
		'storage'					=> '/Storage Directory is Writable',
	],

	'error' => [
		'db_seed'					=> 'Automatic Migration and Seeding Failed. Please do a manual install.',
		'gd'						=> 'GD Extension is Enabled',
		'image'						=> '/images Directory is not Writable',
		'installed'					=> 'Already installed!',
		'pdo'						=> 'PDO is not Enabled',
		'migrate'					=> 'The Tables were not Migrated',
		'mcrypt'					=> 'Mcrypt Extension is not Enabled',
		'seed'						=> 'The Tables were not Seeded',
		'storage'					=> '/storage Directory is not Writable',
	],

	'button' => [
		'next'						=> 'Next',
		'retry'						=> 'Retry',
	],

];