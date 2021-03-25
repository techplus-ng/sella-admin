<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-{{setting('theme_contrast')}}-{{setting('theme_color')}} elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('dashboard')}}" class="brand-link {{setting('logo_bg_color','bg-white')}}">
        <img src="{{$app_logo}}" alt="{{setting('app_name')}}" class="brand-image">
        <span class="brand-text font-weight-light">{{setting('app_name')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu',['icons'=>true])

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-archive"></i>
                        <p>Reports 
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link " href="{{url('reports/clusters')}}">
                                <i class="nav-icon fa fa-archive"></i>
                                <p>Reports by Cluster</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{url('reports/orders')}}">
                                <i class="nav-icon fa fa-plus-square"></i>
                                <p>Highest Ordered Products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{url('reports/transactions')}}">
                                <i class="nav-icon fa fa-plus-square-o"></i><p>All Transactions</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
