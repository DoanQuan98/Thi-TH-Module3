<?php

namespace App\Http\Controllers;

use App\Models\agency;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $agencies = agency::all();
        return view('index', compact('agencies'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $agency = new agency();
        $agency->store = $request->input('store');
        $agency->phone = $request->input('phone');
        $agency->email = $request->input('email');
        $agency->address = $request->input('address');
        $agency->name = $request->input('name');
        $agency->status = $request->input('status');
        $agency->save();

        return redirect()->route('list.home');
    }

    public function edit($id)
    {
        $agency = agency::findOrFail($id);
        return view('edit', compact('agency'));
    }

    public function update(Request $request, $id)
    {
        $agency = agency::findOrFail($id);
        $agency->store = $request->input('store');
        $agency->phone = $request->input('phone');
        $agency->email = $request->input('email');
        $agency->address = $request->input('address');
        $agency->name = $request->input('name');
        $agency->status = $request->input('status');
        $agency->save();

        return redirect()->route('list.home');
    }

    public function delete($id)
    {
        $agency = agency::findOrFail($id);
        $agency->delete();
        return redirect()->route('list.home');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('search');
        $agencies = agency::where('store', 'LIKE', '%' . $keyword . '%')->paginate(3);
        return view('index', compact('agencies'));
    }
}
