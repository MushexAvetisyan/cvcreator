<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserDetailsRequest;
use App\Models\UserDetail;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UserDetailController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('pages.user_detail.index', ['detail' => auth()->user()->detail]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('pages.user_detail.create');
    }

    /**
     * @param UserDetailsRequest $request
     * @return RedirectResponse
     */
    public function store(UserDetailsRequest $request): RedirectResponse
    {
        $data = $request->validated();

        if ($image = $request->file('profile_image')) {
            $destinationPath = public_path('storage/images');
            $profileImage = time() . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['profile_image'] = $profileImage;
        }
        auth()->user()->detail()->create($data);

        flash('User Details Added Successfully')->success();
        return redirect()->route('education.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(UserDetail $userDetail)
    {
        //
    }

    /**
     * @param UserDetail $userDetail
     * @return View
     */
    public function edit(UserDetail $userDetail): View
    {
        return view('pages.user_detail.edit', compact('userDetail'));
    }

    /**
     * @param UserDetailsRequest $request
     * @param UserDetail $userDetail
     * @return RedirectResponse
     */
    public function update(UserDetailsRequest $request, UserDetail $userDetail): RedirectResponse
    {
        $data = $request->validated();
        if ($image = $request->file('profile_image')) {
            $destinationPath = public_path('storage/images');
            $profileImage = time() . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['profile_image'] = $profileImage;
        }
        else{
            unset($data['profile_image']);
        }
        $userDetail->update($data);

        flash('User Details Updated Successfully')->success();
        return redirect()->route('user-detail.index');
    }

    /**
     * @param UserDetail $userDetail
     * @return RedirectResponse
     */
    public function destroy(UserDetail $userDetail): RedirectResponse
    {
        $userDetail->delete();

        flash('User Details Deleted')->error();
        return back();
    }
}
