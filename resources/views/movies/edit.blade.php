@extends("layout.layout")

@section("content")
    <div class="row justify-content-center mt-4">
        <h1>
            EDIT POST
        </h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-8">
            <form method="post" enctype="multipart/form-data" action="{{route('movies.update', $movie->id)}}">
                @csrf
                @method('PUT')
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Movie IMDB</label>
                        <label>
                            <input type="text" class="form-control"  placeholder="IMDB" name="IMDB" value="{{old('IMDB', $movie->IMDB)}}">
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Movie Description</label>
                        <label>
                            <input type="text" class="form-control"  placeholder="Description" name="description" value="{{old('description', $movie->description)}}">
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Movie Genre ID</label>
                        <label>
                            <input type="text" class="form-control"  placeholder="Gendre ID" name="genre_id" value="{{old('genre_id', $movie->genre_id)}}">
                        </label>
                    </div>
                </div>
                <input type="hidden" name="_token"  id='csrf_toKen' value="{{ csrf_toKen() }}">
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
