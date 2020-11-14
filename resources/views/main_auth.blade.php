<!DOCTYPE html>
<html lang="en" dir="ltr">

  @include('includes._head')
  <body>
    @include('includes._nav')




      <div>
      @include('includes._messages')
      </div>
        @yield('content')

  <hr>
    @include('includes._javascript')
    @yield('scripts')
  </body>
  @include('includes._footer')
</html>
