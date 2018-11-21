---
extends: _layouts/documentation
title: "Navigation Link"
description: "A link designed for navigation"
---

## Navigation

Buttons are used to indicate a primary action. The class `.button` can be used for elements such as `<button>`, `<input>` and `<a>`

<div class="bg-grey-lightest p-6 rounded my-2">
	<div class="navigation-link">
		<div class="navigation-link__upper">
			<a href="#" class="navigation-link__link">Patientinformation och annat som du behöver veta</a>
			<span class="navigation-link__icon"></span>
		</div>
		<div class="navigation-link__list">
			<a href="" class="navigation-link__list-item">Avvikelsehantering</a>, 
			<a href="" class="navigation-link__list-item">Avgiftshandboken</a>, 
			<a href="" class="navigation-link__list-item">Asylsökande</a> 
			och <a href="" class="navigation-link__list-item">3 andra sidor</a>
		</div>
	</div>
	
</div>

```html
<div class="navigation-link">
	<div class="navigation-link__upper">
		<a href="#" class="navigation-link__link">Patientinformation och annat som du behöver veta</a>
		<span class="navigation-link__icon"></span>
	</div>
	<div class="navigation-link__list">
		<a href="" class="navigation-link__list-item">Avvikelsehantering</a>, 
		<a href="" class="navigation-link__list-item">Avgiftshandboken</a>, 
		<a href="" class="navigation-link__list-item">Asylsökande</a> 
		och <a href="" class="navigation-link__list-item">3 andra sidor</a>
	</div>
</div>
```