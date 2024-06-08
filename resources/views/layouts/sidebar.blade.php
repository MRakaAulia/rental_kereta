<a href="{{ url('/') }}" class="brand-link">
    <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Raka</span>
</a>

<div class="sidebar">
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ url('/cars') }}" class="nav-link">
                    <i class="nav-icon fas fa-car"></i>
                    <p>
                        Cars
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/customers') }}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Customers
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/rentals') }}" class="nav-link">
                    <i class="nav-icon fas fa-file-alt"></i>
                    <p>
                        Rentals
                    </p>
                </a>
            </li>
        </ul>
    </nav>
</div>
