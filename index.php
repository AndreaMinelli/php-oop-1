<?php

class Movie
{
    public $title;
    public $language;
    public $genre;
    public $review;
    public $vote;

    public function __construct($title, $language, $genre, $review, $vote)
    {
        $this->title = $title;
        $this->language = $language;
        $this->genre = $genre;
        $this->review = $review;
        $this->vote = $vote;
    }

    public function getReview($max = 20)
    {
        return strlen($this->review) > $max ? substr($this->review, 0, $max) . '...' : $this->review;
    }

    public function getVote()
    {
        return "$this->vote/10";
    }
}

class Genre
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

$fantasy = new Genre('Fantasy');
$thriller = new Genre('Thriller');
$distopico = new Genre('Distopico');

$the_martians = new Movie('The Martians', 'en-EN', [$fantasy, $thriller], 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam itaque est recusandae, et corporis explicabo distinctio obcaecati modi similique ducimus eveniet, sunt eaque minus nam aperiam? Necessitatibus nobis qui repellat.', '7');
$fight_club = new Movie('Fight Club', 'en-US', [$distopico, $thriller], 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam itaque est recusandae, et corporis explicabo distinctio obcaecati modi similique ducimus eveniet, sunt eaque minus nam aperiam? Necessitatibus nobis qui repellat.', '9');

var_dump($the_martians);
var_dump($fight_club);
