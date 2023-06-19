<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Project Virtual Internship</title>
    <link rel="stylesheet" href="css/style.css">
    <img src="{{ asset('images/amico.png') }}" id="gambar" alt="">
    <img src="{{ asset('images/FiturMelimpah.png') }}" id="gambar" alt="">
    <img src="{{ asset('images/Frame 8.png') }}" id="gambar" alt="">
    <img src="{{ asset('images/Iklan.png') }}" id="gambar" alt="">
    <img src="{{ asset('images/KeamananTerjamin.png') }}" id="gambar" alt="">
    <img src="{{ asset('images/MempersingkatSeleksi.png') }}" id="gambar" alt="">
    <img src="{{ asset('images/Sarah-Tan.png')}}" id="profil-pelanggan" alt="">
    <img src="{{ asset('images/Budi-Setiawan.png')}}" id="profil-pelanggan" alt="">
    <img src="{{ asset('images/Cara-Penggunaan.png')}}" id="carapenggunaan" alt="">
    <img src="{{ asset('images/chevron.png')}}" id="carapenggunaan" alt="">
    <img src="{{ asset('images/logo-finder.png')}}" id="carapenggunaan" alt="">
    <img src="{{ asset('images/logo-finder-navbar.png')}}" id="carapenggunaan" alt="">
</head>
<body>
    <header>
        <!-- Navbar -->
            @include('part-welcome.nav')
        <!-- End of Navbar -->

    
    </header>

    <main>
        @include('part-welcome.main')
    </main>

</body>           
</html>