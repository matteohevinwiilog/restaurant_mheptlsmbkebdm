<?php
namespace Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Domain\Model;


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
 * Catégorie
 */
class Category extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Nom
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $name = '';

    /**
     * Returns the name
     * 
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     * 
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
