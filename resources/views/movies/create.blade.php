@extends("layout.layout")

@section("content")
    <div>
        <form method="post" enctype="multipart/form-data" action="{{route('movies.save')}}">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Movie IMDB</label>
                    <label>
                        <input type="text" class="form-control"  placeholder="Name" name="IMDB">
                    </label>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Movie Description</label>
                    <label>
                        <input type="text" class="form-control"  placeholder="Name" name="description">
                    </label>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Movie Genre ID</label>
                    <label>
                        <input type="text" class="form-control"  placeholder="Name" name="genre_id">
                    </label>
                </div>
            </div>
            <input type="hidden" name="_token"  id='csrf_toKen' value="{{ csrf_toKen() }}">
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
