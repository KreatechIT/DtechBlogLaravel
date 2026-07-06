@props(['type', 'data' => []])

@php
    $payload = array_merge(['@context' => 'https://schema.org', '@type' => $type], $data);

    $prune = function ($value) use (&$prune) {
        if (is_array($value)) {
            $isList = array_is_list($value);
            $pruned = array_filter(array_map($prune, $value), fn ($v) => $v !== null && $v !== '' && $v !== []);
            return $isList ? array_values($pruned) : $pruned;
        }
        return $value;
    };

    $payload = $prune($payload);
@endphp
<script type="application/ld+json">{!! json_encode($payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
