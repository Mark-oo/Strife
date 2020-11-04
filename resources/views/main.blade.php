<!DOCTYPE html>
<html lang="en" dir="ltr">

  @include('includes._head')
  <body>
    @include('includes._nav')


@include('includes._messages')
      <div class="row">
      @include('includes._left_bar')
            @yield('content')
      @include('includes._right_bar')
      </div>


  <hr>
  </body>
  @include('includes._footer')
  @include('includes._javascript')
  @yield('scripts')
</html>
