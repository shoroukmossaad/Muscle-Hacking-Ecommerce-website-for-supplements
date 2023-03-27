@extends('Dashboard.main')
@yield('content')
<link rel="stylesheet" href="{{ asset('assets/css/addProduct.css') }}">

<div class="container mt-5 py-5">
    <h1 class="mt-3  h1">Add Category</h1>
    <form method="POST" action="{{ url('storecategory') }}" enctype="multipart/form-data" class="form">
        @csrf

        <label class="form-label" for="name">Title*</label>
        <input class="form-control" type="text" id="name" name="title" required>



            {{-- <select id="Category" name="category_id" class="d-block" required>
                <option value="1">Creatine</option>
                <option value="2">Protein</option>
                <option value="3">Pre-Workout</option>
                <option value="4">Amino Acid</option>
                <option value="5">Fitness Equipments</option>
            </select> --}}
       
        <label class="form-label my-2" for="image">Image*</label>
        <input class="form-control mb-2" type="file" id="image" name="image">

        <input class="form-control" type="submit" value="Submit">
    </form>
</div>
