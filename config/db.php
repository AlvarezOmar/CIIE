<?php
/*  
return [
        'db' => [
            'class' => 'yii\db\Connection',
            'driverName' => 'mysql',	
            'dsn' => 'odbc:Driver={MySQL};Server=localhost:3308;Database=sis-mau',
            'dsn' => 'mysql:host=localhost:3308;dbname=sis-mau',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
];*/


return [

	'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost:3308;dbname=sis-mau',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
