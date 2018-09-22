<?php
	$mysql = array(
		'user' => 'root',
		'password' => '',
		'host' => 'localhost',
		'database' => 'btc'
	);

	mysql_connect($mysql['host'], $mysql['user'], $mysql['password']) or die("Cannot connect to database.");
	mysql_select_db($mysql['database']);
	
	$rpc = array(
		'login' => 'bitcoinrpc',
		'password' => '04b7ecf0baa90495ceb4e4090f6b2fd37eec1e9c85fac68a',
		'ip' => '127.0.0.1',
		'port' => '8332'
	);
	
	$config = array(
		'name' => 'BitPonzi',																	// Name of your ponzi
		'title' => 'get rich!',																// Description
		'full-name' => 'Bitcoin Ponzi',												// Full name of your ponzi
		'val' => 'BTC',																				// Cryptocurrency abbreviation
		'precision' => 4,
		'confirmations' => 3,																	// Minimum number of confirmations to add transaction
		'min' => 0.001,																				// Minimum pay in
		'max' => 0.25,																				// Maximum pay in
		'income' => 0.1,																			// How much money to send - default: 0.1 - 110%
		'fee' => 0.01,																				// Fee taken from pay in amount
		'payout-check' => 180,																// Time between payouts
		'ownaddress' => '39pJd5AyBzb1ccaA7nznPdjZWddL9uXrQe', // Your address
		'sendback' => false,																	// What to do with txs that are over maximum or under minimum | true - send back, false - send to your address
		'ponziacc' => 'ponzi',																	// Name of daemon account
		'address' => '33Q5Q6NKLDSeB8KfC8cgfVXjtSnYtusCr2',			// Ponzi address
		'privkey' => '',																			// Needed in setup, private key of your address
		'blockchain-addr' => 'https://blockchain.info/en/address/',
		'blockchain-tx' => 'https://blockchain.info/en/tx/'
	);
?>
