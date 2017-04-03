<?php
return array (
    'package' => 'AIception',
    'tagline' => 'Artificial intelligence for work with images.',
    'description' => 'Artificial intelligence for work with images.',
    'image' => 'https://www.aiception.com/static/doc/images/logo.png',
    'repo' => 'https://github.com/RapidSoftwareSolutions/Marketplace-AIception-Package',
    'keywords' => array (
        'API', 'AI', 'AIception',
    ),
    'accounts' => array (
        'domain' => 'aiception.com',
        'credentials' => array (
            'apiToken',
        ),
    ),
    'blocks' => array (
        array (
            'name' => 'findFaces',
            'description' => 'Get a list of all the locations of the faces in the image.',
            'args' => array (
                array (
                    'name' => 'apiToken',
                    'type' => 'credentials',
                    'info' => 'Secret API Token.',
                    'required' => true,
                ),
                array (
                    'name' => 'imageUrl',
                    'type' => 'String',
                    'info' => 'The image to analyze.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getFaceTask',
            'description' => 'Gets the face task.',
            'args' => array (
                array (
                    'name' => 'apiToken',
                    'type' => 'credentials',
                    'info' => 'Secret API Token.',
                    'required' => true,
                ),
                array (
                    'name' => 'taskId',
                    'type' => 'String',
                    'info' => 'An internal id for the task.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'createFaceAgeTask',
            'description' => 'Creates a new face age task that approximates the age of the person in the image.',
            'args' => array (
                array (
                    'name' => 'apiToken',
                    'type' => 'credentials',
                    'info' => 'Secret API Token.',
                    'required' => true,
                ),
                array (
                    'name' => 'imageUrl',
                    'type' => 'String',
                    'info' => 'The image to analyze.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getFaceAgeTask',
            'description' => 'Gets the face_age task.',
            'args' => array (
                array (
                    'name' => 'apiToken',
                    'type' => 'credentials',
                    'info' => 'Secret API Token.',
                    'required' => true,
                ),
                array (
                    'name' => 'taskId',
                    'type' => 'String',
                    'info' => 'An internal id for the task.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'createDetectObjectTask',
            'description' => 'Creates a new detect object task that recognizes the object in the image.',
            'args' => array (
                array (
                    'name' => 'apiToken',
                    'type' => 'credentials',
                    'info' => 'Secret API Token.',
                    'required' => true,
                ),
                array (
                    'name' => 'imageUrl',
                    'type' => 'String',
                    'info' => 'The image to analyze.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getDetectObjectTask',
            'description' => 'Gets the detect_object task.',
            'args' => array (
                array (
                    'name' => 'apiToken',
                    'type' => 'credentials',
                    'info' => 'Secret API Token.',
                    'required' => true,
                ),
                array (
                    'name' => 'taskId',
                    'type' => 'String',
                    'info' => 'An internal id for the task.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'createAdultContentTask',
            'description' => 'Creates a new adult_content task that tells the if the image has nudity or sexual content.',
            'args' => array (
                array (
                    'name' => 'apiToken',
                    'type' => 'credentials',
                    'info' => 'Secret API Token.',
                    'required' => true,
                ),
                array (
                    'name' => 'imageUrl',
                    'type' => 'String',
                    'info' => 'The image to analyze.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getAdultContentTask',
            'description' => 'Gets the adult_content task.',
            'args' => array (
                array (
                    'name' => 'apiToken',
                    'type' => 'credentials',
                    'info' => 'Secret API Token.',
                    'required' => true,
                ),
                array (
                    'name' => 'taskId',
                    'type' => 'String',
                    'info' => 'An internal id for the task.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'createArtisticImage',
            'description' => 'Given an image content and a style image create a new stylized image of the content.',
            'args' => array (
                array (
                    'name' => 'apiToken',
                    'type' => 'credentials',
                    'info' => 'Secret API Token.',
                    'required' => true,
                ),
                array (
                    'name' => 'imageUrl',
                    'type' => 'String',
                    'info' => 'The content image to analyze.',
                    'required' => true,
                ),
                array (
                    'name' => 'styleUrl',
                    'type' => 'String',
                    'info' => 'The style image to analyze.',
                    'required' => true,
                ),
            ),
        ),
        array (
            'name' => 'getArtisticImageByTaskId',
            'description' => 'The artistic_image will have the urls of the stylized images.',
            'args' => array (
                array (
                    'name' => 'apiToken',
                    'type' => 'credentials',
                    'info' => 'Secret API Token.',
                    'required' => true,
                ),
                array (
                    'name' => 'taskId',
                    'type' => 'String',
                    'info' => 'An internal id for the task.',
                    'required' => true,
                ),
            ),
        ),
    ),
    'custom' => array (
        'findFaces' => array (
            'dictionary' => array (
                'apiToken' => 'apiToken',
                'imageUrl' => 'image_url',
            ),
            'vendorUrl' => 'https://aiception.com/api/v2.1/face',
            'method' => 'POST',
            'default' => ['async' => true],
        ),
        'getFaceTask' => array (
            'dictionary' => array (
                'apiToken' => 'apiToken',
                'taskId' => 'taskId',
            ),
            'vendorUrl' => 'https://aiception.com/api/v2.1/face/{{taskId}}',
            'method' => 'GET',
        ),
        'createFaceAgeTask' => array (
            'dictionary' => array (
                'apiToken' => 'apiToken',
                'imageUrl' => 'image_url',
            ),
            'vendorUrl' => 'https://aiception.com/api/v2.1/face_age',
            'method' => 'POST',
            'default' => ['async' => true],
        ),
        'getFaceAgeTask' => array (
            'dictionary' => array (
                'apiToken' => 'apiToken',
                'taskId' => 'taskId',
            ),
            'vendorUrl' => 'https://aiception.com/api/v2.1/face_age/{{taskId}}',
            'method' => 'GET',
        ),
        'createDetectObjectTask' => array (
            'dictionary' => array (
                'apiToken' => 'apiToken',
                'imageUrl' => 'image_url',
            ),
            'vendorUrl' => 'https://aiception.com/api/v2.1/detect_object',
            'method' => 'POST',
            'default' => ['async' => true],
        ),
        'getDetectObjectTask' => array (
            'dictionary' => array (
                'apiToken' => 'apiToken',
                'taskId' => 'taskId',
            ),
            'vendorUrl' => 'https://aiception.com/api/v2.1/detect_object/{{taskId}}',
            'method' => 'GET',
        ),
        'createAdultContentTask' => array (
            'dictionary' => array (
                'apiToken' => 'apiToken',
                'imageUrl' => 'image_url',
            ),
            'vendorUrl' => 'https://aiception.com/api/v2.1/adult_content',
            'method' => 'POST',
            'default' => ['async' => true],
        ),
        'getAdultContentTask' => array (
            'dictionary' => array (
                'apiToken' => 'apiToken',
                'taskId' => 'taskId',
            ),
            'vendorUrl' => 'https://aiception.com/api/v2.1/adult_content/{{taskId}}',
            'method' => 'GET',
        ),
        'createArtisticImage' => array (
            'dictionary' => array (
                'apiToken' => 'apiToken',
                'imageUrl' => 'image_url',
                'styleUrl' => 'style_url',
            ),
            'vendorUrl' => 'https://aiception.com/api/v2.1/artistic_image',
            'method' => 'POST',
            'default' => ['async' => true],
        ),
        'getArtisticImageByTaskId' => array (
            'dictionary' => array (
                'apiToken' => 'apiToken',
                'taskId' => 'taskId',
            ),
            'vendorUrl' => 'https://aiception.com/api/v2.1/artistic_image/{{taskId}}',
            'method' => 'GET',
        ),
    ),
);