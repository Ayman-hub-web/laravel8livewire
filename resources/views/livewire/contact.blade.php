<div>
    <section class="mx-auto">
        <div class="container">
            <div class="row">
                <div class="col-md-6 md-offset">
                    <div class="card">
                        <div class="card-header">
                            <h1>Contact Form</h1>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="submitForm">
                            <div class="form-group">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" wire:model="name">
                                @error('name')
                                    <p class="alert alert-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" wire:model="email">
                                @error('email')
                                    <p class="alert alert-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" wire:model="phone">
                                @error('phone')
                                    <p class="alert alert-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="message" class="form-label">Message</label>
                                <textarea name="msg" class="form-control" wire:model="msg"></textarea>
                                @error('msg')
                                    <p class="alert alert-danger">{{$message}}</p>
                                @enderror
                            </div>
                                <button type="submit" class="btn btn-success mt-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
