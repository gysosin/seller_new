
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<div class="form-group">
    <label class="pay">subcategories</label>
    <select name="subcategory"  class="form-control"   id="subcategory">
        <option value="-1">-Select subcategories-</option>
        @if(count($subcategories))
        @foreach($subcategories as $subcategorie)
        <option value="{{ $subcategorie->id }}">
            {{ isset($subcategorie->name)?$subcategorie->name:'' }}
        </option>
        @endforeach
        @endif
    </select>
</div>
