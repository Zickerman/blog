<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
	public function getAllUsersWithPosts() {
		$posts = User::with(['posts'])->get()->toJson(JSON_PRETTY_PRINT);
		return response($posts, 200);
	}

	public function createPost(Request $request) {
		$validate = Validator::make(
			$request->all(),
			[
				'slug' => ['required'],
				'title' => ['required'],
				'excerpt' => ['required'],
				'body' => ['required'],
			]);
		if ($validate->fails()) {
			return [
				'status' => true,
				'message' => $validate->messages(),
			];
		}

		$post = new Post;
		$post->user_id = 2;
		$post->category_id = 2;
		$post->slug = str_shuffle('qwertyuiopasdfghjkl-zxcvbnm_');
		$post->title = $request->title;
		$post->excerpt = $request->excerpt;
		$post->body = $request->body;
		$post->save();

		return response()->json([
			"message" => "Post record created"
		], 201);
	}


	public function getPost($id) {
		if (Post::where('id', $id)->exists()) {
			$post = Post::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
			return response($post, 200);
		} else {
			return response()->json([
				"message" => "Post not found"
			], 404);
		}
	}

	public function updatePost(Request $request, $id) {
		if (Post::where('id', $id)->exists()) {
			$post = Post::find($id);
			$post->title = is_null($request->title) ? $post->title : $request->title;
			$post->body = is_null($request->body) ? $post->body : $request->body;
			$post->save();

			return response()->json([
				"message" => "records updated successfully"
			], 200);
		} else {
			return response()->json([
				"message" => "Post not found"
			], 404);

		}
	}

	public function deletePost($id) {
		if(Post::where('id', $id)->exists()){
			$post = Post::find($id);
			$post->delete();

			return response()->json([
				"message" => 'The post was deleted'
			], 202);
		}
		else{
			return response()->json([
				"message" => 'The post wasnt found'
			], 404);
		}
	}
}
