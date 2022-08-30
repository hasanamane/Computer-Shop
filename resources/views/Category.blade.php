<x-layout>

    <div class="card-group" style="margin:20px 40px; ">
        @foreach($products->categories as $product)
            <div class="card-as" style="max-width: 150px; margin: 5px; "  >
                <a href="#"><img src="/images/1.jpeg" class="card-img-top" alt="..."></a>

                <div class="card-body" style="background-color: #cbd5e0; font-size: 12px;padding: 2px;">
                    <p class="card-text">Name is : <span style="color: red;">{{$products->NameProduct}}</span> </p>
                    <p class="card-text">Price is : {{$product->Price}}</p>
                    <p class="card-text" style="font-size: 11px;">Processor: <span style="color: red;">{{$product->Processor}}</span> </p>
                    <p class="card-text">Hard is : {{$product->Hard}}</p>
                    <p class="card-text">Ram is : {{$product->Ram}}</p>


                </div>
                <div class="card-footer" style="background-color: #333; color:white;">
                    <small class="text-muted">Last updated {{$product->created_at}}</small>
                </div>

            </div>

        @endforeach
    </div>

</x-layout>
