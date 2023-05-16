<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
                <div class="sidebar-brand-text mx-3">{{ __('ESPACE SBEE') }}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ request()->is('agentsbee/dashboard') || request()->is('agentsbee/dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('agentsbee.dashboard.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{ __('Dashboard') }}</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            {{-- <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <span>{{ __('User Management') }}</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}" href="{{ route('admin.permissions.index') }}"> <i class="fa fa-briefcase mr-2"></i> {{ __('Permissions') }}</a>
                        <a class="collapse-item {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}" href="{{ route('admin.roles.index') }}"><i class="fa fa-briefcase mr-2"></i> {{ __('Roles') }}</a>
                        <a class="collapse-item {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}" href="{{ route('admin.users.index') }}"> <i class="fa fa-user mr-2"></i> {{ __('Users') }}</a>
                    </div>
                </div>
            </li> --}}

            <!-- demandes -->
            <li class="nav-item {{ request()->is('agentsbee/demandes') || request()->is('agentsbee/demandes') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('agentsbee.demandes.index') }}">
                <i class="fas fa-folder-open"></i>
                    <span>{{ __('Demandes') }}</span></a>
            </li>
            <li class="nav-item {{ request()->is('agentsbee/demandeurs') || request()->is('agentsbee/demandeurs') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('agentsbee.demandeurs.index') }}">
                <i class="fas fa-user"></i>
                    <span>{{ __('Demandeurs') }}</span></a>
            </li>

            <!-- visites -->
            <li class="nav-item {{ request()->is('agentsbee/visites') || request()->is('agentsbee/visites') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('agentsbee.visites.index') }}">
                <i class="fas fa-calendar-check"></i>
                    <span>{{ __('Visites') }}</span></a>
            </li>

            <!-- clients -->
            {{-- <li class="nav-item {{ request()->is('admin/clients') || request()->is('admin/clients') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.clients.index') }}">
                <i class="fas fa-cogs"></i>
                    <span>{{ __('Clients') }}</span></a>
            </li> --}}

            <!-- appointments -->
            {{-- <li class="nav-item {{ request()->is('admin/appointments') || request()->is('admin/appointments') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.appointments.index') }}">
                <i class="fas fa-cogs"></i>
                    <span>{{ __('appointments') }}</span></a>
            </li> --}}

            <!-- calendrier -->
            <li class="nav-item {{ request()->is('agentsbee/calendrier') || request()->is('agentsbee/calendrier') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('agentsbee.calendrier.index') }}">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>{{ __('Calendrier') }}</span></a>
            </li>


        </ul>