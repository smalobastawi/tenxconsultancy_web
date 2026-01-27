<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of published announcements.
     */
    public function index(Request $request)
    {
        $query = Announcement::published()
            ->byPriority()
            ->latest('published_at');

        // Filter by priority if provided
        if ($request->has('priority')) {
            $query->where('priority', $request->priority);
        }

        $announcements = $query->paginate(10);

        return view('announcements.index', compact('announcements'));
    }

    /**
     * Display the specified announcement.
     */
    public function show(Announcement $announcement)
    {
        // Check if announcement is published and not expired
        if (!$announcement->isPublished()) {
            abort(404);
        }

        // Increment view count
        $announcement->incrementViews();

        // Get recent announcements for sidebar
        $recentAnnouncements = Announcement::published()
            ->where('id', '!=', $announcement->id)
            ->byPriority()
            ->latest('published_at')
            ->limit(5)
            ->get();

        return view('announcements.show', compact('announcement', 'recentAnnouncements'));
    }
}