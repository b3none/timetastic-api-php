<?php

namespace ChrisHarrison\TimetasticAPI;

use GuzzleHttp\Client as Guzzle;

class Client
{
    const TIMETASTIC_BASE_URL = "https://app.timetastic.co.uk/";
//    const TIMETASTIC_DEFAULT_PORT = 443;

    const MILLISECONDS_BETWEEN_REQUESTS = 300;

    /**
     * @var Guzzle
     */
    protected $guzzle;

    /**
     * @var int
     */
    protected $lastRequestTime = 0;

    public static function create()
    {
        return new self(new Guzzle());
    }

    /**
     * Client constructor.
     *
     * @param Guzzle $guzzle
     */
    public function __construct(Guzzle $guzzle)
    {
        $this->guzzle = $guzzle;
    }

    public function getDepartment(string $id)
    {
        $this->rateLimit();
        // TODO: Implement getDepartment() method.
    }

    protected function rateLimit()
    {
        $now = $this->milliseconds();
        $millisecondsSinceLastRequest = $now - $this->lastRequestTime;

        if ($millisecondsSinceLastRequest < self::MILLISECONDS_BETWEEN_REQUESTS) {
            $timeToWait = self::MILLISECONDS_BETWEEN_REQUESTS - $millisecondsSinceLastRequest;
            usleep($timeToWait * 1000);
        }

        $this->lastRequestTime = $this->milliseconds();
    }

    protected function milliseconds(): int
    {
        return round(microtime(true) * 1000);
    }

    public function getDepartments(): array
    {
        $this->rateLimit();
        // TODO: Implement getDepartments() method.
    }

    public function getHoliday(string $id): array
    {
        $this->rateLimit();
        // TODO: Implement getHoliday() method.
    }

    public function getHolidays(array $parameters): array
    {
        $this->rateLimit();
        return $this->httpClient->get('api/holidays', $parameters);
    }

    public function createHoliday(array $parameters): array
    {
        $this->rateLimit();
        // TODO: Implement createHoliday() method.
    }

    public function updateHoliday(string $id, array $parameters): array
    {
        $this->rateLimit();
        // TODO: Implement updateHoliday() method.
    }

    public function getLeaveType(string $id): array
    {
        $this->rateLimit();
        // TODO: Implement getLeaveType() method.
    }

    public function getLeaveTypes(): array
    {
        $this->rateLimit();
        // TODO: Implement getLeaveTypes() method.
    }

    public function getPublicHoliday(string $id): array
    {
        $this->rateLimit();
        // TODO: Implement getPublicHoliday() method.
    }

    public function getPublicHolidays(array $parameters): array
    {
        $this->rateLimit();
        // TODO: Implement getPublicHolidays() method.
    }

    public function getUser(string $id): array
    {
        $this->rateLimit();
        return $this->httpClient->get('/api/users/' . $id);
    }

    public function getUsers(array $parameters): array
    {
        $this->rateLimit();
        return $this->httpClient->get('/api/users', $parameters);
    }
}
