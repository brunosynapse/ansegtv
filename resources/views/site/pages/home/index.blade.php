@extends('site/layouts.app')

@section('content')

    @include('site/partials.home-slider')
    @include('site/partials.news')
    @include('site/partials.associated')

@endsection

@push('scripts')
    <script type="text/javascript">
        $('ul.nav li.dropdown').hover(function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(300);
        }, function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(300);
        });
    </script>
@endpush
