---
extends: _layouts/documentation
title: "Tabs"
description: "A filter component for showing and hiding content"
---

# Tabs

Tabs are used to filter content. Add the modifier --active to indicate which content is currently being filtered.

<div class="bg-grey-lightest p-6 rounded my-2">
	
	<ul class="tabs">
		<a href="#" class="tab tab--active">
			<li class="tab__item">
				<span>Alla resultat</span>
				<span class="tab__counter">24</span>
			</li>
		</a>
		<a href="#" class="tab">
			<li class="tab__item">
				<span>Sidor</span>
				<span class="tab__counter">16</span>
			</li>
		</a>
		<a href="#" class="tab">
			<li class="tab__item">
				<span>Styrda dokument</span>
				<span class="tab__counter">8</span>
			</li>
		</a>
	</ul>

</div>


```html
<ul class="tabs">
	<a href="#" class="tab tab--active">
		<li class="tab__item">
			<span>Alla resultat</span>
			<span class="tab__counter">24</span>
		</li>
	</a>
	<a href="#" class="tab">
		<li class="tab__item">
			<span>Sidor</span>
			<span class="tab__counter">16</span>
		</li>
	</a>
	<a href="#" class="tab">
		<li class="tab__item">
			<span>Styrda dokument</span>
			<span class="tab__counter">8</span>
		</li>
	</a>
</ul>
```