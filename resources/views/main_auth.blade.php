<!DOCTYPE html>
<html lang="en" dir="ltr">

  @include('includes._head')
  <body>
    @include('includes._nav')

<div class="container">


      <div class="row">
      @include('includes._messages')

            @yield('content')
      </div>
</div>

  <hr>
    @include('includes._javascript')
    @yield('scripts')
  </body>
  @include('includes._footer')
</html>
