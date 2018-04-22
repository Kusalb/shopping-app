<form method = "post" action ="{{route('login')}}">
    {{csrf_field() }}

    <input id="email" type="email" class="form-control" name="email" value="{{old ('email')}}" required autofocus>
    <input id="password" type ="password" class="form-control" name="password" required>
    <button type ="submit" class="btn btn-primary">Login</button>
</form>