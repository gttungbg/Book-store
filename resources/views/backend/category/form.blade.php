<div class="form-row">
    <div class="form-group col-md-6">
        <label>{{ __('Name') }}</label>
        <input type="text" class="form-control" placeholder="Comic" name="name"
               value="{{ old('name', isset($editCategory) ? $editCategory->name : '')  }}">
    </div>
    <div class="form-group col-md-6">
        <label>{{ __('Parent Category') }}</label>
        <select class="form-control" name="parent_id">
            <option>---{{ __('Chose the parent category') }}---</option>
            <option value="0">{{ __('Set default parent') }}</option>
            @foreach($categories as $category)
{{--                <option value="{{ $category->id }}"--}}
{{--                @if(isset($editCategory)) {{ $editCategory->id === $category->id ? 'selected' : '' }} @endif--}}
{{--                >{{ __($category->name) }}</option>--}}
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @foreach($category->child as $childCategory)
                    <option value="{{ $childCategory->id }}">--{{ $childCategory->name }}</option>
                @endforeach
            @endforeach
        </select>
    </div>
</div>
<div class="form-group">
    <textarea class="form-control" rows="4"
              name="description">{{ old('description', isset($editCategory) ? $editCategory->description : '') }}</textarea>
</div>
<button type="submit" class="btn btn-primary">Submit <i class="flaticon-381-save"></i></button>
