<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hierarchy;

class HierarchyController extends Controller
{
    //

    public function index()
    {
        $hierarchies = Hierarchy::whereNull('parent_id')->with('children')->get();
        return view('hierarchy.index', compact('hierarchies'));
    }

    //recursively call and render the html content
    public function renderHierarchy($hierarchies)
    {
        $html = '<ul>';
        foreach ($hierarchies as $hierarchy) {
            $html .= '<li>' . htmlspecialchars($hierarchy->name);
            if ($hierarchy->children->isNotEmpty()) {
                $html .= $this->renderHierarchy($hierarchy->children);
            }
            $html .= '</li>';
        }
        $html .= '</ul>';

        return $html;
    }
}
