<?php include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/header.php';?>

<!-- HEAD -->
<head>
    <link href="/styles/faq-help.css" rel="stylesheet" type="text/css" />
</head>

<!-- CONTAINER -->
<div class="container">
  <!-- CONTENT -->
  <div class="content faq-help">
    <div class="help">
        <h1 class="display-2 text-center">Hilfe</h1>
        <div class="flex-row justify-space-between">
            <a href="./payment.php" class="btn btn-outlined btn-secondary flex-grow mx-2">
                <i class="material-icons md-52 mr-1">
                    payment
                </i> 
                <div class="flex-grow text-center title">
                    Bezahlung
                </div> 
            </a>
            <a href="" class="btn btn-outlined btn-secondary flex-grow mx-2">
                <i class="material-icons md-52 mr-1">
                    local_shipping
                </i> 
                <div class="flex-grow text-center title">
                    Abholung & Versand
                </div>
            </a>
            <a href="" class="btn btn-outlined btn-secondary flex-grow mx-2">
                <i class="material-icons md-52 mr-1">
                    recycling
                </i> 
                <div class="flex-grow text-center title">
                    Recycling
                </div>
            </a>
        </div>
        
    </div>
    <hr>
    <div class="faq">
        <h2 class="display-2 text-center">FAQ</h2>
            <div class="faq-item">
                <input type="checkbox" id="question1" />
                <label class="faq-link" for="question1">
                    Kann ich meine Bestellung zurück schicken?
                    <i class="icon-add material-icons md-36">
                        add
                    </i>
                    <i class="icon-remove material-icons md-36">
                        remove
                    </i>
                </label>
                <div class="answer">
                   <p>
                    Da wir keine Bestellungen versenden, können sie auch keine zurück schicken!
                   </p> 
                </div>  
            </div>
            <div class="faq-item">
                <input type="checkbox" id="question2" />
                <label class="faq-link" for="question2">
                    Wie lange hält meine Garantie?
                    <i class="icon-add material-icons md-36">
                        add
                    </i>
                    <i class="icon-remove material-icons md-36">
                        remove
                    </i>
                </label>
                <div class="answer">
                   <p>
                    Unsere Produkte haben unterschiedliche Garantiezeiten, bitte wenden sie sich an einen anderen Support!
                   </p> 
                </div>  
            </div>
            <div class="faq-item">
                <input type="checkbox" id="question3" />
                <label class="faq-link" for="question3">
                    Wie viele Gehäuse benötige ich für einen Computer?
                    <i class="icon-add material-icons md-36">
                        add
                    </i>
                    <i class="icon-remove material-icons md-36">
                        remove
                    </i>
                </label>
                <div class="answer">
                   <p>
                    Unser professionelles GehäuseKönig-Team empfiehlt mindestens 2 Gehäuse pro Computer, somit sind ihre Komponenten doppelt geschützt!
                   </p> 
                </div>  
            </div>
            <div class="faq-item">
                <input type="checkbox" id="question4" />
                <label class="faq-link" for="question4">
                    Kann ich in ihrem Shop Haustiere kaufen?
                    <i class="icon-add material-icons md-36">
                        add
                    </i>
                    <i class="icon-remove material-icons md-36">
                        remove
                    </i>
                </label>
                <div class="answer">
                   <p>
                   Lebendige Artikel gibt es nicht beim GehäuseKönig, bitte wenden sie sich an das nächst gelegene Tierheim!
                   </p> 
                </div>  
            </div>
    </div>
  </div>
</div>

<script>
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/footer.php'?>