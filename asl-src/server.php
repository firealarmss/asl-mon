<?php
require '../vendor/autoload.php';
/* These are (in order) the options we can pass to pami client:
 *
 * The hostname or ip address where asterisk ami is listening
 * The scheme can be tcp:// or tls://
 * The port where asterisk ami is listening
 * Username configured in manager.conf
 * Password configured for the above user
 * Connection timeout in milliseconds
 * Read timeout in milliseconds
 */
$pamiClientOptions = array(
    'host' => '127.0.0.1',
    'scheme' => 'tcp://',
    'port' => 9999,
    'username' => 'admin',
    'secret' => 'mysecret',
    'connect_timeout' => 10000,
    'read_timeout' => 10000
);

use PAMI\Client\Impl\ClientImpl as PamiClient;
$pamiClient = new PamiClient($pamiClientOptions);

// Open the connection
$pamiClient->open();

// Close the connection
$pamiClient->close();