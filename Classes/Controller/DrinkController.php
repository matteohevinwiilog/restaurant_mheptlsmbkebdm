<?php
namespace Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Controller;


/***
 *
 * This file is part of the "Restaurant MHEPTLSMBKEBDM" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Matteo HEVIN <matteo.hevin@etu.u-bordeaux.fr>, DAWIN Alt
 *           Eloi PELOUX <eloi.ac@etu.u-bordeaux.fr>, DAWIN Alt
 *           Elie BOURY  <elie.boury@etu.u-bordeaux.fr>, DAWIN Alt
 *           Thomas LE SAUX <thomas.le-saux@etu.u-bordeaux.fr>, DAWIN Alt
 *           Marwane BENOU-KAISS <marwane.benou-kaiss@etu.u-bordeaux.fr>, DAWIN Alt
 *           Dorian MORAX <dorian.morax@etu.u-bordeaux.fr>, DAWIN Alt
 *
 ***/
/**
 * DrinkController
 */
class DrinkController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * drinkRepository
     * 
     * @var \Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Domain\Repository\DrinkRepository
     * @inject
     */
    protected $drinkRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $drinks = $this->drinkRepository->findAll();
        $this->view->assign('drinks', $drinks);
    }
}
