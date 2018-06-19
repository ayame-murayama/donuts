<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Donut;

class DonutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $donuts = Donut::all();
            $data = [
                'donuts' => $donuts,
            ];
        }
        return view('welcome', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $donut = new Donut;

        return view('donuts.create', [
            'donut' => $donut,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:191',
        ]);

        $request->user()->donuts()->create([
            'name' => $request->name,
            'title' => $request->title,
            'content' => $request->content,
            'tag' => $request->tag,
            'category' => $request->category,
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donut = Donut::find($id);

        return view('donuts.show', [
            'donut' => $donut,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donut = Donut::find($id);

        return view('donuts.edit', [
            'donut' => $donut,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /**$donut = Donut::find($id);
        $donut->user_id = $request->user_id;
        $donut->name = $request->name;
        $donut->title = $request->title;
        $donut->content = $request->content;
        $donut->tag = $request->tag;
        $donut->category = $request->category;
        $donut->save();

        return redirect('/');**/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donut = \App\Donut::find($id);

        if (\Auth::id() === $donut->user_id) {
            $donut->delete();
        }

        return redirect('/');
    }
}
