<div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Login</h5>
            <form wire:submit="login">
                <div class="mb-4">
                    <label for="email">Email</label>
                    <input wire:model="form.email" class="mt-1 form-control" type="email" name="email" id="email">
                    @error('form.email')
                        <small class="mt-1 d-block text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password">Password</label>
                    <input wire:model="form.password" class="mt-1 form-control" type="password" name="password"
                        id="password">
                    @error('form.password')
                        <small class="mt-1 d-block text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
