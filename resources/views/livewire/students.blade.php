<div class="mt-4">
@include('livewire.create')
@include('livewire.update')
<style>
    nav svg{
        height:20px;
    }
</style>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 md-offset">
                @if(session()->has('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
                @endif
                <h1>Students</h1>
                <div class="row">
                    <div class="col-md-8">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudentModal">
                        Add New Student
                        </button>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="search ..." wire:model="searchTerm">
                    </div>
                </div>
                {{$students->links()}}
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $student)
                            <tr>
                            <th scope="row">{{$student->id}}</th>
                            <td>{{$student->firstname}}</td>
                            <td>{{$student->lastname}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->phone}}</td>
                            <td><button type="button" class="btn btn-info" wire:click.prevent="edit({{$student->id}})" data-bs-toggle="modal" data-bs-target="#updateStudentModal">Edit</button>
                            <button type="button" class="btn btn-danger" wire:click.prevent="delete({{$student->id}})">Delete</button>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$students->links()}}
                </div>
            </div>
        </div>
    </section>
</div>
 