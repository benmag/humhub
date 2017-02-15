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

        'authClientCollection' => [
            'clients' => [
                'facebook' => [
                    'class' => 'humhub\modules\user\authclient\Facebook',
                    'clientId' => $_ENV['FACEBOOK_CLIENT_ID'],
                    'clientSecret' => $_ENV['FACEBOOK_CLIENT_SECRET'],
                    'scope' => 'email, public_profile, user_events, user_posts, user_managed_groups',
                ],
            ],
        ],
    ],
];