
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation2</title>
    <link rel="stylesheet" href="css/designs.css">
    <style>
		.material-symbols-outlined {
			font-variation-settings:
			'FILL' 0,
			'wght' 400,
			'GRAD' 0,
			'opsz' 48
		}

		@media screen and (max-width:calc(48rem - 1px)) {
			#btnMenu {
				display:block;
				margin:auto;
				z-index:1;
			}
			#nav0 {
				position:sticky;
				z-index:1001;
				width:100%;
			}
			#nav0 > ul {
				display:none;
				position:fixed;
				top:2rem;
				left:10%;
				max-height:calc(100vh - 2rem);
				overflow:auto;
				margin:auto;
				width:80%;
				border-radius:1rem;
				z-index:0;
				background-color:var(--col_font);
				padding:1em;
				padding-top:6rem;
				border:3px solid black;
				box-shadow:0px 0px 1rem var(--col_font);
				opacity:0;
				transition:opacity 0.5s;
			}
			#nav0 li {
				color:var(--col_hg);
				margin:0.375rem 0px;
			}
			#nav0.visible > ul {
				display:block;
				opacity:1;
			}
			#nav0 ul ul {
				display:none;
				position:relative;
				background-color:rgba(255,255,255,0.2);
			}
			#nav0 a {
				display:block;
				line-height:1;
				padding:0.75rem 0px;
				background-color:rgba(255,255,255,0);
			}
			#nav0 ul ul li {
				border-bottom:1px dotted var(--col_font);
			}
			#nav0 a > .arrow {
				display:inline-block;
				transform-origin:left center;
			}
			#nav0 a > .arrow.opened {
				transform:rotate(90deg);
			}
		}
    </style>
</head>
<body>

    <nav id="nav0">
        <button type="button" class="material-symbols-outlined" id="btnMenu">menu</button>
        <ul>
            <li><a href="./" data-nav="index.php">Home</a></li>

            <li><a href="#" data-nav="Équipes">Équipes</a>
                <ul>
                    <li><a href="mannschaft.1.php">1. Mannschaft</a></li>
                    <li><a href="mannschaft.2.php">2. Mannschaft</a></li>
                    <li><a href="mannschaft.3.php">3. Mannschaft</a></li>
                    <li><a href="mannschaft.4.php">4. Mannschaft</a></li>
                    <li><a href="mannschaft.5.php">5. Mannschaft</a></li>
                </ul>
            </li>

            <li><a href="#" data-nav="Verein">Verein</a>
                <ul>
                    <li><a href="vorstand.php">Vorstand</a></li>
                    <li><a href="adresse 2.php">Adresse / Anfahrt</a></li>
                    <li><a href="info.php">Informationen</a></li>
                    <li><a href="sponsoren.php">Sponsoren</a></li>
                </ul>       
            </li>

            <li><a href="#" data-nav="Liga">Liga</a></li>

            <li><a href="#" data-nav="Kontakt">Kontakt</a></li>

            
                <ul>
                    <li><a href="#">Design 1</a></li>
                    <li><a href="#">Design 2</a></li>
                    <li><a href="#">Design 3</a></li>
                    <li><a href="#">Design 4</a></li>
                    <li><a href="#">Design 5</a></li>
                </ul>
			</li>
        </ul>
    </nav>

</body>
</html>