<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield("title")</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">B5026221083</a>

  <!-- Links -->
  <ul class="navbar-nav">

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Tugas
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href=/pegawai>Pegawai</a>
        <a class="dropdown-item" href=/keranjangindex>Keranjang Belanja</a>
        <a class="dropdown-item" href=/nilaikuliah>Nilai Kuliah</a>
        <a class="dropdown-item" href=/tasindex>Tas Pra EAS</a>
        <a class="dropdown-item" href=/chatindex>Chat</a>
      </div>
    </li>
  </ul>
</nav>
<br>

<div class="container">
  @yield("konten")
</div>

@include("Master/footer")

</body>
</html>
