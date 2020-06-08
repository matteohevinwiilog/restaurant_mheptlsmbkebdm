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
 * Boisson
 */
class Drink extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Nom
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $name = '';

    /**
     * Prix
     * 
     * @var float
     */
    protected $price = 0.0;

    /**
     * Description
     * 
     * @var string
     */
    protected $description = '';

    /**
     * Alcoolisé
     * 
     * @var bool
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $alcoholized = false;

    /**
     * Volume
     * 
     * @var string
     */
    protected $volume = '';

    /**
     * Catégorie
     * 
     * @var \Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Domain\Model\Category
     * @lazy
     */
    protected $category = null;

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

    /**
     * Returns the price
     * 
     * @return float $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets the price
     * 
     * @param float $price
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Returns the description
     * 
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     * 
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the alcoholized
     * 
     * @return bool $alcoholized
     */
    public function getAlcoholized()
    {
        return $this->alcoholized;
    }

    /**
     * Sets the alcoholized
     * 
     * @param bool $alcoholized
     * @return void
     */
    public function setAlcoholized($alcoholized)
    {
        $this->alcoholized = $alcoholized;
    }

    /**
     * Returns the boolean state of alcoholized
     * 
     * @return bool
     */
    public function isAlcoholized()
    {
        return $this->alcoholized;
    }

    /**
     * Returns the volume
     * 
     * @return string $volume
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Sets the volume
     * 
     * @param string $volume
     * @return void
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
    }

    /**
     * Returns the category
     * 
     * @return \Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Domain\Model\Category $category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets the category
     * 
     * @param \Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Domain\Model\Category $category
     * @return void
     */
    public function setCategory(\Mheptlsmbkebdm\RestaurantMheptlsmbkebdm\Domain\Model\Category $category)
    {
        $this->category = $category;
    }
}
