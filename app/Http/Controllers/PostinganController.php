<?php

namespace App\Http\Controllers;

use App\Models\Postingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostinganController extends Controller
{
    public function index()
    {
        $postingans = Postingan::all();
        return view('admin.page.postingan.index', compact('postingans'));
    }

    public function create()
    {
        return view('admin.page.postingan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'body' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);
        
        $postingan = new Postingan();
        $postingan->user_id = Auth::id();
        $postingan->body = $request->body;
        
        if ($request->hasFile('image')) {
            // Store the image and get the filename
            $filename = $request->file('image')->store('postingans', 'public');
            // Extract just the filename from the path
            $postingan->image = basename($filename); // This gets the filename only
        }
        
        $postingan->save();
        
        return redirect()->route('postingans.index')->with('success', 'Postingan created successfully.');
    }

    public function show(Postingan $postingan)
    {
        return view('admin.page.postingan.show', compact('postingan'));
    }

    public function edit(Postingan $postingan)
    {
        return view('admin.page.postingan.edit', compact('postingan'));
    }

    public function update(Request $request, Postingan $postingan)
    {
    // Validate the incoming request
    $request->validate([
        'body' => 'required|string',
        'image' => 'nullable|image|max:2048',
    ]);

    // Update the body of the post
    $postingan->body = $request->body;

    // Check if a new image has been uploaded
    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($postingan->image) {
            Storage::disk('public')->delete('postingans/' . $postingan->image);
        }

        // Store the new image and get just the filename
        $postingan->image = basename($request->file('image')->store('postingans', 'public'));
    }

    // Save the updated post
    $postingan->save();

    // Redirect with a success message
    return redirect()->route('postingans.index')->with('success', 'Postingan updated successfully.');
    }

    public function destroy(Postingan $postingan)
{
    // Check if the post has an image
    if ($postingan->image) {
        // Delete the image from the storage
        Storage::disk('public')->delete('postingans/' . $postingan->image);
    }

    // Delete the post
    $postingan->delete();

    return redirect()->route('postingans.index')->with('success', 'Postingan deleted successfully.');
}
}
