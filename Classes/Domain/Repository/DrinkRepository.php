<?php
namespace Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Domain\Repository;


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
 * The repository for Drinks
 */
class DrinkRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * @var array
     */
    protected $defaultOrderings = ['sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING];
}
