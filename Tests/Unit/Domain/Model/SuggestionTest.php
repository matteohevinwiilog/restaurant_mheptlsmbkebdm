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
class SuggestionTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Domain\Model\Suggestion
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Domain\Model\Suggestion();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getStartReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getStart()
        );
    }

    /**
     * @test
     */
    public function setStartForDateTimeSetsStart()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setStart($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'start',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEndReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getEnd()
        );
    }

    /**
     * @test
     */
    public function setEndForDateTimeSetsEnd()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setEnd($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'end',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDishesReturnsInitialValueForDish()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getDishes()
        );
    }

    /**
     * @test
     */
    public function setDishesForObjectStorageContainingDishSetsDishes()
    {
        $dish = new \Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Domain\Model\Dish();
        $objectStorageHoldingExactlyOneDishes = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneDishes->attach($dish);
        $this->subject->setDishes($objectStorageHoldingExactlyOneDishes);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneDishes,
            'dishes',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addDishToObjectStorageHoldingDishes()
    {
        $dish = new \Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Domain\Model\Dish();
        $dishesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $dishesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($dish));
        $this->inject($this->subject, 'dishes', $dishesObjectStorageMock);

        $this->subject->addDish($dish);
    }

    /**
     * @test
     */
    public function removeDishFromObjectStorageHoldingDishes()
    {
        $dish = new \Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Domain\Model\Dish();
        $dishesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $dishesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($dish));
        $this->inject($this->subject, 'dishes', $dishesObjectStorageMock);

        $this->subject->removeDish($dish);
    }
}
