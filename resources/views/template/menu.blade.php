<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="index.html" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/float">Flot Charts</a>
                    </li>
                    <li>
                        <a href="/pegawai">Pegawai</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>Penilaian<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/pendeksplorasi">Penilaian Divisi Eksplorasi</a>
                    </li>
                    <li>
                        <a href="/pendlabbatubara">Penilaian Divisi Lab Batubara</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> Data Master<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/deksplorasi">Master Divisi Eksplorasi</a>
                    </li>
                    <li>
                        <a href="/dlabbatubara"> Master Divisi Lab Batubara</a>
                    </li>
                    <li>
                        <a href="/faktorkompetensi">Master Kompetensi</a>
                    </li>
                    <li>
                        <a href="/indikatorkompetensi">Master Indikator Kompetensi</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="blank.html">Blank Page</a>
                    </li>
                    <li>
                        <a href="login.html">Login Page</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
</div>
</nav>

@yield('container')