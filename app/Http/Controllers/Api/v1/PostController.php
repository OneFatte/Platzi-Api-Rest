<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Resources\v1\PostResource;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return PostResource::collection(Post::latest()->paginate());
    }

    public function show(Post $post)
    {
        return new PostResource($post);
    }
    public function destroy(Post $post)
    {
        $post->delete();

        // Respuesta con cosigos http
        return response()->json([
            'message' => 'Post deleted',
        ], 204);
    }
}
