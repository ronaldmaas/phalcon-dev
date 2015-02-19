<?php

return new \Phalcon\Config(array(
    'database' => array(
        'adapter'     => 'Postgresql',
        'host'        => 'ec2-50-19-236-178.compute-1.amazonaws.com',
        'username'    => 'sondqoaztrzzex',
        'password'    => 'MuxItCRvZ6nkIGjf48F8VjM4Ji',
        'dbname'      => 'de51sulf40529r',
    ),
    'application' => array(
        'controllersDir' => __DIR__ . '/../../app/controllers/',
        'modelsDir'      => __DIR__ . '/../../app/models/',
        'viewsDir'       => __DIR__ . '/../../app/views/',
        'pluginsDir'     => __DIR__ . '/../../app/plugins/',
        'libraryDir'     => __DIR__ . '/../../app/library/',
        'cacheDir'       => __DIR__ . '/../../app/cache/',
        'baseUri'        => '/',
    )
));
