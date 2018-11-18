<!DOCTYPE html>
<html lang="en">
@include('admin.__partial.__header')
<body>
<div class="app" id="app">

    <!-- ############ LAYOUT START-->

    @include('admin.__partial.__aside')

    <!-- content -->
    <div id="content" class="app-content box-shadow-z0" role="main">
        @include('admin.__partial.__topBar')
        @include('admin.__partial.__bottomBar')

        <div ui-view class="app-body" id="view">

            <!-- ############ PAGE START-->
            @yield('content')
            <!-- ############ PAGE END-->
        </div>
    </div>
    <!-- / -->

    <!-- ############ LAYOUT END-->

</div>
@include('admin.__partial.__footer')
</body>
</html>
