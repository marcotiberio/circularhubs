<?php

use ACFComposer\ResolveConfig;
use Flynt\Api;
use Flynt\Components;

call_user_func(function () {
    $basePath = __DIR__;
    global $flyntCurrentOptionCategory;
    $flyntCurrentOptionCategory = 'component';
    Api::registerComponentsFromPath($basePath);
});

add_action('Flynt/afterRegisterComponents', function () {
    $store = acf_get_local_store('fields');
    $pageComponents = $store->get('pageComponents');
    $layouts = [
        Components\AccordionDefault\getACFLayout(),
        Components\BlockCountUp\getACFLayout(),
        Components\BlockImageTextParallax\getACFLayout(),
        Components\BlockTextImageCrop\getACFLayout(),
        Components\BlockWysiwygSidebar\getACFLayout(),
        Components\BlockWysiwygTwoCol\getACFLayout(),
        Components\FormContactForm7\getACFLayout(),
        Components\FormNewsletter\getACFLayout(),
        Components\HeroCta\getACFLayout(),
        Components\HeroImageCta\getACFLayout(),
        Components\HeroImageText\getACFLayout(),
        Components\HeroSlider\getACFLayout(),
        Components\HeroTextImage\getACFLayout(),
        Components\ListIcons\getACFLayout(),
        Components\ListLogos\getACFLayout(),
        Components\ListSocial\getACFLayout(),
        Components\NavigationFooterColumns\getACFLayout(),
        Components\SliderImageGallery\getACFLayout(),
        Components\SliderImagesCentered\getACFLayout(),
    ];
    foreach ($layouts as $layout) {
        $config = ResolveConfig::forLayout($layout, ['pageComponents_pageComponents']);
        $config['label'] = "🏆 {$config['label']}";
        $pageComponents['layouts'][] = $config;
    }
    $store->set($pageComponents['key'], $pageComponents);
}, 11);
