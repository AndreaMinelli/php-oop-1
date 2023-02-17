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
