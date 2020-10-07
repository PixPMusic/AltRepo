<head>
    <!-- Font Awesome -->
    <link
    href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/1.0.0/mdb.min.css"
    rel="stylesheet"
    />
    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/1.0.0/mdb.min.js"
    ></script>
    <title>Pixel's AltStore Repository</title>
</head>
<body>
    <!--Main Navigation-->
    <header>
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
                <!-- Navbar brand -->
                <a class="navbar-brand" href="#">Pixel's AltStore Repo</a>
            </div>
        </nav>
        <!--/.Navbar-->

        <!--Mask-->
        <div id="intro" class="view">
            <div class="mask rgba-black-strong">
                <div class="container-fluid d-flex align-items-center justify-content-center h-100">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-md-10">

                            <!-- Heading -->
                            <h2 class="display-4 font-weight-bold white-text pt-5 mb-2">AltStore Repo for non-Patrons</h2>

                            <!-- Divider -->
                            <hr class="hr-light">

                            <!-- Description -->
                            <h4 class="white-text my-4">Open source, even.</h4>
                            <button type="button" class="btn btn-outline-white" onclick="window.location.href='https://github.com/PixPMusic/AltRepo'">Github<i class="fa fa-book ml-2"></i></button>
                            <button type="button" class="btn btn-outline-white" onclick="window.location.href='altstore://repo?url=https://repo.pixp.cc/repo.json'">Add to AltStore<i class="fa fa-book ml-2"></i></button>

                            <!-- Divider -->
                            <hr class="hr-light">
                            <p>This is a Proof-of-concept repository with the ability to merge several dynamic sources.</p>
                            <p>It can act as a bridge between places like Github, or it can process other AltStore repositories, removing duplicates and ensuring the most valid source is used where possible</p>
                            <p>It is designed to offer the fastest updates from the fastest source available within the backend repository subset.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.Mask-->
    </header>
</body>

