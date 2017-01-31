<?php
return [
    // ...
    'components' => [

        'elasticsearch' => [
            'class' => 'yii\elasticsearch\Connection',
            'nodes' => [
                ['http_address' => 'elasticsearch:9200'],
            ],
        ],
        
    ],
];