@extends('products.layout')

@section('content')
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
                <button type='button' id='btnUpdate' style="display: none;">Update</button>
                <button type='button' id='btnUpdate' style="display: none;">Delete</button>
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
</table>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    @foreach ($products as $prod)
        var table = "<tr><td> {{ $prod->id }} </td><td> {{ $prod->name }} </td><td> {{ $prod->price }} </td></tr>";
        $("#tblCustomers").append(table);
    @endforeach
    //function Clear() {
    //    $("#txtId").val("");
    //    $("#txtName").val("");
    //    $("#txtPrice").val("");
    //    $("#hfRowIndex").val("");
    //}
</script>
@endsection
