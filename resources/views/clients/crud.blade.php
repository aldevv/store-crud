@extends('clients.layout')

@section('content')
<table class="table">
    <form action={{ route("createClient") }} method="post">
        @csrf
        <tr>
            <td>Name</td>
            <td>
                <input type="text" name="Name" id="txtName" />
            </td>
        </tr>
        <tr>
            <td>
                <button type='submit' class="btn-primary" id='btnAdd' value="save">Add</button>
            </td>
            <td>
                <button type='button' class="btn-primary" id='btnClear'>Clear</button>
            </td>
        </tr>

    </form>
</table>
<table id="tblCustomers" class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
    </thead>
    <tbody></tbody>

    @foreach($users as $u)
    <tr>
        <td>
            {{ $u->id }}
        </td>
        <td>
            {{ $u->name }}
        </td>
        <td>
            <!-- Button trigger modal -->
            @include('clients.modal', array('buttonName'=>'Update', 'type'=>'update-'.$u->id, 'func'=> 'updateClient', 'id' => $u->id))
            @include('clients.modal', array('buttonName'=>'Delete', 'type'=>'delete-'.$u->id, 'func'=> 'deleteClient', 'id' => $u->id))
            <a href="{{ route('products', array('user_id' => $u->id, 'user_name' => $u->name)) }}" type="button" class="btn btn-primary">Buy Products</a>
        </td>
    </tr>
    @endforeach


</table>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
</script>

@endsection
