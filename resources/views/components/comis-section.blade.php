
@props(['comics'])
<div class="bg-light py-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
            @foreach($comics as $comicItem)
                <div class="col">
                    
                    <div class="card shadow">
                        <img src="public/storage/{{$comicItem->image}}" alt="" style="height: 300px; width: 100%; object-fit: cover" class="card-img-top">
                        <div class="card-body">
                            <h3 class="fw-bold">{{$comicItem->title}}</h3>
                            <p>{{$comicItem->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
