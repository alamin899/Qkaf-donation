
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="../../"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="far fa-chart-bar"></i></i> Project<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('admin/project/entry') }}">Add Project</a>
                    </li>
                    <li>
                        <a href="morris.html">Manage Project</a>
                    </li>
                    <li>
                        <a href="morris.html">view Project</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="far fa-chart-bar"></i> Category<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('admin/category/entry') }}">Add Category</a>
                    </li>
                    <li>
                        <a href="morris.html">Manage Category</a>
                    </li>
                    <li>
                        <a href="morris.html">View Category</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="far fa-chart-bar"></i> Item<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('admin/product/entry') }}">Add Items</a>
                    </li>
                    <li>
                        <a href="morris.html">View Items</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/product/view') }}">Manage Items</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fas fa-user-tag"></i></i> Role<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('admin/role') }}">View Role</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/role/create') }}">Add role</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/role/edit') }}">edit role</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
    </div>
    <!-- /.sidebar-collapse -->
</div>

