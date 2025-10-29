<?php

use PP\MainLayout;
use PP\Request;

MainLayout::$title = 'Swagger Docs';
MainLayout::$description = 'Swagger Docs for the API';

$mainLayoutHead = [
    "<link rel='stylesheet' type='text/css' href='/assets/dist/swagger-ui.css' />",
    "<link rel='stylesheet' type='text/css' href='/assets/dist/index.css' />",
    "<link rel='icon' type='image/png' href='/assets/dist/favicon-32x32.png' sizes='32x32' />",
    "<link rel='icon' type='image/png' href='/assets/dist/favicon-16x16.png' sizes='16x16' />",
];

MainLayout::addHeadScript(...$mainLayoutHead);

$mainLayoutFooter = [
    "<script type='text/javascript' src='/assets/dist/swagger-ui-bundle.js' charset='UTF-8'></script>",
    "<script type='text/javascript' src='/assets/dist/swagger-ui-standalone-preset.js' charset='UTF-8'></script>",
    "<script type='text/javascript' src='/assets/dist/swagger-initializer.js' charset='UTF-8'></script>",
];

MainLayout::addFooterScript(...$mainLayoutFooter);
