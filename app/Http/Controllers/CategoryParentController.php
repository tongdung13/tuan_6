<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryParent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryParentController extends Controller
{
    public function index()
    {
        $categoryParent = CategoryParent::query()
            ->orderBy('id', 'desc')->get();
        return view('category.parent', compact('categoryParent'));
    }

    public function create()
    {
        $categories = Category::query()->get();
        return view('category.create_parent', compact('categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'code' => 'required',
                'category_id' => 'required',
                'category_name' => 'required',
            ],
            [
                'code.required' => 'Vui long nhap code',
                'category_id.required' => 'Vui long chon category id',
                'category_name.required' => 'Vui long chon name category',
            ]
        );
        if ($validator->fails()) {
            return redirect()->route('category_parent.create')->withErrors($validator)->withInput($request->all());
        }
        $data = $request->get('data');
        dd($data);
        $arr = [];
        foreach ($data as $value) {
            if (is_array($value->code) && count($value->code) > 0) {
                foreach ($value->code as $code) {
                    $arr[] = [
                        'code' => $code,
                        'category_id' => $value->category_id,
                        'category_name' => $value->category_name,
                    ];
                }
                CategoryParent::insert($arr);
                $arr = [];
            }
        }
        return redirect()->route('category_parent.index');
    }

    public function getCategoryName(Request $request)
    {
        $id = $request->get('id');

        $categoryName = Category::query()
            ->where('id', $id)
            ->select('name')->first();
        return response()->json($categoryName);
    }
}
