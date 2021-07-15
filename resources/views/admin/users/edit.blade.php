@extends('layouts.app')

@section('content')
    Page edition de {{ $user->name }} 

    <form method="post" action="{{ route('admin.users.edit.update', ['id' => $user->id]) }}" class="max-w-3xl grid grid-cols-4 gap-4 mt-4">
        @csrf
        <div class="col-span-2">
            <label for="text" class="block text-sm font-medium text-gray-200">Name</label>
            <div class="mt-1">
                <input type="text" name="name" id="text" value="{{ $user->name }}" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md placeholder-gray-600 text-gray-800" placeholder="Thomas">
            </div>
        </div>
        <div class="col-span-2">
            <label for="email" class="block text-sm font-medium text-gray-200">Email</label>
            <div class="mt-1">
                <input type="text" name="email" id="email" value="{{ $user->email }}" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md placeholder-gray-600 text-gray-800" placeholder="you@example.com">
            </div>
        </div>
        <div class="col-span-2">
            <label for="password" class="block text-sm font-medium text-gray-200">Password</label>
            <div class="mt-1">
                <input type="text" name="password" id="password" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md placeholder-gray-600 text-gray-800" placeholder="********">
            </div>
        </div>

        <div class="flex items-end">
            <button type="submit" class="inline-flex items-center px-4 py-2.5 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Save
            </button>
        </div>
    </form>
@endsection