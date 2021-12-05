<div class="form-row">
    <div class="form-group col-md-6">
        <label>{{ __('Name') }}</label>
        <input type="text" class="form-control" placeholder="Hoàng A" name="name"
               value="{{ old('name', isset($editPublisher) ? $editPublisher->name : '') }}">
        @error('name')
        <div class="alert alert-danger mt-2 px-2">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group">
    <label>{{ __('Description') }}</label>
    <textarea class="form-control" rows="4"
              name="description">{{ old('description', isset($editPublisher) ? $editPublisher->description : '') }}
    </textarea>
    @error('description')
    <div class="alert alert-danger mt-2 px-2">{{ $message }}</div>
    @enderror
</div>
<button type="submit" class="btn btn-primary">Submit <i class="flaticon-381-save"></i></button>
