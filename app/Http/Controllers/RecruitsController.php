<?php

namespace App\Http\Controllers;

use App\Models\Recruit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RecruitRequest;

class RecruitsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$recruits = Recruit::paginate();
		return view('recruits.index', compact('recruits'));
	}

    public function show(Recruit $recruit)
    {
        return view('recruits.show', compact('recruit'));
    }

	public function create(Recruit $recruit)
	{
		return view('recruits.create_and_edit', compact('recruit'));
	}

	public function store(RecruitRequest $request)
	{
		$recruit = Recruit::create($request->all());
		return redirect()->route('recruits.show', $recruit->id)->with('message', 'Created successfully.');
	}

	public function edit(Recruit $recruit)
	{
        $this->authorize('update', $recruit);
		return view('recruits.create_and_edit', compact('recruit'));
	}

	public function update(RecruitRequest $request, Recruit $recruit)
	{
		$this->authorize('update', $recruit);
		$recruit->update($request->all());

		return redirect()->route('recruits.show', $recruit->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Recruit $recruit)
	{
		$this->authorize('destroy', $recruit);
		$recruit->delete();

		return redirect()->route('recruits.index')->with('message', 'Deleted successfully.');
	}
}