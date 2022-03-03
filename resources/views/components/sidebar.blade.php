<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="index.html">
            <div class="logo-img">
                <img src="{{asset('assets/src/img/brand-white.svg')}}" class="header-brand-img" alt="lavalite">
            </div>
            <span class="text">ToDoApp</span>
        </a>
        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
    </div>

    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">
                <div class="nav-lavel">Navigation</div>
                <div class="nav-item has-sub">
                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Tasks</span></a>
                    <div class="submenu-content">
                        <a href="{{url('tasks')}}" class="menu-item">View All</a>
                        <a href="{{url('tasks/add')}}" class="menu-item">Add New</a>
                    </div>
                </div>
                <div class="nav-item">
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();"><i class="ik ik-power"></i><span>Logout</span></a>
                </div>
            </nav>
        </div>
    </div>
</div>