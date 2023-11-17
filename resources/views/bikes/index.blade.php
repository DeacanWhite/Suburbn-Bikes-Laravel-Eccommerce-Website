
<h1>
    <a href="{{ url('/selected-bikes') }}">selected-bikes</a>
</h1>
<table>
    <thead>
    <tr>
        <th>Product Number</th>
        <th>Name</th>
        <th>Size</th>
        <th>Color</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($roadbikes as $bike)
        <tr>
            <td>{{ $bike->RB_name }}</td>
            <td>{{ $bike->RB_size }}</td>
            <td>{{ $bike->RB_colour }}</td>
            <td>{{ $bike->RB_price }}</td>
            <td>{{ $bike->RB_stock }}</td>
            <td>
                <form action="{{ route('addToSession') }}" method="POST">
                    @csrf
                    <input type="hidden" name="bike_type" value="roadbike">
                    <input type="hidden" name="prod_no" value="{{ $bike->id }}">
                    <button type="submit">Add</button>
                </form>
            </td>
        </tr>
    @endforeach
    @foreach($citybikes as $bike)
        <tr>
            <td>{{ $bike->CB_name }}</td>
            <td>{{ $bike->CB_size }}</td>
            <td>{{ $bike->CB_colour }}</td>
            <td>{{ $bike->CB_price }}</td>
            <td>{{ $bike->CB_stock }}</td>
            <td>
                <form action="{{ route('addToSession') }}" method="POST">
                    @csrf
                    <input type="hidden" name="bike_type" value="citybike">
                    <input type="hidden" name="prod_no" value="{{ $bike->id }}">
                    <button type="submit">Add</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
