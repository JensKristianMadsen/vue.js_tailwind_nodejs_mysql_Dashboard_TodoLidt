<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Item;
use Illuminate\Support\Carbon;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // order the list by 'created_at', and oder by DESC/descending newest item is at the top of the list
        return Item::orderBy('created_at', 'DESC')->get();
    }

    /**
     * Show the form for creating a new resource.
     */

    //public function create()
    //{
    //}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newItem = new Item;
        $newItem->name = $request->item["name"];
        $newItem->save();

        return $newItem;
    }

    /**
     * Display the specified resource.
     */
    //public function show(string $id): Response
    //{
    //
    //}

    /**
     * Show the form for editing the specified resource.
     */
    //public function edit(string $id): Response
    //{
    //
    //}

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $id)
    {
        $existingItem = Item::find($id);

        if ($existingItem) {
            $existingItem->completed = $request->item['completed'] ? true : false;
            //                                              if completed_at == true the we set time whit Carbon::Now
            $existingItem->completed_at = $request->item['completed'] ? Carbon::now() : null;
            $existingItem->save();
            return $existingItem;
        }

        return "Item not found. Can't update itme";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $existingItem = Item::find($id);

        if ($existingItem) {
            $existingItem->delete();
            return "Item  successfully deleted.";
        }

        return "Item not found. Can't delete itme";
        //
    }
}
