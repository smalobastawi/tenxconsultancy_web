@extends('layouts.app')

@section('title', $announcement->title . ' - 10X Research & Consultancy')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Announcement</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('announcements.index') }}">Announcements</a></li>
                <li class="breadcrumb-item active text-primary">{{ Str::limit($announcement->title, 30) }}</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Announcement Detail Section Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Main Content -->
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card border-{{ $announcement->getPriorityColor() }}">
                        <div
                            class="card-header bg-{{ $announcement->getPriorityColor() }} text-white d-flex justify-content-between align-items-center">
                            <span><i class="fas fa-bullhorn me-2"></i>{{ ucfirst($announcement->priority) }} Priority
                                Announcement</span>
                            <span><i
                                    class="fas fa-calendar me-1"></i>{{ $announcement->published_at->format('F d, Y') }}</span>
                        </div>
                        <div class="card-body p-5">
                            <h1 class="mb-4">{{ $announcement->title }}</h1>

                            <div class="d-flex flex-wrap gap-3 mb-4 text-muted">
                                <span><i
                                        class="fas fa-user text-primary me-2"></i>{{ $announcement->user->name ?? 'Admin' }}</span>
                                <span><i class="fas fa-eye text-primary me-2"></i>{{ number_format($announcement->views) }}
                                    views</span>
                                @if ($announcement->expires_at)
                                    <span><i class="fas fa-clock text-primary me-2"></i>Expires:
                                        {{ $announcement->expires_at->format('F d, Y') }}</span>
                                @endif
                            </div>

                            <div class="announcement-content mb-5">
                                {!! nl2br(e($announcement->content)) !!}
                            </div>

                            <!-- Share -->
                            <div class="d-flex justify-content-between align-items-center py-4 border-top">
                                <h5 class="mb-0">Share this announcement:</h5>
                                <div class="d-flex gap-2">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                                        target="_blank" class="btn btn-sm btn-primary rounded-circle"
                                        style="width: 40px; height: 40px;">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($announcement->title) }}"
                                        target="_blank" class="btn btn-sm btn-info rounded-circle"
                                        style="width: 40px; height: 40px;">
                                        <i class="fab fa-twitter text-white"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}"
                                        target="_blank" class="btn btn-sm btn-primary rounded-circle"
                                        style="width: 40px; height: 40px; background-color: #0077b5; border-color: #0077b5;">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="mailto:?subject={{ urlencode($announcement->title) }}&body={{ urlencode(url()->current()) }}"
                                        class="btn btn-sm btn-secondary rounded-circle" style="width: 40px; height: 40px;">
                                        <i class="fas fa-envelope"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation -->
                    <div class="d-flex justify-content-between mt-4">
                        @php
                            $prevAnnouncement = \App\Models\Announcement::published()
                                ->where('published_at', '<', $announcement->published_at)
                                ->orderBy('published_at', 'desc')
                                ->first();
                            $nextAnnouncement = \App\Models\Announcement::published()
                                ->where('published_at', '>', $announcement->published_at)
                                ->orderBy('published_at', 'asc')
                                ->first();
                        @endphp

                        @if ($prevAnnouncement)
                            <a href="{{ route('announcements.show', $prevAnnouncement) }}" class="btn btn-outline-primary">
                                <i class="fas fa-arrow-left me-2"></i> Previous
                            </a>
                        @else
                            <span></span>
                        @endif

                        @if ($nextAnnouncement)
                            <a href="{{ route('announcements.show', $nextAnnouncement) }}" class="btn btn-outline-primary">
                                Next <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        @endif
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Recent Announcements -->
                    <div class="mb-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h4 class="mb-4">Recent Announcements</h4>
                        <div class="bg-light p-4 rounded">
                            @forelse($recentAnnouncements as $recent)
                                <div class="mb-3 pb-3 border-bottom">
                                    <span
                                        class="badge bg-{{ $recent->getPriorityColor() }} mb-1">{{ ucfirst($recent->priority) }}</span>
                                    <a href="{{ route('announcements.show', $recent) }}"
                                        class="h6 d-block mb-1 text-dark text-decoration-none">
                                        {{ Str::limit($recent->title, 40) }}
                                    </a>
                                    <small class="text-muted">
                                        <i class="fas fa-calendar me-1"></i>{{ $recent->published_at->format('M d, Y') }}
                                    </small>
                                </div>
                            @empty
                                <p class="text-muted mb-0">No other announcements.</p>
                            @endforelse
                        </div>
                    </div>

                    <!-- Back to Announcements -->
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <a href="{{ route('announcements.index') }}" class="btn btn-primary w-100">
                            <i class="fas fa-arrow-left me-2"></i> Back to Announcements
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Announcement Detail Section End -->
@endsection
