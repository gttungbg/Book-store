<button type="submit" class="btn btn-primary">Submit <i class="flaticon-381-save"></i></button>
<div class="form-row">
    <div class="col-md-6">
        <div class="form-group">
            <label>{{ __('isbn') }}</label>
            <input type="text" class="form-control" placeholder="BHC123132" name="isbn"
                   value="{{ old('isbn', isset($editBook) ? $editBook->isbn : '')  }}">
            @error('isbn')
            <div class="alert alert-danger mt-2 px-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group ">
            <label>{{ __('Category') }}</label>
            <select class="form-control" name="category_id">
                <option value="">---Pls chose category---</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                    @if(isset($editBook)) {{ $editBook->category_id == $category->id ? 'selected' : '' }} @endif
                    >{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
            <div class="alert alert-danger mt-2 px-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group ">
            <label>{{ __('Size') }}</label>
            <input type="text" class="form-control" placeholder="14x15" name="size"
                   value="{{ old('size', isset($editBook) ? $editBook->size : '') }}">
            @error('size')
            <div class="alert alert-danger mt-2 px-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group ">
            <label>{{ __('Publish Date') }}</label>
            <input type="date" class="form-control" placeholder="14x15" name="publish_date"
                   value="{{ old('publish_date', isset($editBook) ? $editBook->publish_date : '') }}">
            @error('publish_date')
            <div class="alert alert-danger mt-2 px-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group ">
            <label>{{ __('Quantity') }}</label>
            <input type="number" class="form-control" placeholder="100" name="quantity"
                   value="{{ old('quantity', isset($editBook) ? $editBook->quantity : '') }}">
            @error('quantity')
            <div class="alert alert-danger mt-2 px-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group ">
            <label>{{ __('Author') }}</label>
            <select class="multi-select" name="authors[]" multiple="multiple">
                @foreach($authors as $author)
                    <option value="{{ $author->id }}"
                    @if(isset($bookAuthor)) {{ $bookAuthor->contains('id', $author->id) ? 'selected' : '' }} @endif
                    >{{ $author->name }}</option>
                @endforeach
                @error('author')
                <div class="alert alert-danger mt-2 px-2">{{ $message }}</div>
                @enderror
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>{{ __('Title') }}</label>
            <input type="text" class="form-control" placeholder="Comic VN PART 1" name="title"
                   value="{{ old('title', isset($editBook) ? $editBook->title : '') }}">
            @error('title')
            <div class="alert alert-danger mt-2 px-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group ">
            <label>{{ __('Publisher') }}</label>
            <select class="form-control" name="publisher_id">
                <option value="">---Pls chose publisher---</option>
                @foreach($publishers as $publisher)
                    <option value="{{ $publisher->id }}"
                    @if(isset($editBook)) {{ $editBook->publisher_id == $publisher->id ? 'selected' : '' }} @endif
                    >{{ $publisher->name }}</option>
                @endforeach
            </select>
            @error('publisher_id')
            <div class="alert alert-danger mt-2 px-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group ">
            <label>{{ __('Number Of Page') }}</label>
            <input type="number" class="form-control" placeholder="20-200" name="number_of_page"
                   value="{{ old('number_of_page', isset($editBook) ? $editBook->number_of_page : '') }}">
            @error('number_of_page')
            <div class="alert alert-danger mt-2 px-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>{{ __('Price') }}</label>
            <input type="number" class="form-control" placeholder="1.000.000" name="price"
                   value="{{ old('price', isset($editBook) ? $editBook->price : '') }}">
            @error('price')
            <div class="alert alert-danger mt-2 px-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>{{ __('Image') }}</label>
            <input type="file" name="url[]" class="form-control" multiple>
            @error('url')
            <div class="alert alert-danger mt-2 px-2">{{ $message }}</div>
            @enderror
        </div>
    </div>

</div>
<div class="form-group">
    <label>{{ __('Description') }}</label>
    <textarea class="form-control" rows="4"
              name="description">{{ old('description', isset($editBook) ? $editBook->description : '') }}</textarea>
</div>
