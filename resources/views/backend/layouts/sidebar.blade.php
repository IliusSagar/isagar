<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
   

    <!-- SidebarSearch Form -->
    

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
          <a href="{{ URL('admin/dashboard')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Dashboard
              <!-- <span class="right badge badge-danger">New</span> -->
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
            Weekly Task Schedule
              <i class="fas fa-angle-left right"></i>
           
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Weekly Task</p>
              </a>
            </li>  
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
            Account
              <i class="fas fa-angle-left right"></i>
           
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Account</p>
              </a>
            </li>  
          </ul>
        </li>
        
     
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
            Blog
              <i class="fas fa-angle-left right"></i>
           
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Blog</p>
              </a>
            </li>  
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
            Project Portfolio
              <i class="fas fa-angle-left right"></i>
           
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Portfolio</p>
              </a>
            </li>  
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
            Project Documentation
              <i class="fas fa-angle-left right"></i>
           
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Documentation</p>
              </a>
            </li>  
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
            Developer Code
              <i class="fas fa-angle-left right"></i>
           
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('manage.code')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Code</p>
              </a>
            </li>  
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Learning Management
              <i class="fas fa-angle-left right"></i>
           
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('manage.learning')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Learning</p>
              </a>
            </li>  
          </ul>
        </li>

        
      

        <li class="nav-item">
          <a href="{{ route('admin.logout')}}" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Logout
              <!-- <span class="right badge badge-danger">New</span> -->
            </p>
          </a>
        </li>
       
      
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>