@extends('layouts.app')

@section('content')

    <h3 class="text-2xl tracking-wide font-semibold text-gray-50">
        Create Annonce
    </h3>

    <form method="post" action="{{ route('annonce.create.new') }}" enctype="multipart/form-data" class="max-w-3xl grid grid-cols-4 gap-4 mt-4">
        @csrf
        <div class="col-span-2">
            <label for="title" class="block text-sm font-medium text-gray-200">Title</label>
            <div class="mt-1">
                <input type="text" name="title" id="title" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md placeholder-gray-400 text-gray-800" placeholder="PS5">
            </div>
        </div>

        <div class="col-span-4">
            <label for="description" class="block text-sm font-medium text-gray-200">Description</label>
            <div class="mt-1">
                <textarea name="description" id="description" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md placeholder-gray-400 text-gray-800" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="col-span-1">
            <label for="price" class="block text-sm font-medium text-gray-200">Price</label>
            <div class="mt-1">
                <input type="number" step="any" name="price" id="price" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md placeholder-gray-400 text-gray-800" placeholder="50.50">
            </div>
        </div>

        <div class="mt-1 sm:mt-0 sm:col-span-4">
            <div class="max-w-md flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <div class="flex text-sm text-gray-300">
                        <label for="image" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 mx-auto focus-within:ring-offset-2 focus-within:ring-indigo-500">
                            <span class="px-1.5">Upload a file</span>
                            <input id="image" name="image" type="file" class="sr-only">
                        </label>
                    </div>
                    <p class="text-xs text-gray-400">
                        PNG, JPG, GIF up to 10MB
                    </p>
                </div>
            </div>
        </div>

        <div class="flex items-end">
            <button type="submit" class="inline-flex items-center px-4 py-2.5 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Create
            </button>
        </div>
    </form>

@endsection