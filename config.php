<?php

return [
    'baseUrl' => '',
    'production' => false,
    'collections' => [],
    'anyChildrenActive' => function ($page, $children) {
        return $children->contains(function ($link) use ($page) {
            return $page->getPath() == '/docs/'. $link;
        });
    },
	'navigation' => require_once('navigation.php'),
];