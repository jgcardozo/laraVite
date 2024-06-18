<ul class="nav">
    <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="nav-icon la la-lg la-dashboard"></i> Dashboard</a>
    </li>
{{--     <li class="nav-title">Theme</li>
    <li class="nav-item"><a class="nav-link" href="colors.html"><i class="nav-icon la la-lg la-bullseye"></i> Colors</a>
    </li>
    <li class="nav-item"><a class="nav-link" href="typography.html"><i class="nav-icon la la-lg la-pencil"></i>
            Typography</a></li>
 --}}

    <li class="nav-item nav-dropdown"><a class="nav-link nav-dropdown-toggle" href="#"><i
                class="nav-icon la la-lg la-bank"></i> Products</a>
        <ul class="nav-dropdown-items">
            <li class="nav-item"><a class="nav-link" href="base/breadcrumb.html"><i
                        class="nav-icon la la-lg la-puzzle"></i> Create</a></li>
            <li class="nav-item"><a class="nav-link" href="base/cards.html"><i class="nav-icon la la-lg la-puzzle"></i>
                    Edit</a></li>
        </ul>
    </li>


    <li class="nav-item nav-dropdown"><a class="nav-link nav-dropdown-toggle" href="{{ route('categories.index') }}"><i
                class="nav-icon la la-lg la-bank"></i> Categories</a>
        <ul class="nav-dropdown-items">
            <li class="nav-item"><a class="nav-link" href="{{ route('categories.index') }}"><i
                        class="nav-icon la la-lg la-puzzle"></i> Create</a></li>
            <li class="nav-item"><a class="nav-link" href="base/cards.html"><i class="nav-icon la la-lg la-puzzle"></i>
                    Edit</a></li>
        </ul>
    </li>  
    
    <li class="nav-item nav-dropdown"><a class="nav-link nav-dropdown-toggle" href="#"><i
                class="nav-icon la la-lg la-bank"></i> Customers</a>
        <ul class="nav-dropdown-items">
            <li class="nav-item"><a class="nav-link" href="base/breadcrumb.html"><i
                        class="nav-icon la la-lg la-puzzle"></i> Create</a></li>
            <li class="nav-item"><a class="nav-link" href="base/cards.html"><i class="nav-icon la la-lg la-puzzle"></i>
                    Edit</a></li>
        </ul>
    </li>


        {{-- 
    <li class="nav-item nav-dropdown"><a class="nav-link nav-dropdown-toggle" href="#"><i
                class="nav-icon la la-lg la-bank"></i> Base</a>
        <ul class="nav-dropdown-items">
            <li class="nav-item"><a class="nav-link" href="base/breadcrumb.html"><i
                        class="nav-icon la la-lg la-puzzle"></i> Breadcrumb</a></li>
            <li class="nav-item"><a class="nav-link" href="base/cards.html"><i class="nav-icon la la-lg la-puzzle"></i>
                    Cards</a></li>
            <li class="nav-item"><a class="nav-link" href="base/carousel.html"><i
                        class="nav-icon la la-lg la-puzzle"></i> Carousel</a></li>
            <li class="nav-item"><a class="nav-link" href="base/collapse.html"><i
                        class="nav-icon la la-lg la-puzzle"></i> Collapse</a></li>
            <li class="nav-item"><a class="nav-link" href="base/forms.html"><i class="nav-icon la la-lg la-puzzle"></i>
                    Forms</a></li>
            <li class="nav-item"><a class="nav-link" href="base/jumbotron.html"><i
                        class="nav-icon la la-lg la-puzzle"></i> Jumbotron</a></li>
            <li class="nav-item"><a class="nav-link" href="base/list-group.html"><i
                        class="nav-icon la la-lg la-puzzle"></i> List group</a></li>
            <li class="nav-item"><a class="nav-link" href="base/navs.html"><i class="nav-icon la la-lg la-puzzle"></i>
                    Navs</a></li>
            <li class="nav-item"><a class="nav-link" href="base/pagination.html"><i
                        class="nav-icon la la-lg la-puzzle"></i> Pagination</a></li>
            <li class="nav-item"><a class="nav-link" href="base/popovers.html"><i
                        class="nav-icon la la-lg la-puzzle"></i> Popovers</a></li>
            <li class="nav-item"><a class="nav-link" href="base/progress.html"><i
                        class="nav-icon la la-lg la-puzzle"></i> Progress</a></li>
            <li class="nav-item"><a class="nav-link" href="base/scrollspy.html"><i
                        class="nav-icon la la-lg la-puzzle"></i> Scrollspy</a></li>
            <li class="nav-item"><a class="nav-link" href="base/switches.html"><i
                        class="nav-icon la la-lg la-puzzle"></i> Switches</a></li>
            <li class="nav-item"><a class="nav-link" href="base/tables.html"><i class="nav-icon la la-lg la-puzzle"></i>
                    Tables</a></li>
            <li class="nav-item"><a class="nav-link" href="base/tabs.html"><i class="nav-icon la la-lg la-puzzle"></i>
                    Tabs</a></li>
            <li class="nav-item"><a class="nav-link" href="base/tooltips.html"><i
                        class="nav-icon la la-lg la-puzzle"></i> Tooltips</a></li>
        </ul>
    </li>
    <li class="nav-item nav-dropdown"><a class="nav-link nav-dropdown-toggle" href="#"><i
                class="nav-icon la la-lg la-hand-pointer-o"></i> Buttons</a>
        <ul class="nav-dropdown-items">
            <li class="nav-item"><a class="nav-link" href="buttons/buttons.html"><i
                        class="nav-icon la la-lg la-cursor"></i> Buttons</a></li>
            <li class="nav-item"><a class="nav-link" href="buttons/button-group.html"><i
                        class="nav-icon la la-lg la-cursor"></i> Buttons Group</a></li>
            <li class="nav-item"><a class="nav-link" href="buttons/dropdowns.html"><i
                        class="nav-icon la la-lg la-cursor"></i> Dropdowns</a></li>
            <li class="nav-item"><a class="nav-link" href="buttons/brand-buttons.html"><i
                        class="nav-icon la la-lg la-cursor"></i> Brand Buttons</a></li>
        </ul>
    </li>
    <li class="nav-item"><a class="nav-link" href="charts.html"><i class="nav-icon la la-lg la-pie-chart"></i>
            Charts</a></li>
    <li class="nav-item nav-dropdown"><a class="nav-link nav-dropdown-toggle" href="#"><i
                class="nav-icon la la-lg la-star"></i> Icons</a>
        <ul class="nav-dropdown-items">
            <li class="nav-item"><a class="nav-link" href="icons/line-awesome.html"> Line
                    Awesome<span class="badge badge-primary">NEW</span></a></li>
            <li class="nav-item"><a class="nav-link" href="icons/coreui-icons.html"> CoreUI Icons</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="icons/flags.html"> Flags</a></li>
            <li class="nav-item"><a class="nav-link" href="icons/font-awesome.html"> Font Awesome</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="icons/simple-line-icons.html"> Simple Line
                    Icons</a></li>
        </ul>
    </li>
    <li class="nav-item nav-dropdown"><a class="nav-link nav-dropdown-toggle" href="#"><i
                class="nav-icon la la-lg la-bell"></i> Notifications</a>
        <ul class="nav-dropdown-items">
            <li class="nav-item"><a class="nav-link" href="notifications/alerts.html"><i
                        class="nav-icon la la-lg la-bell"></i> Alerts</a></li>
            <li class="nav-item"><a class="nav-link" href="notifications/badge.html"><i
                        class="nav-icon la la-lg la-bell"></i> Badge</a></li>
            <li class="nav-item"><a class="nav-link" href="notifications/modals.html"><i
                        class="nav-icon la la-lg la-bell"></i> Modals</a></li>
        </ul>
    </li>
    <li class="nav-item"><a class="nav-link" href="widgets.html"><i class="nav-icon la la-lg la-calculator"></i>
            Widgets</a></li>
    <li class="divider"></li>
    <li class="nav-title">Extras</li>
    <li class="nav-item nav-dropdown"><a class="nav-link nav-dropdown-toggle" href="#"><i
                class="nav-icon la la-lg la-file"></i> Pages</a>
        <ul class="nav-dropdown-items">
            <li class="nav-item"><a class="nav-link" href="login.html" target="_top"><i
                        class="nav-icon la la-lg la-star"></i> Login</a></li>
            <li class="nav-item"><a class="nav-link" href="register.html" target="_top"><i
                        class="nav-icon la la-lg la-star"></i> Register</a></li>
            <li class="nav-item"><a class="nav-link" href="404.html" target="_top"><i
                        class="nav-icon la la-lg la-star"></i> Error 404</a></li>
            <li class="nav-item"><a class="nav-link" href="500.html" target="_top"><i
                        class="nav-icon la la-lg la-star"></i> Error 500</a></li>
        </ul>
    </li> --}}
</ul>
