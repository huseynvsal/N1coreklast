<?php

namespace App\Http\Controllers\Admin;
use App\About_us\About_us;
use App\Advertisement\Advertisement;
use App\Category\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Http\Requests\AddAdvertismentRequest;
use App\Http\Requests\AddNewsRequest;
use App\Http\Requests\AddProductRequest;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\EditAdvertismentRequest;
use App\Http\Requests\EditNewsRequest;
use App\Http\Requests\EditProductsRequest;
use App\Http\Requests\PartnerRequest;
use App\Messages\Messages;
use App\News\News;
use App\Partners\Partners;
use App\Products\Products;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add_product(AddProductRequest $products){
        $add = new Products();
        $add->name = $products->input('name');
        $add->ingredient = $products->input('ingredient');
        $add->value = $products->input('value');
        $add->protein = $products->input('protein');
        $add->fat = $products->input('fat');
        $add->energy = $products->input('energy');
        $add->weight = $products->input('weight');
        $add->life = $products->input('life');
        $add->condition = $products->input('condition');
        $add->price = $products->input('price');
        $add->category = $products->category;
        if ($products->hasfile('image1')){
            $file1 = $products->file('image1');
            $extension1 = $file1->getClientOriginalExtension();
            $filename1 = time().'.'.$extension1;
            $file1->move('images/', $filename1);
            $add->image1 = $filename1;
        }
        if ($products->hasfile('image2')){
            $file2 = $products->file('image2');
            $extension2 = $file2->getClientOriginalExtension();
            $filename2 = (time()+1).'.'.$extension2;
            $file2->move('images/', $filename2);
            $add->image2 = $filename2;
        }
        if ($products->hasfile('image3')){
            $file3 = $products->file('image3');
            $extension3 = $file3->getClientOriginalExtension();
            $filename3 = (time()+2).'.'.$extension3;
            $file3->move('images/', $filename3);
            $add->image3 = $filename3;
        }
        if ($products->hasfile('image4')){
            $file4 = $products->file('image4');
            $extension4 = $file4->getClientOriginalExtension();
            $filename4 = (time()+3).'.'.$extension4;
            $file4->move('images/', $filename4);
            $add->image4 = $filename4;
        }
        $add->save();
        $add->id;
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function add_p_content(Request $products){
        $add = new Products();
        $add->name = $products->input('name');
        $add->price = $products->input('price');
        $add->content = $products->mycontent;
        $add->category = $products->category;
        if ($products->hasfile('image1')){
            $file1 = $products->file('image1');
            $extension1 = $file1->getClientOriginalExtension();
            $filename1 = time().'.'.$extension1;
            $file1->move('images/', $filename1);
            $add->image1 = $filename1;
        }
        if ($products->hasfile('image2')){
            $file2 = $products->file('image2');
            $extension2 = $file2->getClientOriginalExtension();
            $filename2 = (time()+1).'.'.$extension2;
            $file2->move('images/', $filename2);
            $add->image2 = $filename2;
        }
        if ($products->hasfile('image3')){
            $file3 = $products->file('image3');
            $extension3 = $file3->getClientOriginalExtension();
            $filename3 = (time()+2).'.'.$extension3;
            $file3->move('images/', $filename3);
            $add->image3 = $filename3;
        }
        if ($products->hasfile('image4')){
            $file4 = $products->file('image4');
            $extension4 = $file4->getClientOriginalExtension();
            $filename4 = (time()+3).'.'.$extension4;
            $file4->move('images/', $filename4);
            $add->image4 = $filename4;
        }
        $add->save();
        $add->id;
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }


    public function delete_product(Request $request)
    {
        $id = $request->id;
        $product = Products::find($id);
        $image_path = app_path("../images/{$product->image1}");
        unlink($image_path);
        $image_path2 = app_path("../images/{$product->image2}");
        unlink($image_path2);
        $image_path3 = app_path("../images/{$product->image3}");
        unlink($image_path3);
        $image_path4 = app_path("../images/{$product->image4}");
        unlink($image_path4);
        $product->delete();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function add_partner(PartnerRequest $request){
        $add = new Partners();
        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('img/', $filename);
            $add->image = $filename;
        }
        $add->save();
        return response()->json([
            'status' => $filename,
            'message' => 'success',
            'id' => $add->id
        ]);

    }

    public function edit_partner(PartnerRequest $request){
        $id = $request->id;
        $edit = Partners::find($id);
        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/', $filename);
            $edit->image = $filename;
        }
        $edit->save();
        return response()->json([
            'status' => true,
            'message' => 'success',
            'file' => $filename
        ]);
    }

    public function delete_partner(Request $request){
        $id = $request -> id;
        $partner = Partners::find($id);
        $image_path = app_path("../img/{$partner->image}");
        unlink($image_path);
        $partner->delete();
        return response()->json([
            'status' =>true,
            'message' => 'success'
        ]);
    }

    public function add_category(CategoryRequest $request){
        $add = new Category();
        $add->category = $request->category;
        $add->save();
        return response()->json([
            'status' => true,
            'message' => 'success',
            'id' => $add->id
        ]);
    }

    public function delete_category(Request $request){
        $id = $request -> id;
        $category = Category::find($id);
        $category->delete();
        return response()->json([
            'status' =>true,
            'message' => 'success'
        ]);
    }

    public function edit_category(CategoryRequest $request){
        $id = $request->id;
        $category = $request->category;
        $edit = Category::find($id);
        $edit->category = $category;
        $edit->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }
    public function add_adv(AddAdvertismentRequest $request){
        $add = new Advertisement();
        $add->name = $request->name;
        $add->about = $request->about;
        $add->content = $request->mycontent;
        if ($request->hasfile('cover_image')){
            $file = $request->file('cover_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/', $filename);
            $add->image = $filename;
        }
        $add->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function add_news(AddNewsRequest $request){
        $add = new News();
        $add->name = $request->name;
        $add->content = $request->mycontent;
        if ($request->hasfile('cover_image')){
            $file = $request->file('cover_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/', $filename);
            $add->image = $filename;
        }
        $add->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }
    public function edit_adv(EditAdvertismentRequest $request){
        $id = $request->id;
        $edit =Advertisement::find($id);
        $edit->name = $request->name;
        $edit->about = $request->about;
        $edit->content = $request->mycontent;
        if ($request->hasfile('cover_image')){
            $file = $request->file('cover_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/', $filename);
            $edit->image = $filename;
        }
        $edit->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }
    public function edit_news(EditNewsRequest $request){
        $id = $request->id;
        $edit = News::find($id);
        $edit->name = $request->name;
        $edit->content = $request->mycontent;
        if ($request->hasfile('cover_image')){
            $file = $request->file('cover_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/', $filename);
            $edit->image = $filename;
        }
        $edit->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }


    public function edit_images(Request $request){
        $id = $request->id;
        $edit = Products::find($id);
        if ($request->hasfile('image1')){
            $image_path1 = app_path("../images/{$edit->image1}");
            unlink($image_path1);
            $file1 = $request->file('image1');
            $extension1 = $file1->getClientOriginalExtension();
            $filename1 = time().'.'.$extension1;
            $file1->move('images/', $filename1);
            $edit->image1 = $filename1;
        }

        if ($request->hasfile('image2')){
            $image_path2 = app_path("../images/{$edit->image2}");
            unlink($image_path2);
            $file2 = $request->file('image2');
            $extension2 = $file2->getClientOriginalExtension();
            $filename2 = (time()+1).'.'.$extension2;
            $file2->move('images/', $filename2);
            $edit->image2 = $filename2;
        }

        if ($request->hasfile('image3')){
            $image_path3 = app_path("../images/{$edit->image3}");
            unlink($image_path3);
            $file3 = $request->file('image3');
            $extension3 = $file3->getClientOriginalExtension();
            $filename3 = (time()+2).'.'.$extension3;
            $file3->move('images/', $filename3);
            $edit->image3 = $filename3;
        }

        if ($request->hasfile('image4')){
            $image_path4 = app_path("../images/{$edit->image4}");
            unlink($image_path4);
            $file4 = $request->file('image4');
            $extension4 = $file4->getClientOriginalExtension();
            $filename4 = (time()+3).'.'.$extension4;
            $file4->move('images/', $filename4);
            $edit->image4 = $filename4;
        }
        $edit->save();
        return response()->json([
            'status' => true,
            'message' => 'success',
        ]);
    }

    public function edit_products(EditProductsRequest $request){
        $edit = Products::find($request->id);
        $edit->name = $request->name;
        $edit->ingredient = $request->ingredient;
        $edit->value = $request->value;
        $edit->protein = $request->protein;
        $edit->fat = $request->fat;
        $edit->energy = $request->energy;
        $edit->weight = $request->weight;
        $edit->life = $request->life;
        $edit->condition = $request->condition;
        $edit->price = $request->price;
        $edit->category = $request->category;
        $edit->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function edit_products_c(Request $request){
        $edit = Products::find($request->id);
        $edit->name = $request->name;
        $edit->content = $request->mycontent;
        $edit->price = $request->price;
        $edit->category = $request->category;
        $edit->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function about_us(AboutRequest $request)
    {
        if (About_us::find(1)) {
            $content = About_us::find(1);
        } else {
            $content = new About_us();
        }
        $content->content = $request->mycontent;
        $content->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function delete_message(Request $request)
    {
        $id = $request->id;
        $message = Messages::find($id);
        if ($message->image != ''){
            $image_path = app_path("../msg_images/{$message->image}");
            unlink($image_path);
        }
        $message->delete();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }
}
