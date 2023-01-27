

<div class="container">
    
    <div class="card shadow mt-5 col-lg-6 mx-auto bg-light">
        <div class="card-body">
            <h4 class="text-center fw-bold">Add Comic</h4>
            <p class="text-center">Add your pirated entry</p>
            <label class="fw-bold">Title</label>


            <form action="add-comic" method="POST" enctype="multipart/form-data">
                @csrf
                <input name="title"type="text" class="form-control" placeholder="Title">
                @error('title')
                    <p class="fs-6 text-danger">{{$message}}</p>
                @enderror
                <label class="fw-bold">Description</label>

                
                
                <textarea name="description" class="form-control" placeholder="Description"></textarea>
                @error('description')
                    <p class="fs-6 text-danger">{{$message}}</p>
                @enderror

                <label class="fw-bold mt-3">Choose Image</label>
                <input name="image" type="file" class="form-control">
                <button class="btn btn-dark w-100 mt-3">Confirm</button>
                
            </form>
        </div>
    </div>
</div>
