<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all(); // Fetch all services
        return view('services.index', compact('services')); // Send data to view
    }

    public function create()
    {
        return view('services.create'); // Return the view to create a new service
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image',
            'deskripsi' => 'required',
            'icon' => 'required|image',
        ]);

        // Save data
        $service = new Service();
        $service->name = $request->name;
        $service->image = $request->file('image')->store('images', 'public'); // Save image
        $service->deskripsi = $request->deskripsi;
        $service->icon = $request->file('icon')->store('icons', 'public'); // Save icon
        $service->save();

        return redirect('/services')->with('success', 'Service created successfully.');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id); // Find the service by ID
        return view('services.edit', compact('service')); // Pass service to edit view
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'icon' => 'nullable|image|max:2048',
        ]);

        $service = Service::findOrFail($id); // Find the service

        $service->name = $request->name;
        $service->deskripsi = $request->deskripsi;

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image
            if ($service->image) {
                \Storage::disk('public')->delete($service->image);
            }
            // Store new image
            $service->image = $request->file('image')->store('images', 'public');
        }

        // Handle icon upload
        if ($request->hasFile('icon')) {
            // Delete old icon
            if ($service->icon) {
                \Storage::disk('public')->delete($service->icon);
            }
            // Store new icon
            $service->icon = $request->file('icon')->store('icons', 'public');
        }

        $service->save(); // Save the updated service

        return redirect('/services')->with('success', 'Service updated successfully.');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id); // Find the service

        // Delete the images from storage
        if ($service->image) {
            \Storage::disk('public')->delete($service->image);
        }
        if ($service->icon) {
            \Storage::disk('public')->delete($service->icon);
        }

        $service->delete(); // Delete the service from the database

        return redirect('/services')->with('success', 'Service deleted successfully.');
    }
}
