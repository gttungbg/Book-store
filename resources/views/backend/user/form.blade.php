<div class="form-row">
    <div class="form-group col-md-6">
        <label>{{ __('Name') }}</label>
        <input type="text" class="form-control" placeholder="Hoàng A" name="name"
               value="{{ old('name', isset($editUser) ? $editUser->name : '') }}">
        @error('name')
        <div class="alert alert-danger mt-2 px-2">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <label>{{ __('Email') }}</label>
        <input type="text" class="form-control" placeholder="abc@gmail.com" name="email"
               value="{{ old('email', isset($editUser) ? $editUser->email : '') }}">
        @error('email')
        <div class="alert alert-danger mt-2 px-2">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <label>{{ __('Password') }}</label>
        <input type="password" class="form-control" placeholder="*******" name="password"
               value="{{ old('password', isset($editUser) ? $editUser->password : '') }}">
        @error('password')
        <div class="alert alert-danger mt-2 px-2">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <label>{{ __('Phone number') }}</label>
        <input type="number" class="form-control" placeholder="012345678" name="phone" min="0"
               value="{{ old('phone', isset($editUser) ? $editUser->phone_number : '') }}">
        @error('phone')
        <div class="alert alert-danger mt-2 px-2">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group">
    <label>{{ __('Address') }}</label>
    <input type="text" class="form-control" placeholder="UONG BI - QUANG NINH" name="address"
           value="{{ old('address', isset($editUser) ? $editUser->address : '') }}">
    @error('address')
    <div class="alert alert-danger mt-2 px-2">{{ $message }}</div>
    @enderror
</div>
<button type="submit" class="btn btn-primary">Submit <i class="flaticon-381-save"></i></button>
