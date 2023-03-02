<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExperienceRequest;
use App\Models\Experience;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ExperienceController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('pages.experience.index', ['experiences' => auth()->user()->experiences]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('pages.experience.create');
    }

    /**
     * @param ExperienceRequest $request
     * @return RedirectResponse
     */
    public function store(ExperienceRequest $request): RedirectResponse
    {
        $data = $request->validated();

        auth()->user()->experiences()->create($data);

        flash('Experience Added Successfully')->success();
        return redirect()->route('skill.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * @param Experience $experience
     * @return View
     */
    public function edit(Experience $experience): View
    {
        return view('pages.experience.edit', compact('experience'));
    }

    /**
     * @param ExperienceRequest $request
     * @param Experience $experience
     * @return RedirectResponse
     */
    public function update(ExperienceRequest $request, Experience $experience): RedirectResponse
    {
        $data = $request->validated();
        $experience->update($data);

        flash('Experience Updated Successfully')->success();
        return redirect()->route('experience.index');
    }

    /**
     * @param Experience $experience
     * @return RedirectResponse
     */
    public function destroy(Experience $experience): RedirectResponse
    {
        $experience->delete();

        flash('Experience Deleted')->error();
        return back();
    }
}
