@extends('frontend.layout.master')

@section('title', 'Kết quả tìm kiếm')

@section('main')

    <link rel="stylesheet" href="css/search.css">

    <div id="wrap-inner">
        <div class="products">
            <h3>Tìm kiếm với từ khóa: <span>{{ $keyword_search }}</span></h3>

            <div class="product-list row">
                @foreach($products as $product)
                    <div class="product-item col-md-3 col-sm-6 col-xs-12">
                        <a href="#"><img src="{{ asset('asset/img/product_image/' . $product->image) }}"
                                         class="img-thumbnail"></a>
                        <p><a href="#">{{ $product->name }}</a></p>
                        <p class="price">{{ number_format($product->price, 0, ',', '.') }}</p>
                        <div class="marsk">
                            <a href="{{ asset('details/' . $product->product_id . '/' . $product->slug . '.html') }}">Xem
                                chi tiết</a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

        {{--        <div id="pagination">--}}
        {{--            <ul class="pagination pagination-lg justify-content-center">--}}
        {{--                <li class="page-item">--}}
        {{--                    <a class="page-link" href="#" aria-label="Previous">--}}
        {{--                        <span aria-hidden="true">&laquo;</span>--}}
        {{--                        <span class="sr-only">Previous</span>--}}
        {{--                    </a>--}}
        {{--                </li>--}}
        {{--                <li class="page-item disabled"><a class="page-link" href="#">1</a></li>--}}
        {{--                <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
        {{--                <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
        {{--                <li class="page-item">--}}
        {{--                    <a class="page-link" href="#" aria-label="Next">--}}
        {{--                        <span aria-hidden="true">&raquo;</span>--}}
        {{--                        <span class="sr-only">Next</span>--}}
        {{--                    </a>--}}
        {{--                </li>--}}

        {{--                --}}{{--{{ $products->links() }}--}}
        {{--            </ul>--}}
        {{--        </div>--}}

    </div>

@endsection
