<div class="card mb-4">
    <div class="card-header">Sort Filter Search</div>
    <div class="card-body">
        <form class="delete" action="{{route('front-hotel-list')}}" method="get">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label>What sort do you want?</label>
                            <select class="form-control" name="sort">
                                <option value="default">Default sort</option>
                                <option value="price-asc">Price, lowest first</option>
                                <option value="price-desc">Price, highest first</option>
                            </select>
                        </div>


                    </div>
                    {{-- <div class="col-4">
                        <div class="form-group">
                            <label>What country would you like to see?</label>
                            <select class="form-control" name="country_id">
                                <option>No Filter, please</option>
                                @foreach($countries as $country)
                                <option>{{$country->country_name}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div> --}}
                    <div class="col-5">
                        <button type="submit" class="btn btn-outline-warning m-2 mt-4">Sort!</button>
                        <a class="btn btn-outline-success m-2 mt-4" href="">Clear!</a>
                    </div>

                </div>
            </div>
        </form>
        <form class="delete" action="" method="get">
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        <div class="form-group">
                            <label>Do search</label>
                            <input class="form-control" type="text" name="s" value="" />
                        </div>
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-outline-warning mt-4">Search!</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>