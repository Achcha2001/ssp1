
@extends('layouts.admin')

@section('title', 'Edit Train Schedule')

@section('content')
    <h2>Edit Train Schedule</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('edit.train.schedule', $trainSchedule->id) }}" method="put">
        @csrf
        @method('PUT')

        
        <label for="from">From:</label>
        <input type="text" name="from" value="{{ $trainSchedule->from }}" required>

        <label for="to">To:</label>
        <input type="text" name="to" value="{{ $trainSchedule->to }}" required>

        <label for="time">Time:</label>
        <input type="time" name="time" value="{{ $trainSchedule->time }}" required>

        <button type="submit">Update Schedule</button>
    </form>
@endsection
