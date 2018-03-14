@extends('site.template.index')

@section('content')
    @include('site.home.bannertop')
    @include('site.home.newslettersession')
    @include('site.home.contenthome')

    <script type="text/javascript">
        $(document).ready(function () {
            $('.cover-all').addClass('show');
            $('.banner-pop').addClass('visible');
        });
    </script>
@endsection
