<aside class="main-sidebar sidebar-dark-primary elevation-4"  style="background-color: #6c757d">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">TDJ5-DinhThien</span>
    </a>

    <!-- Sidebar -->
    <div class="dropdown d-inline-block">
      <!-- Sidebar user panel (optional) -->
      @auth
      <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

      <div class="image">
        <img src="{{asset('upload/' . Auth::user()->avatar)}}" class="img-circle elevation-2" alt="User Image" width="80" height="80">
      </div>

      <div class="info">
        <a href="#" class="d-block" style="color: white" ><span>{{Auth::user()->name}} </span> </a>
      </div>
      <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
    </div>
  </button>
      <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item text-danger" href="{{route('logout')}}"><i
            class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> <span>Logout </span> </a>

    </div>
      @endauth

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class

               with font-awesome or any other icon font library -->
               <li class="nav-item">
               <li class="nav-item menu-open">
                <a href="#" class="nav-link active" style="background-color: #fd7e14">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Product
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('product.index')}}" class="nav-link ">
                      <i class="fas fa-archive"></i>
                      <p>Product List</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('product.add')}}" class="nav-link">
                      <i class="fas fa-archive"></i>
                      <p>Product Add</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('detail.index')}}" class="nav-link">
                      <i class="fas fa-archive"></i>
                      <p>Product Detail</p>
                    </a>
                  </li>
                </ul>
              </li>
            </li>
            <li class="nav-item">
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active" style="background-color: #17a2b8">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Category
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('category.index')}}" class="nav-link ">
                      <i class=" fas fa-book"></i>
                      <p>Category List</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('category.add')}}" class="nav-link">
                      <i class=" fas fa-book"></i>
                      <p>Category Add</p>
                    </a>
                  </li>
                </ul>
              </li>
           </li>

           <li class="nav-item">
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active" style="background-color: #20c997">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                   User
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('user.index')}}" class="nav-link ">
                    <i class=" fas fa-book"></i>
                    <p>User List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('user.add')}}" class="nav-link">
                    <i class=" fas fa-book"></i>
                    <p>User Add</p>
                  </a>
                </li>
              </ul>
            </li>
         </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
