@props(['title'])

<div style="border: 1px solid #ccc; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
    <h2>{{ $title }}</h2>
    <p>{{ $slot }}</p>
</div>
