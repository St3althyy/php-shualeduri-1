@extends("layout.layout")

@section("content")
    <div class="row justify-content-center mt-4">
        <h1>
            EDIT POST
        </h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-8">
            <form method="post" enctype="multipart/form-data" action="{{route('genres.update', $genre->id)}}">
                @csrf
                @method('PUT')
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Genre Name</label>
                        <label>
                            <input type="text" class="form-control"  placeholder="name" name="name" value="{{old('name', $genre->name)}}">
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
