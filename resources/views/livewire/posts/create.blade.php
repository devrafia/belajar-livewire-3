<div>
    <div class="card-body">
        <h5 class="card-title">New Post</h5>
        <form action="" wire:submit="save">
            <div class="my-4">
                <label for="title" class="form-label">Title</label>
                <input type="text" wire:model="form.title" class="form-control" name="title" id="title"
                    rows="3"></input>
                @error('form.title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="body" class="form-label">Body</label>
                <textarea wire:model="form.body" class="form-control" name="body" id="body"></textarea>
                @error('form.body')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
