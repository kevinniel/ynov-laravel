<html>

    <h1>Customers</h1>

    <a href="{{ route('customer.create') }}">ajout nouveau customer</a>

    <table border="1">
        <tr>
            <td>actions</td>
            <td>id</td>
            <td>nom</td>
            <td>tel</td>
        </tr>
        @foreach($customers as $customer)
            <tr>
                <td>
                    <a href="{{ route('customer.edit', $customer->id) }}">modifier</a>
                    <form action="{{ route('customer.destroy') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id_to_destroy" value="{{ $customer->id }}">
                        <button type="submit">supprimer</button>
                    </form>
                </td>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->phone }}</td>
            </tr>
        @endforeach
    </table>

</html>