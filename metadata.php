<?php


/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'mymodul',
    'title'        => 'myModule',
    'description'  => array(
        'de' => 'Modul für Test.',
        'en' => 'Module for Test.',
    ),
    'thumbnail'    => 'logo.jpg',
    'version'      => '1.0.0',
    'author'       => 'Hasanul Banna',
    'url'          => 'https://smhasanulbanna.wordpress.com/',
    'email'        => 'iamhasanulbanna@gmail.com',
    'extend'       => array(
        'article_main'     =>'mymodule/extensions/controllers/admin/mymodule_article_main',
        'oxarticle'	       => 'mymodule/extensions/controllers/mymodule_productmain_discount'
    ),
    'files'        => array(),
    'controllers'  => array(),
    'events'       => array(),
    'templates'    => array(),
    'blocks'       => array(
        array(
        'template' => 'article_main.tpl',
        'block'    => 'admin_article_main_form',
        'file'     => 'application/views/admin/blocks/myModule_article_main.tpl'
        ),
        array(
            'template' => 'page/details/inc/productmain.tpl',
            'block'    => 'details_productmain_title',
            'file'     => 'application/views/flow/blocks/mymodule_details_productmain_title.tpl'
            ),
        array(
            'template' => 'form/fieldset/user_billing.tpl',
            'block'    => 'form_user_billing_newCustomerNumber',
            'file'     => 'application/views/flow/blocks/mymodule_user_billing_newCustomerNumber.tpl'
            ),
    ),
    'settings'     => array(),
);
