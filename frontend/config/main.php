<?php
/**
 * Конфиг сайтвой части приложения
 *
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010-2014 SkeekS (Sx)
 * @date 15.10.2014
 * @since 1.0.0
 */
$config = [
    'params' => [],

    'components' =>
    [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'skeeks2',
        ],

        'user' =>
        [
            'identityClass' => 'common\models\User',
            /*'identityCookie' => [
                'name' => '_identity',
                'httpOnly' => true,
                'domain' => '.cms.skeeks.com'
            ]*/
        ],

        'seo' => [
            'canUrl' => [
                /*'scheme' => 'https',
                'host'   => 'skeeks.com',*/
            ],
        ],

        'view' => [
            'on beforeRender' => function () {
                if (!\skeeks\cms\backend\BackendComponent::getCurrent()) {
                    \skeeks\cms\themes\unify\UnifyTheme::initBeforeRender();
                    //\Yii::$app->view->theme->logo = \common\themes\sweet\assets\SweetThemeAsset::getAssetUrl('img/logo.png');
                }
            },

            'theme' => [
                'class'   => \skeeks\cms\themes\unify\UnifyTheme::class,
                /*'class'   => \common\themes\sweet\SweetTheme::class,

                'address' => 'Московская область, пос. Андреевка, мкр. Высокое, д. 50',
                'title' => 'Интернет-магазин домашних заготовок.',
                'phone' => '+7 (925) 712-00-60',
                'email' => 'info@sweet-jam.ru',*/
            ],
        ],

    ]
];

return $config;