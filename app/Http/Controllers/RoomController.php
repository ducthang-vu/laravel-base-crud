<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RoomController extends Controller
{
    private function validationRules() {

        return [
            'floor' => 'required|gte:0|lte:255',
            'seats' => 'required|gte:0|lte:255',
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allRooms = Room::all();
        return view('rooms.index', compact('allRooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->validationRules());
        $data = $request->all();
        $newRoom = new Room();
        $newRoom->fill($data);
        $saved = $newRoom->save();

        if ($saved) {
            $idRoomNew = Room::find($newRoom->id);
            return redirect()->route('rooms.show', $idRoomNew)->with('created', true);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return view('rooms.show', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        return view('rooms.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $data = $request->all();
        $request->validate($this->validationRules());
        $updated = $room->update($data);

        if ($updated) {
            return redirect()->route('rooms.show', $room)->with('updated', true);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $deleted = $room->delete();
        if ($deleted) {
            return redirect()->route('rooms.index')->with('deleted', $room->id);
        }
    }
}
