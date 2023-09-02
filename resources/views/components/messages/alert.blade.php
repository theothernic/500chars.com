<div {{ $attributes->merge(['class' => sprintf('alert %s', $type)]) }}>

    <p>
        {{ $slot }}
    </p>
</div>
