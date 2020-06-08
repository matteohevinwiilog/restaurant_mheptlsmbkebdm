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
 * MenuController
 */
class MenuController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * menuRepository
     * 
     * @var \Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Domain\Repository\MenuRepository
     * @inject
     */
    protected $menuRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $menus = $this->menuRepository->findAll();
        $this->view->assign('menus', $menus);
    }

    /**
     * action show
     * 
     * @param \Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Domain\Model\Menu $menu
     * @return void
     */
    public function showAction(\Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Domain\Model\Menu $menu)
    {
        $this->view->assign('menu', $menu);
    }
}
