<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Video;
use App\Models\Comment;
use App\Models\Tag;


class PostController extends Controller
{
     public function index()
    {
        //Many to Many Relationship
        //check the post
        // $post = Post::find(5);
        // $tags = [6]; //assign id for tag table to the post 2
        // $post->tag()->attach($tags); //attach method use to pass the any id to store in db table multiple time store
        // // $post->tag()->sync($tags); //sync method jo id assign hogi wo db me hogi to store nhi krnega wrna kr denga
        // dd($post->tag);

       

        // check the tag to which post
        // $tag = Tag::find(2);
        // dd($tag->post);

        //morph one relationship to get data on comment/video/post
        // $post = Post::find(1);
        // $video = Video::find(2);
        // $Comment = Comment::find(1);
        // // dd($Comment->Commentable);
        // dd($post->comment);
        // dd($video->comment);

        //morph one relationship to get data on comment/video/post
        // $video = Video::find(2);
        // dd($video->comment);

        //Morph to Many Relationship on comment/video/post/taggables
        // $post = Post::find(2);
        // $tags = Tag::find(3);
        // dd($post->videos);
        // dd($tags->videos);

        //hasMany relationship on post and post_comments
        // $post = Post::has('comments','>','2')->get();
        // $post = Post::whereHas('comments',function($q){
            // $q->where('name','like','post 1 is best');
        // })->get();
        // $post = Post::doesntHave('comments')->get();
        // dd($post[0]->name);
        // dd($post);

        //count relationship data by withCount()
        // $post = Post::withCount('comments')->get();
        // dd($post);

         
    }
}
