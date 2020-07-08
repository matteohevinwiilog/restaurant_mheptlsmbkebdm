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
 * The repository for Dishes
 */
class DishRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * @var array
     */
    protected $defaultOrderings = ['sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING];

    /**
     * @param array $ids
     * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException
     */
    public function focus(array $ids) {
        $query = $this->createQuery();

        $constraint = $query->in('uid', $ids);

        return $query
            ->matching($constraint)
            ->execute();
    }

    public function search(DishSearchQuery $search)
    {
        $query = $this->createQuery();
        $constraints = [];

        if($search->getSearch() !== null){
            $constraints = $query->like('name', $search->getSearch());
        }

        if($search->getType()){
            $constraints[] = $query->equals('type', $search->getType());
        }

        if($search->getAllergens() !== null) {
            $constraints[] = $query->equals('allergens', $search->getAllergens());
        }

        if($search->getFrozens() !== null) {
            $constraints[] = $query->equals('frozens', $search->getFrozens());
        }

        if(count($constraints)){
            $query->matching($query->logicalAnd($constraints));
        }

        return $query->execute();
    }
}
