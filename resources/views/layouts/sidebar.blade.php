<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">
    @php
      $permissions = [
          'dashboard' => App\Models\PermissionRoleModel::getPermission('Dashboard', Auth::user()->role_id),
          'users' => App\Models\PermissionRoleModel::getPermission('user', Auth::user()->role_id),
          'roles' => App\Models\PermissionRoleModel::getPermission('Roles', Auth::user()->role_id),
          'settings' => App\Models\PermissionRoleModel::getPermission('Setting', Auth::user()->role_id),
          'products'=>App\Models\PermissionRoleModel::getPermission('products', Auth::user()->role_id),
          'customers'=>App\Models\PermissionRoleModel::getPermission('customers', Auth::user()->role_id),
      ];
    @endphp

    <!-- Dashboard -->
    @if (!empty($permissions['dashboard']))
      <li class="nav-item">
        <a href="{{ url('/dashboard') }}" class="nav-link">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
    @endif

    <!-- Academic Info -->
    @if (!empty($permissions['academic']))
      <li class="nav-item">
        <a href="{{ url('academic-year/view') }}" class="nav-link">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Academic Info</span>
        </a>
      </li>
    @endif

  


    <!-- Users -->
    @if (!empty($permissions['users']))
      <li class="nav-item">
        <a href="{{ url('/Users/user') }}" class="nav-link">
          <i class="bi bi-people"></i>
          <span>Users</span>
        </a>
      </li>
    @endif

    <!-- Roles -->
    @if (!empty($permissions['roles']))
      <li class="nav-item">
        <a href="{{ url('/roles') }}" class="nav-link">
          <i class="bi bi-shield-lock"></i>
          <span>Roles</span>
        </a>
      </li>
    @endif

    <!-- Settings -->
    @if (!empty($permissions['settings']))
      <li class="nav-item">
        <a href="{{ url('/Setting') }}" class="nav-link">
          <i class="bi bi-folder2"></i>
          <span>Settings</span>
        </a>
      </li>
    @endif

  
     <!-- Settings -->
     @if (!empty($permissions['products']))
     <li class="nav-item">
      <a href="{{ url('/products') }}" class="nav-link">
        <i class="bi bi-person"></i>
        <span>products</span>
      </a>
    </li>
    @endif



    @if (!empty($permissions['customers']))
    <li class="nav-item">
      <a href="/customers" class="nav-link">
        <i class="bi bi-card-list"></i>
        <span>Customer</span>
      </a>
    </li>
    @endif

    
  </ul>
</aside>
<!-- End Sidebar -->
