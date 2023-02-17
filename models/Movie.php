<?php
class Movie
{
    public $title;
    public $language;
    public $genres;
    public $review;
    public $vote;

    public function __construct($title, $language, $genres, $review, $vote)
    {
        $this->title = $title;
        $this->language = $language;
        $this->setGenres($genres);
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

    public function setGenres($genres)
    {
        if (gettype($genres) === 'object') return $this->genres = $genres->name;
        $genre_list = '';
        foreach ($genres as $genre) {
            $genre_list .= "$genre->name, ";
        }
        return $this->genres = substr($genre_list, 0, -2);
    }
}
