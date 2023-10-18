<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\BaseController;
use App\Http\Requests\NameImageRequest;
use App\Http\Requests\PasswordRequest;
use App\Models\Snippet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends BaseController
{
    function ProfilePage()
    {
        $user = auth()->user();

        $snippets = $this->Select_column('paginate', Snippet::class, '*', ['user_id' => $user->id, 'status' => 'published'], 12, 'created_at', 'DESC');

        $snippetCount = Snippet::where(['user_id' => $user->id, 'status' => 'published'])->count();

        return $this->ViewWithData('profile/Profile', 'user', $user, 'snippets', $snippets, 'snippetCount', $snippetCount);
    }

    function ProfileEdit()
    {
        $user = auth()->user();
        return $this->ViewWithData('profile/EditProfile', 'user', $user);
    }

    function ChangePassword(PasswordRequest $request)
    {

        $OldPassword = $this->GetFromReuqest($request, 'old_password');
        $NewPassword = $this->GetFromReuqest($request, 'new_password');
        $ConfirmPassword = $this->GetFromReuqest($request, 'confirm_password');

        $user = Auth::user();
        $id = $user->id;

        if (!Hash::check($OldPassword, $user->password)) {
            return back()->with('oldPass', 'Old password is wrong');
            return $this->Move('back_with_message', null, 'oldPass', 'Old password is wrong');
        }

        if ($this->CHECK_CONFIRMED_PASSWORD($NewPassword, $ConfirmPassword)) {
            return $this->Move('back_with_message', null, 'passwordMismatch', 'New password and confirm password do not match');
        }

        $data = [
            'password' => Hash::make($NewPassword),
        ];

        $this->CRUD(User::class, ['id' => $id], 'update', $data);

        return $this->Move('back_with_message', null, 'password_changed', 'Password changed');
    }

    function UpdateProfile(NameImageRequest $request)
    {

        $name = $this->GetFromReuqest($request, 'name');
        $image = $this->GetFileFromRequest($request, 'image');

        $user = Auth::user();

        if (!$image) {

            $dataToUpdate = [
                'image' => null,
                'name' => $name,
            ];
            $this->DeleteOldImage('Profile_img', $user, 'image');

            $this->CRUD(User::class, ['id' => $user->id], 'update', $dataToUpdate);
            return $this->Move('back_with_message', null, 'update_profile', 'Profile updated');
        }

        $filename = $this->uploadFile('image', $image, 'Profile_img');

        $this->DeleteOldImage('Profile_img', $user, 'image');

        $dataToUpdate = [
            'image' => $filename,
            'name' => $name,
        ];

        $this->CRUD(User::class, ['id' => $user->id], 'update', $dataToUpdate);

        return $this->Move('back_with_message', null, 'update_profile', 'Profile updated');
    }
}
