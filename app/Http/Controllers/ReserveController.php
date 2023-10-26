<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 🔽 2行追加
use Validator;
use App\Models\Reserve;

class ReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // 予約データを取得
    $reserves = Reserve::all();

    // 取得した予約データをビューに渡す
    return view('reserve.index', compact('reserves'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 🔽 追加
        return response()->view('reserve.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'reserve_date' => 'required|date',
            'reserve_time' => 'required',
            'name' => 'required|string',
            'email' => 'required|email',
            'tel' => 'required|string',
            'comment' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->route('reserve.create')
                ->withErrors($validator)
                ->withInput();
        }

        // 予約データを保存
        $reserve = Reserve::create($request->all());

        // 予約確認画面にリダイレクト
        return redirect()->route('reserve.confirm', $reserve->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }
    
    public function confirm($id)
    {
        $reserve = Reserve::findOrFail($id);

        return view('reserve.confirm', compact('reserve'));
    }
    
    public function complete($id)
    {
         $reserve = Reserve::findOrFail($id);
        // 予約完了画面にリダイレクト
        return view('reserve.complete', compact('reserve'));
    }
}