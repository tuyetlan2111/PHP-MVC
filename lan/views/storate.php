<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Localstorage</title>
</head>

<body>
    div class="list">
    <a href="giohang.html">Giỏ Hàng</a>
    </div>
    <script>

 function search_product() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var rs = JSON.parse(this.responseText);
                    var rs_str = "";

                    for (var i = 0; i < 4; i++) {
                        rs_str += '<div class="col-md-3 item">';
                        rs_str += '<img src="http://localhost:8012/Lam_web/book/image/' + rs[i].img_id + '">';
                        rs_str += '<h3><a href="#">' + rs[i].name + '</a></h3>';
                        rs_str += '<p>'+rs[i].price+'</p>';
                        rs_str += '<i class=" cart fas fa-cart-plus"></i></div>';
                    }
                    document.getElementById('best_sell').innerHTML = rs_str;
                }
            };
            xhttp.open("GET", "http://localhost:8012/lan/books?amount=4", false);
            xhttp.send();
        }





        function timSp(id) {
            for (var i = 0; i < sp.length; i++) {
                if (sp[i].id == id) {
                    return sp[i];
                }
            }
        }

        function muaHang(id) {
            var spmua = timSp(id);
            var added = false;
            for (var i = 0; i < gioHang.length; i++) {
                if (gioHang[i].id == spmua.id) {
                    gioHang[i].quantity++;
                    added = true;
                    break;
                }
            }
            if (!added) {
                spmua.quantity = 1;
                gioHang.push(spmua);
            }
            localStorage.setItem("gioHang", JSON.stringify(gioHang));
        }

        $(document).ready(function () {
            var html = "";
            for (var i = 0; i < sp.length; i++) {
                html += "<p>" + sp[i].name + " - " + sp[i].price + " <button onclick='muaHang(" + sp[i].id +
                    ")'>Buy</button>";
            }
            $('.list').prepend(html);

            /* Lấy giỏ hàng đã lưu */
            var gioHangString = localStorage.getItem("gioHang");
            if (gioHangString != undefined && gioHangString != null && gioHangString != "") {
                gioHang = JSON.parse(gioHangString);
            }
        });
    </script>

</body>

</html>