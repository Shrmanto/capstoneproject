@extends('admin.layouts.main')

@section('container')

<div class="content">
    <div class="card">
        <div class="card-body">
            <div class="card-title text-center my-3">
                <h1>Tambah Data Produk</h1>
            </div>
            <form action="{{ route('add.product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Nama</label>
                    <input type="text" name="name" id="name" class="form-control"  required>
                </div>

                <div class="form-group mb-3">
                    <label for="image">Gambar</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="category_id">Kategori</label>
                    <select name="category_id" id="category_id" class="form-control" required>
                        <option value="">Select Category</option>
                        @foreach($category as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="price">Harga</label>
                    <input type="number" name="price" id="price" class="form-control" required>
                </div>

                <div class="form-group mb-4">
                    <label for="description">Deskripsi</label>
                    <textarea name="description" id="description" class="form-control" required></textarea>
                </div>

                <div class="button-group my-3 text-center">
                    <a href="{{ route('semua.menu') }}">
                        <button type="button" class="btn btn-dark me-3">Kembali</button>
                    </a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection