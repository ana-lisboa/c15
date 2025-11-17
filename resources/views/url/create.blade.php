<x-layouts.auth>
    <flux:main>
        <form action="{{ route('url.store') }}" method="POST">
            @csrf
            <div >
                <label for="original_url">Original URL</label>
                <input type="url" name="original_url" id="original_url" required class="border-1 border-b-gray-50 rounded mt-2 w-full">
            </div>
            @error('original_url')
                <p>{{ $message }}</p>
            @enderror
            <button type="submit" class="mt-5">Create</button>
        </form>
    </flux:main>
</x-layouts.auth>
