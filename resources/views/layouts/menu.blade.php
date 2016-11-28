<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li class="text-muted menu-title">Navigation</li>
                <li>
                    <a href="{!! route('admin.dashboard') !!}"
                       class="waves-effect {{ Request::is('admin/dashboard') ? ' active' : '' }}">
                        <i class="ti-home"></i> <span> Dashboard </span>
                    </a>
                </li>

                <li class="text-muted menu-title">More</li>

                <li class="has_sub">
                    <a href="#" class="waves-effect{{ Request::is('admin/modules/*') ? ' active' : '' }}">
                        <i class="ti-files"></i><span> Modules </span></a>
                    <ul class="list-unstyled">
                        <li class="{!! Request::is('admin/modules/ministries*')? 'active' : '' !!}">
                            <a href="{!! route('admin.modules.ministries.index') !!}">Ministries</a></li>
                        <li class="{!! Request::is('admin/modules/departments*') ? 'active' : '' !!}">
                            <a href="{!! route('admin.modules.departments.index') !!}">Departments</a></li>
                        <li class="{!! Request::is('admin/modules/department-units*') ? 'active' : '' !!}">
                            <a href="{!! route('admin.modules.department-units.index') !!}">Department Units</a></li>
                        <li class="{!! Request::is('admin/modules/offices*') ? 'active' : '' !!}">
                            <a href="{!! route('admin.modules.offices.index') !!}">Offices</a></li>
                        <li class="{!! Request::is('admin/modules/frames*') ? 'active' : '' !!}">
                            <a href="{!! route('admin.modules.frames.index') !!}">Frameworks</a></li>
                        <li class="{!! Request::is('admin/modules/occupations*') ? 'active' : '' !!}">
                            <a href="{!! route('admin.modules.occupations.index') !!}">Occupations</a></li>
                        <li class="{!! Request::is('admin/modules/languages*') ? 'active' : '' !!}">
                            <a href="{!! route('admin.modules.languages.index') !!}">Languages</a></li>
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
                        @if(Entrust::hasRole('system-admin'))
                            <li class="{{ Request::is('admin/system/roles*') ? 'active' : '' }}">
                                <a href="{!! route('admin.roles.index') !!}">Roles</a></li>
                            <li class="{{ Request::is('admin/system/permissions*') ? 'active' : '' }}">
                                <a href="{!! route('admin.permissions.index') !!}">Permissions</a></li>
                            <li><a href="#!">Settings</a></li>
                        @endif
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect{!! Request::is('admin/managements/*') ? ' active': '' !!}">
                        <i class="ti-user"></i><span> Managements </span></a>
                    <ul class="list-unstyled">
                        <li class="{{ Request::is('admin/managements/employers*') ? 'active' : '' }}">
                            <a href="{!! route('admin.managements.employers.index') !!}"> Employers </a></li>
                        <li><a href="crm-contact.html"> Add more </a></li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->