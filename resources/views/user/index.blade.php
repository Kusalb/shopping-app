<h1>Customers <a href="{{route('user.create') }}" class="btn btn-primary pull-right btn-sn">Add New user</a></h1>
<div class="table">
    <table class="table table-bordered table-striped table-hover">
        <thead>
        <tr>
            <th>S.N.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $key=>$customer)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>