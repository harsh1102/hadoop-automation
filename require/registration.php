<?php
    require 'vendor/autoload.php';
    
    use Aws\DynamoDb\Exception\DynamoDbException;
    use Aws\DynamoDb\Marshaler;

    // date_default_timezone_set("Asia/Kolkata");

        $sdk = new Aws\Sdk([
            'endpoint'   => 'http://3.87.118.50',
            'region'   => 'us-east-1',
            'version'  => 'latest'
        ]);
        
        $dynamodb = $sdk->createDynamoDb();
        $marshaler = new Marshaler();


        $tablename = "Users";

        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $companyname = $_POST['companyname'];
        $password = $_POST['pass'];


        $item = $marshaler->marshalJson('
            {
                "userid": 1,
                "createdAt": knjmjinh
            }
        ');

        // $params = [
        //     'TableName' => 'Users',
        //     'Item' => $item
        // ];

        // try {
        //     $result = $dynamodb->putItem($params);
        //     echo "Added items";
        
        // } catch (DynamoDbException $e) {
        //     echo "Unable to add item:\n";
        //     echo $e->getMessage() . "\n";
        // }

?>