
<!doctype html>
<html lang="en">
 @include('layout.partials._head')
  <body>

    @include('layout.partials._navigation')

<div class="container-fluid">
  <div class="row">
    @include('layout.partials._sidebar')

   @yield('content')
  </div>
</div>
@include('layout.partials._scripts')
    </body>
</html>
