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

</x-layout>