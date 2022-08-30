<head>

    <title>Create New Product</title>

</head>
<x-layout>
    <body>

    <div class="create-pro">
        <div class="pragraph">
            <p>Create New Category</p>
            <div class="form-co">
                <form action="{{route('createCate')}}" method="post">
                    @csrf
            <label for="name" style="color: white;">ID For Name Product :</label><br>
                    <input type="text" name="product_id"><br><br>
                    <label for="name" style="color: white;">Price :</label><br>
                    <input type="text" name="Price" ><br><br>
                    <label for="name" style="color: white;">Processor :</label><br>
                    <input type="text"  name="Processor" ><br><br>
                    <label for="name" style="color: white;">RAM :</label><br>
                    <input type="text"  name="Ram" ><br><br>
                    <label for="name" style="color: white;">HARD :</label><br>
                    <input type="text" name="Hard" ><br><br>

                    <button type="submit" class="btn-primary">Send Data</button>
                    <a href="{{route('allproduct')}}" class="btn-primary" style="padding-right: 19px;padding-left: 19px; text-decoration: none; float: right">Back</a>
                </form>
            </div>
        </div>
    </div>


    </body>

</x-layout>
