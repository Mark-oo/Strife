<!DOCTYPE html>
<html lang="en" dir="ltr">

  @include('includes._head')
  <body >
    @include('includes._nav')




      <div id="app">
      @include('includes._messages')
        @yield('content')
      </div>


  <hr>
    @include('includes._javascript')
    @yield('scripts')
  </body>
  @include('includes._footer')
</html>
