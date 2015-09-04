</head>
<body>
    <!-- <h1>Tempogym : club de gymnastique à Jette </h1>-->
    <header>
        <figure>
            <img id="responsive_banner" src="img/banner.jpg" alt="Tempogym jette" title="Tempogym jette">
            <img id="responsive_logo" src="img/logo.png" alt="Tempogym Jette" title="Tempogym Jette">	
        </figure>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="hist.php">Histoire<span class="none"> et philosophie</span></a></li>
                <li><a href="dates.php">Calendriers<span class="none"> et horaires</span></a></li>
                <li><a href="galerie.php">Galerie</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="docs.php">Documents</a></li>
                <li><a href="ia/admin_form.php">Administrer</a></li>
            </ul>
            <!-- Option menu small device ::: Responsiveness -->
            <select onchange="top.location.href = this.options[this.selectedIndex].value;">
                <option class="selected" value="" selected="selected">Aller sur la page</option>
                <option value="index.php">Accueil</option>
                <option value="hist.php">Histoire et philosophie</option>
                <option value="dates.php">Calendriers et horaires</option>
                <option value="galerie.php">Galerie</option>
                <option value="contact.php">Contact</option>
                <option value="docs.php">Documents</option>
                <option value="ia/admin_form.php">Administrer</option>
            </select>
        </nav>
    </header>  
