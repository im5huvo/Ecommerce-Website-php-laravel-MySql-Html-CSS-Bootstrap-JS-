@extends('layout.main')
@section('content')

    <section class="hero text-center">
        <br/>
        <br/>
        <br/>
        <br/>
        <h2 >
            <strong>
                My Website Store
            </strong>
        </h2>
        <br>
        <a href="{{'/shirts'}}"><button class="button large">My Shirts</button></a>
    </section>
    <br/>
    <div class="subheader text-center">
        <h2>
            Latest Shirts
        </h2>
    </div>

    <!-- Latest SHirts -->
    <div class="row">
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a class="button expanded add-to-cart">
                        Add to Cart
                    </a>
                    <a href="#">
                        <img src="dist\img\shirts\mc.jpg"/>
                    </a>
                </div>
                <a href="#">
                    <h3>
                       Red tshirt
                    </h3>
                </a>
                <h5>
                    $2
                </h5>
                <p>
                    Latest tshirt , which is trendy now days.
                </p>
            </div>
        </div>
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a class="button expanded add-to-cart">
                        Add to Cart
                    </a>
                    <a href="#">
                        <img src="dist\img\shirts\pic 2.png"/>
                    </a>
                </div>
                <a href="#">
                    <h3>
                        Another cool tshirt
                    </h3>
                </a>
                <h5>
                    $5
                </h5>
                <p>
                    Latest tshirt , which is trendy now days.
                </p>
            </div>
        </div>
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a class="button expanded add-to-cart">
                        Add to Cart
                    </a>
                    <a href="#">
                        <img src="dist\img\shirts\pic 5.jpeg"/>
                    </a>
                </div>
                <a href="#">
                    <h3>
                        Another cool tshirt
                    </h3>
                </a>
                <h5>
                    $10
                </h5>
                <p>
                    Latest tshirt , which is trendy now days.
                </p>
            </div>
        </div>
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a class="button expanded add-to-cart">
                        Add to Cart
                    </a>
                    <a href="#">
                        <img src="dist\img\shirts\pic 4.jpeg"/>
                    </a>
                </div>
                <a href="#">
                    <h3>
                        Another cool tshirt
                    </h3>
                </a>
                <h5>
                    $7
                </h5>
                <p>
                    Latest tshirt , which is trendy now days.
                </p>
            </div>
        </div>
    </div>

@endsection
