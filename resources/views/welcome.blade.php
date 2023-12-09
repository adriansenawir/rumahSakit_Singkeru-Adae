<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Website</title>
    <!-- Tambahkan link CSS Bootstrap di sini -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"> -->
    <style>
        body {
            background-size: cover;
            margin: 0; /* Menghapus margin bawaan body */
            padding: 0; /* Menghapus padding bawaan body */
        }

        .overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            z-index: 1;
        }

        .overlay img {
            width: 150px; /* Atur lebar gambar sesuai kebutuhan */
            height: auto;
            margin-bottom: 20px; /* Jarak antara gambar dan teks */
        }
        .btn1 {
        background-color: #003F92;
        padding: 14px 40px;
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 2px;
        cursor: pointer;
        border-radius: 10px;
        border: 2px dashed #003F92;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
        transition: .4s;
        }

        .btn1 span:last-child {
        display: none;
        }

        .btn1:hover {
        transition: .4s;
        border: 2px dashed #003F92;
        background-color: #fff;
        color: #003F92;
        }

        .btn1:active {
        background-color: #87dbd0;
        }
    </style>
</head>
<body class="bg-light">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"> <!-- Tambahkan attribute data-bs-ride untuk memberi tahu Bootstrap untuk mengaktifkan fitur otomatis mengganti slide -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <!-- Gunakan gambar dari direktori yang benar -->
                <img src="images/1.jpg" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <!-- Gunakan gambar dari direktori yang benar -->
                <img src="images/2.jpg" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <!-- Gunakan gambar dari direktori yang benar -->
                <img src="images/3.jpg" class="d-block w-100" alt="Slide 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>  

    <div class="overlay">
        <img src="images/Logo.png" alt="Logo">
        <h1 class="display-4 font-weight-bold mb-4">SINGKERU' ADAE</h1>
        <p class="lead mb-4">ASSEDDIKI TO PADA SALAMA'</p>
        <!-- <button href="{{ route('login') }}" class="btn1"> MASUK</button> -->
        <a href="{{ route('login') }}" class="btn1 btn btn-primary">MASUK</a>
    </div>

    <!-- Hapus script Bootstrap yang tidak diperlukan -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
