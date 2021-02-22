
  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($book as $item)
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="50%" height="350" src="{{$item->photo}}" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"/>

            <div class="card-body">
              <p class="card-text">{{$item->name}}</p>
              <p class="card-text">{{$item->name_author}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Оформить заявку на книгу</button>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
{{$book->links()}}
