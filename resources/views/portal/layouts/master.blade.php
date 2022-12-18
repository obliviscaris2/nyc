<!doctype html>
<html lang="en">



@include('portal.includes.head')

<body>

    @include('portal.includes.nav')

    @include('portal.includes.news')

    

    @yield('content')

    @include('portal.includes.footer')

    @include('portal.includes.scripts.scripts')

    <x-toast />


      <!-- Optional JavaScript; choose one of the two! -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<script>
(function($) { // Begin jQuery
$(function() { // DOM ready
  // If a link has a dropdown, add sub menu toggle.
  $('nav ul li a:not(:only-child)').click(function(e) {
    $(this).siblings('.nav-dropdown').toggle();
    // Close one dropdown when selecting another
    $('.nav-dropdown').not($(this).siblings()).hide();
    e.stopPropagation();
  });
  // Clicking away from dropdown will remove the dropdown class
  $('html').click(function() {
    $('.nav-dropdown').hide();
  });
  // Toggle open and close nav styles on click
  $('#nav-toggle').click(function() {
    $('nav ul').slideToggle();
  });
  // Hamburger to X toggle
  $('#nav-toggle').on('click', function() {
    this.classList.toggle('active');
  });
}); // end DOM ready
})(jQuery); // end jQuery
</script>
<script src="{{ asset('js/venobox.min.js') }}" async defer></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>

</html>
