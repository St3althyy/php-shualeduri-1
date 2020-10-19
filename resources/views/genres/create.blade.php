@extends("layout.layout")

@section("content")
    <div>
        <form method="post" enctype="multipart/form-data" action="{{route('genres.save')}}">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Genre Name</label>
                    <label>
                        <input type="text" class="form-control"  placeholder="Name" name="name">
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
