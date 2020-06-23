<!DOCTYPE html>
<html lang="en">

    <head>
    @include('school.partials.meta')
     

        <title>@yield('title')</title>

        <!-- ================= Favicon ================== -->
        <!-- Standard -->
   @include('school.partials.links')
   <!-- Styles -->
   @include('school.partials.style')
    </head>

    <body>
    @include('school.partials.nav')
       
        <!-- /# sidebar -->
      @include('school.partials.header')
      
                    <!-- /# row -->
                @yield('content')
             <!--content-->
            
             @include('school.partials.footer')
        <!-- jquery vendor -->
        @include('school.partials.scripts')
        <!-- scripit init-->
       
    </body>

</html>
