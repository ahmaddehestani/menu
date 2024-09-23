<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMenuItemRequest;
use App\Http\Requests\StoreMenuRequest;
use App\Models\Menu;
use App\Models\MenuItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        $menuItems=MenuItem::query()->with('children')->where('parent_id',null)->orderBy('order')->get();
        return view('menu',compact('menus','menuItems'));
    }

    public function store(StoreMenuRequest $request)
    {
        $menu = Menu::create($request->validated());
        return redirect()->route('index')->with('success', 'Menu created successfully!');
    }

    public function storeMenuItem(StoreMenuItemRequest $request)
    {
        $data=$request->validated();
        $menuItems=MenuItem::all();
        $menuItem=$menuItems->where('parent_id',$data['parent_id'])->where('menu_id',$data['menu_id'])->where('order',$data['order'])->first();
        if(isset($menuItem)){
            abort(422,'order use before');
        }
        MenuItem::create($data);
        return redirect()->route('index')->with('success', 'Menu item created successfully!');
    }
//    public function editMenuItem(MenuItem $menuItem)
//            {
//        return view('edit-menu-item',compact())
//    }

}
