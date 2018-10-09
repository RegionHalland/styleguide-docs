---
extends: _layouts.documentation
title: "Overflow"
description: "Utilities for controlling how an element handles content that is too large for the container."
features:
  responsive: true
  customizable: false
  hover: false
  focus: false
---

@include('_partials.class-table', [
  'rows' => [
    [
      '.overflow-auto',
      'overflow: auto;',
      "Add scrollbars to an element if needed.",
    ],
    [
      '.overflow-hidden',
      'overflow: hidden;',
      "Clip any content that overflows the element.",
    ],
    [
      '.overflow-visible',
      'overflow: visible;',
      "Don't clip content that overflows the element.",
    ],
    [
      '.overflow-scroll',
      'overflow: scroll;',
      "Add scrollbars to an element.",
    ],
    [
      '.overflow-x-auto',
      'overflow-x: auto;',
      "Allow horizontal scrolling if needed.",
    ],
    [
      '.overflow-y-auto',
      'overflow-y: auto;',
      "Allow vertical scrolling if needed.",
    ],
    [
      '.overflow-x-hidden',
      'overflow-x: hidden;',
      "Clip any content that overflows the element horizontally.",
    ],
    [
      '.overflow-y-hidden',
      'overflow-y: hidden;',
      "Clip any content that overflows the element vertically.",
    ],
    [
      '.overflow-x-visible',
      'overflow-x: visible;',
      "Don't clip content that overflows the element horizontally.",
    ],
    [
      '.overflow-y-visible',
      'overflow-y: visible;',
      "Don't clip content that overflows the element vertically.",
    ],
    [
      '.overflow-x-scroll',
      'overflow-x: scroll;',
      "Add horizontal scrollbars to an element.",
    ],
    [
      '.overflow-y-scroll',
      'overflow-y: scroll;',
      "Add vertical scrollbars to an element.",
    ],
    [
      '.scrolling-touch',
      '-webkit-overflow-scrolling: touch;',
      "Use momentum-based scrolling on touch devices.",
    ],
    [
      '.scrolling-auto',
      '-webkit-overflow-scrolling: auto;',
      "Use \"regular\" scrolling on touch devices.",
    ],
  ]
])

