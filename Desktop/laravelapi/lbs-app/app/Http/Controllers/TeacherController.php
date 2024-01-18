<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    protected $teacher;

    public function __construct()
    {
        $this->teacher = new Teacher();
    }

    public function index()
    {
        return $this->teacher->all();
    }

    public function store(Request $request)
    {
        return $this->teacher->create($request->all());
    }

    public function show(string $id)
    {
        $teacher = $this->teacher->find($id);
        return $teacher;
    }

    public function update(Request $request, string $id)
    {
        $teacher = $this->teacher->find($id);
        $teacher->update($request->all());
        return $teacher;
    }

    public function destroy(string $id)
    {
        $teacher = $this->teacher->find($id);
        return $teacher->delete();
    }
}