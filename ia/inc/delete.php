
<script>
    function supprime(ID) {
        var a = confirm("Voulez-vous vraiment supprimer img true dont l'identifiant est " + ID);
        if (a) {
            document.location.href = "?img=true&lide=" + ID;
        } else {
            return false;
        }
    }
</script>
