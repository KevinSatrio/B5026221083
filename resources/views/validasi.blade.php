<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="myscript.js"></script>
    <title>Document</title>
    <script>
        function validateForm(){
            var nrp = document.getElementById("nrp");
            var msg = document.getElementById("msg");
            //nrp kosong
            if(nrp.value == ""){
                nrp.focus(); //tergantung UX designer
                alert("NRP harus diisi");
                nrp.placeholder = "isi";
                return false;
            }
             //memasukkan abjad
             if(isNaN(nrp.value) == true){
                nrp.focus;
                nrp.placeholder = "isi";
                msg.innerHTML = "NRP tidak boleh ada huruf";
                return false;
            }
            //harus 10 digit
            if(nrp.value.length != 10){
                nrp.focus;
                nrp.placeholder = "isi";
                msg.innerHTML = "NRP harus terdiri dari 10 digit, anda memasukan "+ nrp.value.length +" digit";
                return false;
            }

        }
    </script>

    </head>

    <body>
        <div class="container">
            <div class="jumbotron">Form validasi adalah mencegah pengiriman data ke server jika ada yang invalid/tidak sesuai constraint database</div>

            <script>
                function validate(){
                    console.log("baris 18");
                    return false;
                    console.log("baris 20");
                    return true;
                    console.log("baris 22");
                    return false;
                }
            </script>

            <form action="https://google.com" method="get" onsubmit="return validateForm();">
                <div class="form-group">
                    <label for="nrp">NRP: </label>
                    <input type="text" class="form-control" id="nrp">
                    <div id="msg" class="text-danger"></div>
                </div>
                <input type="submit" value="DAFTAR" class="btn btn-primary">
                <input type="reset" value="ULANG" class="btn btn-warning">

            </form>
        </div>

    </body>
</html>
