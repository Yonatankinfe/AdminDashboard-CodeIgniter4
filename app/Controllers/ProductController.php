<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll();
        return view('product/index', $data);
    }

    public function delete($hashed_id) 
    {
        $model = new ProductModel();
    
        $product = $model->where('hashed_id', $hashed_id)->first();
    
        if ($product) {
            $model->delete($product['id']); // Delete using primary key 'id'
            return redirect()->to('/product')->with('success', 'Product deleted successfully!');
        } else {
            return redirect()->to('/product')->with('error', 'Product not found!');
        }
    }
    

    public function update($id)
    {
        $model = new ProductModel();
    
        $product = $model->where('id', $id)->first();
        if (!$product) {
            return redirect()->to(base_url('/product'))->with('error', 'Product not found.');
        }
    
        $data = [
            'Title'   => $this->request->getPost('Title'),
            'content' => $this->request->getPost('content'),
            'name'    => $this->request->getPost('name'),
            'rate'    => $this->request->getPost('rate')
        ];
    
        if ($model->update($id, $data)) {
            return redirect()->to(base_url('/product'))->with('success', 'Product updated successfully!');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to update product.');
        }
    }
    
    
    
    public function edit($hashed_id)
    {
        $model = new ProductModel();
    
        // Find the product by title
        $product = $model->where('hashed_id', $hashed_id)->first();
    
        // If product is not found, redirect with an error message
        if (!$product) {
            return redirect()->to(base_url('/product'))->with('error', 'Product not found.');
        }
    
        // Pass the product data to the view
        return view('product/edit', ['product' => $product]);
    }


    

    public function create(){
        return view('product/create');
    }
     // Handle form submission and store data in the database
     public function store()
    {
        $model = new ProductModel();
        $data = [
            'Title'   => $this->request->getPost('Title'),
            'content' => $this->request->getPost('content'),
            'name'    => $this->request->getPost('name'),
            'rate'    => $this->request->getPost('rate')
        ];
         $url = '';
        if ($model->insert($data)) {
            $url ='success';
            return redirect()->to(base_url('/product?success'));
        } else {
            $url ='failed';
            return redirect()->to(base_url('/product?failed'));
        }
    }
}