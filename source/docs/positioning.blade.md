---
extends: _layouts.documentation
title: "Position"
description: "Utilities for controlling how an element is positioned in the DOM."
features:
  responsive: true
  customizable: false
  hover: false
  focus: false
---

@include('_partials.class-table', [
  'rows' => [
    [
      '.static',
      "position: static;",
      "Position an element according to the normal flow of the document.",
    ],
    [
      '.fixed',
      "position: fixed;",
      "Position an element relative to the browser window.",
    ],
    [
      '.absolute',
      "position: absolute;",
      "Position an element outside of the normal flow of the document, causing neighboring elements to act as if the element doesn't exist.",
    ],
    [
      '.relative',
      "position: relative;",
      "Position an element according to the normal flow of the document.",
    ],
    [
      '.sticky',
      "position: sticky;",
      "Position an element relatively until its containing block crosses a specified threshold, then position it relative to the viewport.",
    ],
    [
      '.pin-t',
      "top: 0;",
      "Anchor absolutely positioned element to the top edge of the nearest positioned parent.",
    ],
    [
      '.pin-r',
      "right: 0;",
      "Anchor absolutely positioned element to the right edge of the nearest positioned parent.",
    ],
    [
      '.pin-b',
      "bottom: 0;",
      "Anchor absolutely positioned element to the bottom edge of the nearest positioned parent.",
    ],
    [
      '.pin-l',
      "left: 0;",
      "Anchor absolutely positioned element to the left edge of the nearest positioned parent.",
    ],
    [
      '.pin-y',
      "top: 0;\nbottom: 0;",
      "Anchor absolutely positioned element to the top and bottom edges of the nearest positioned parent.",
    ],
    [
      '.pin-x',
      "right: 0;\nleft: 0;",
      "Anchor absolutely positioned element to the left and right edges of the nearest positioned parent.",
    ],
    [
      '.pin',
      "top: 0;\nright: 0;\nbottom: 0;\nleft: 0;",
      "Anchor absolutely positioned element to all the edges of the nearest positioned parent.",
    ],
    [
      '.pin-none',
      "top: auto;\nright: auto;\nbottom: auto;\nleft: auto;",
      "Reset absolutely positioned element to all the edges from a given breakpoint onwards.",
    ],
  ]
])

