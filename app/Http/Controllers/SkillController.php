<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkillRequest;
use App\Models\Skill;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SkillController extends Controller
{
    public function index(): View
    {
        return view('pages.skills.index', ['skills' => auth()->user()->skills]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('pages.skills.create');
    }

    /**
     * @param SkillRequest $request
     * @return RedirectResponse
     */
    public function store(SkillRequest $request): RedirectResponse
    {
        $data = $request->validated();

        auth()->user()->skills()->create($data);

        flash('Skill Added Successfully')->success();
        return redirect()->route('skill.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * @param Skill $skill
     * @return View
     */
    public function edit(Skill $skill): View
    {
        return view('pages.skills.edit', compact('skill'));
    }

    /**
     * @param SkillRequest $request
     * @param Skill $skill
     * @return RedirectResponse
     */
    public function update(SkillRequest $request, Skill $skill): RedirectResponse
    {
        $skill->update($request->validated());

        flash('Skill Updated Successfully')->success();
        return redirect()->route('skill.index');
    }

    /**
     * @param Skill $skill
     * @return RedirectResponse
     */
    public function destroy(Skill $skill): RedirectResponse
    {
        $skill->delete();

        flash('Skill Deleted')->error();
        return back();
    }
}
