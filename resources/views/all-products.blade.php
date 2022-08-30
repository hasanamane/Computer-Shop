<x-layout>

<div class="card-group" style="margin:20px 40px; ">
    @foreach($products as $product)
             <div class="card-as" style="max-width: 150px; margin-left: auto;margin-right: auto;" >
                 <a href="{{route('category',$product->id)}}"><img src="/images/1.jpeg" class="card-img-top" alt="..."></a>

                <div class="card-body" style="background-color: #cbd5e0; ">
                    <p class="card-text">Name is : <span style="color: red;">{{$product->NameProduct}}</span> </p>
                    <p class="card-text">Type is : {{$product->TypeProduct}}</p>
                </div>
            <div class="card-footer" style="background-color: #333; color:white;">
                <small class="text-muted">Last updated {{$product->created_at}}</small>
            </div>

        </div>

    @endforeach
</div>

</x-layout>
