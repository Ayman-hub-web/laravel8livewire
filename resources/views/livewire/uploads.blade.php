<div class="mt-4">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>File Upload</h3>
                        </div>
                        @if(session()->has('message'))
                            <p class="alert alert-success">{{session('message')}}</p>
                        @endif
                        <div class="card-body">
                            <form wire:submit.prevent="fileUpload" id="form-upload" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="title" class="form-control">Title</label>
                                    <input type="text" name="title" class="form-control" wire:model="title">
                                    @error('title')
                                        <p class="alert alert-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="filename" class="form-control">File</label>
                                    <input type="file" name="filename" class="form-control" wire:model="filename">
                                    @error('filename')
                                        <p class="alert alert-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="justify-content-between">
                                    
                                </div>
                                <button type="submit" class="btn btn-success float-end mt-2">Upload</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
