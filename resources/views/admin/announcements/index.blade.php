@extends('admin.layout')

@section('title', 'Announcements')
@section('page-title', 'Announcements')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <p class="text-muted mb-0">Manage your announcements</p>
        </div>
        <a href="{{ route('admin.announcements.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Create New Announcement
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Priority</th>
                    <th>Status</th>
                    <th>Published</th>
                    <th>Expires</th>
                    <th>Views</th>
                    <th width="150">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($announcements as $announcement)
                    <tr>
                        <td>
                            <strong>{{ Str::limit($announcement->title, 50) }}</strong>
                        </td>
                        <td>
                            <span class="badge bg-{{ $announcement->getPriorityColor() }}">
                                {{ ucfirst($announcement->priority) }}
                            </span>
                        </td>
                        <td>
                            <span class="badge badge-{{ $announcement->status }}">
                                {{ ucfirst($announcement->status) }}
                            </span>
                            @if ($announcement->isExpired())
                                <span class="badge bg-dark">Expired</span>
                            @endif
                        </td>
                        <td>
                            @if ($announcement->published_at)
                                {{ $announcement->published_at->format('M d, Y') }}
                            @else
                                <span class="text-muted">-</span>
                            @endif
                        </td>
                        <td>
                            @if ($announcement->expires_at)
                                {{ $announcement->expires_at->format('M d, Y') }}
                            @else
                                <span class="text-muted">Never</span>
                            @endif
                        </td>
                        <td>
                            <i class="fas fa-eye text-muted"></i> {{ number_format($announcement->views) }}
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('admin.announcements.edit', ['announcement' => $announcement->id]) }}"
                                    class="btn btn-outline-primary" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="{{ route('announcements.show', $announcement) }}" target="_blank"
                                    class="btn btn-outline-info" title="View">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <form
                                    action="{{ route('admin.announcements.destroy', ['announcement' => $announcement->id]) }}"
                                    method="POST" class="d-inline"
                                    onsubmit="return confirm('Are you sure you want to delete this announcement?');">
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
                        <td colspan="7" class="text-center py-5">
                            <div class="text-muted">
                                <i class="fas fa-inbox fa-3x mb-3"></i>
                                <p>No announcements found.</p>
                                <a href="{{ route('admin.announcements.create') }}" class="btn btn-primary btn-sm">Create
                                    your first announcement</a>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-between align-items-center mt-4">
        <div class="text-muted">
            Showing {{ $announcements->firstItem() ?? 0 }} to {{ $announcements->lastItem() ?? 0 }} of
            {{ $announcements->total() }} entries
        </div>
        <div>
            {{ $announcements->links() }}
        </div>
    </div>
@endsection
