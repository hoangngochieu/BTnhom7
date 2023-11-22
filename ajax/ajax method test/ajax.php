<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<div>
    <a href="#" id="load-du-lieu">Load dữ liệu</a>
</div>
<div id="noidung">
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#load-du-lieu').click(function (e) {
            e.preventDefault();
            $.ajax({
                url: 'vidu2.php',
                type: 'POST',
                dataType: 'html',
                data: {
                    noidung1: "data 1 nhé",
                    noidung2: "data 2 nhé"
                }
            }).done(function (ketqua) {
                $('#noidung').html(ketqua);

            });
        });
    });
</script>