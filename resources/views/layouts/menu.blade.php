<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li class="text-muted menu-title">Navigation</li>
                <li class="has_sub">
                    <a href="#" class="waves-effect {!! Request::is('dashboard') ? 'active' : '' !!}">
                        <i class="ti-home"></i> <span> Dashboard </span>
                    </a>
                </li>

                <li class="text-muted menu-title">More</li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="ti-files"></i><span> Pages </span></a>
                    <ul class="list-unstyled">
                        <li><a href="page-starter.html">Starter Page</a></li>
                        <li><a href="page-login.html">Login</a></li>
                    </ul>
                </li>

                <li class="text-muted menu-title">Extra</li>

                <li class="has_sub">
                    <a href="#" class="waves-effect{{ Request::is('admin/system/*') ? ' active' : '' }}">
                        <i class="ti-paint-bucket"></i> <span> Systems </span>
                    </a>
                    <ul class="list-unstyled">
                        <li class="{{ Request::is('admin/system/users*') ? 'active' : '' }}">
                            <a href="{!! route('admin.users.index') !!}">Users</a></li>
                        @if(Entrust::hasRole('admin'))
                            <li class="{{ Request::is('admin/system/roles*') ? 'active' : '' }}">
                                <a href="{!! route('admin.roles.index') !!}">Roles</a></li>
                            <li class="{{ Request::is('admin/system/permissions*') ? 'active' : '' }}">
                                <a href="{!! route('admin.permissions.index') !!}">Permissions</a></li>
                            <li><a href="#!">Settings</a></li>
                        @endif
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="ti-user"></i><span> Crm </span></a>
                    <ul class="list-unstyled">
                        <li><a href="crm-dashboard.html"> Dashboard </a></li>
                        <li><a href="crm-contact.html"> Contacts </a></li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->