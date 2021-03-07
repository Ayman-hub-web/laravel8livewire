<div class="mt-4">
<style>
    nav svg{
        height:20px;
    }
</style>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-9 md-offset">
                <h1>Users</h1>
                {{$users->links()}}
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td><a href="#">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$users->links()}}
                </div>
            </div>
        </div>
    </section>
</div>
