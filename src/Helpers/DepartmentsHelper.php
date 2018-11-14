<?php

namespace ChrisHarrison\TimetasticAPI\Helpers;

use GuzzleHttp\Client as Guzzle;

class DepartmentsHelper implements HelperInterface
{
    protected $guzzle;

    /**
     * DepartmentsHelper constructor.
     *
     * @param Guzzle $guzzle
     */
    public function __construct(Guzzle $guzzle)
    {
        $this->guzzle = $guzzle;
    }

    public function get(): array
    {
        // TODO: Implement get() method.
    }

    public function create(): array
    {
        // TODO: Implement create() method.
    }

    public function update(): array
    {
        // TODO: Implement update() method.
    }

    /**
     * This will be used to set the last request time.
     */
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}