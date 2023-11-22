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
            $.post('vidu2.php', [
                noidung1: "Chào mọi người",
                noidung2: "Mọi người chào mình nhé"
        ], function (ketqua, status) {
                $('#noidung').html(ketqua);
                alert("nStatus: " + status);
            });
        });
    });
    
</script>
