{{-- Custom Filament Panel Layout with Footer --}}
@include('filament-panels::components.html-start')

<body class="fi-body min-h-screen bg-gray-950 text-white">
    @include('filament-panels::components.banner')
    @include('filament-panels::components.notifications')
    @include('filament-panels::components.layout')

    <footer style="text-align:center;padding:16px 0;color:#aaa;font-size:14px;">
        Copyright Kelompok 7 Malam A
    </footer>

    @include('filament-panels::components.scripts')
</body>

@include('filament-panels::components.html-end')
