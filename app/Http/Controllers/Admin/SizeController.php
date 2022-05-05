<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Size;
use App\Http\Requests\SizeRequest;

class SizeController extends Controller
{
    protected $paginate = 15;
    
    public function index()
    {
        $tab = "Quản lý tình trạng";
        $sizes = Size::orderBydesc('created_at')->paginate($this->paginate);
        
        return view('admin.size.index', compact([
            "tab",
            "sizes",
        ]));
    }
    
    public function create()
    {
        $tab = "Quản lý tình trạng / Thêm tình trạng";

        return view('admin.size.create', compact([
            "tab",
        ]));
    }
    
    public function store(SizeRequest $request)
    {
        $data = $request->all();
        $size = Size::create($data);

        return redirect()->route('sizes.index')->with('messageSuccess', 'Thêm tình trạng thành công');
    }
    
    public function edit($id)
    {
        $tab = "Quản lý tình trạng / Cập nhật tình trạng";
        $size = Size::findOrFail($id);

        if ($size) {
            return view('admin.size.edit', compact([
                "tab",
                "size",
            ]));
        }
        
        return redirect()->route('sizes.index')->with('messageSuccess', 'Không tồn tại');
    }
    
    public function update(SizeRequest $request, $id)
    {
        $data = $request->all();
        $size = Size::findOrFail($id);

        if ($size) {
            $size->update($data);

            return redirect()->route('sizes.index')->with('messageSuccess', 'Cập nhật tình trạng thành công');
        }
        
        return redirect()->route('sizes.index')->with('messageSuccess', 'Không tồn tại');
    }
    
    public function destroy($id)
    {
        $size = Size::findOrFail($id);

        if ($size) {
            $size->delete();
        
            return redirect()->route('sizes.index')->with('messageSuccess', 'Xóa tình trạng thành công');
        }
        
        return redirect()->route('sizes.index')->with('messageSuccess', 'Không tồn tại');
    }
}
