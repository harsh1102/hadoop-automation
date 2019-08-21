<?php
    require 'vendor/autoload.php';

    require_once('dbconfig.php');

    if(isset($_POST['submit'])){

        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $companyname = $_POST['companyname'];
        $password = $_POST['pass'];


        $response = $client->putItem(array(
            'TableName' => 'Users',
            'Item' => array(
                "userId" => array('S'      => '1'      ),
                "name" => array('S'      => $name      ),
                "email" => array('S'      => $email      ),
                "companyname" => array('S'      => $companyname      ),
                "password" => array('S'      => $password      ),
                "createdAt" => array('S'      =>   date("d/m/Y")    )
            )
        ));

        echo $response;
    }

?>