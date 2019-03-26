<?php
/**
 * Общий конфиг для всего приложения
 *
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010-2014 SkeekS (Sx)
 * @date 15.10.2014
 * @since 1.0.0
 */
$config = [
    'components' => [
        'urlManager' => [
            'rules' => [
                [
                    'class' => \skeeks\cms\components\urlRules\UrlRuleContentElement::className(),
                ],

                [
                    'class' => \skeeks\cms\components\urlRules\UrlRuleTree::className(),
                ]
            ]
        ],

        'assetManager' => [
            'linkAssets' => true,
        ],

        'cmsAgent' => [
            'onHitsEnabled' => true
        ],
    ],
];


return $config;
