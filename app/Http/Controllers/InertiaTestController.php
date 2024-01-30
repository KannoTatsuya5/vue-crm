<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\InertiaTest;

class InertiaTestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Inertia/Index',[
            'blogs' => InertiaTest::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Inertia/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required','max:20'],
            'content' => ['required'],
        ]);
        $inretiaTest = new InertiaTest;
        $inretiaTest->tittle = $request->title;
        $inretiaTest->content = $request->content;
        $inretiaTest->save();

        return to_route('inertia.index')->with('success','登録が完了しました');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Inertia::render("Inertia/Show", [
            "id" => $id,
            "blog" => InertiaTest::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        InertiaTest::findOrFail($id)->delete();
        return to_route('inertia.index')->with('success','削除が完了しました');
    }
}
