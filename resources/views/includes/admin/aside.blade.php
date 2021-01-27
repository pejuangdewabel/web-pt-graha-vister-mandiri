    <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
          <!-- nav bar -->
          <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
              <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                  <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                  <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                  <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                </g>
              </svg>
            </a>
          </div>
          <p class="text-muted nav-heading mt-4 mb-1">
            <span>Menu</span>
          </p>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100 {{ (request()->is('dashboard-admin')) ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('dashboard-admin') }}">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a class="nav-link" href="{{ route('home') }}" target="_blank">
                <i class="fe fe-clipboard fe-16"></i>
                <span class="ml-3 item-text">Tampilan Utama</span>
              </a>
            </li>
            <li class="nav-item dropdown {{ (request()->is('dashboard-admin/data*')) ? 'active' : '' }}">
              <a href="#contact" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-database fe-16"></i>
                <span class="ml-3 item-text">Data Master</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="contact">                
                <a class="nav-link pl-3" href="{{ route('properti-dijual.index') }}"><span class="ml-1">Data Properti Jual</span></a>                
                <a class="nav-link pl-3" href="./contacts-grid.html"><span class="ml-1">Data Properti Sewa</span></a>       
              </ul>
            </li>
          </ul>
          <p class="text-muted nav-heading mt-4 mb-1">
            <span>Extra</span>
          </p>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
              <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-file fe-16"></i>
                <span class="ml-3 item-text">Pages</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100 w-100" id="pages">
                <li class="nav-item">
                  <a class="nav-link pl-3" href="./page-orders.html">
                    <span class="ml-1 item-text">Orders</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
          <div class="btn-box w-100 mt-4 mb-1">
            <a 
                class="btn mb-2 btn-danger btn-lg btn-block"
                href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"
            >
              <i class="fe fe-log-out fe-12 mr-2"></i><span class="small">KELUAR</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </div>
        </nav>
    </aside>