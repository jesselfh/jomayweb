<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\NewsCategory;
use Auth;
use App\Handlers\ImageUploadHandler;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index(Request $request, News $news)
	{
		$newss = $news->withOrder($request->order)->paginate(20);
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

		return redirect()->route('news.show', $news->id)->with('message', '更新成功！');
	}

	public function destroy(News $news)
	{
		$this->authorize('destroy', $news);
		$news->delete();

		return redirect()->route('news.index')->with('message', '成功删除！');
	}

    public function uploadImage(Request $request, ImageUploadHandler $uploader)
    {
        //初始化返回数据，默认是失败的
        $data = [
            'success' => false,
            'msg' => '上传失败',
            'file_path' => ''
        ];

        //判断是否有上传文件，并赋值给 $file
        if($file = $request->upload_file){
            //保存图片到本地
            $result = $uploader->save($request->upload_file,'news', \Auth::id(), 1024);

            //图片保存成功，生成新的返回数据
            if($result){
                $data['file_path'] = $result['path'];
                $data['msg'] = "上传成功！";
                $data['success'] = true;
            }
        }

        return $data;
    }
}