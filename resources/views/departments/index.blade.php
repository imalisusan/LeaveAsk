@extends('laratrust::panel.layout')
@section('title', 'Courses')
@section('content')

<div class="flex flex-col">
    @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
    @endif
    <a
      href="{{ route('courses.create') }}"
      class="self-end bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
    >
      + New Course
    </a>
    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
      <div class="mt-4 align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
        <table class="min-w-full">
          <thead>
            <tr>
              <th class="th">Id</th>
              <th class="th">Course Name</th>
              <th class="th"></th>
            </tr>
          </thead>
          <tbody class="bg-white">
            @foreach ($courses as $course)
            <tr>
              <td class="td text-sm leading-5 text-gray-900">
                {{$course->id}}
              </td>
              <td class="td text-sm leading-5 text-gray-900">
                {{$course->name}}
              </td>
              <td class="flex justify-end px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                <a class="text-blue-600 hover:text-blue-900" href="{{ route('courses.show',$course->id) }}">Show</a>
                <a class="text-blue-600 hover:text-blue-900 ml-4" href="{{ route('courses.edit',$course->id) }}">Edit</a>

                <form action="{{ route('courses.destroy',$course->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete the course?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
  {{ $courses->links('laratrust::panel.pagination') }}
@endsection