<?php

namespace Unicodeveloper\Quotes;

use GuzzleHttp\Client;
use Illuminate\Support\Collection;

class Quotes {

    /**
     * Quotes
     * @var collection
     */
    protected $quotes;

    /**
     * Get the Quotes from the respective files depending on the Category
     * @param  string $category
     * @return array
     */
    private function getQuotes($category = null)
    {
        if(is_null($category)) {
            return require_once("Quotes/programming.php");
        }

        return require_once("Quotes/{$category}.php");
    }

    /**
     * Transform the programming quotes into a Collection
     * @return Unicodeveloper\Quotes\Quotes
     */
    public function programming()
    {
        $this->quotes = Collection::make($this->getQuotes('programming'));

        return $this;
    }

    /**
     * Transform all the design quotes into a Collection
     * @return Unicodeveloper\Quotes\Quotes
     */
    public function design()
    {
        $this->quotes = Collection::make($this->getQuotes('design'));

        return $this;
    }

    /**
     * Get all Djkhaled Keys To Success #BlessUp #AnotherOne #TheyDontWantMeToWriteThisPackage
     * @return Unicodeveloper\Quotes\Quotes
     */
    public function djkhaled()
    {
        $this->quotes = Collection::make($this->getQuotes('djkhaled'));

        return $this;
    }

    /**
     * Get another quote. Another one, I say, Another One #BlessUp
     * @return string
     */
    public function anotherOne()
    {
        return $this->quotes->random();
    }

    /**
     * Get a random quote
     * @return string
     */
    public function random()
    {
        return $this->quotes->random();
    }

    /**
     * Get all the quotes
     * @return Illuminate\Support\Collection
     */
    public function all()
    {
        return $this->quotes->all();
    }

}