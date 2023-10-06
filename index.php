<?php
$books = [
    [
        "name" => "Rework",
        "author" => "DHH",
        "releaseYear" => 2013,
        "purchaseUrl" => "http://example1.com"
    ],
    [
        "name" => "Fourth Wing (The Empyrean, 1)",
        "author" => "Rebecca Yarros",
        "releaseYear" => 2023,
        "purchaseUrl" => "http://example2.com"
    ],
    [
        "name" => "Getting Real",
        "author" => "DHH",
        "releaseYear" => 2023,
        "purchaseUrl" => "http://example3.com"
    ]
];

// function filter($items, $fn) {
//     $filteredItems = [];

//     foreach($items as $item) {
//         if ($fn($item)){
//             $filteredItems[] = $item;
//         }
//     }
//     return $filteredItems;
// }
    
$filterBooks = array_filter($books, function($book){
    return $book['author'] === 'DHH';
});

require "index.view.php";