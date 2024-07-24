<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? '' : 'collapsed' }}" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link {{ Request::is('view-vehicles*', 'add-vehicle*', 'vehicles-on-installment*') ? '' : 'collapsed' }}" data-bs-target="#vehicles-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-people"></i><span>Schools</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="vehicles-nav" class="nav-content collapse {{ Request::is('view-vehicles*', 'add-vehicle*', 'vehicles-on-installment*') ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('schools.index') }}" class="{{ Request::is('view-vehicles*') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>School list</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('add-vehicle') }}" class="{{ Request::is('add-vehicle*') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>View School</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="{{ url('vehicles-on-installment') }}" class="{{ Request::is('vehicles-on-installment*') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Vehicles on Installment</span>
                    </a>
                </li> -->
            </ul>
        </li><!-- End Vehicles Nav -->

        <!-- <li class="nav-item">
            <a class="nav-link {{ Request::is('view-sales*', 'record-sale*') ? '' : 'collapsed' }}" data-bs-target="#sales-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bag"></i><span>Sales</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="sales-nav" class="nav-content collapse {{ Request::is('view-sales*', 'record-sale*') ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('view-sales') }}" class="{{ Request::is('view-sales*') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>View All Sales</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('record-sale') }}" class="{{ Request::is('record-sale*') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Record New Sale</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Sales Nav -->

        <li class="nav-item">
            <a class="nav-link {{ Request::is('view-expenses*', 'record-expense*') ? '' : 'collapsed' }}" data-bs-target="#expenses-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-cash"></i><span>Questions</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="expenses-nav" class="nav-content collapse {{ Request::is('view-expenses*', 'record-expense*') ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('view-expenses') }}" class="{{ Request::is('view-expenses*') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>View All Expenses</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('record-expense') }}" class="{{ Request::is('record-expense*') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Record New Expense</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Expenses Nav -->

        <li class="nav-item">
                <a class="nav-link {{ Request::is('profile/edit') ? 'active' : '' }}" href="{{ route('profile.edit') }}">
                    <i class="bi bi-person"></i><span>Profile</span>
                </a>
        
        </li><!-- End Installments Nav -->

        <li class="nav-item">
            <a class="nav-link {{ Request::is('sales-report*', 'expense-report*', 'profit-loss-report*') ? '' : 'collapsed' }}" data-bs-target="#reports-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="reports-nav" class="nav-content collapse {{ Request::is('sales-report*', 'expense-report*', 'profit-loss-report*') ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('sales-report') }}" class="{{ Request::is('sales-report*') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Sales Report</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('expense-report') }}" class="{{ Request::is('expense-report*') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Expense Report</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Reports Nav -->

        {{-- <li class="nav-item">
            <a class="nav-link {{ Request::is('user-profile*', 'application-settings*') ? '' : 'collapsed' }}" data-bs-target="#settings-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gear"></i><span>Settings</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="settings-nav" class="nav-content collapse {{ Request::is('user-profile*', 'application-settings*') ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('user-profile') }}" class="{{ Request::is('user-profile*') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>User Profile</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('application-settings') }}" class="{{ Request::is('application-settings*') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Application Settings</span>
                    </a>
                </li>
            </ul>
        </li><!-- Profile Settings --> --}}

    </ul>
</aside><!-- End Sidebar -->

