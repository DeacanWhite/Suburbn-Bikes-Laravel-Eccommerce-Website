<?php

namespace App\Http\Controllers;

use App\Models\roster;
use App\Models\User;
use Illuminate\Http\Request;

class RosterController extends Controller
{

    public function showRosterForm(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $staffMembers = User::where('role', 'staff')->get(); // get all the staff
        $rosters = roster::all();

        return view('roster', [
            'staffMembers' => $staffMembers,
            'rosters' => $rosters
        ]);
    }

    public function setRoster(Request $request): \Illuminate\Http\RedirectResponse
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

        return redirect()->route('roster.form')->with('success', 'Roster created successfully.');
    }

    public function viewRoster(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $rosters = roster::all();
        return view('rostertable', ['rosters' => $rosters]);
    }

    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        $roster = roster::findOrFail($id);
        $roster->delete();

        return redirect()->route('roster.form')->with('success', 'Roster deleted successfully.');
    }
}
