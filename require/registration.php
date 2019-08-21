<?php
    require 'vendor/autoload.php';
    
    use Aws\DynamoDb\Exception\DynamoDbException;
    use Aws\DynamoDb\DynamoDbClient;

    // if((isset($_POST['submit'])) {

        $client = DynamoDbClient::factory(array(
            'profile' => 'default',
            'region' => 'us-east-1',
            'version' => '2018-08-21',
            'credentials.cache' => true,
            'validation' => false,
            'scheme' => 'http'
        ));

        // $sdk = new Aws\Sdk([
        //     'endpoint'   => 'http://3.87.118.50',
        //     'region'   => 'us-east-1',
        //     'version'  => 'latest'
        // ]);
        
        // $dynamodb = $sdk->createDynamodb();
        
        $dataset = new Dataset();

        $tablename = "Users";

        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $companyname = $_POST['companyname'];
        $password = $_POST['pass'];

        $item = $dataset->dataSetJson('
        {
            "name": '. $name .',
            "email": '. $email .',
            "companyname": '. $companyname .',
            "password": '. $password .'
        }
        ');

        $params = [
            'TableName' => 'Users',
            'Item' => $item
        ];

        try {
            $result = $client->putItem($params);
            echo "Added items";
        
        } catch (DynamoDbException $e) {
            echo "Unable to add item:\n";
            echo $e->getMessage() . "\n";
        }
    // }

?>