<div>
    <h1>{{ $title }}</h1>
    <p>Users Count: {{ count($users) }}</p>
    <button wire:click="createUser" type="button">Create Users</button>

    <hr>

    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>
