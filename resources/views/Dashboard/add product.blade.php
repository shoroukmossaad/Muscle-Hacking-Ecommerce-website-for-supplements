@extends('Dashboard.main')
@yield('content')
<link rel="stylesheet" href="{{ asset('assets/css/addProduct.css') }}">

<div class="container mt-5 py-5">
    <h1 class="mt-3  h1">Add Product</h1>
    <form method="POST" action="{{ url('store') }}" enctype="multipart/form-data" class="form">
        @csrf

        <label class="form-label" for="name">Title*</label>
        <input class="form-control" type="text" id="name" name="title" required>

        <label class="form-label" for="description">Description*</label>
        <textarea class="form-control" type="text" id="description" name="description" required></textarea>

        <label class="form-label" for="use">how to use</label>
        <textarea class="form-control" type="text" id="use" name="use"></textarea>

        <label class="form-label" for="warnings">Warnings</label>
        <textarea class="form-control" type="text" id="warnings" name="warnings"></textarea>


        <label class="form-label" for="ingredients">ingredients</label>
        <textarea class="form-control" type="text" id="ingredients" name="ingredients"></textarea>

        <label class="form-label" for="price">Price*</label>
        <input class="form-control" type="number" id="price" name="price" required>

        <label class="form-label" for="Discount">Discount*</label>
        <input class="form-control" type="text" id="Discount" name="discount" required>

        <label class="form-label" for="Amount">Amount*</label>
        <input class="form-control" type="number" id="Amount" name="amount" required>
        <div class=" my-2">
            <label class="form-label d-block" for="Category">Category*</label>

            <select id="Category" name="category_id" class="d-block" required>
                <option value="1">Creatine</option>
                <option value="2">Protein</option>
                <option value="3">Pre-Workout</option>
                <option value="4">Amino Acid</option>
                <option value="5">Fitness Equipments</option>
            </select>
        </div>
        <label class="form-label my-2" for="image">Image*</label>
        <input class="form-control mb-2" type="file" id="image" name="image">

        <input class="form-control" type="submit" value="Submit">
    </form>
</div>
