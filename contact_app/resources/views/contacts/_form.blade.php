<div class="row">
    <div class="col-md-12">
        <div class="form-group row">
            <label for="first_name" class="col-md-3 col-form-label">First Name</label>
            <div class="col-md-9">

                <!-- The old function will first check whether there is anything present in the default value. -->
                <!-- If there is, the data from that argument will populate the input fields -->
                <!-- If not, then the old() function will use whatever is entered by the user -->
                <!-- This helps us use this _form partial view for both Create and Edit -->

                <input type="text" name="first_name" id="first_name"
                    value="{{ old('first_name', $contact->first_name) }}"
                    class="form-control @error('first_name') is-invalid @enderror">
                @error('first_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="last_name" class="col-md-3 col-form-label">Last Name</label>
            <div class="col-md-9">
                <input type="text" name="last_name" id="last_name" value="{{ old('last_name', $contact->last_name) }}"
                    class="form-control @error('last_name') is-invalid @enderror">
                @error('last_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-3 col-form-label">Email</label>
            <div class="col-md-9">
                <input type="text" name="email" id="email" value="{{ old('email', $contact->email) }}"
                    class="form-control @error('email') is-invalid @enderror">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="phone" class="col-md-3 col-form-label">Phone</label>
            <div class="col-md-9">
                <input type="text" name="phone" id="phone" value="{{ old('phone', $contact->phone) }}"
                    class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-3 col-form-label">Address</label>
            <div class="col-md-9">
                <textarea name="address" id="address" rows="3"
                    class="form-control @error('address') is-invalid @enderror">{{old('address', $contact->address)}}</textarea>
                @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="company_id" class="col-md-3 col-form-label">Company</label>
            <div class="col-md-9">
                <select name="company_id" id="company_id"
                    class="form-control @error('company_id') is-invalid @enderror">
                    @foreach ($companies as $id => $name)
                        <option {{$id == old('company_id', $contact->company_id) ? 'selected' : ''}} value="{{$id}}">{{$name}}
                        </option>
                    @endforeach
                </select>
                @error('company_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <hr>
        <div class="form-group row mb-0">
            <div class="col-md-9 offset-md-3">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('contacts.index') }}" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </div>
    </div>
</div>