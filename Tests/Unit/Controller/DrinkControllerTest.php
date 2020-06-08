<?php
namespace Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Tests\Unit\Controller;

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
class DrinkControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Controller\DrinkController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Controller\DrinkController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllDrinksFromRepositoryAndAssignsThemToView()
    {

        $allDrinks = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $drinkRepository = $this->getMockBuilder(\Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Domain\Repository\DrinkRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $drinkRepository->expects(self::once())->method('findAll')->will(self::returnValue($allDrinks));
        $this->inject($this->subject, 'drinkRepository', $drinkRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('drinks', $allDrinks);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
