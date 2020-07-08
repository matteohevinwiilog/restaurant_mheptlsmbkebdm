<?php

namespace Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Controller;


use Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Domain\Repository\DishSearchQuery;
use TYPO3\CMS\Core\Exception;

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
 * DishController
 */
class DishController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * dishRepository
     *
     * @var \Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Domain\Repository\DishRepository
     * @inject
     */
    protected $dishRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction(DishSearchQuery $search = null)
    {
        if($search != null) {
            $dishes = $this->dishRepository->search($search);
        } else {
            $dishes = $this->dishRepository->findAll();
        }

        $this->view->assignMultiple([
            'dishes' => $dishes,
            'search' => $search
        ]);
    }

    /**
     * action show
     *
     * @param \Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Domain\Model\Dish $dish
     * @return void
     */
    public function showAction(\Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Domain\Model\Dish $dish)
    {
        $this->view->assign('dish', $dish);
    }

    /**
     * action search
     *
     * @param DishSearchQuery $search
     * @return void
     */
    public function searchAction(DishSearchQuery $search)
    {
        $this->view->assignMultiple([
            'dishes' => $this->dishRepository->search($search),
            'search' => $search
        ]);
    }

    /**
     * action focus
     *
     * @return void
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException
     */
    public function focusAction()
    {
        $uids = array_map('intval', explode(',', $this->settings['focus']));
        $focusedDishes = $this->dishRepository->focus($uids);
        $this->view->assign('dishes', $focusedDishes);
    }
}
