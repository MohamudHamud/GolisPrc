<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">
    @php
      $permissions = [
          'dashboard' => App\Models\PermissionRoleModel::getPermission('Dashboard', Auth::user()->role_id),
          'academic' => App\Models\PermissionRoleModel::getPermission('Accademic_info', Auth::user()->role_id),
          'Departments' => App\Models\PermissionRoleModel::getPermission('Departments', Auth::user()->role_id),
          'semester' => App\Models\PermissionRoleModel::getPermission('Semester', Auth::user()->role_id),
          'subjects' => App\Models\PermissionRoleModel::getPermission('Subject', Auth::user()->role_id),
          'students' => App\Models\PermissionRoleModel::getPermission('Student', Auth::user()->role_id),
          'attendance' => App\Models\PermissionRoleModel::getPermission('Attendence', Auth::user()->role_id),
          'users' => App\Models\PermissionRoleModel::getPermission('user', Auth::user()->role_id),
          'roles' => App\Models\PermissionRoleModel::getPermission('Roles', Auth::user()->role_id),
          'settings' => App\Models\PermissionRoleModel::getPermission('Setting', Auth::user()->role_id),
          'projects'=>App\Models\PermissionRoleModel::getPermission('projects', Auth::user()->role_id),
          'ViewAttendence'=>App\Models\PermissionRoleModel::getPermission('ViewAttendence', Auth::user()->role_id),
          'portal'=>App\Models\PermissionRoleModel::getPermission('portal', Auth::user()->role_id),
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
     @if (!empty($permissions['projects']))
     <li class="nav-item">
      <a href="{{ url('/projects') }}" class="nav-link">
        <i class="bi bi-person"></i>
        <span>Systems Reg</span>
      </a>
    </li>
    @endif



    <!-- Register -->
    <li class="nav-item">
      <a href="/visitors" class="nav-link">
        <i class="bi bi-card-list"></i>
        <span>visitos</span>
      </a>
    </li>

    <!-- Login -->
    <li class="nav-item">
      <a href="pages-login.html" class="nav-link">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Login</span>
      </a>
    </li>
  </ul>
</aside>
<!-- End Sidebar -->
