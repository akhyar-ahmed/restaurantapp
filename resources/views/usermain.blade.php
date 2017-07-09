<!DOCTYPE html>

<html lang="en">

  @include('_itemHead')

  <body>
    @include('_navUser')

      <div class="container" id = "item">

        @include('_messages')
        @yield('content')
        @include('_footer')

      </div>

    @include('_javascripts')
  </body>

</html>
