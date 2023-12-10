<html>
    <head>
        <title>Resource</title>
        <link rel="stylesheet" href="mystyle.css">
        <!-- div di seluruh halaman ini, diset seperti i block -->
        <style>
            div {
                color: greenyellow;
                font-weight: bold;
                text-align: right;
            }
            .judulhalaman{
                text-align: center;
                font-size: larger;
                color: palevioletred;

            }
        </style>

    </head>

    <body>
        <div class="judulhalaman">Selamat datang</div>
        <!-- Inline CSS, digunakan ketika ada spesifik ke 1 bagian saja-->
        <p style="
        text-decoration: line-through;
        color: rgb(11, 190, 182);
        ">halo apa kabar?</p>
        <!-- Inpage CSS, digunakan ketika ada spesifik ke 1 halaman khusus-->
        <div>Halo apa kabar?</div>
        <!-- External CSS, digunakan untuk format umum 1 website-->
        <span>Halo apa kabar?</span>
        <span class="hargafinal">Kabar baik</span>
        <p>Bagian terakhir</p>
    </body>





</html>
