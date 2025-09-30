<x-layout>
    <form action="{{ route('ninjas.store') }}" method="POST">
        @csrf 

    <h2>Create New Ninja</h2>

    <div class="card">
        <form action="#" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Ninja Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="skill">Ninja Skill (0-100):</label>
                <input type="number" id="skill" name="skill" required>
            </div>

            <div class="form-group">
                <label for="bio">Biography</label>
                <textarea rows="5" id="bio" name="bio" required></textarea>
            </div>

            <div class="form-group">
                <label for="dojo_id">Dojo:</label>
                <select id="dojo_id" name="dojo_id" required>
                    <option value="" disabled selected>Select a Dojo</option>
                    @foreach($dojos as $dojo)
                        <option value="{{ $dojo->id }}">{{ $dojo->name }}</option>

                    @endforeach
                
                </select>
            </div>

            <button type="submit" class="btn">Create</button>
        </form>
    </div>
</x-layout>