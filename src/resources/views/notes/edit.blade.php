<div>
    <label for="category_id">Category:</label>
    <select name="category_id" id="category_id">
        <option value="">No Category</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id', $note->category_id ?? '') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
</div>
