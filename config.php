<?php

return [
    'baseUrl' => '',
    'production' => false,
    'collections' => [],
    'styleguideUrl' => 'http://127.0.0.1:8125/dist/css/main.min.css',
    'anyChildrenActive' => function ($page, $children) {
        return $children->contains(function ($link) use ($page) {
            return $page->getPath() == '/docs/'. $link;
        });
    },
	'navigation' => require_once('navigation.php'),
];