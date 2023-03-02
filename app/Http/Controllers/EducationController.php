<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationRequest;
use App\Models\Education;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class EducationController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('pages.education.index', ['education' => auth()->user()->education]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('pages.education.create');
    }

    /**
     * @param EducationRequest $request
     * @return RedirectResponse
     */
    public function store(EducationRequest $request): RedirectResponse
    {
        $data = $request->validated();
        auth()->user()->education()->create($data);

        flash('Education Added Successfully')->success();
        return redirect()->route('experience.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * @param Education $education
     * @return View
     */
    public function edit(Education $education): View
    {
        return view('pages.education.edit', compact('education'));
    }

    /**
     * @param EducationRequest $request
     * @param Education $education
     * @return RedirectResponse
     */
    public function update(EducationRequest $request, Education $education): RedirectResponse
    {
        $data = $request->validated();
        $education->update($data);

        flash('Education Updated Successfully')->success();
        return redirect()->route('education.index');
    }

    /**
     * @param Education $education
     * @return RedirectResponse
     */
    public function destroy(Education $education): RedirectResponse
    {
        $education->delete();

        flash('Education Deleted')->error();
        return back();
    }
}
