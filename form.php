<?php
require 'vendor/autoload.php';
use Mailgun\Mailgun;
session_start();
if (isset($_POST['email'])) {
	# Include the Autoloader (see "Libraries" for install instructions)

	# Instantiate the client.
	$client = new \Http\Adapter\Guzzle6\Client();
	$mailgun = new \Mailgun\Mailgun("key-4c03e865d1561da4bdabd5e5cd59b625", $client);
	$domain = "mg.smallerthanthree.com";

	$result = $mailgun->sendMessage($domain, array(
	    'from'    => 'noreply@smallerthanthree.com',
	    // 'to'      => 'timthuanpham@gmail.com',
	    'to'      => 'trankhanh.tk.kt@gmail.com',
	    'subject' => 'Customer Contact',
	    'html'    => 'Name: '.@$_POST['name'].'<br>'.'Email: '.@$_POST['email'].'<br>'.'Content: '.@$_POST['content'],
	));
	$_SESSION["form_sent"] = true;
}
?>