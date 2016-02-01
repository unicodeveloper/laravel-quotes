<?php

/*
 * This file is part of the Laravel Quotes package.
 *
 * (c) Prosper Otemuyiwa <prosperotemuyiwa@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Unicodeveloper\Quotes\Test;

use ReflectionClass;
use PHPUnit_Framework_TestCase;
use Unicodeveloper\Quotes\Quotes;
use Illuminate\Support\Collection;

class QuotesTest extends PHPUnit_Framework_TestCase
{
    protected $quotes;

    public function setUp()
    {
        $this->quotes = new Quotes;
    }

    /**
     * Test the private GetQuotes method for design category
     * @return boolean
     */
    public function testGetQuotesWithDesignCategory()
    {
        $result = $this->invokeMethod($this->quotes, 'getQuotes', ['design']);

        $this->assertEquals($this->getTotalNumberOfQuotes('design'), count($result));
    }

    /**
     * Test the private GetQuotes method for programming category
     * @return boolean
     */
    public function testGetQuotesWithProgrammingCategory()
    {
        $result = $this->invokeMethod($this->quotes, 'getQuotes', ['programming']);

        $this->assertEquals($this->getTotalNumberOfQuotes('programming'), count($result));
    }

    /**
     * Test the private GetQuotes method for djkhaled category
     * @return boolean
     */
    public function testGetQuotesWithDjkhaledCategory()
    {
        $result = $this->invokeMethod($this->quotes, 'getQuotes', ['djkhaled']);

        $this->assertEquals($this->getTotalNumberOfQuotes('djkhaled'), count($result));
    }

    /**
     * Test the private GetQuotes method if there is no category input
     * @return boolean
     */
    public function testGetQuotesWithNullCategory()
    {
        $result = $this->invokeMethod($this->quotes, 'getQuotes', []);

        $this->assertEquals($this->getTotalNumberOfQuotes('programming'), count($result));
    }

    /**
     * Test random() actually returns a random quote
     * @return boolean
     */
    public function testRandomReturnsARandomQuote()
    {
        $result = $this->quotes->design()->random();

        $this->assertEquals(1, count($result));
    }

    /**
     * Test all() actually returns all the quotes
     * @return boolean
     */
    public function testAllReturnsAllQuotes()
    {
        $result = $this->quotes->programming()->all();

        $this->assertEquals($this->getTotalNumberOfQuotes('programming'), count($result));
    }

    /**
     * Get the number of results based on the category of quotes
     * @param  $category
     * @return integer
     */
    private function getTotalNumberOfQuotes($category)
    {
        $result = require( __DIR__ . "/../src/Quotes/{$category}.php");

        return count($result);
    }

    /**
     * Call protected/private method of a class.
     *
     * @param object &$object    Instantiated object that we will run method on.
     * @param string $methodName Method name to call
     * @param array  $parameters Array of parameters to pass into method.
     *
     * @return mixed Method return.
     */
    private function invokeMethod(&$object, $methodName, array $parameters = array())
    {
        $reflection = new ReflectionClass(get_class($object));
        $method = $reflection->getMethod($methodName);
        $method->setAccessible(true);

        return $method->invokeArgs($object, $parameters);
    }

}