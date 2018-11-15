<div class="rounded overflow-hidden border border-grey-light mb-8 mt-4 bg-white">
  <div class="border-b border-grey-light p-4 {{ $class ?? '' }}">
    {{ $slot }}
  </div>
  <div class="bg-grey-lightest">
    <pre class="language-{{ $lang ?? 'html' }}" style="margin: 0; border-radius:0;"><code>{{ e($code ?? $slot) }}</code></pre>
  </div>
</div>
