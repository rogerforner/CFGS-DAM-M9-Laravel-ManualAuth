<!doctype HTML>
<html lang="en">
@section('htmlheader')
    @include('layouts.partials.htmlheader')
@endsection
<body>
        @include('layouts.partials.sidebar')

@yield('main-content')

    @include('layouts.partials.htmlfooter')
</body>
</html>

