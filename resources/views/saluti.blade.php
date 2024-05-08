@include('head')
</head>
<body>
    @include('navigatore')
    <div class="container d-flex justify-content-center align-items-center flex-column  mt-5 ">
        <h1 class=" text-danger ">{{ $title }}</h1>
        <p>by {{ $author }}</p>
    </div>
</body>
</html>
