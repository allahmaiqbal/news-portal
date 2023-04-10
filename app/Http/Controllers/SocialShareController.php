<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Posts\Entities\Post;

class SocialShareController extends Controller
{
    public function share(Request $request, $id)
    {
        $post = Post::find($id);
        $url = url('/posts/' . $id);
        $searchQuery = 'search for ' . $post->title;

        $facebookShareUrl = 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($url);
        $twitterShareUrl = 'https://twitter.com/intent/tweet?url=' . urlencode($url) . '&text=' . urlencode('Check out this awesome post: ' . $post->title);
        $instagramShareUrl = 'https://www.instagram.com/?url=' . urlencode($url);
        $googleNewsShareUrl = 'https://news.google.com/share?url=' . urlencode($url);
        $whatsappShareUrl = 'https://api.whatsapp.com/send?text=' . urlencode('Check out this awesome post: ' . $post->title) . urlencode(' ') . urlencode($url);
        $youtubeShareUrl = 'https://www.youtube.com/results?search_query=' . urlencode($searchQuery);

        $data = [
            'post' => $post,
            'facebookShareUrl' => $facebookShareUrl,
            'twitterShareUrl' => $twitterShareUrl,
            'instagramShareUrl' => $instagramShareUrl,
            'googleNewsShareUrl' => $googleNewsShareUrl,
            'whatsappShareUrl' => $whatsappShareUrl,
            'youtubeShareUrl' => $youtubeShareUrl,
        ];
        return view('dashboard::post.news-single-page',)->with($data);
        // return view('', $data);
    }
}