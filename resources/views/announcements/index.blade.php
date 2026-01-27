@extends('layouts.app')

@section('title', 'Announcements - 10X Research & Consultancy')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Announcements</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active text-primary">Announcements</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Announcements Section Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Announcements Column -->
                <div class="col-lg-8">
                    <!-- Priority Filter -->
                    <div class="mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-flex flex-wrap gap-2">
                            <a href="{{ route('announcements.index') }}"
                                class="btn btn-{{ !request('priority') ? 'primary' : 'outline-primary' }}">All</a>
                            <a href="{{ route('announcements.index', ['priority' => 'urgent']) }}"
                                class="btn btn-{{ request('priority') == 'urgent' ? 'danger' : 'outline-danger' }}">Urgent</a>
                            <a href="{{ route('announcements.index', ['priority' => 'high']) }}"
                                class="btn btn-{{ request('priority') == 'high' ? 'warning' : 'outline-warning' }}">High</a>
                            <a href="{{ route('announcements.index', ['priority' => 'medium']) }}"
                                class="btn btn-{{ request('priority') == 'medium' ? 'info' : 'outline-info' }}">Medium</a>
                            <a href="{{ route('announcements.index', ['priority' => 'low']) }}"
                                class="btn btn-{{ request('priority') == 'low' ? 'secondary' : 'outline-secondary' }}">Low</a>
                        </div>
                    </div>

                    @if ($announcements->count() > 0)
                        <div class="announcements-list">
                            @foreach ($announcements as $announcement)
                                <div class="card mb-4 border-{{ $announcement->getPriorityColor() }} wow fadeInUp"
                                    data-wow-delay="0.{{ $loop->iteration * 2 }}s">
                                    <div
                                        class="card-header bg-{{ $announcement->getPriorityColor() }} text-white d-flex justify-content-between align-items-center">
                                        <span><i class="fas fa-bullhorn me-2"></i>{{ ucfirst($announcement->priority) }}
                                            Priority</span>
                                        <span><i
                                                class="fas fa-calendar me-1"></i>{{ $announcement->published_at->format('M d, Y') }}</span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <a href="{{ route('announcements.show', $announcement) }}"
                                                class="text-dark text-decoration-none">
                                                {{ $announcement->title }}
                                            </a>
                                        </h5>
                                        <p class="card-text">{{ Str::limit(strip_tags($announcement->content), 200) }}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="{{ route('announcements.show', $announcement) }}"
                                                class="btn btn-primary btn-sm">
                                                Read More <i class="fas fa-arrow-right ms-1"></i>
                                            </a>
                                            <small class="text-muted">
                                                <i class="fas fa-eye me-1"></i>{{ number_format($announcement->views) }}
                                                views
                                                @if ($announcement->expires_at)
                                                    | <i class="fas fa-clock me-1"></i>Expires:
                                                    {{ $announcement->expires_at->format('M d, Y') }}
                                                @endif
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Pagination -->
                        <div class="mt-5 wow fadeInUp" data-wow-delay="0.1s">
                            {{ $announcements->links() }}
                        </div>
                    @else
                        <div class="text-center py-5 wow fadeInUp" data-wow-delay="0.1s">
                            <i class="fas fa-bullhorn fa-4x text-muted mb-3"></i>
                            <h4>No announcements found</h4>
                            <p class="text-muted">Check back soon for new announcements!</p>
                        </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Recent Announcements -->
                    <div class="mb-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h4 class="mb-4">Recent Announcements</h4>
                        <div class="bg-light p-4 rounded">
                            @php
                                $recentAnnouncements = \App\Models\Announcement::published()
                                    ->latest('published_at')
                                    ->limit(5)
                                    ->get();
                            @endphp
                            @forelse($recentAnnouncements as $recent)
                                <div class="mb-3 pb-3 border-bottom">
                                    <span
                                        class="badge bg-{{ $recent->getPriorityColor() }} mb-1">{{ ucfirst($recent->priority) }}</span>
                                    <a href="{{ route('announcements.show', $recent) }}"
                                        class="h6 d-block mb-1 text-dark text-decoration-none">
                                        {{ Str::limit($recent->title, 50) }}
                                    </a>
                                    <small class="text-muted">
                                        <i class="fas fa-calendar me-1"></i>{{ $recent->published_at->format('M d, Y') }}
                                    </small>
                                </div>
                            @empty
                                <p class="text-muted mb-0">No recent announcements.</p>
                            @endforelse
                        </div>
                    </div>

                    <!-- Priority Legend -->
                    <div class="mb-5 wow fadeInUp" data-wow-delay="0.3s">
                        <h4 class="mb-4">Priority Levels</h4>
                        <div class="bg-light p-4 rounded">
                            <div class="d-flex align-items-center mb-2">
                                <span class="badge bg-danger me-2">Urgent</span>
                                <span class="text-muted">Immediate attention required</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <span class="badge bg-warning me-2">High</span>
                                <span class="text-muted">Important information</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <span class="badge bg-info me-2">Medium</span>
                                <span class="text-muted">General notices</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="badge bg-secondary me-2">Low</span>
                                <span class="text-muted">Informational updates</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Announcements Section End -->
@endsection
