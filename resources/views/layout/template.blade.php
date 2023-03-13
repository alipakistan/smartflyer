<!DOCTYPE html>
<html lang="en">
@if(Auth::user() !== null)
    @include('layout.header_scripts')
@else
    @include('layout.destination_header_scripts')
@endif

<body>

<div class="main-wrapper">


    @if(Auth::user() !== null)
        @include('layout.header')
    @else
        @include('layout.destination_header')
    @endif

        <!-- Modal -->
        @include('layout.login_modal')

        @yield('content')

        @include('layout.you_might_like')

</div>


@if(Auth::user() !== null)
    @include('layout.footer')
@else
    @include('layout.destination_footer')
@endif

@include('layout.footer_scripts')

@yield('footer-scripts')

</body>
</html>
