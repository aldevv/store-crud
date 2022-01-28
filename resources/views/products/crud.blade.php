@extends('products.layout')

@section('content')
<h1>Products {{ $user_name }} can buy</h1>
<table class="table">
    <form action={{ route("createProd") }} method="post">
        @csrf
        <tr>
            <td>Name</td>
            <td>
                <input type="text" name="Name" id="txtName" />
            </td>
        </tr>
        <tr>
            <td>Price</td>
            <td>
                <input type="text" name="Price" id="txtPrice" />
            </td>
        </tr>
        <tr>
            <td>
                <button type='submit' id='btnAdd' value="save">Add</button>
            </td>
            <td>
                <button type='button' id='btnClear'>Clear</button>
            </td>
        </tr>

    </form>
</table>
<table id="tblCustomers" class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
    </thead>
    <tbody></tbody>

    @foreach($products as $prod)
    <tr>
        <td>
            {{ $prod->id }}
        </td>
        <td>
            {{ $prod->name }}
        </td>
        <td>
            {{ $prod->price }}
        </td>
        <td>
            <!-- Button trigger modal -->
            @include('products.modal', array('buttonName'=>'Update', 'type'=>'update-'.$prod->id, 'func'=> 'updateProd', 'id' => $prod->id))
            @include('products.modal', array('buttonName'=>'Delete', 'type'=>'delete-'.$prod->id, 'func'=> 'deleteProd', 'id' => $prod->id))
            <form action="{{ route('buyProduct', array('user_id' => $user_id, 'product_id' => $prod->id)) }}" method="post">
                @csrf
                <button type="submit" class="btn btn-primary">Buy This product</a>
            </form>
        </td>
    </tr>
    @endforeach


</table>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
</script>

@endsection
