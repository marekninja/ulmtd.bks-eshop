<script>
    function handleStyle(a) {
        if (a.style.display == 'block') {
            a.style.display = 'none';
        } else {
            a.style.display = 'block';
        }
    }

    function login() {
        var b = document.getElementById('overlay');
        b.style.display = 'block';
    }

    function hideLogin() {
        var b = document.getElementById('overlay');
        b.style.display = 'none';
    }

    //handles displaying of clickable element
    function elementClick(name) {
        var a = document.getElementById(name);
        handleStyle(a);
    }
</script>
