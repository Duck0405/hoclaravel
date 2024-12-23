<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function article()
    {
        return view('admin.home.add_article');
    }


    public function post_article(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:100',
            'id_category' => 'required',
            'status_post' => 'required|boolean',
            'content' => 'required',
            'summary' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'title.required' => 'Tiêu đề là bắt buộc.',
            'id_category.required' => 'Danh mục là bắt buộc.',
            'status_post.required' => 'Trạng thái bài viết là bắt buộc.',
            'content.required' => 'Nội dung là bắt buộc.',
            'summary.required' => 'Tóm tắt là bắt buộc.',
            'image.required' => 'Hình ảnh là bắt buộc.',
        ]);

        $file = $request->file('image');
        $fileNameToStore = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('images', $fileNameToStore, 'public');

        DB::table('post')->insert([
            'title_post' => $data['title'],
            'content_post' => $data['content'],
            'summary_post' => $data['summary'],
            'image_post' => $path,
            'id_category' => $request->input('id_category'),
            'status_post' => $request->input('status_post'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Bài viết đã được đăng thành công!');
    }

    public function list_artcle()
    {
        $results['info'] = DB::table('post')->paginate(2);
        //dd($results);
        return view('admin.home.list_article', $results);
    }


    public function edit_article($id)
    {
        $article = DB::table('post')->where('id_post', $id)->first();

        if (!$article) {
            return redirect()->route('list_article')->with('error', 'Bài viết không tồn tại.');
        }

        return view('admin.home.update_article', ['article' => $article]);
    }
    public function update_article(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|max:100',
            'id_category' => 'required',
            'status_post' => 'required|boolean',
            'content' => 'required',
            'summary' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'title.required' => 'Tiêu đề là bắt buộc.',
            'id_category.required' => 'Danh mục là bắt buộc.',
            'status_post.required' => 'Trạng thái bài viết là bắt buộc.',
            'content.required' => 'Nội dung là bắt buộc.',
            'summary.required' => 'Tóm tắt là bắt buộc.',
            'image.required' => 'Hình ảnh là bắt buộc.',
        ]);

        $file = $request->file('image');
        $fileNameToStore = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('images', $fileNameToStore, 'public');

        DB::table('post')->where('id_post', $id)->update([
            'title_post' => $data['title'],
            'content_post' => $data['content'],
            'summary_post' => $data['summary'],
            'image_post' => $path,
            'id_category' => $request->input('id_category'),
            'status_post' => $request->input('status_post'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        return redirect()->route('list_article')->with('success', 'Cập nhật bài viết thành công.');
    }

    public function delete_article($id)
    {
        $article = DB::table('post')->where('id_post', $id)->first();
        if (!$article) {
            return redirect()->route('list_article')->with('error', 'Bài viết không tồn tại.');
        }

        if ($article->image_post) {
            $imagePath = public_path('storage/' . $article->image_post);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        DB::table('post')->where('id_post', $id)->delete();

        return redirect()->route('list_article')->with('success', 'Bài viết đã được xóa thành công.');
    }
}
