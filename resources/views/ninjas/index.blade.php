<x-layout>
    <h2>Currently Available Ninjas</h2>

    <ul>
        @foreach($ninjas as $ninja)
            <li>
                <x-card href="{{ route('ninjas.show', $ninja->id) }}" :highlight="$ninja['skill'] >= 70">
                    <div>
                        <h3>{{ $ninja['name'] }}</h3>
                        <p>Origin Dojo: {{ $ninja->dojo->name }}</p>
                    </div>
                    <p>Skill Level: {{ $ninja['skill'] }}</p>
                </x-card>
            </li>
        @endforeach
    </ul>


    {{ $ninjas->links() }}
</x-layout>