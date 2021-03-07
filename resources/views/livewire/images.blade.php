<div class="mt-4">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>Upload Images</h3>
                        </div>
                        @if(session()->has('message'))
                            <p class="alert alert-success">{{session('message')}}</p>
                        @endif
                        <div class="card-body">
                            <form wire:submit.prevent="uploadImages" id="upload-images" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="filename" class="form-control">Choose Images</label>
                                    <input type="file" name="images" class="form-control" wire:model="images" multiple>
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
