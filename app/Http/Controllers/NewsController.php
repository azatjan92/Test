<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


class NewsController extends Controller
{

    public function create()
    {
        return view('news.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $news = new News();
        $news->title = $request->title;
        $news->content = $request->input('content');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('images'), $imageName);
            $news->image = $imageName;
        }
        $news->save();

        return redirect()->route('news.index');
    }


    public function index()
    {
        $news = News::paginate(6);
        return view('news.index', compact('news'));
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $news = News::findOrFail($id);
        $news->title = $request->title;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('images'), $imageName);
            $news->image = $imageName;
        }

        $news->update([
            'content' => $request->input('content')
        ]);

        return redirect()->route('news.index');
    }


    public function destroy($id)
    {
        News::findOrFail($id)->delete();
        return redirect()->route('news.index');
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('news.show', compact('news'));
    }

}












