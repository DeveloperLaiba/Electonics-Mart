<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        $category = Category::all();
        return view('Product.Form', compact('category'));
    }
    public function store(Request $request)
    {
        $product = new Product();
        $product->category_id = $request->category_id;
        $image = $request->file('image');

        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $product->image = $imageName;
        }
        $product->text = $request->text;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->price2 = $request->price2;
        $product->button = $request->button;
        $product->save();
        return redirect()->route('table.Product');
    }

    public function table()
    {
        $product = Product::all();
        return view('Product.Table', compact('product'));
    }
    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('table.Product');
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('Product.Edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $product->image = $imageName;
        }
        $product->text = $request->text;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->price2 = $request->price2;
        $product->button = $request->button;
        $product->update();
        return redirect()->route('table.Product');
    }


   public function cart(Request $request)
{
    $cart = session('addtocart', []);

    $productKey = $request->name; // Use unique name as key

    // If already exists, update quantity
    if (isset($cart[$productKey])) {
        $cart[$productKey]['quantity'] += $request->quantity;
    } else {
        $cart[$productKey] = [
            'image' => $request->image,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ];
    }

    session(['addtocart' => $cart]);

    return redirect()->route('carttable');
}


    public function carttable()
    {
        $category = Category::all();
        // Retrieve the cart data from the session
        $cart = session('addtocart', []);

        return view('Product.Cart Table', compact('cart', 'category'));
    }

    public function deleteCart($id)
    {
        // Retrieve the existing cart session
        $cart = session('addtocart', []);

        // Check if the item exists in the cart
        if (isset($cart[$id])) {
            // Remove the item from the cart
            unset($cart[$id]);

            // Update the session with the modified cart
            session(['addtocart' => $cart]);
        }

        // Redirect to the cart table or any desired page with a success message
        return redirect()->route('carttable')->with('success', 'Item removed from cart successfully.');
    }
}
