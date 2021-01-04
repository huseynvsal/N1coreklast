<?php

namespace App\Http\Controllers\Main;

use App\Category\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\MessageRequest;
use App\Messages\Messages;
use App\Products\Products;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function edit_product($id)
    {
        $products = Products::where('id', $id)->get();
        $categories = Category::all();
        return view('Admin.edit_product', ['products' => $products, 'categories' => $categories]);
    }

    public function add_message(MessageRequest $message){
        $add = new Messages();
        $add->name = $message->input('name');
        $add->email = $message->input('email');
        $add->phone = $message->input('phone');
        $add->message = $message->input('message');
        if ($message->hasfile('image')){
            $file = $message->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('msg_images/', $filename);
            $add->image = $filename;
        }
        $add->save();
        $add->id;
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }
}
