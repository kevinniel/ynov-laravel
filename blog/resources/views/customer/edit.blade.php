<html>

    <h1>Modification customer</h1>

    <a href="{{ route('customer.index') }}">accueil customers</a>

    <form action="{{ route('customer.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="name" placeholder="name" value="{{ $customer->name }}">

        <input type="text" name="phone" placeholder="phone" value="{{ $customer->phone }}">

        <button type="submit">Envoyer</button>


    </form>

</html>