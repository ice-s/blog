<!-- aside -->
<div id="aside" class="app-aside modal fade nav-dropdown">
    <!-- fluid app aside -->
    <div class="left navside dark dk" layout="column">
        <div class="navbar no-radius">
            <!-- brand -->
            <a class="navbar-brand">
                <div ui-include="'{{asset("admin/assets/images/logo.svg")}}'"></div>
                <img src="{{asset("admin/assets/images/logo.png")}}" alt="." class="hide">
                <span class="hidden-folded inline">ICE</span>
            </a>
            <!-- / brand -->
        </div>
        <div flex class="hide-scroll">
            <nav class="scroll nav-light">

                <ul class="nav" ui-nav>
                    <li class="nav-header hidden-folded">
                        <small class="text-muted">Main</small>
                    </li>

                    <li>
                        <a href="dashboard.html">
                    <span class="nav-icon">
                      <i class="material-icons">&#xe3fc;
                        <span ui-include="'{{asset("admin/assets/images/i_0.svg")}}'"></span>
                      </i>
                    </span>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                            <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'{{asset("admin/assets/images/i_1.svg")}}'"></span>
                      </i>
                    </span>
                            <span class="nav-text">Database</span>
                        </a>
                        <ul class="nav-sub">
                            <li>
                                <a href="{{route('db_list')}}">
                                    <span class="nav-text">Tables</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>
        <div flex-no-shrink class="b-t">
            <div class="nav-fold">
                <a href="profile.html">
        	    <span class="pull-left">
        	      <img src="{{asset("admin/assets/images/a0.jpg")}}" alt="..." class="w-40 img-circle">
        	    </span>
                    <span class="clear hidden-folded p-x">
        	      <span class="block _500">Jean Reyes</span>
        	      <small class="block text-muted"><i class="fa fa-circle text-success m-r-sm"></i>online</small>
        	    </span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- / -->