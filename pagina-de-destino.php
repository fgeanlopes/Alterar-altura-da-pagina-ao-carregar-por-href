<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>

$(function() {
    if (window.location.toString().indexOf('/servicos/#executivecoaching') > 0) {

        var getId = document.querySelector("#executivecoaching");
        var alturaId = getId.offsetTop;
        var AlturaIdSoma = alturaId - 160
        window.scrollTo(0, AlturaIdSoma);

    }
});
</script>
