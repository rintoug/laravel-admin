<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ assetPath('assets/brand/coreui.svg#full') }}"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ assetPath('assets/brand/coreui.svg#signet') }}"></use>
        </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="{{ url('admin/dashboard') }}">
                <svg class="nav-icon">
                    <use xlink:href="{{ assetPath('vendors/@coreui/icons/svg/free.svg#cil-speedometer')}}"></use>
                </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>

        @includeIf('laravel-admin::admin.shared.menu')

        <li class="nav-title">MISC</li>
        <li class="nav-item"><a class="nav-link" href="{{ url('admin/sample-form') }}">
                <svg class="nav-icon">
                    <use xlink:href="{{ assetPath('vendors/@coreui/icons/svg/free.svg#cil-chart-pie') }}"></use>
                </svg> Sample Form</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('admin/sample-table') }}">
                <svg class="nav-icon">
                    <use xlink:href="{{ assetPath('vendors/@coreui/icons/svg/free.svg#cil-chart-pie') }}"></use>
                </svg> Sample Table</a></li>

        <!-- Next section -->
        <li class="nav-title">Profile</li>

        <li class="nav-item"><a class="nav-link" href="charts.html">
                <svg class="nav-icon">
                    <use xlink:href="{{ assetPath('vendors/@coreui/icons/svg/free.svg#cil-chart-pie') }}"></use>
                </svg> Reset Password</a></li>


        <li class="nav-divider"></li>


    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
