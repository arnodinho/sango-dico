<?php
/**
 * Created by PhpStorm.
 * User: arnaudyanga <arnaud.yanga@believedigital.com>
 * Date: 24/09/2020
 * Time: 12:23.
 */

namespace App\Tests\Manager;

use App\Entity\French;
use App\Manager\FrenchManager;
use App\Tests\AbstractManagerTest;

class FrenchManagerTest extends AbstractManagerTest
{
    /**
     * @var FrenchManager
     */
    protected $frenchManager;

    protected function setUp(): void
    {
        parent::setUp();

        $this->mockRepository(French::class);
        $this->frenchManager = new FrenchManager($this->em->reveal());
    }

    public function testFindAll(): void
    {
        $this->mockFindAll([$this->frenchModel]);
        $this->assertEquals(
            [$this->frenchModel],
            $this->frenchManager->findAll()
        );
    }
}
