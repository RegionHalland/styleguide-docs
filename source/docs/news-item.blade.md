---
extends: _layouts/documentation
title: "News Item"
description: "Utilities for suppressing native form control styling."
---

## News Listing

News items are used when listing news articles. Remember to correctly format the published date as follows `dd/mm/yyy`.

<div class="bg-grey-lightest p-6 rounded my-2">
	<div class="">
		<a href="" title="" class="news-item__link">
			<h2 class="news-item__title">Syn, hörsel och DAKO igång med webbtidbok</h2>
		</a>
		<span class="news-item__date">Publicerad : 27/10/2019</span>
		<p class="news-item__excerpt">Webbtidbokning innebär att en patient kan sköta sina bokningar genom att logga in via www.1177.se. Inne i tjänsten guidas patienten bland annat till att välja rätt typ av besök.</p>
		<a href="#" class="news-item__tag">Kategori</a>
		<a href="#" class="news-item__tag">Tema</a>
		<a href="#" class="news-item__tag">Behandlingsstöd</a>
	</div>
</div>

```html
<div class="bg-grey-lightest p-6 rounded my-2">
	<div class="">
		<a href="" title="" class="news-item__link">
			<h2 class="news-item__title">Syn, hörsel och DAKO igång med webbtidbok</h2>
		</a>
		<span class="news-item__date">Publicerad : 27/10/2019</span>
		<p class="news-item__excerpt">Webbtidbokning innebär att en patient kan sköta sina bokningar genom att logga in via www.1177.se. Inne i tjänsten guidas patienten bland annat till att välja rätt typ av besök.</p>
		<a href="#" class="news-item__tag">Kategori</a>
	</div>
</div>
```