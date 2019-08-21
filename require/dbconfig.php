<?php

    require 'vendor/autoload.php';
    
    use Aws\DynamoDb\Exception\DynamoDbException;
    use Aws\DynamoDb\Marshaler;
    use Aws\DynamoDb\DynamoDbClient;

    date_default_timezone_set("Asia/Kolkata");

    $client = DynamoDbClient::factory(array(
        'profile' => 'default',
        'region' => 'us-east-1',
        'version' => '2012-08-10',
        'credentials.cache' => true,
        'validation' => false,
        'scheme' => 'http'
    ));
?>