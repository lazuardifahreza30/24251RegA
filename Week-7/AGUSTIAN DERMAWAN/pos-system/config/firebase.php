<?php
return [
    'credentials'=> [
    'file' => env('FIREBASE_CREDENTIALS', base_path('config/firebase-credentials.json')),
    ],
    'databse' => [
        'url' => env('FIREBASE_DATABASE_URL', 'https://post-system-fb7ed-default-rtdb.firebaseio.com/'),
    ],
];