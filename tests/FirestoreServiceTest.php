<?php


namespace OneSite\NinePay\Firestore\Tests;


use GuzzleHttp\Psr7\Response;
use OneSite\Firestore\FirestoreService;
use PHPUnit\Framework\TestCase;


class FirestoreServiceTest extends TestCase
{

    private $service;

    /**
     *
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->service = new FirestoreService();
    }

    /**
     *
     */
    public function tearDown(): void
    {
        $this->service = null;

        parent::tearDown();
    }

    /**
     * PHPUnit test: vendor/bin/phpunit --filter testGetDocument tests/FirestoreServiceTest.php
     */
    public function testGetDocument()
    {
        $data = $this->service->getDocument('cities', 'HN');

        echo "\n" . json_encode($data);

        $this->assertTrue(true);
    }

    /**
     * PHPUnit test: vendor/bin/phpunit --filter testGetAllDocuments tests/FirestoreServiceTest.php
     */
    public function testGetAllDocuments()
    {
        $data = $this->service->getDocuments('cities');

        /*$data = $this->service->getDocuments('cities', [
            ['name', '=', 'Ha noi']
        ]);*/

        foreach ($data as $city) {
            //echo "\n" . $city->id();
            echo "\n" . json_encode($city->data());
            //echo "\n" . $city['name'];
        }

        $this->assertTrue(true);
    }

    /**
     * PHPUnit test: vendor/bin/phpunit --filter testSetData tests/FirestoreServiceTest.php
     */
    public function testSetData()
    {
        $this->service->setData('cities', 'HN', [
            'name' => 'TP. Ha noi'
        ]);

        $this->assertTrue(true);
    }

}
