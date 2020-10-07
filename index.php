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
<body style="background-color: #009688">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" style="-webkit-box-shadow: none!important; box-shadow: none!important">
            <div class="container">
                <a class="navbar-brand" href="#">Pixel's AltStore Repo</a>
                <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link" onclick="window.alert('PixelPerfect#0001');"><i class="fab fa-discord"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://twitter.com/realpixp"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://reddit.com/u/ajbiz11"><i class="fab fa-reddit"></i></a>
                </li>
            </ul>
            </div>
        </nav>
        

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
                            <button type="button" class="btn btn-outline-white" onclick="window.location.href='altstore://source?url=https://repo.pixp.cc/repo.json'">Add to AltStore<i class="fa fa-book ml-2"></i></button>
                            <br /><br />
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

