<div>
    <h1>Listado de usuarios</h1>
    @php
        //dd($users);
    @endphp
    @foreach ($users as $user)
        {{ $user->name }}
        {{ $user->email }}
    @endforeach
</div>
