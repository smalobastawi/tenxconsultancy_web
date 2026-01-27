@extends('layouts.app')

@section('title', $blogPost->title . ' - 10X Research & Consultancy')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Blog Details</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blog</a></li>
                <li class="breadcrumb-item active text-primary">{{ Str::limit($blogPost->title, 30) }}</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Blog Detail Section Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Main Content -->
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <!-- Featured Image -->
                    @if ($blogPost->featured_image)
                        <div class="mb-4">
                            <img src="{{ asset('storage/' . $blogPost->featured_image) }}" class="img-fluid rounded w-100"
                                alt="{{ $blogPost->title }}" style="max-height: 500px; object-fit: cover;">
                        </div>
                    @endif

                    <!-- Post Meta -->
                    <div class="d-flex flex-wrap gap-3 mb-4 text-muted">
                        <span><i class="fas fa-user text-primary me-2"></i>{{ $blogPost->user->name ?? 'Admin' }}</span>
                        <span><i
                                class="fas fa-calendar text-primary me-2"></i>{{ $blogPost->published_at->format('F d, Y') }}</span>
                        <span><i
                                class="fas fa-folder text-primary me-2"></i>{{ $blogPost->category->name ?? 'General' }}</span>
                        <span><i class="fas fa-eye text-primary me-2"></i>{{ number_format($blogPost->views) }} views</span>
                    </div>

                    <!-- Title -->
                    <h1 class="mb-4">{{ $blogPost->title }}</h1>

                    <!-- Content -->
                    <div class="blog-content mb-5">
                        {!! nl2br(e($blogPost->content)) !!}
                    </div>

                    <!-- Share -->
                    <div class="d-flex justify-content-between align-items-center py-4 border-top border-bottom mb-5">
                        <h5 class="mb-0">Share this post:</h5>
                        <div class="d-flex gap-2">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                                target="_blank" class="btn btn-sm btn-primary rounded-circle"
                                style="width: 40px; height: 40px;">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($blogPost->title) }}"
                                target="_blank" class="btn btn-sm btn-info rounded-circle"
                                style="width: 40px; height: 40px;">
                                <i class="fab fa-twitter text-white"></i>
                            </a>
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}"
                                target="_blank" class="btn btn-sm btn-primary rounded-circle"
                                style="width: 40px; height: 40px; background-color: #0077b5; border-color: #0077b5;">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="mailto:?subject={{ urlencode($blogPost->title) }}&body={{ urlencode(url()->current()) }}"
                                class="btn btn-sm btn-secondary rounded-circle" style="width: 40px; height: 40px;">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Navigation -->
                    <div class="d-flex justify-content-between mb-5">
                        @php
                            $prevPost = \App\Models\BlogPost::published()
                                ->where('published_at', '<', $blogPost->published_at)
                                ->orderBy('published_at', 'desc')
                                ->first();
                            $nextPost = \App\Models\BlogPost::published()
                                ->where('published_at', '>', $blogPost->published_at)
                                ->orderBy('published_at', 'asc')
                                ->first();
                        @endphp

                        @if ($prevPost)
                            <a href="{{ route('blog.show', $prevPost) }}" class="btn btn-outline-primary">
                                <i class="fas fa-arrow-left me-2"></i> Previous Post
                            </a>
                        @else
                            <span></span>
                        @endif

                        @if ($nextPost)
                            <a href="{{ route('blog.show', $nextPost) }}" class="btn btn-outline-primary">
                                Next Post <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        @endif
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Search -->
                    <div class="mb-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h4 class="mb-4">Search</h4>
                        <form action="{{ route('blog.index') }}" method="GET" class="d-flex">
                            <input type="text" name="search" class="form-control me-2" placeholder="Search...">
                            <button type="submit" class="btn btn-primary px-3">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>

                    <!-- Categories -->
                    <div class="mb-5 wow fadeInUp" data-wow-delay="0.3s">
                        <h4 class="mb-4">Categories</h4>
                        <div class="bg-light p-4 rounded">
                            @php
                                $sidebarCategories = \App\Models\Category::withCount([
                                    'blogPosts' => function ($q) {
                                        $q->published();
                                    },
                                ])->get();
                            @endphp
                            @foreach ($sidebarCategories as $category)
                                <div class="d-flex justify-content-between align-items-center mb-3 pb-3 border-bottom">
                                    <a href="{{ route('blog.category', $category) }}"
                                        class="text-dark {{ $blogPost->category_id == $category->id ? 'fw-bold' : '' }}">
                                        <i class="fas fa-folder text-primary me-2"></i>{{ $category->name }}
                                    </a>
                                    <span class="badge bg-primary rounded-pill">{{ $category->blog_posts_count }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Recent Posts -->
                    <div class="mb-5 wow fadeInUp" data-wow-delay="0.4s">
                        <h4 class="mb-4">Recent Posts</h4>
                        <div class="bg-light p-4 rounded">
                            @php
                                $recentPosts = \App\Models\BlogPost::published()
                                    ->where('id', '!=', $blogPost->id)
                                    ->latest('published_at')
                                    ->limit(5)
                                    ->get();
                            @endphp
                            @forelse($recentPosts as $recentPost)
                                <div class="d-flex mb-3 pb-3 border-bottom">
                                    @if ($recentPost->featured_image)
                                        <img src="{{ asset('storage/' . $recentPost->featured_image) }}"
                                            class="img-fluid rounded" style="width: 80px; height: 60px; object-fit: cover;"
                                            alt="">
                                    @else
                                        <img src="{{ asset('img/blog-' . (($loop->index % 4) + 1) . '.png') }}"
                                            class="img-fluid rounded" style="width: 80px; height: 60px; object-fit: cover;"
                                            alt="">
                                    @endif
                                    <div class="ms-3">
                                        <a href="{{ route('blog.show', $recentPost) }}" class="h6 d-block mb-1">
                                            {{ Str::limit($recentPost->title, 40) }}
                                        </a>
                                        <small class="text-muted">
                                            <i
                                                class="fas fa-calendar me-1"></i>{{ $recentPost->published_at->format('M d, Y') }}
                                        </small>
                                    </div>
                                </div>
                            @empty
                                <p class="text-muted mb-0">No other posts yet.</p>
                            @endforelse
                        </div>
                    </div>

                    <!-- Back to Blog -->
                    <div class="wow fadeInUp" data-wow-delay="0.5s">
                        <a href="{{ route('blog.index') }}" class="btn btn-primary w-100">
                            <i class="fas fa-arrow-left me-2"></i> Back to Blog
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Detail Section End -->
@endsection
