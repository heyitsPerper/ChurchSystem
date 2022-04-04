<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('announcements')}}">
                <i class="fas fa-church"></i>
                <div class="sidebar-brand-text mx-3">CHURCH<sup>System</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

             <!-- Nav Item - Dashboard -->
             <li class="nav-item active">
                <a class="nav-link" href="{{url('announcements')}}">
                <i class="fas fa-bullhorn"></i>
                    <span>Announcements</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                MANAGE
            </div>

            <!-- Nav Item - Certificates Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCertificates"
                    aria-expanded="true" aria-controls="collapseCertificates">
                    <i class="fas fa-file-alt"></i>
                    <span>Certificates</span>
                </a>
                <div id="collapseCertificates" class="collapse" aria-labelledby="headingCertificates" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{url('baptismal_info')}}">Baptismal</a>
                        <a class="collapse-item" href="{{url('confirmation_info')}}">Confirmation</a>
                        <a class="collapse-item" href="{{url('marriage_info')}}">Marriage</a>
                        <a class="collapse-item" href="{{url('death_info')}}">Death</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Mass Collections Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMassCollections"
                    aria-expanded="true" aria-controls="collapseMassCollections">
                    <i class="fas fa-coins"></i>
                    <span>Mass Collections</span>
                </a>
                <div id="collapseMassCollections" class="collapse" aria-labelledby="headingMassCollections"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{url('church_collections')}}">Church Collections</a>
                        <a class="collapse-item" href="{{url('chapel_collections')}}">Chapel Collections</a>
                        <a class="collapse-item" href="{{url('donations')}}">Donations</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Officials Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOfficials"
                    aria-expanded="true" aria-controls="collapseOfficials">
                    <i class="fas fa-clipboard-list"></i>
                    <span>List of Officials</span>
                </a>
                <div id="collapseOfficials" class="collapse" aria-labelledby="headingOfficials"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{url('church_officials')}}">Church Officials</a>
                        <a class="collapse-item" href="{{url('chapel_officials')}}">Chapel Officials</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Church Calendar -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('events')}}">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Church Calendar</span>
                </a>
            </li>

            <!-- Nav Item - Priest Schedule -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('priest_sched')}}">
                    <i class="fas fa-clock"></i>
                    <span>Priest Schedule</span>
                </a>
            </li>

            <li class="nav-item @if (request()->routeIs('expense.*')) active @endif">
                <a class="nav-link" href="{{route('expense.index')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                        <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                        <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                      </svg>
                    <span>Expenses</span>
                </a>
            </li>

            <!-- Nav Item - Registered User
            <li class="nav-item">
                <a class="nav-link" href="{{url('registeredusers')}}">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Registered Users</span>
                </a>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                REPORTS
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('report')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Generated Reports</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
