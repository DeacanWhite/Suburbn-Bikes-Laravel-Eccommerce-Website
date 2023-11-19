<?php

namespace App\Http\Controllers;

use App\Models\roaster;
use App\Models\User;
use Illuminate\Http\Request;

class RoasterController extends Controller
{
//    public function showRoasterForm(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
//    {
//        $staffMembers = User::where('role', 'staff')->get(); // 获取所有 'staff' 角色的用户
//        return view('roaster', ['staffMembers' => $staffMembers]);
//    }

    public function showRoasterForm(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $staffMembers = User::where('role', 'staff')->get(); // 获取所有 'staff' 角色的用户
        $roasters = Roaster::all(); // 获取所有排班信息

        return view('roaster', [
            'staffMembers' => $staffMembers,
            'roasters' => $roasters
        ]);
    }

    public function setRoaster(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'position' => 'required|in:sale,admin,workshop',
            'day' => 'required|in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
        ]);

        $roaster = new Roaster();
        $roaster->user_id = $request->user_id;
        $roaster->position = $request->position;
        $roaster->day = $request->day;
        $roaster->save();

        return redirect()->route('roaster.form')->with('success', 'Roaster created successfully.');
    }

    public function viewRoaster(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $roasters = Roaster::all();
        return view('roastertable', ['roasters' => $roasters]);
    }

    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        $roaster = Roaster::findOrFail($id);
        $roaster->delete();

        return redirect()->route('roaster.form')->with('success', 'Roaster deleted successfully.');
    }
}
