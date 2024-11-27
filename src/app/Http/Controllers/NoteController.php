<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    // Отображение списка заметок
    public function index()
    {
        $notes = auth()->user()->notes; // Получение заметок текущего пользователя
        return view('notes.index', compact('notes'));
    }

    // Создание новой заметки
    public function create()
{
    $categories = auth()->user()->categories;
    return view('notes.create', compact('categories'));
}


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        auth()->user()->notes()->create($request->only('title', 'content', 'category_id'));

        return redirect()->route('notes.index')->with('success', 'Note created successfully.');
    }

    // Редактирование заметки
    public function edit(Note $note)
{
    $categories = auth()->user()->categories;
    return view('notes.edit', compact('note', 'categories'));
}


    public function update(Request $request, Note $note)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $note->update($request->only('title', 'content', 'category_id'));


        return redirect()->route('notes.index')->with('success', 'Note updated successfully.');
    }

    // Удаление заметки
    public function destroy(Note $note)
    {
        $note->delete();

        return redirect()->route('notes.index')->with('success', 'Note deleted successfully.');
    }
}

