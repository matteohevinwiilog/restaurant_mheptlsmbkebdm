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
class DrinkTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Domain\Model\Drink
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Domain\Model\Drink();
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

    /**
     * @test
     */
    public function getPriceReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getPrice()
        );
    }

    /**
     * @test
     */
    public function setPriceForFloatSetsPrice()
    {
        $this->subject->setPrice(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'price',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAlcoholizedReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getAlcoholized()
        );
    }

    /**
     * @test
     */
    public function setAlcoholizedForBoolSetsAlcoholized()
    {
        $this->subject->setAlcoholized(true);

        self::assertAttributeEquals(
            true,
            'alcoholized',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getVolumeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVolume()
        );
    }

    /**
     * @test
     */
    public function setVolumeForStringSetsVolume()
    {
        $this->subject->setVolume('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'volume',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCategoryReturnsInitialValueForCategory()
    {
        self::assertEquals(
            null,
            $this->subject->getCategory()
        );
    }

    /**
     * @test
     */
    public function setCategoryForCategorySetsCategory()
    {
        $categoryFixture = new \Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Domain\Model\Category();
        $this->subject->setCategory($categoryFixture);

        self::assertAttributeEquals(
            $categoryFixture,
            'category',
            $this->subject
        );
    }
}
