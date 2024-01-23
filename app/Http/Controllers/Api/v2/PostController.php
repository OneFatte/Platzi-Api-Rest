<?php

namespace App\Http\Controllers\Api\v2;

use App\Http\Controllers\Controller;
use App\Http\Resources\v2\PostCollection;
use App\Http\Resources\v2\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new PostCollection(Post::latest()->paginate(20));
    }

    public function show(Post $post)
    {
        return new PostResource($post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
