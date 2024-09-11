<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index() {
//        $posts = Post::find(2);
//        $posts = Post::all();
        $posts = Post::where('is_published', 0)->first();
        dump($posts->title);
//        foreach($posts as $post) {
//            dump($post->image);
//        }
        dump('end');
    }

    public function create() {
        $postArr = [
            [
                'title' => '12title post title',
                'content' => 'content post content',
                'image' => 'image.png',
                'likes' => 123,
                'is_published' => 1,
            ],
            [
                'title' => '32another title post title',
                'content' => 'another content post content',
                'image' => 'another image.png',
                'likes' => 312,
                'is_published' => 1,
            ],
        ];

//        Post::create([
//            'title' => 'another title post title',
//            'content' => 'another content post content',
//            'image' => 'another image.png',
//            'likes' => 25,
//            'is_published' => 1,
//        ]);

        foreach ($postArr as $post) {
            Post::create($post);
        }
        dd('created');
    }

    public function update() {
        $post = Post::find(1);
        $post->update([
            'title' => 'update 12title post',
            'content' => 'update content post',
            'image' => 'image_updated.png',
            'likes' => 45342,
            'is_published' => 1,
        ]);
        dump('updated');
    }

    public function delete() {
        $post = Post::withTrashed()->find(1);
//        $post->delete();
        $post->restore();
        dump('deleted');
    }

    //firstOrCreate
    //updateOrCreate

    public function firstOrCreate() {
        $post = Post::firstOrCreate([
            'title'=> 'sd asd first title',
        ],
        [
            'title' => 'createdNOw 12title post',
            'content' => 'createdNOw content post',
            'image' => 'createdNOw image.png',
            'likes' => 234,
            'is_published' => 0,
        ]);

        dump($post->title);
        dd('firstOrCreate');
    }

    public function updateOrCreate() {
        $post = Post::updateOrCreate([
            'title'=>"casd asd asd asd"
        ],
        [
            'title' => 'sedfawqe asdf post',
            'content' => 'asdf content post',
            'image' => 'asdf image.png',
            'likes' => 411,
            'is_published' => 0,
        ]);

        dump($post->title);
        dump('updateOrCreate');
    }
}
