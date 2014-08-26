<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crux</title>
    {{ HTML::style(asset('css/main'.set_min().'.css')) }}

    {{-- Only modernizr at the top --}}
    {{ HTML::script('js/modernizr-2.6.2.min.js') }}
    <style type="text/css">
    </style>
</head>
<body>
    @include('layouts.inc.cms-header')
    <main class="main-content">
        @yield('main')
    </main>
    @if(Auth::check())
    <footer class="site-footer container">
        <!-- Footer Content Here -->
    </footer>
    @endif
    {{ HTML::script(asset('js/main'.set_min().'.js')) }}

    {{-- Checking if a .ckeditor element exists and then loading in the ckeditor.js file because its huge and expensive --}}
    <script type="text/javascript">
        $('.ui.dropdown').dropdown();
        if ($('.ckeditor')[0]) document.write('<script src="{{ asset('js/ckeditor/ckeditor.js') }}">\x3C/script>');
        if ($('.table.sortable')[0]) $('.sortable.table').tablesort();
    </script>
</body>
</html>
