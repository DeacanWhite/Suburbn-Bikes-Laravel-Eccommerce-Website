
<h1>Selected Bikes</h1>
<a href="{{ url('/bikes') }}">bikes</a>
<table>
    <thead>
    <tr>
        <th>Product Number</th>
        <th>Name</th>
        <th>Size</th>
        <th>Color</th>
        <th>Price</th>

        <!-- Add more table headers as needed -->
    </tr>
    </thead>
    <tbody>
    @foreach($selectedBikes as $bike)
        <tr>
            <td>{{ $bike->id }}</td>
            <td>{{ $bike->CB_name }}</td>
            <td>{{ $bike->CB_size }}</td>
            <td>{{ $bike->CB_colour }}</td>
            <td>{{ $bike->CB_price }}</td>
            <td>
                <form action="{{ route('removeFromSession', ['bikeType' => 'citybike', 'prodNo' => $bike->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Remove</button>
                </form>
            </td>
        </tr>
    @endforeach
    @foreach($selectedBikes as $bike)
        <tr>
            <td>{{ $bike->id }}</td>
            <td>{{ $bike->RB_name }}</td>
            <td>{{ $bike->RB_size }}</td>
            <td>{{ $bike->RB_colour }}</td>
            <td>{{ $bike->RB_price }}</td>
            <td>
                <form action="{{ route('removeFromSession', ['bikeType' => 'roadbike', 'prodNo' => $bike->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Remove</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
