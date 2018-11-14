<?php

namespace ChrisHarrison\TimetasticAPI\Helpers;

use GuzzleHttp\Client as Guzzle;

interface HelperInterface
{
    /**
     * HelperInterface constructor.
     *
     * @param Guzzle $guzzle
     */
    public function __construct(Guzzle $guzzle);

    /**
     * Perform the get action for the desired endpoint.
     *
     * @return array
     */
    public function get(): array;

    /**
     * Perform the create action for the desired endpoint.
     *
     * @return array
     */
    public function create(): array;

    /**
     * Perform the update action for the desired endpoint.
     *
     * @return array
     */
    public function update(): array;

    /**
     * This will be used to set the last request time.
     */
    public function __destruct();
}