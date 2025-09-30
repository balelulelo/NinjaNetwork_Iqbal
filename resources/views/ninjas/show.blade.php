<x-layout>
    <h2>{{ $ninja->name }}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Skill level:</strong> {{ $ninja->skill }}</p>
        <p><strong>About me:</strong></p>
        <p>{{ $ninja->bio }}</p>
    </div>

    <div class="card my-5">
        <h3>Dojo Information</h3>
        <p><strong>Dojo Name:</strong> {{ $ninja->dojo->name }}</p>
        <p><strong>Location:</strong> {{ $ninja->dojo->location }}</p>
        <p><strong>Dojo Description:</strong></p>
        <p>{{ $ninja->dojo->description }}</p>
    </div>

    <form action="{{ route('ninjas.destroy', $ninja->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this ninja?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn my-5">Delete Ninja</button>

</x-layout>