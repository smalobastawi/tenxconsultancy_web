<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Dashboard') - 10X Consultancy</title>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary-color: #0071c5;
            --secondary-color: #00a8e8;
            --sidebar-width: 250px;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f6fa;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: var(--sidebar-width);
            height: 100vh;
            background: linear-gradient(180deg, var(--primary-color) 0%, #005a9e 100%);
            color: white;
            padding: 20px 0;
            overflow-y: auto;
            z-index: 1000;
        }

        .sidebar-brand {
            padding: 0 20px 30px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
        }

        .sidebar-brand img {
            max-width: 120px;
            margin-bottom: 10px;
        }

        .sidebar-brand h4 {
            font-size: 1.2rem;
            margin: 0;
        }

        .sidebar-menu {
            padding: 20px 0;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            padding: 12px 25px;
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            transition: all 0.3s;
        }

        .sidebar-menu a:hover,
        .sidebar-menu a.active {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border-left: 4px solid var(--secondary-color);
        }

        .sidebar-menu i {
            width: 25px;
            margin-right: 10px;
        }

        .main-content {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            padding: 20px;
        }

        .topbar {
            background: white;
            padding: 15px 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .topbar h2 {
            margin: 0;
            font-size: 1.5rem;
            color: #333;
        }

        .user-menu {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .user-menu a {
            color: #666;
            text-decoration: none;
        }

        .content-wrapper {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .btn-primary {
            background: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background: #005a9e;
            border-color: #005a9e;
        }

        .table th {
            background: #f8f9fa;
            font-weight: 600;
            color: #333;
        }

        .badge-draft {
            background: #6c757d;
        }

        .badge-published {
            background: #28a745;
        }

        .badge-archived {
            background: #dc3545;
        }

        .status-select {
            min-width: 120px;
        }

        .post-thumbnail {
            width: 60px;
            height: 45px;
            object-fit: cover;
            border-radius: 4px;
        }

        .form-label {
            font-weight: 500;
            color: #333;
        }

        .preview-image {
            max-width: 300px;
            max-height: 200px;
            border-radius: 8px;
            margin-top: 10px;
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
            }
        }
    </style>

    @yield('styles')
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-brand">
            <h4><i class="fas fa-cube"></i> 10X Admin</h4>
            <small>Blog Management</small>
        </div>

        <div class="sidebar-menu">
            <a href="{{ route('admin.blog.index') }}"
                class="{{ request()->routeIs('admin.blog.index') ? 'active' : '' }}">
                <i class="fas fa-list"></i> All Posts
            </a>
            <a href="{{ route('admin.blog.create') }}"
                class="{{ request()->routeIs('admin.blog.create') ? 'active' : '' }}">
                <i class="fas fa-plus"></i> New Post
            </a>
            <a href="{{ route('admin.announcements.index') }}"
                class="{{ request()->routeIs('admin.announcements.*') ? 'active' : '' }}">
                <i class="fas fa-bullhorn"></i> Announcements
            </a>
            <a href="{{ route('admin.announcements.create') }}"
                class="{{ request()->routeIs('admin.announcements.create') ? 'active' : '' }}">
                <i class="fas fa-plus-circle"></i> New Announcement
            </a>
            <hr class="my-2" style="border-color: rgba(255,255,255,0.1);">
            <a href="{{ route('admin.profile.show') }}"
                class="{{ request()->routeIs('admin.profile.*') ? 'active' : '' }}">
                <i class="fas fa-user"></i> My Profile
            </a>
            <a href="{{ url('/') }}" target="_blank">
                <i class="fas fa-external-link-alt"></i> View Site
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="topbar">
            <h2>@yield('page-title', 'Dashboard')</h2>
            <div class="user-menu">
                <a href="{{ route('admin.profile.show') }}" class="text-decoration-none">
                    <i class="fas fa-user"></i> {{ auth()->user()->name ?? 'Admin' }}
                </a>
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-outline-danger">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </form>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fas fa-exclamation-circle"></i> Please fix the following errors:
                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @yield('scripts')
</body>

</html>
