<?php

//Connection for the DB
// require  $_SERVER['DOCUMENT_ROOT'] . '\functions\database.php';
// getDB();
//require  $_SERVER['DOCUMENT_ROOT'] . '/functions/registerValidation.php';
?>

<!DOCTYPE html>
<html>

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php'; ?>
    <!-- HEAD -->
    <link href="/styles/create_account.css" rel="stylesheet" type="text/css" />
</head>

<body>
<noscript class="mt-12 ml-12 pt-12">
    Ihr Browser unterstützt kein Javascript oder legen Sie die Berechtigung dafür fest.
Die Seite ist nur eingeschränkt nutzbar.
  </noscript>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/header.php';

    ?>
    <!--Form to create an account-->
    <!-- CONTAINER -->
    <div class="container">
        <div class="mx-auto">
            <form id="RegisterForm" class="signup-form" method="post">
                <div class="form-header">
                    <h1>Kundenkonto erstellen</h1>
                </div>
                <div class="form-body">
                    <div class="registration-row">
                        <div class="input-group">
                            <label>Anrede</label>
                            <div class="registration-radio">
                                <div>
                                    <label for="male">
                                        <input type="radio" name="gender" id="male" value="Herr" required>
                                        Herr
                                    </label>
                                </div>
                                <div>
                                    <label for="female">
                                        <input type="radio" name="gender" id="female" value="Frau">
                                        Frau
                                    </label>
                                </div>
                                <div>
                                    <label for="other">
                                        <input type="radio" name="gender" id="other" value="Divers">
                                        Divers
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="registration-row">
                        <div class="input-group">
                            <div id="gender_error"></div>
                        </div>
                    </div>
                    <div class="registration-row">
                        <div class="input-group">
                            <label>Vorname</label>
                            <input id="firstname" type="text" size="40" maxlength="250" name="firstname" required>
                        </div>
                        <div class="input-group">
                            <label>Nachname</label>
                            <input id="lastname" type="text" size="40" maxlength="250" name="lastname" required>
                        </div>
                    </div>
                    <div class="registration-row">
                        <div class="input-group">
                            <div id="firstname_error"></div>
                        </div>
                        <div class="input-group">
                            <div id="lastname_error"></div>
                        </div>
                    </div>
                    <div class="registration-row">
                        <div class="input-group">
                            <label>Geburtsdatum</label>
                            <input id="birthday" type="date" size="40" maxlength="250" name="birthday" required>
                        </div>
                    </div>
                    <div class="registration-row">
                        <div class="input-group">
                            <div id="birthday_error"></div>
                        </div>
                    </div>
                    <div class="registration-row">
                        <div class="input-group">
                            <label>E-Mail-Adresse</label>
                            <input id="email" type="email" size="40" maxlength="250" name="email" required>
                        </div>
                    </div>
                    <div class="registration-row">
                        <div class="input-group">
                            <div id="email_error"></div>
                        </div>
                    </div>
                    <div class="registration-row">
                        <div class="input-group">
                            <label>Passwort</label>
                            <input id="password" onkeyup="checkPass()" type="password" size="40" maxlength="250" name="password" required>
                        </div>
                        <div class="input-group">
                            <label>Passwort wiederholen</label>
                            <input id="password2" onkeyup="checkPass()" type="password" size="40" maxlength="250" name="password2" required>
                        </div>
                    </div>
                    <div class="registration-row">
                        <div class="input-group">
                            <div id="password_error"></div>
                        </div>
                    </div>
                    <div class="registration-row">
                        <div class="input-group">
                            <label>Land</label>
                            <select id="country" name="country">
                                <option value="Afganistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bonaire">Bonaire</option>
                                <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Canary Islands">Canary Islands</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Channel Islands">Channel Islands</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos Island">Cocos Island</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote DIvoire">Cote DIvoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Curaco">Curacao</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands">Falkland Islands</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Ter">French Southern Ter</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Great Britain">Great Britain</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Hawaii">Hawaii</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="India">India</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea North">Korea North</option>
                                <option value="Korea Sout">Korea South</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Laos">Laos</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macau">Macau</option>
                                <option value="Macedonia">Macedonia</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Midway Islands">Midway Islands</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Nambia">Nambia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherland Antilles">Netherland Antilles</option>
                                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                <option value="Nevis">Nevis</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau Island">Palau Island</option>
                                <option value="Palestine">Palestine</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Phillipines">Philippines</option>
                                <option value="Pitcairn Island">Pitcairn Island</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Republic of Montenegro">Republic of Montenegro</option>
                                <option value="Republic of Serbia">Republic of Serbia</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russia</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="St Barthelemy">St Barthelemy</option>
                                <option value="St Eustatius">St Eustatius</option>
                                <option value="St Helena">St Helena</option>
                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                <option value="St Lucia">St Lucia</option>
                                <option value="St Maarten">St Maarten</option>
                                <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                <option value="Saipan">Saipan</option>
                                <option value="Samoa">Samoa</option>
                                <option value="Samoa American">Samoa American</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="Tahiti">Tahiti</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Erimates">United Arab Emirates</option>
                                <option value="United States of America">United States of America</option>
                                <option value="Uraguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Vatican City State">Vatican City State</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                <option value="Wake Island">Wake Island</option>
                                <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zaire">Zaire</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                    </div>
                    <div class="registration-row">
                        <div class="input-group">
                            <div id="country_error"></div>
                        </div>
                    </div>
                    <div class="registration-row">
                        <div class="input-group">
                            <label>PLZ</label>
                            <input id="zip" type="text" size="40" maxlength="250" name="zip" required>
                        </div>
                        <div class="input-group">
                            <label>Stadt</label>
                            <input id="city" type="text" size="40" maxlength="250" name="city" required>
                        </div>
                    </div>
                    <div class="registration-row">
                        <div class="input-group">
                            <div id="zip_error"></div>
                        </div>
                        <div class="input-group">
                            <div id="city_error"></div>
                        </div>
                    </div>
                    <div class="registration-row">
                        <div class="input-group">
                            <label>Straße</label>
                            <input id="street" type="text" size="40" maxlength="250" name="street" required>
                        </div>
                        <div class="input-group">
                            <label>Hausnummer</label>
                            <input id="houseNumber" type="text" size="40" maxlength="250" name="houseNumber" required>
                        </div>
                    </div>
                    <div class="registration-row">
                        <div class="input-group">
                            <div id="street_error"></div>
                        </div>
                        <div class="input-group">
                            <div id="houseNumber_error">
                            </div>
                        </div>
                    </div>
                    <div class="registration-row">
                        <div class="input-group">
                            <button id="form-input" class="btn" type="submit" value="Jetzt erstellen!">Jetzt erstellen!</button>
                            <div class="info" id="success"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        "use strict";
        document
            .getElementById("RegisterForm")
            .addEventListener("submit", fetchRegistrationForm);

        //Fetch function so the form dosent have to load new
        async function fetchRegistrationForm(e) {
            e.preventDefault();

            const formData = new FormData(e.target);
            const formProps = Object.fromEntries(formData);
            //console.log("formProps: ", formProps);

            fetch("http://localhost/functions/registerValidation.php", {
                    method: "POST", // *GET, POST, PUT, DELETE, etc.
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded", // application/x-www-form-urlencoded
                    },
                    body: new URLSearchParams(formProps), // body data type must match "Content-Type" header
                })
                .then((result) => result.text())
                .then((html) => {

                    let response = JSON.parse(html);

                    if (response.success == "success") {

                        window.location.href = 'http://localhost/views/login.php';
                    } else {
                        document.getElementById("gender_error").innerHTML = response.gender_error;
                        document.getElementById("firstname_error").innerHTML = response.firstname_error;
                        document.getElementById("lastname_error").innerHTML = response.lastname_error;
                        document.getElementById("birthday_error").innerHTML = response.birthday_error;
                        document.getElementById("email_error").innerHTML = response.email_error;
                        document.getElementById("password_error").innerHTML = response.password_error;
                        document.getElementById("country_error").innerHTML = response.country_error;
                        document.getElementById("zip_error").innerHTML = response.zip_error;
                        document.getElementById("city_error").innerHTML = response.city_error;
                        document.getElementById("street_error").innerHTML = response.street_error;
                        document.getElementById("houseNumber_error").innerHTML = response.houseNumber_error;
                    }
                })
                .catch((err) => {
                    console.log(err);
                });
        }



        document.getElementById('RegisterForm').addEventListener(
            "submit",
            function(event) {
                if (checkPass() === false) {
                    event.preventDefault();
                }
            },
            false
        );

        function checkPass() {
            let password = document.getElementById('password');
            let password2 = document.getElementById('password2');
            let message = document.getElementById('password_error');
            let passColor = "#ffffff";
            let failColor = "#e08799";

            if (password.value.length > 5) {
                password.style.backgroundColor = passColor;
                message.style.color = passColor;
                message.innerHTML = ""
            } else {
                password.style.backgroundColor = failColor;
                message.style.color = failColor;
                message.innerHTML = "Das Passwort muss mindestens 6 Zeichen lang sein."
                return false;
            }

            if (password.value == password2.value) {
                password2.style.backgroundColor = passColor;
                message.style.color = passColor;
                message.innerHTML = ""
            } else {
                password2.style.backgroundColor = failColor;
                message.style.color = failColor;
                message.innerHTML = "Die Passwörter stimmen nicht überein."
                return false;
            }
            return true;
        }



        const submitBtn = document.getElementById('form-input');
        const firstname = document.getElementById("firstname");
        const lastname = document.getElementById("lastname");
        const birthday = document.getElementById("birthday");
        const email = document.getElementById("email");
        const password = document.getElementById("password");
        const password2 = document.getElementById("password2");
        const country = document.getElementById("country");
        const zip = document.getElementById("zip");
        const city = document.getElementById("city");
        const street = document.getElementById("street");
        const houseNumber = document.getElementById("houseNumber");

        function updateSubmitBtn() {

            const firstnameValue = firstname.value.trim();
            const lastnameValue = lastname.value.trim();
            const birthdayValue = birthday.value.trim();
            const emailValue = email.value.trim();
            const passwordValue = password.value.trim();
            const password2Value = password2.value.trim();
            const countryValue = country.value.trim();
            const zipValue = zip.value.trim();
            const cityValue = city.value.trim();
            const streetValue = street.value.trim();
            const houseNumberValue = houseNumber.value.trim();
            console.log('firstname: ', firstname)
            if (!((firstnameValue &&
                    lastnameValue &&
                    birthdayValue &&
                    emailValue &&
                    passwordValue &&
                    password2Value &&
                    countryValue &&
                    zipValue &&
                    cityValue &&
                    streetValue &&
                    houseNumberValue) == "")) {
                submitBtn.removeAttribute('disabled');
                submitBtn.style.background = "#005a99";
            } else {
                submitBtn.setAttribute('disabled', 'disabled');
                submitBtn.style.background = "#808080";
            }
        }

        firstname.addEventListener('keyup', updateSubmitBtn);
        lastname.addEventListener('keyup', updateSubmitBtn);
        birthday.addEventListener('keyup', updateSubmitBtn);
        email.addEventListener('keyup', updateSubmitBtn);
        password.addEventListener('keyup', updateSubmitBtn);
        password2.addEventListener('keyup', updateSubmitBtn);
        country.addEventListener('keyup', updateSubmitBtn);
        zip.addEventListener('keyup', updateSubmitBtn);
        city.addEventListener('keyup', updateSubmitBtn);
        street.addEventListener('keyup', updateSubmitBtn);
        houseNumber.addEventListener('keyup', updateSubmitBtn);
    </script>
    <noscript>
        <?php
        //session_start();
        $success = '';
            $gender_error  = '';
            $firstname_error  = '';
            $lastname_error  = '';
            $birthday_error  = '';
            $email_error  = '';
            $password_error  = '';
            $password2_error  = '';
            $country_error  = '';
            $street_error  = '';
            $zip_error  = '';
            $houseNumber_error  = '';
            $city_error  = '';
            
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $respose = array();
            $error = '';
            $gender = '';
            $firstname = '';
            $lastname =    '';
            $birthday = '';
            $email = '';
            $password = '';
            $password2 = '';
            $country = '';
            $street = '';
            $zip = '';
            $houseNumber = '';
            $city = '';

            $success = '';
            $gender_error  = '';
            $firstname_error  = '';
            $lastname_error  = '';
            $birthday_error  = '';
            $email_error  = '';
            $password_error  = '';
            $password2_error  = '';
            $country_error  = '';
            $street_error  = '';
            $zip_error  = '';
            $houseNumber_error  = '';
            $city_error  = '';

            $error = false;
            $gender = $_POST['gender'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $birthday = $_POST['birthday'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];
            $country = $_POST['country'];
            $street = $_POST['street'];
            $zip = $_POST['zip'];
            $houseNumber = $_POST['houseNumber'];
            $city = $_POST['city'];

            if (empty($gender)) {
                $gender_error = 'Bitte geben Sie ein Geschlecht an.';
                $error = true;
            }

            if (empty($firstname)) {
                $firstname_error = 'Bitte geben Sie einen Namen ein.';
                $error = true;
            } else {
                if (!preg_match("/^[a-zA-Z-' ]*$/", $firstname)) {
                    $firstname_error = 'Ihre Eingabe unter Name enthält ungültige Zeichen.';
                    $error = true;
                }
            }

            if (empty($lastname)) {
                $lastname_error = 'Bitte geben Sie einen Namen ein.';
                $error = true;
            } else {
                if (!preg_match("/^[a-zA-Z-' ]*$/", $lastname)) {
                    $lastname_error = 'Ihre Eingabe unter Nachname enthält ungültige Zeichen.';
                    $error = true;
                }
            }

            //Age verfication (over 18 years old)
            if (time() < strtotime('+18 years', strtotime($birthday))) {
                $birthday_error = 'Sie müssen über 18 Jahre alt sein um sich Registrieren zu können.';
                $error = true;
            }

            //Check if the E-Mail and passwords are correct
            if (empty($email)) {
                $email_errorr = 'Bitte geben sie eine E-Mail-Adresse an.';
                $error = true;
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email_errorr = 'Email-Adresse ungültig.';
                $error = true;
            }
            $email = strtolower($email);
            if (strlen($password) < 5) {
                $password_error = "Ihr Passwort muss mindestens 6 Zeichen lang sein.";
            }
            if (strlen($password) == 0) {
                $password_error = 'Es muss ein Passwort angegeben werden.';
                $error = true;
            }
            if ($password != $password2) {
                $password_error = 'Die Passwörter müssen übereinstimmen.';
                $error = true;
            }
            if (empty($country)) {
                $country_errorr = 'Bitte geben sie ein Land an.';
                $error = true;
            }
            if (empty($zip)) {
                $zip_error = 'Bitte geben sie eine PLZ an.';
                $error = true;
            } else {
                if (!is_numeric($zip)) {
                    $zip_error = 'Ihre Eingabe enthält ungültige Zeichen.';
                    $error = true;
                } else {
                }
            }
            if (empty($city)) {
                $city_error = 'Bitte geben Sie eine Stadt an.';
                $error = true;
            } else {
                if (!preg_match("/^[a-zA-Z-' ]*$/", $city)) {
                    $city_error = 'Ihre Eingabe enthält ungültige Zeichen.';
                    $error = true;
                }
            }
            if (empty($street)) {
                $street_error = 'Bitte geben Sie eine Straße an.';
                $error = true;
            } else {
                if (!preg_match("/^[a-zA-Z-' ]*$/", $street)) {
                    $street_error = 'Ihre Eingabe enthält ungültige Zeichen.';
                    $error = true;
                }
            }
            if (empty($houseNumber)) {
                $houseNumber_error = 'Bitte geben Sie eine Hausnummer an.';
                $error = true;
            } else {
                if (!preg_match("/^[1-9]\d*(?:[ -]?(?:[a-zA-Z]+|[1-9]\d*))?$/", $houseNumber)) {
                    $houseNumber_error = 'Ihre Eingabe enthält ungültige Zeichen.';
                    $error = true;
                }
            }
            //Check if the Email is already taken
            if (!$error) {
                $statement = getDB()->prepare("SELECT * FROM accounts WHERE email = :email");
                $result = $statement->execute(array('email' => $email));
                $user = $statement->fetch();

                if ($user !== false) {
                    $email_error = 'Diese E-Mail-Adresse ist bereits vergeben.<br>';
                    $error = true;
                }
            }
            //Create the account
            if (!$error) {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                //Attention to the MySQL Code like '' and ``
                $statement = getDB()->prepare("INSERT INTO accounts (firstname, lastname, birthday, email, passwordHash, rank, gender) VALUES (:firstname, :lastname, :birthday, :email, :password, :rank, :gender)");
                $result = $statement->execute(array('firstname' => $firstname, 'lastname' => $lastname,  'birthday' => $birthday, 'email' => $email, 'password' => $hash, 'rank' => "user", 'gender' => $gender));
                $id = getDB()->lastInsertId(); //Get the last inserted ID to insert the address to the corresponding account.
                $statement = getDB()->prepare("INSERT INTO addresses (country, city, zip, street, houseNumber, addressID) VALUES (:country, :city, :zip, :street, :houseNumber, :addressID)");
                $result = $statement->execute(array('country' => $country, 'city' => $city,  'zip' => $zip, 'street' => $street, 'houseNumber' => $houseNumber, 'addressID' => $id));

                if ($result) {
                    echo '<meta http-equiv="refresh" content="2; URL=../index.php">';
                    die();
                }


                echo "<div class='container'><div class='mx-auto'>Die E-Mail-Adresse oder das Passwort waren ungültig! </div></div>";
                $error = true;
            }
        }

        $response = [
            'gender_error' => $gender_error,
            'firstname_error' => $firstname_error,
            'lastname_error' => $lastname_error,
            'birthday_error' => $birthday_error,
            'email_error' => $email_error,
            'password_error' => $password_error,
            'password2_error' => $password2_error,
            'country_error' => $country_error,
            'street_error' => $street_error,
            'zip_error' => $zip_error,
            'houseNumber_error' => $houseNumber_error,
            'city_error' => $city_error

        ];
        foreach ($response as $x => $val) {
            echo "<div class='container'><div class='mx-auto'><div class='errorr'>$val</div></div></div>";
        }
        ?>
    </noscript>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/navigation/footer.php' ?>
</body>

</html>