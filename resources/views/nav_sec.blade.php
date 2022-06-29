
<div id="container">
    <nav>
        <ul>
            <li><a href="#">CabinetMed</a></li>
<!--*******************G. des Comptabiliteés**************************-->
            <li><a href="#">Gestion des comptabilités</a>
            <!-- First Tier Drop Down -->
            <ul>
                    <li><a href="#">G. des impayees</a>
                    <ul>
                        <li><a href="{{route('Impayee.create')}}">Ajouter</a></li>
                        <li><a href="{{route('Impayee.index')}}">Lister</a></li>
                       
                    </ul>
                    </li>
                    <li><a href="#">G. des factures</a>
                    <ul>
                        <li><a href="{{route('facture')}}">Ajouter</a></li>
                        <li><a href="{{route('listFactures')}}">Lister</a></li>
                        
                    </ul>
                    </li>
                    <li><a href="#">G. des depenses</a>
                    <ul>
                        <li><a href="{{route('depense')}}">Ajouter</a></li>
                        <li><a href="{{route('listDepenses')}}">Lister</a></li>
                        
                    </ul>
                    </li>
            </ul>
            </li>

        <!-- *************************G.des Rdvs**************************-->

        <li><a href="#">Gestion des Rdvs</a>
            <!-- First Tier Drop Down -->
            <ul>
                    <li><a href="{{route('listRDV')}}">Anciens Rdv</a>
                    <li><a href="{{route('listRDV')}}">Nouveau Rdv</a>
                    
                  
            </ul>
        </li>
        <li><a href="#">Gestion des fiches patients</a>
            <!-- First Tier Drop Down -->
            <ul>
                    <li><a href="{{route('Fiche_Patient.index')}}">Anciens Patients</a>
                    <li><a href="{{route('Fiche_Patient.index')}}">Nouveau Patient</a>
                    
                  
            </ul>
</li>
        </ul>
    </nav>
    @yield('content')
</div>

<style>/* CSS Document */

@import url(https://fonts.googleapis.com/css?family=Open+Sans);
@import url(https://fonts.googleapis.com/css?family=Bree+Serif);


h1 {
	font-size: 60px;
	text-align: center;
	color: #FFF;
}	

h3 {
	font-size: 30px;
	text-align: center;
	color: #FFF;
}

h3 a {
	color: #FFF;
}

a {
	color: #FFF;
}

h1 {
	margin-top: 0px;
	text-align:center;
	font-size:60px;
	font-family: 'Bree Serif', 'serif';
	}

#container {
	margin: 0 auto;
  margin-top:0px;
}

p {
	text-align: center;
}

nav {
  padding-left:20;
	margin: 0px 0;
	background-color: #191970;
}

nav ul {
	padding: 0 ;
  margin: 0;
	list-style: none;
	position: relative;
	}
	
nav ul li {
	display:inline-block;
	background-color: #191970;
	}

nav a {
	display:block;
	padding:0 10px;	
	color:#FFF;
	font-size:20px;
	line-height: 60px;
	text-decoration:none;
  text-align: center;
}

nav a:hover { 
	background-color:#48D1CC; 
}

/* Hide Dropdowns by Default */
nav ul ul {
	display: none;
	position: absolute; 
	top: 60px; /* the height of the main nav */
}
	
/* Display Dropdowns on Hover */
nav ul li:hover > ul {
	display:inherit;
}
	
/* Fisrt Tier Dropdown */
nav ul ul li {
	width:170px;
	float:none;
	display:list-item;
	position: relative;
}

/* Second, Third and more Tiers	*/
nav ul ul ul li {
	position: relative;
	top:-60px; 
	left:170px;
}

	
/* Change this in order to change the Dropdown symbol */

li > a:only-child:after { content: ''; }</style>