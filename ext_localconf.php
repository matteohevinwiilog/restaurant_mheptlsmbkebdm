<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Mheptlsmbkebdm.RestaurantMheptlsmbkebdm',
            'Pi1',
            [
                'Menu' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Menu' => '',
                'Dish' => '',
                'Drink' => '',
                'Suggestion' => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Mheptlsmbkebdm.RestaurantMheptlsmbkebdm',
            'Pi2',
            [
                'Dish' => 'list, show, focus'
            ],
            // non-cacheable actions
            [
                'Dish' => 'search'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Mheptlsmbkebdm.RestaurantMheptlsmbkebdm',
            'Pi3',
            [
                'Drink' => 'list'
            ],
            // non-cacheable actions
            [
                'Menu' => '',
                'Dish' => '',
                'Drink' => '',
                'Suggestion' => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Mheptlsmbkebdm.RestaurantMheptlsmbkebdm',
            'Pi4',
            [
                'Suggestion' => 'current, incoming'
            ],
            // non-cacheable actions
            [
                'Menu' => '',
                'Dish' => '',
                'Drink' => '',
                'Suggestion' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    pi1 {
                        iconIdentifier = restaurant_mheptlsmbkebdm-plugin-pi1
                        title = LLL:EXT:restaurant_mheptlsmbkebdm/Resources/Private/Language/locallang_db.xlf:tx_restaurant_mheptlsmbkebdm_pi1.name
                        description = LLL:EXT:restaurant_mheptlsmbkebdm/Resources/Private/Language/locallang_db.xlf:tx_restaurant_mheptlsmbkebdm_pi1.description
                        tt_content_defValues {
                            CType = list
                            list_type = restaurantmheptlsmbkebdm_pi1
                        }
                    }
                    pi2 {
                        iconIdentifier = restaurant_mheptlsmbkebdm-plugin-pi2
                        title = LLL:EXT:restaurant_mheptlsmbkebdm/Resources/Private/Language/locallang_db.xlf:tx_restaurant_mheptlsmbkebdm_pi2.name
                        description = LLL:EXT:restaurant_mheptlsmbkebdm/Resources/Private/Language/locallang_db.xlf:tx_restaurant_mheptlsmbkebdm_pi2.description
                        tt_content_defValues {
                            CType = list
                            list_type = restaurantmheptlsmbkebdm_pi2
                        }
                    }
                    pi3 {
                        iconIdentifier = restaurant_mheptlsmbkebdm-plugin-pi3
                        title = LLL:EXT:restaurant_mheptlsmbkebdm/Resources/Private/Language/locallang_db.xlf:tx_restaurant_mheptlsmbkebdm_pi3.name
                        description = LLL:EXT:restaurant_mheptlsmbkebdm/Resources/Private/Language/locallang_db.xlf:tx_restaurant_mheptlsmbkebdm_pi3.description
                        tt_content_defValues {
                            CType = list
                            list_type = restaurantmheptlsmbkebdm_pi3
                        }
                    }
                    pi4 {
                        iconIdentifier = restaurant_mheptlsmbkebdm-plugin-pi4
                        title = LLL:EXT:restaurant_mheptlsmbkebdm/Resources/Private/Language/locallang_db.xlf:tx_restaurant_mheptlsmbkebdm_pi4.name
                        description = LLL:EXT:restaurant_mheptlsmbkebdm/Resources/Private/Language/locallang_db.xlf:tx_restaurant_mheptlsmbkebdm_pi4.description
                        tt_content_defValues {
                            CType = list
                            list_type = restaurantmheptlsmbkebdm_pi4
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'restaurant_mheptlsmbkebdm-plugin-pi1',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:restaurant_mheptlsmbkebdm/Resources/Public/Icons/user_plugin_pi1.svg']
			);
		
			$iconRegistry->registerIcon(
				'restaurant_mheptlsmbkebdm-plugin-pi2',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:restaurant_mheptlsmbkebdm/Resources/Public/Icons/user_plugin_pi2.svg']
			);
		
			$iconRegistry->registerIcon(
				'restaurant_mheptlsmbkebdm-plugin-pi3',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:restaurant_mheptlsmbkebdm/Resources/Public/Icons/user_plugin_pi3.svg']
			);
		
			$iconRegistry->registerIcon(
				'restaurant_mheptlsmbkebdm-plugin-pi4',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:restaurant_mheptlsmbkebdm/Resources/Public/Icons/user_plugin_pi4.svg']
			);
		
    }
);
