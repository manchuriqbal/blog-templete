@extends('admin.layouts.app')

@section('title', 'Create Post')


@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md mb-8 max-w-3xl mx-auto">
        <h2 class="text-xl font-bold mb-4 text-gray-800">Create New Post</h2>
        <form action="#" method="POST" class="space-y-6">
            <!-- Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title <span
                        class="text-red-500">*</span></label>
                <input type="text" id="title" name="title" required
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Thumbnail -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Thumbnail</label>
                <input type="file" id="title" name="title"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Content -->
            <div>
                <label for="content" class="block text-sm font-medium text-gray-700">Content <span
                        class="text-red-500">*</span></label>
                <textarea id="content" name="content" required rows="4"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>

            <!-- Author -->
            <div>
                <label for="author" class="block text-sm font-medium text-gray-700">Author<span
                        class="text-red-500">*</span></label>
                <select id="author" name="author" required
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 bg-white focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Select Author Name</option>
                    <option value="web-development">Supper Admin</option>
                    <option value="react">Manchur Iqbal</option>
                    <option value="typescript">Humayun Ahamed</option>
                    <!-- Add more options dynamically here -->
                </select>
            </div>

            <!-- Category -->
            <div>
                <label for="category" class="block text-sm font-medium text-gray-700">Category<span
                        class="text-red-500">*</span></label>
                <select id="category" name="category" required
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 bg-white focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Select Category Name</option>
                    <option value="web-development">Supper Admin</option>
                    <option value="react">Manchur Iqbal</option>
                    <option value="typescript">Humayun Ahamed</option>
                    <!-- Add more options dynamically here -->
                </select>
            </div>

            <!-- Submit Button -->
            <div class="text-right">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded-md">
                    Create Post
                </button>
            </div>
        </form>
    </div>
@endsection