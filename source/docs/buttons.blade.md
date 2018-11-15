---
extends: _layouts/documentation
title: "Buttons"
description: "Utilities for suppressing native form control styling."
---

## Buttons

Buttons are used to indicate a primary action. The class `.button` can be used for elements such as `<button>`, `<input>` and `<a>`

<div class="bg-grey-lightest p-6 rounded my-2">
	<button class="button">Normal Button</button>
</div>
```html
<button class="button">Normal Button</button>
<a href="#" title="Normal Button" class="button">Normal Button</a>
<input type="submit" class="button" value="Normal Button">
```
<div class="bg-grey-lightest p-6 rounded my-2">
	<button class="button-outline">Secondary Button</button>
</div>
```html
<button class="button-outline">Normal Button</button>
<a href="#" title="Normal Button" class="button-outline">Normal Button</a>
<input type="submit" class="button-outline" value="Normal Button">
```