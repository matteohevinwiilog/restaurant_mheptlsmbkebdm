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
 * The repository for Suggestion
 */
class SuggestionRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException
     */
    public function currents() {
        $query = $this->createQuery();

        $now = (new \DateTime())->format('Y-m-d H:i:s');

        $constraint = $query->logicalAnd([
            $query->lessThanOrEqual('start', $now) &&
            $query->greaterThan('end', $now)
        ]);

        return $query
            ->matching($constraint)
            ->execute();
    }
}
