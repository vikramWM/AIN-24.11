<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class SitemapController extends Controller
{
    public function blogSitemap()
    {
        $blogs = Blog::where('type', 'blog')
                     ->select('created_at', 'images', 'slug', 'tittle')
                     ->get();
    
        return response()
            ->view('sitemap.blogSitemap', ['blogs' => $blogs])
            ->header('Content-Type', 'text/xml');
    }
    
    
}
