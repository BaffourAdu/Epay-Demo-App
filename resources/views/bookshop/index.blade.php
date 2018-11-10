@extends('layouts.app')

@section('content')
    <div class="page">

        <div class="section">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="space-40"></div>
                            <h1 class="text-info">Welcome to BookShopper</h1>
                            <div class="space-20"></div>
                            <p>New way to explore and read all your favourite books. Read Reviews, Find new books, collect quotes</p>
                            <div class="space-20"></div>
                            <a href="#books" class="btn btn-info btn-lg shadow-lg">See Library</a> &nbsp;
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12"><img src="images/book.png" alt="" style="width:100%"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section" id="books">
            <div class="space-40"></div>

            <h3 class="text-center">Latest this Month</h3>
            
            <div class="space-40"></div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 offset-md-1 offset-lg-0 col-8 offset-2 mt-5">
                        <img src="{{ asset('images/2.jpg') }}" alt="" class="shadow p">
                        <div class="space-5"></div>
                        <h5>WunderSmith <br> GHs 1</h5>
                        <button type="button" class="btn btn-info btn-lg shadow-lg">Buy</button>
                    </div>
                    <div class="col-lg-3 col-md-4 offset-md-1 offset-lg-0 col-8 offset-2 mt-5">
                        <img src="{{ asset('images/2.jpg') }}" alt="" class="shadow p">
                        <div class="space-5"></div>
                        <h5>WunderSmith <br> GHs 2</h5>
                        <button type="button" class="btn btn-info btn-lg shadow-lg">Buy</button>
                    </div>
                    <div class="col-lg-3 col-md-4 offset-md-1 offset-lg-0 col-8 offset-2 mt-5">
                        <img src="{{ asset('images/2.jpg') }}" alt="" class="shadow p">
                        <div class="space-5"></div>
                        <h5>WunderSmith <br> GHs 10</h5>
                        <button type="button" class="btn btn-info btn-lg shadow-lg">Buy</button>
                    </div>
                    <div class="col-lg-3 col-md-4 offset-md-1 offset-lg-0 col-8 offset-2 mt-5">
                        <img src="{{ asset('images/2.jpg') }} " alt="" class="shadow p">
                        <div class="space-5"></div>
                        <h5>WunderSmith <br> GHs 20</h5>
                        <button type="button" class="btn btn-info btn-lg shadow-lg">Buy</button>
                    </div>
                </div>
            </div>

            <div class="space-40"></div>
        </div>

        <div class="space-40"></div>

        <footer class="bg-info">
            <div class="space-40"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-3 offset-lg-9 col-md-3 offset-md-9 col-sm-12">
                        <p style="color:#fff">BookShopper &nbsp;&copy; &nbsp; 2018</p>
                    </div>
                </div>
            </div>
            <div class="space-40"></div>

        </footer>

    </div>
@endsection