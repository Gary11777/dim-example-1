<form {{ $attributes(["class" => "max-w-md space-y-5", "method" =>
"GET"]) }}>
    @if($attributes->get('method', 'GET') !== 'GET')
        @csrf
        @method($attributes->get('method'))
    @endif

    {{ $slot }}
</form>
