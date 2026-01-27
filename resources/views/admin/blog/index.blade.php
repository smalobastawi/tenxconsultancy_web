@extends('admin.layout')

@section('title', 'Blog Posts')
@section('page-title', 'Blog Posts')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <p class="text-muted mb-0">Manage your blog posts</p>
        </div>
        <a href="{{ route('admin.blog.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Create New Post
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th width="80">Image</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Author</th>
                    <th>Status</th>
                    <th>Views</th>
                    <th>Published</th>
                    <th width="150">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($posts as $post)
                    <tr>
                        <td>
                            @if ($post->featured_image)
                                <img src="{{ asset('storage/' . $post->featured_image) }}" alt=""
                                    class="post-thumbnail">
                            @else
                                <div class="post-thumbnail bg-light d-flex align-items-center justify-content-center">
                                    <i class="fas fa-image text-muted"></i>
                                </div>
                            @endif
                        </td>
                        <td>
                            <strong>{{ Str::limit($post->title, 50) }}</strong>
                            <br>
                            <small class="text-muted">{{ Str::limit($post->excerpt, 60) }}</small>
                        </td>
                        <td>
                            @if ($post->category)
                                <span class="badge bg-info">{{ $post->category->name }}</span>
                            @else
                                <span class="badge bg-secondary">Uncategorized</span>
                            @endif
                        </td>
                        <td>{{ $post->user->name ?? 'Unknown' }}</td>
                        <td>
                            <span class="badge badge-{{ $post->status }}">
                                {{ ucfirst($post->status) }}
                            </span>
                        </td>
                        <td>
                            <i class="fas fa-eye text-muted"></i> {{ number_format($post->views) }}
                        </td>
                        <td>
                            @if ($post->published_at)
                                {{ $post->published_at->format('M d, Y') }}
                            @else
                                <span class="text-muted">-</span>
                            @endif
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('admin.blog.edit', $post->id) }}" class="btn btn-outline-primary"
                                    title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="{{ route('blog.show', $post) }}" target="_blank" class="btn btn-outline-info"
                                    title="View">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <form action="{{ route('admin.blog.destroy', ['blog' => $post->id]) }}" method="POST"
                                    class="d-inline"
                                    onsubmit="return confirm('Are you sure you want to delete this post?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center py-5">
                            <div class="text-muted">
                                <i class="fas fa-inbox fa-3x mb-3"></i>
                                <p>No blog posts found.</p>
                                <a href="{{ route('admin.blog.create') }}" class="btn btn-primary btn-sm">Create your first
                                    post</a>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-between align-items-center mt-4">
        <div class="text-muted">
            Showing {{ $posts->firstItem() ?? 0 }} to {{ $posts->lastItem() ?? 0 }} of {{ $posts->total() }} entries
        </div>
        <div>
            {{ $posts->links() }}
        </div>
    </div>
@endsection
