<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fb;
      font-family: 'Segoe UI', sans-serif;
    }

    .sidebar {
      height: 100vh;
      background: #212529;
      color: #fff;
      position: fixed;
      top: 0;
      left: 0;
      width: 240px;
      padding-top: 20px;
    }

    .sidebar .profile {
      text-align: center;
      margin-bottom: 25px;
      border-bottom: 1px solid #444;
      padding-bottom: 20px;
    }

    .sidebar .profile img {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid #fff;
    }

    .sidebar .profile h6 {
      margin-top: 10px;
      font-weight: 600;
      font-size: 15px;
    }

    .sidebar a {
      color: #adb5bd;
      text-decoration: none;
      display: block;
      padding: 10px 20px;
      border-radius: 4px;
      transition: all 0.2s;
    }

    .sidebar a:hover,
    .sidebar a.active {
      background-color: #495057;
      color: #fff;
    }

    .main-content {
      margin-left: 240px;
      padding: 20px;
    }

    .navbar {
      background: #ffffff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    .card {
      border: none;
      border-radius: 12px;
      overflow: hidden;
      transition: transform 0.2s ease;
    }

    .card:hover {
      transform: translateY(-4px);
    }

    .card-img-top {
      height: 200px;
      object-fit: cover;
    }

    .btn-sm i {
      font-size: 14px;
    }

    .floating-btn {
      position: fixed;
      bottom: 30px;
      right: 30px;
      border-radius: 50%;
      width: 60px;
      height: 60px;
      font-size: 26px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
  </style>
</head>

<body>

  <!-- Sidebar -->
  <div class="sidebar d-flex flex-column">
    <div class="profile">
      <img src="https://randomuser.me/api/portraits/men/60.jpg" alt="Admin Photo">
      <h6>John Doe</h6>
    </div>

    <a class="{{ request()->is('AD') ? 'active' : '' }}" href="{{ url('AD') }}" class="active"><i
        class="bi bi-speedometer2 me-2"></i> Dashboard</a>
    <a class="{{ request()->is('ADtravel') ? 'active' : '' }}" href="{{ url('ADtravel') }}"><i
        class="bi bi-journal-text me-2"></i> Travel Blogs</a>
    <a class="{{ request()->is('ADfood') ? 'active' : '' }}" href="{{ url('ADfood') }}"><i
        class="bi bi-cup-straw me-2"></i> Food Blogs</a>
    <a class="{{ request()->is('ADsport') ? 'active' : '' }}" href="{{ url('ADsport') }}"><i
        class="bi bi-bicycle me-2"></i> Sports Blogs</a>
    <a class="{{ request()->is('ADnature') ? 'active' : '' }}" href="{{ url('ADnature') }}"><i
        class="bi bi-tree me-2"></i> Nature Blogs</a>
    <a href="#"><i class="bi bi-envelope me-2"></i> Messages</a>
    <a href="#"><i class="bi bi-gear me-2"></i> Settings</a>
    <a href="#"><i class="bi bi-box-arrow-right me-2"></i> Logout</a>
    <div class="mt-auto text-center small text-secondary py-3">© 2025 Blog Admin</div>
  </div>

  <!-- Main Content -->
  <div class="main-content">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light mb-4 rounded-3">
      <div class="container-fluid">
        <h3 class="fw-bold mb-0">VibeScape</h3>
        <div class="d-flex align-items-center">
          <input type="text" class="form-control me-3" placeholder="Search blogs..." style="width: 200px;">
          <img src="https://randomuser.me/api/portraits/men/60.jpg" alt="Admin" class="rounded-circle" width="40"
            height="40">
        </div>
      </div>
    </nav>

    @yield('AdRecent')
    @yield('Adtravel')
    @yield('Adfood')
    @yield('Adnature')
    @yield('Adsport')


  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>