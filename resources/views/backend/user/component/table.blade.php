<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th><input type="checkbox" value="" id="checkAll" class="input-checkbox"></th>
                <th>Avatar</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Active</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($users) && is_object($users))
                @foreach($users as $user)
                <tr>
                    <td>
                        <input type="checkbox" value="" id="checkAll" class="input-checkbox checkboxItem">
                    </td>
                    <td>
                        <img alt="image" class="img-circle size-50" src="{{$user->image}}" />
                    </td>
                    <td>
                        {{ $user->name }}
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                    <td>
                        {{ $user->phone }}
                    </td>
                    <td>
                        {{ $user->address }}
                    </td>
                    <td>
                        <input type="checkbox" class="js-switch" checked />
                    </td>
                    <td class="text-center">
                        <a href="" class="btn btn-success"><i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
{{ $users->Links('pagination::bootstrap-4')}}
