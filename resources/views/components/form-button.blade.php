<button {{ $attributes->merge(['class' => 'rounded-md bg-orange-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-orange-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600', 'type' => 'submit']) }}>
    {{ $slot }}
</button>
