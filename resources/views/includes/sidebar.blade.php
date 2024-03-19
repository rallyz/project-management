<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Menu</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link" data-key="t-projects">Dashboard<span class="badge badge-pill bg-danger" data-key="t-new">New</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarProjects" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProjects" data-key="t-projects">
                                    Projects
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarProjects">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('project-list') }}" class="nav-link" data-key="t-list"> List
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-projects-overview.html" class="nav-link" data-key="t-overview"> Overview </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('project-create') }}" class="nav-link" data-key="t-create-project"> Create Project </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarTasks" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTasks" data-key="t-tasks"> Tasks
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarTasks">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('task-list') }}" class="nav-link" data-key="t-list-view">
                                                List View </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('task-details') }}" class="nav-link" data-key="t-task-details"> Task Details </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('chat') }}" class="nav-link" data-key="t-chat"> Chat </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('timeline') }}" class="nav-link" data-key="t-timeline"> Timeline </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-team.html" class="nav-link" data-key="t-team"> Team </a>
                            </li>
                        </ul>
                    </div>
                </li> 
            </ul>
        </div>
    </div>
</div>
