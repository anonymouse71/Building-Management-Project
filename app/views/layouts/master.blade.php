<!DOCTYPE html>
<html lang="en">
<head>

    @include('includes.header')
</head>

<body>

@include('includes.topMenuHome')

<div class="container">
        <div class="row">
            @yield('content')
        </div>

</div>
</body>
</html>