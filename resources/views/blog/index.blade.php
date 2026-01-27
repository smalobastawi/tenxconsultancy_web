@extends('layouts.app')

@section('title', 'Blog - 10X Research & Consultancy')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Blog</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active text-primary">Blog</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Blog Section Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog Posts Column -->
                <div class="col-lg-8">
                    <!-- Search Bar -->
                    <div class="mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <form action="{{ route('blog.index') }}" method="GET" class="d-flex">
                            <input type="text" name="search" class="form-control me-2"
                                placeholder="Search blog posts..." value="{{ request('search') }}">
                            <button type="submit" class="btn btn-primary px-4">
                                <i class="fas fa-search"></i>
                            </button>
                            @if (request('search'))
                                <a href="{{ route('blog.index') }}" class="btn btn-outline-secondary ms-2">
                                    <i class="fas fa-times"></i>
                                </a>
                            @endif
                        </form>
                    </div>

                    @if ($posts->count() > 0)
                        <div class="row g-4">
                            @foreach ($posts as $post)
                                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.{{ $loop->iteration * 2 }}s">
                                    <div class="blog-item h-100">
                                        <div class="blog-img">
                                            @if ($post->featured_image)
                                                <img src="{{ asset('storage/' . $post->featured_image) }}"
                                                    class="img-fluid rounded-top w-100" alt="{{ $post->title }}">
                                            @else
                                                <img src="{{ asset('img/blog-' . (($loop->index % 4) + 1) . '.png') }}"
                                                    class="img-fluid rounded-top w-100" alt="{{ $post->title }}">
                                            @endif
                                            <div class="blog-categiry py-2 px-4">
                                                <span>{{ $post->category->name ?? 'General' }}</span>
                                            </div>
                                        </div>
                                        <div class="blog-content p-4 bg-light rounded-bottom">
                                            <div class="blog-comment d-flex justify-content-between mb-3">
                                                <div class="small">
                                                    <span class="fa fa-calendar text-primary"></span>
                                                    {{ $post->published_at->format('M d, Y') }}
                                                </div>
                                                <div class="small">
                                                    <span class="fa fa-eye text-primary"></span>
                                                    {{ number_format($post->views) }} views
                                                </div>
                                            </div>
                                            <a href="{{ route('blog.show', $post) }}" class="h4 d-inline-block mb-3">
                                                {{ Str::limit($post->title, 60) }}
                                            </a>
                                            <p class="mb-3">{{ Str::limit($post->excerpt, 120) }}</p>
                                            <a href="{{ route('blog.show', $post) }}" class="btn p-0">
                                                Read More <i class="fa fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Pagination -->
                        <div class="mt-5 wow fadeInUp" data-wow-delay="0.1s">
                            {{ $posts->links() }}
                        </div>
                    @else
                        <div class="text-center py-5 wow fadeInUp" data-wow-delay="0.1s">
                            <i class="fas fa-inbox fa-4x text-muted mb-3"></i>
                            <h4>No blog posts found</h4>
                            <p class="text-muted">
                                @if (request('search'))
                                    No posts match your search criteria. <a href="{{ route('blog.index') }}">Clear
                                        search</a>
                                @elseif(request('category'))
                                    No posts in this category yet.
                                @else
                                    Check back soon for new content!
                                @endif
                            </p>
                        </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Categories -->
                    <div class="mb-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h4 class="mb-4">Categories</h4>
                        <div class="bg-light p-4 rounded">
                            @foreach ($categories as $category)
                                <div class="d-flex justify-content-between align-items-center mb-3 pb-3 border-bottom">
                                    <a href="{{ route('blog.category', $category) }}" class="text-dark">
                                        <i class="fas fa-folder text-primary me-2"></i>{{ $category->name }}
                                    </a>
                                    <span class="badge bg-primary rounded-pill">{{ $category->blog_posts_count }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Recent Posts -->
                    <div class="mb-5 wow fadeInUp" data-wow-delay="0.3s">
                        <h4 class="mb-4">Recent Posts</h4>
                        <div class="bg-light p-4 rounded">
                            @php
                                $recentPosts = \App\Models\BlogPost::published()
                                    ->latest('published_at')
                                    ->limit(5)
                                    ->get();
                            @endphp
                            @foreach ($recentPosts as $recentPost)
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
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section End -->
@endsection
