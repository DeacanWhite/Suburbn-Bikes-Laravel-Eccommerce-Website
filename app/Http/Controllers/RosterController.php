<?php

namespace App\Http\Controllers;

use App\Models\roster;
use App\Models\User;
use Illuminate\Http\Request;

class RosterController extends Controller
{
//    public function showrosterForm(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
//    {
//        $staffMembers = User::where('role', 'staff')->get(); // 获取所有 'staff' 角色的用户
//        return view('roster', ['staffMembers' => $staffMembers]);
//    }

    public function showrosterForm(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $staffMembers = User::where('role', 'staff')->get(); // 获取所有 'staff' 角色的用户
        $rosters = roster::all(); // 获取所有排班信息

        return view('roster', [
            'staffMembers' => $staffMembers,
            'rosters' => $rosters
        ]);
    }

    public function setroster(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'position' => 'required|in:sale,admin,workshop',
            'day' => 'required|in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
        ]);

        $roster = new roster();
        $roster->user_id = $request->user_id;
        $roster->position = $request->position;
        $roster->day = $request->day;
        $roster->save();

        return redirect()->route('roster.form')->with('success', 'roster created successfully.');
    }

    public function viewroster(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $rosters = roster::all();
        return view('rostertable', ['rosters' => $rosters]);
    }

    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        $roster = roster::findOrFail($id);
        $roster->delete();

        return redirect()->route('roster.form')->with('success', 'roster deleted successfully.');
    }
}
