
<script>
    function supprime(NOM, ID) {
        var a = confirm("Voulez-vous vraiment supprimer " + NOM);
        if (a) {
            document.location.href = "?lid=" + ID;
        } else {
            return false;
        }
    }
</script>
