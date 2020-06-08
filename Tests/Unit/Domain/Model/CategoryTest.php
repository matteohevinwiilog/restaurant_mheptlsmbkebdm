<?php
namespace Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Matteo HEVIN <matteo.hevin@etu.u-bordeaux.fr>
 * @author Eloi PELOUX <eloi.ac@etu.u-bordeaux.fr>
 * @author Elie BOURY  <elie.boury@etu.u-bordeaux.fr>
 * @author Thomas LE SAUX <thomas.le-saux@etu.u-bordeaux.fr>
 * @author Marwane BENOU-KAISS <marwane.benou-kaiss@etu.u-bordeaux.fr>
 * @author Dorian MORAX <dorian.morax@etu.u-bordeaux.fr>
 */
class CategoryTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Domain\Model\Category
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Domain\Model\Category();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }
}
