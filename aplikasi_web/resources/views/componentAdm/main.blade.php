<!DOCTYPE html>
<html lang="en">

<head>
    @include('componentAdm.header')
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    @include('componentAdm.navbar')

    @include('componentAdm.sidebar')

    @yield('content')

    @include('componentAdm.script')

</body>

</html>
