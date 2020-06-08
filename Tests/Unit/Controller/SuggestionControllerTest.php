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
class SuggestionControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Controller\SuggestionController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Controller\SuggestionController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

}
