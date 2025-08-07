<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Beranda - SMA Nusantara Cendekia')</title>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { primary: "#1e40af", secondary: "#059669" },
                    borderRadius: {
                        none: "0px",
                        sm: "4px",
                        DEFAULT: "8px",
                        md: "12px",
                        lg: "16px",
                        xl: "20px",
                        "2xl": "24px",
                        "3xl": "32px",
                        full: "9999px",
                        button: "8px",
                    },
                },
            },
        };
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" />
    <style>
        :where([class^="ri-"])::before { content: "\f3c2"; }
        .slider-container { position: relative; overflow: hidden; }
        .slider-track { display: flex; transition: transform 0.5s ease; }
        .slider-slide { min-width: 100%; }
        .announcement-item { border-left: 4px solid #1e40af; }
        .testimonial-card { transform: translateX(0); transition: transform 0.5s ease; }
        .gallery-item { transition: transform 0.3s ease; }
        .gallery-item:hover { transform: scale(1.05); }
    </style>
</head>
<body class="bg-gray-50">
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
    @include('partials.scripts')
</body>
</html>