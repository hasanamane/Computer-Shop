

<head>

    <title>Create New Product</title>

</head>
<x-layout>
<body>

<div class="create-pro">
    <div class="pragraph">
    <p>Create New Product</p>
    <div class="form-co">
        <form action="{{route('createPro')}}" method="post">
            @csrf
            <br> <label for="name" style="color: white;">Type Product :</label><br>
            <input type="text"  name="TypeProduct"><br><br>
            <label for="name" style="color: white;">Name Product :</label><br>
            <input type="text"  name="NameProduct" ><br><br>

            <button type="submit" class="btn-primary">Send Data</button>
            <a href="{{route('allproduct')}}" class="btn-primary" style="padding-right: 19px;padding-left: 19px; text-decoration: none; float: right">Back</a>
        </form>
    </div>
    </div>
</div>


</body>

</x-layout>
