<!-- HEAD -->

<head>
    <link href="/styles/navbar.css" rel="stylesheet" type="text/css" />
</head>

<!-- CONTAINER -->
<nav class="navbar">
    <div class="top-nav">
        <div class="container">
            <!-- CONTENT -->
            <div class="top-navigation">
                <div class="my-banner pa-2">
                    <div class="flex-row no-gutters align-center">
                        <div class="col-3">
                           <a href="/">
                               <img src="https://i.imgur.com/lZcL1h8.png" alt="banner">
                            </a> 
                        </div>
                        
                        <div class="flex-spacer flex-grow"></div>

                        <div class="flex-shrink">
                            <div class="flex-row">
                                <div class="flex-shrink">
                                    <i class="material-icons md-52 mr-2">
                                        verified_user
                                    </i>
                                </div>
                                <div class="flex-grow space-nowrap">
                                    1 Monat<br>Erfahrung
                                </div>
                            </div>
                        </div>

                        <div class="flex-shrink mx-4">
                            <div class="flex-row">
                                <div class="flex-shrink">
                                    <i class="material-icons md-52 mr-2">
                                    devices
                                    </i>
                                </div>
                                <div class="flex-grow space-nowrap">
                                    LOW-END<br>Hardware
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex-shrink">
                            <div class="flex-row">
                                <div class="flex-shrink">
                                    <i class="material-icons md-52 mr-2">
                                        local_shipping
                                    </i>
                                </div>
                                <div class="flex-grow space-nowrap">
                                    KEIN <br> Versand!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="cat-buttons flex-row">
            <a href="/views/products.php?<?= http_build_query(array("type" => "cpu")) ?>" class="btn btn-outlined btn-flat py-4 pl-3 flex-grow ">
                Prozessoren
            </a>
            <a href="/views/products.php?<?= http_build_query(array("type" => "gpu")) ?>" class="btn btn-outlined btn-flat py-4 pl-3 flex-grow">
                Grafikkarten
            </a>
            <a href="/views/products.php?<?= http_build_query(array("type" => "ram")) ?>" class="btn btn-outlined btn-flat py-4 pl-3 flex-grow">
                Arbeitsspeicher
            </a>
            <a href="/views/products.php?<?= http_build_query(array("type" => "case")) ?>" class="btn btn-outlined btn-flat py-4 pl-3 flex-grow">
                Gehäuse
            </a>
            <a href="/views/products.php?<?= http_build_query(array("type" => "psu")) ?>" class="btn btn-outlined btn-flat py-4 pl-3 flex-grow">
                Netzteile
            </a>

            <a href="/views/products.php?<?= http_build_query(array("type" => "monitor")) ?>" class="btn btn-outlined btn-flat py-4 pl-3 flex-grow">
                Monitore
            </a>
            <a href="/views/products.php?<?= http_build_query(array("type" => "storagedevice")) ?>" class="btn btn-outlined btn-flat py-4 pl-3 flex-grow">
                Festplatten
            </a>
            <a href="/views/products.php?<?= http_build_query(array("type" => "motherboard")) ?>" class="btn btn-outlined btn-flat py-4 pl-3 flex-grow mainboards">
                Mainboards
            </a>
            <a href="/views/products.php?<?= http_build_query(array("type" => "cooling")) ?>" class="btn btn-outlined btn-flat py-4 pl-3 flex-grow cooling">
                Kühlung
            </a>
            
            <div class="btn btn-outlined btn-flat py-4 pl-3 flex-grow dropdown text-center">
                Mehr
                <div class="dropdown-content">
                    <div class="flex-column no-gutters">
                        <a href="/views/products.php?<?= http_build_query(array("type" => "motherboard")) ?>" class="btn btn-outlined btn-flat py-4 pl-3 flex-grow mainboards-sm">
                            Mainboards
                        </a>
                        <a href="/views/products.php?<?= http_build_query(array("type" => "cooling")) ?>" class="btn btn-outlined btn-flat py-4 pl-3 flex-grow cooling-sm">
                            Kühlung
                        </a>
                        <a href="/views/products.php?<?= http_build_query(array("type" => "mouse")) ?>" class="btn btn-outlined btn-flat py-4 pl-3 w-100">
                            Mäuse
                        </a>
                        <a href="/views/products.php?<?= http_build_query(array("type" => "keyboard")) ?>" class="btn btn-outlined btn-flat py-4 pl-3 w-100">
                            Tastaturen
                        </a>
                        <a href="/views/products.php?<?= http_build_query(array("type" => "operatingsystem")) ?>" class="btn btn-outlined btn-flat py-4 pl-3 w-100">
                            Betriebsysteme
                        </a>

                        <div class="btn btn-outlined btn-flat py-4 pl-3 flex-grow dropdown2 text-center">
                            <code class="text-accent">
                                DEBUG
                            </code>
                            <div class="dropdown-content2">
                                <div class="flex-column no-gutters">
                                    <a href="/views/showcase.php" class="btn btn-outlined btn-flat py-4 pl-3 w-100">
                                        <code class="text-info">
                                            Showcase
                                        </code>
                                    </a>
                                    
                                    <a href="asdasdsda.php" class="btn btn-outlined btn-flat py-4 pl-3 w-100">
                                        <code class="text-error">
                                            404 Error Page
                                        </code>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container dynamic-search-container">
        <div class="dynamic-search w-100">
            <div class="flex-row dynamic-search-input-container">
                <div class="flex-grow pr-0">
                    <input onclick="showOverlay()" onfocus="showOverlay()" id="dynamic-search-input" type="search" class="input flex-grow w-100" placeholder="Artikel suchen...">
                </div>
                <div class="flex-shrink">
                    <button onclick="fetchDynamicSearch()" class="dynamic-search-searchbtn btn btn-flat">
                        <i class="dynamic-search-searchbtn-icon material-icons md-24">
                        search
                        </i>
                    </button>
                </div>
            </div>

            <section id="dynamic-search-content" class="white"></section>
        </div>
    </div>

    <div class="dynamic-search-overlay hidden"></div>
</nav>

<script>
    "use strict";
    
    function overlayHidden() {
        return document.querySelector('.dynamic-search-overlay').classList.contains('hidden')
    }
    function showOverlay() {
        setTimeout(() => {
            document.querySelector('.dynamic-search-overlay').classList.remove('hidden');
            document.querySelector('.dynamic-search-container').style.height = document.querySelector('.dynamic-search-input-container').clientHeight + 'px';
            document.querySelector('.dynamic-search').classList.add('lifted');
            document.querySelector('html').style.overflow = 'hidden';
        }, 100);
    }
    function hideOverlay() {
        document.querySelector('.dynamic-search-overlay').classList.add('hidden');
        document.querySelector('.dynamic-search').classList.remove('lifted');
        document.querySelector('.dynamic-search-container').style.height -= document.querySelector('.dynamic-search-input-container').clientHeight;
        document.querySelector('html').style.overflow = 'auto';
    }

    document.querySelector('.dynamic-search-overlay')
    .addEventListener("click", (ev) => {
        // dont hide when clicking input, searchbtn or icon in searchbtn
        /*if (!overlayHidden() && (ev.path[0].id != 'dynamic-search-input') && !ev.path[0].classList.contains('dynamic-search-searchbtn') && !ev.path[0].classList.contains('dynamic-search-searchbtn-icon'))
            hideOverlay();
        if (ev.path[0].classList.contains('dynamic-search-searchbtn'))
            fetchDynamicSearch();*/
        if (!overlayHidden())
            hideOverlay();
    })

    document.getElementById("dynamic-search-input")
    .addEventListener("keyup", (ev) => {
        if (ev.key != ' ')
            fetchDynamicSearch();
    })

    function searchInputValue(params) {
        let val = document.getElementById('dynamic-search-input').value
        val = val.slice(0, 50); // max length of 50
        return val.trim();
    }

    function validInput() {
        return searchInputValue() != '' && searchInputValue() != null
    }

    async function fetchDynamicSearch() {
        if (!validInput())
            return;

        let res = await fetch(`/api/dynamic-search.php?search=${searchInputValue()}`);
        let html = await res.text(); // get actual response

        if (res.status != 200)
            window.alert("Something went wrong while fetching your products, HTTP CODE " + res.status);

        document.getElementById('dynamic-search-content').innerHTML = html;

        // after fetch
        document.getElementById('dynamic-search-input').value = searchInputValue();
    }
</script>