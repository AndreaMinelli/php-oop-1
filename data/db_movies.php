<?php
include_once __DIR__ . '/db_genres.php';

$movies = [
    [
        'title' => 'The Martians',
        'language' => 'en-EN',
        'genre' => [$fantasy, $thriller],
        'review' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam itaque est recusandae, et corporis explicabo distinctio obcaecati modi similique ducimus eveniet, sunt eaque minus nam aperiam? Necessitatibus nobis qui repellat.',
        'vote' => '7'
    ],
    [
        'title' => 'Fight Club',
        'language' => 'en-US',
        'genre' => [$thriller, $distopic],
        'review' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam itaque est recusandae, et corporis explicabo distinctio obcaecati modi similique ducimus eveniet, sunt eaque minus nam aperiam? Necessitatibus nobis qui repellat.',
        'vote' => '9'
    ],
    [
        'title' => 'Il signore degli anelli',
        'language' => 'en-US',
        'genre' => $fantasy,
        'review' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam itaque est recusandae, et corporis explicabo distinctio obcaecati modi similique ducimus eveniet, sunt eaque minus nam aperiam? Necessitatibus nobis qui repellat.',
        'vote' => '9'
    ],
    [
        'title' => 'Lo Hobbit',
        'language' => 'en-US',
        'genre' => $fantasy,
        'review' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam itaque est recusandae, et corporis explicabo distinctio obcaecati modi similique ducimus eveniet, sunt eaque minus nam aperiam? Necessitatibus nobis qui repellat.',
        'vote' => '8'
    ],
    [
        'title' => 'Discovery - WWII',
        'language' => 'en-US',
        'genre' => $historic,
        'review' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam itaque est recusandae, et corporis explicabo distinctio obcaecati modi similique ducimus eveniet, sunt eaque minus nam aperiam? Necessitatibus nobis qui repellat.',
        'vote' => '6'
    ],
    [
        'title' => '1984',
        'language' => 'en-US',
        'genre' => [$fantasy, $distopic],
        'review' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam itaque est recusandae, et corporis explicabo distinctio obcaecati modi similique ducimus eveniet, sunt eaque minus nam aperiam? Necessitatibus nobis qui repellat.',
        'vote' => '7'
    ],
];
