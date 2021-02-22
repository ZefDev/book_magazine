
  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($author as $item)
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="50%" height="350" src="{{$item->photo_author}}" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"/>
            <div class="card-body">
              <p class="card-text">{{$item->name_author}}</p>
              <span>
              Книги:
              @foreach ($item->books as $books)
                {{$books->name}}
              @endforeach
            </span>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  {{$author->links()}}
