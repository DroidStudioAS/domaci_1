<!DOCTYPE html>
<html lang="en">
@extends('legend')
@section('title')
    Shop
@endsection
@section('content')

    <div class="content-container">
        <h1>
            This Is A Shop Page
        </h1>
        <div class="category-container">
           @foreach($products as $product)
                <div class="full_container">
                    <div class="column_container">
                        <img src="{{asset("/tn.png")}}">
                        <div class="product_information">
                            <div class="desc_container">
                                <p>{{$product->product_name}}</p>
                                <p>{{strlen($product->product_description)>100? substr($product->product_description,0,100)."..." : $product->product_description}}</p>
                            </div>
                            <div class="price_container">
                                {{$product->product_price}}$
                            </div>
                        </div>

                    </div>
                    <div class="action_buttons">
                        <div class="action_button">
                            <img src="{{asset("/icon_cart.png")}}">
                        </div>
                        <div class="action_button">
                            <img src="{{asset("/icon_info.png")}}">
                        </div>
                    </div>
                </div>
           @endforeach


        </div>
    </div>
@endsection
</html>
<style>
    .category-container{
        display: flex;
        flex-flow: row wrap;
        justify-content: space-evenly;
        align-items: center;
        width: 80vw;
        padding: 20px;
    }
    .full_container{
        display: flex;
        flex-flow: row nowrap;
        justify-content: flex-start;
        width: 25vw;
        height: 60vh;
        margin: 10px;
    }
    .column_container{
        width: 20vw;
        height: 60vh;
        background-color: white;
        display: flex;
        flex-flow: column nowrap;
        align-items: flex-start;
        justify-content: flex-start;
    }
    .column_container img{
        width: 20vw;
        height: 40vh;
        min-width: 20vw;
    }
    .product_information{
        display: flex;
        flex-flow:row nowrap;
        align-items: center;
        justify-content: flex-start;
        height: 20vh;
        width: 20vw;
        color: black;
    }
    .desc_container{
        padding-left: 10px;
    }
    .action_buttons {
        display: flex;
        flex-flow: column nowrap;
        justify-content: flex-start;
        align-items: start;

        width: 5vw;
        opacity: 0;

        transition: 1s ease;

        background-color: #1a202c;
    }
    .action_button{
        height: 20vh;
        width: 5vw;
        text-align: center;

        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }
    .full_container:hover .action_buttons{
        display: flex;
        opacity: 1;
    }

    @media (max-width: 850px) {
        .full_container {
            width: 70vw;
        }

        .product-category img {
            width: 70vw;
        }
    }
</style>

