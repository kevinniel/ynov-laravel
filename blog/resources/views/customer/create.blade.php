<html>

    <h1>Creation customer</h1>

    <a href="{{ route('customer.index') }}">accueil customers</a>

    <form action="{{ route('customer.store') }}" method="POST">
        @csrf

        <input type="text" name="name" placeholder="name">

        <input type="text" name="phone" placeholder="phone">

        <button type="submit">Envoyer</button>


    </form>

</html>