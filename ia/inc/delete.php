
<script>
    function supprime(ID) {
        var a = confirm("Voulez-vous vraiment supprimer la photo  " + ID);
        if (a) {
            document.location.href = "?img=true&lide=" + ID;
        } else {
            return false;
        }
    }
</script>
