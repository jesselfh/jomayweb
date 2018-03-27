<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\NewsCategory;
use Auth;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$newss = News::with('newsCategory')->paginate(30);
		return view('news.index', compact('newss'));
	}

    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

	public function create(News $news)
	{
        $newscategories = NewsCategory::all();
		return view('news.create_and_edit', compact('news','newscategories'));
	}

	public function store(NewsRequest $request, News $news)
	{
        $news->fill($request->all());
        $news->user_id = Auth::id();
        //$news->excerpt = "aasdf  dds";
        $news->save();

		return redirect()->route('news.show', $news->id)->with('message', '新闻创建成功！');
	}

	public function edit(News $news)
	{
        $this->authorize('update', $news);
		return view('news.create_and_edit', compact('news'));
	}

	public function update(NewsRequest $request, News $news)
	{
		$this->authorize('update', $news);
		$news->update($request->all());

		return redirect()->route('news.show', $news->id)->with('message', 'Updated successfully.');
	}

	public function destroy(News $news)
	{
		$this->authorize('destroy', $news);
		$news->delete();

		return redirect()->route('news.index')->with('message', 'Deleted successfully.');
	}
}