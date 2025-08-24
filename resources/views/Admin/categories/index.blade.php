@extends('Admin.index')
@section('content')
    <div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Categories</h2>
        <a href="#" class="btn btn-primary">+ Add Category</a>
    </div>

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Slug</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Electronics</td>
                <td>electronics</td>
                <td>Phones, laptops, cameras, accessories</td>
                <td>01-08-2025</td>
                <td>01-08-2025</td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                    <button class="btn btn-sm btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Fashion</td>
                <td>fashion</td>
                <td>Clothes, shoes, bags, accessories</td>
                <td>01-08-2025</td>
                <td>02-08-2025</td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                    <button class="btn btn-sm btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Home & Kitchen</td>
                <td>home-kitchen</td>
                <td>Furniture, appliances, kitchen tools</td>
                <td>02-08-2025</td>
                <td>02-08-2025</td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                    <button class="btn btn-sm btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Sports</td>
                <td>sports</td>
                <td>Sporting goods, fitness, outdoor</td>
                <td>03-08-2025</td>
                <td>03-08-2025</td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                    <button class="btn btn-sm btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Books</td>
                <td>books</td>
                <td>Fiction, non-fiction, education</td>
                <td>04-08-2025</td>
                <td>04-08-2025</td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                    <button class="btn btn-sm btn-danger">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
