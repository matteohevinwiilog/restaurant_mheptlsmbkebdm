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
class MenuControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Controller\MenuController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Controller\MenuController::class)
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
    public function listActionFetchesAllMenusFromRepositoryAndAssignsThemToView()
    {

        $allMenus = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $menuRepository = $this->getMockBuilder(\Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Domain\Repository\MenuRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $menuRepository->expects(self::once())->method('findAll')->will(self::returnValue($allMenus));
        $this->inject($this->subject, 'menuRepository', $menuRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('menus', $allMenus);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenMenuToView()
    {
        $menu = new \Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Domain\Model\Menu();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('menu', $menu);

        $this->subject->showAction($menu);
    }
}
