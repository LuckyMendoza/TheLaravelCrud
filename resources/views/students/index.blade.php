@extends('layout.app')
@section('title')
    Information List
@endsection

<x-login-alert />

<!-- Search Form -->
<form action="{{ route('student.search') }}" method="GET">
    <div class="search-container">
        <input type="text" name="search" placeholder="Search..." value="{{ request('search') }}">
        <button type="submit" value="submit">
            <i class="fas fa-search"></i>
        </button>
    </div>
</form>

<!-- Student Table -->
<div class="container-table">
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($student) && $student->isNotEmpty())
                    @foreach ($student as $students)
                        <tr>
                            <td>{{ $students->firstName }}</td>
                            <td>{{ $students->lastName }}</td>
                            <td>{{ $students->address }}</td>
                            <td>{{ $students->email }}</td>
                            <td>{{ $students->message }}</td>
                            <td>
                                <!-- View Button -->
                                <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#viewStudentModal"
                                    data-student-id="{{ $students->id }}">
                                    View
                                </button>

                                <!-- Edit Button -->
                                <a href="{{ route('student.edit', $students->id) }}" class="btn btn-outline-warning">Edit</a>

                                <!-- Delete Button -->
                                <form action="{{ route('student.delete', $students->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger" data-mdb-ripple-init data-mdb-ripple-color="dark">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6" class="text-center">No students found</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

<!-- Add New Data Button -->
<div class="button-container">
    <div class="button">
        <a href="{{ route('student.create') }}">
            <div class="inner"></div>
            <span>Add New Data</span>
        </a>
    </div>
</div>

<!-- View Profile Modal -->
<div class="modal fade" id="viewStudentModal" tabindex="-1" aria-labelledby="viewStudentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="viewStudentModalLabel">Student Profile</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>First Name:</strong> <span id="studentFirstName"></span></p>
                <p><strong>Last Name:</strong> <span id="studentLastName"></span></p>
                <p><strong>Address:</strong> <span id="studentAddress"></span></p>
                <p><strong>Email:</strong> <span id="studentEmail"></span></p>
                <p><strong>Message:</strong> <span id="studentMessage"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
