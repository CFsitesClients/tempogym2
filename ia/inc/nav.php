</head>
<body>
    <!-- <h1>Tempogym : club de gymnastique à Jette </h1>-->
    <header>
        <figure>
            <img id="responsive_banner" src="../img/banner_bno.png" alt="Admin | Tempogym jette" title="Admin | Tempogym jette">
            <img id="responsive_logo" src="../img/logo_blue.png" alt="Admin | Tempogym Jette" title="Admin | Tempogym Jette">	
        </figure>
        <nav>
            <ul>
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="../club.php">Le club</a></li>
                <li><a href="../dates.php">Dates</a></li>

                <li><a href="../galerie.php">Galerie</a></li>
                <li><a href="../contact.php">Contact</a></li>
                <li><a href="../docs.php">Documents</a></li>
                <li><a class="connexion" href="deconnect.php">Se déconnecter</a></li>
            </ul>
            <!-- Option menu small device ::: Responsiveness -->
            <select onchange="top.location.href = this.options[this.selectedIndex].value;">
                <option class="selected" value="" selected="selected">Aller sur la page</option>
                <option value="../index.php">Accueil</option>
                <option value="../club.php">Le club</option>
                <option value="../dates.php">Dates</option>
                <option value="../galerie.php">Galerie</option>
                <option value="../contact.php">Contact</option>
                <option value="../docs.php">Documents</option>
                <option value="deconnect.php">Se déconnecter</option>
            </select>
        </nav>
    </header>    