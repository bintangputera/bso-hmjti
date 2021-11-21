<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="{{ Request::segment(2) == 'content' ? 'active' : '' }}">
                    <a href="{{ route('content.index') }}"><i class="menu-icon ti-image"></i>Content</a>
                </li>
                <li class="{{ Request::segment(2) == 'periode' ? 'active' : '' }}">
                    <a href="{{ route('periode.index') }}"><i class="menu-icon ti-time"></i>Periode</a>
                </li>
                <li class="{{ Request::segment(2) == 'aspirasi' ? 'active' : '' }}">
                    <a href="{{ route('aspirasi.index') }}"><i class="menu-icon ti-time"></i>Aspirasi</a>
                </li>
                <li class="{{ Request::segment(2) == 'blog' ? 'active' : '' }}">
                    <a href="{{ route('blog.index') }}"><i class="menu-icon fa ti-notepad"></i>Blogs </a>
                </li>
                <li class="{{ Request::segment(2) == 'category-blogs' ? 'active' : '' }}">
                    <a href="{{ route('category-blogs.index') }}"><i class="menu-icon ti-folder"></i>Category Blogs </a>
                </li>
                <li class="{{ Request::segment(2) == 'structure-division' ? 'active' : '' }}">
                    <a href="{{ route('structure-division.index') }}"><i class="menu-icon ti-id-badge"></i>Structure Division</a>
                </li>
                <li class="{{ Request::segment(2) == 'category-division' ? 'active' : '' }}">
                    <a href="{{ route('category-division.index') }}"><i class="menu-icon ti-folder"></i>Category Division</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->
