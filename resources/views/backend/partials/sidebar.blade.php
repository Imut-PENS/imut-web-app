<div class="site-menubar">
      <div class="site-menubar-body">
        <div>
          <div>
            <ul class="site-menu" data-plugin="menu">
              <li class="site-menu-category">General</li>
              <li class="site-menu-item active">
                <a class="animsition-link" href="{{ url('/backend/pages/dashboard') }}">
                        <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                        <span class="site-menu-title">Dashboard</span>
                    </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="{{ url('/employee/profile/'.Auth::guard('employee')->user()->id) }}">
                        <i class="site-menu-icon md-view-compact" aria-hidden="true"></i>
                        <span class="site-menu-title">Profile</span>   
                    </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon md-view-compact" aria-hidden="true"></i>
                        <span class="site-menu-title">Management Employee</span>
                                <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
              <li class="site-menu-item has-sub">
              <a href="{{ url('/backend/pages/employee') }}">
                        <i class="site-menu-icon md-google-pages" aria-hidden="true"></i>
                        <span class="site-menu-title">Employee</span>
                               
                    </a>
              </li>
              </ul>
              </li>
              <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                        <i class="site-menu-icon md-view-compact" aria-hidden="true"></i>
                        <span class="site-menu-title">Management User</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                <li class="site-menu-item has-sub">
              <a href="{{ url('/backend/pages/user') }}">
                        <i class="site-menu-icon md-google-pages" aria-hidden="true"></i>
                        <span class="site-menu-title">Data User</span>
                               
                    </a>
              </li>
              <li class="site-menu-item has-sub">
              <a href="{{ url('/backend/pages/anak') }}">
                        <i class="site-menu-icon md-google-pages" aria-hidden="true"></i>
                        <span class="site-menu-title">Data Anak</span>
                               
                    </a>
              </li>
              </ul>
              </li>
              <li class="site-menu-category">Elements</li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon md-view-compact" aria-hidden="true"></i>
                        <span class="site-menu-title">Imunisasi</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                <li class="site-menu-item">
                    <a class="animsition-link" href="{{ url('/backend/pages/jenis_imunisasi') }}">
                      <span class="site-menu-title">Jenis Imunisasi</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="{{ url('/backend/pages/imunisasi') }}">
                      <span class="site-menu-title">Data Imunisasi</span>
                    </a>
                  </li>
                  
                  <li class="site-menu-item">
                    <a class="animsition-link" href="{{ url('/backend/pages/jadwal_imunisasi') }}">
                      <span class="site-menu-title">Jadwal Imunisasi</span>
                    </a>
                  </li>
              
                  
                </ul>
              </li>
              <li class="site-menu-item has-sub">
                <a href="{{ url('/backend/pages/konsultasi') }}">
                      <i class="site-menu-icon md-palette" aria-hidden="true"></i>
                        <span class="site-menu-title">Konsultasi</span>
                               
                    </a>
              </li>
              <!-- <li class="site-menu-item has-sub">
                <a href="{{ url('/backend/pages/events') }}">
                      <i class="site-menu-icon md-palette" aria-hidden="true"></i>
                        <span class="site-menu-title">Events</span>
                               
                    </a>
              </li> -->
              <li class="site-menu-item has-sub">
              <a href="{{ url('/backend/pages/perkembangan') }}">
                        <i class="site-menu-icon md-format-color-fill" aria-hidden="true"></i>
                        <span class="site-menu-title">Perkembangan Anak</span>
                                
                    </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="{{ url('/backend/pages/rekomgizi') }}">
                      <i class="site-menu-icon md-puzzle-piece" aria-hidden="true"></i>
                        <span class="site-menu-title">Rekomendasi Gizi</span>
                                
                    </a>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon md-view-compact" aria-hidden="true"></i>
                        <span class="site-menu-title">Info</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                <li class="site-menu-item">
                    <a class="animsition-link" href="{{ url('/info/kategori') }}">
                      <span class="site-menu-title">Kategori Info</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="{{ url('/info') }}">
                      <span class="site-menu-title">Data Info</span>
                    </a>
                  </li>
                  </ul>
                </li>
            </ul>
            </div>
        </div>
      </div>
    </div> 