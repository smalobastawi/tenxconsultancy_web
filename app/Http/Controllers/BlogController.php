<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of published blog posts.
     */
    public function index(Request $request)
    {
        $query = BlogPost::with('category', 'user')
            ->published()
            ->latest('published_at');

        // Filter by category if provided
        if ($request->has('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        // Search functionality
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('excerpt', 'like', "%{$search}%")
                    ->orWhere('content', 'like', "%{$search}%");
            });
        }

        $posts = $query->paginate(9);
        $categories = Category::withCount(['blogPosts' => function ($q) {
            $q->published();
        }])->get();

        return view('blog.index', compact('posts', 'categories'));
    }

    /**
     * Display the specified blog post.
     */
    public function show(BlogPost $blogPost)
    {
        // Check if post is published
        if (!$blogPost->isPublished()) {
            abort(404);
        }

        // Increment view count
        $blogPost->incrementViews();

        // Get related posts
        $relatedPosts = BlogPost::with('category')
            ->published()
            ->where('id', '!=', $blogPost->id)
            ->where(function ($query) use ($blogPost) {
                $query->where('category_id', $blogPost->category_id)
                    ->orWhere('title', 'like', '%' . $blogPost->title . '%');
            })
            ->limit(3)
            ->get();

        // Get recent posts for sidebar
        $recentPosts = BlogPost::published()
            ->latest('published_at')
            ->limit(5)
            ->get();

        // Get categories for sidebar
        $categories = Category::withCount(['blogPosts' => function ($q) {
            $q->published();
        }])->get();

        return view('blog.show', compact('blogPost', 'relatedPosts', 'recentPosts', 'categories'));
    }

    /**
     * Display posts by category.
     */
    public function category(Category $category)
    {
        $posts = BlogPost::with('category', 'user')
            ->published()
            ->where('category_id', $category->id)
            ->latest('published_at')
            ->paginate(9);

        $categories = Category::withCount(['blogPosts' => function ($q) {
            $q->published();
        }])->get();

        return view('blog.category', compact('posts', 'category', 'categories'));
    }
}