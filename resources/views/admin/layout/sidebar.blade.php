  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
        data-accordion="false">
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                    Blog
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('list_article')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Bài viết</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('blog.article')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Thêm bài viết</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->