<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedbacks</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <header class="header">
        <a href="index.php" class="logo">Lance
        <span>Quiambao</span></a>

        <i class='bx bx-menu' id="menu-icons"></i>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php"> About Me</a>
            <a href="skills.php"> Skills</a>
            <a href="achivements.php"> Achivements and Certifications</a>
            <a href="faq.php">FAQ section</a>
            <a href="#" class="active"> Feedbacks</a>
        </nav>
    </header>

    <div class="containerRg">
        <div class="box form-box">

        <?php
         include("database.php");
         if(isset($_POST['submit'])){
            $lastname = $_POST['lastname'];
            $firstname = $_POST['firstname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $repeatpassword = $_POST['repeat_password'];
            $number = $_POST['number'];
            $country = $_POST['country'];
            $state = $_POST['state'];
            $city = $_POST['city'];
            $barangay = $_POST['barangay'];
            $phase = $_POST['phase'];
            $street = $_POST['street'];
            $blk = $_POST['blk'];
            $lot = $_POST['lot'];

            $verify_query = mysqli_query($conn,"SELECT Email FROM users WHERE Email='$email'");

            if(mysqli_num_rows($verify_query) !=0 ){
                echo "<div class='message'>
                          <p>This email is existed, Try another One!</p>
                      </div> <br>";
                 echo "<a href='Javascript:self.history.back()'><button class='btn'>Go Back</button>";  
            }
            else{

            mysqli_query($conn, "INSERT INTO users(Last_Name,First_Name,Email,Password,Repeat_Password,Phone_Number,Country,State,City,Barangay,Phase,Street,BLK,LOT) VALUES('$lastname','$firstname','$email','$password','$repeatpassword','$number','$country','$state','$city','$barangay','$phase','$street','$blk','$lot')") or die ("error occured");

            echo "<div class='message'>
                       <p>Registration successfully!</p>
                  </div> <br>";
            echo "<a href='login.php'><button class='btn'>Login Now</button>";
            }
         }else{
        ?>
            <header>Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="LastName">Last Name</label>
                    <input type="text" name="lastname" id="lastname" required>
                </div>

                <div class="field input">
                    <label for="FirstName">First Name</label>
                    <input type="text" name="firstname" id="firstname" required>
                </div>

                <div class="field input">
                    <label for="Email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="field input">
                    <label for="Password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div class="field input">
                    <label for="Repeat_Password">Repeat Password</label>
                    <input type="password" name="repeat_password" id="repeat_password" required>
                </div>

                <div class="field input">
                    <label for="Number"></label>
                    <input type="tel" name="number" id="number" placeholder="ex. 0123456789"required>
                </div>

                <div class="field input">
                    <label for="contact" class="form-label">Contact</label>
                    <select id="contact" class="form-select" required>
                        <option value="">phone</option>
                            <option value="93">Afghanistan  +93</option>
                            <option value="358">Aland Islands  +358</option>
                            <option value="355">Albania  +355</option>
                            <option value="213">Algeria  +213</option>
                            <option value="1684">American Samoa  +1684</option>
                            <option value="376">Andorra  +376</option>
                            <option value="244">Angola  +244</option>
                            <option value="1264">Anguilla  +1264</option>
                            <option value="672">Antarctica  +672</option>
                            <option value="1268">Antigua and Barbuda  +1268</option>
                            <option value="54">Argentina  +54</option>
                            <option value="374">Armenia  +374</option>
                            <option value="297">Aruba  +297</option>
                            <option value="61">Australia  +61</option>
                            <option value="43">Austria  +43</option>
                            <option value="994">Azerbaijan  +994</option>
                            <option value="1242">Bahamas  +1242</option>
                            <option value="973">Bahrain  +973</option>
                            <option value="880">Bangladesh  +880</option>
                            <option value="1246">Barbados  +1246</option>
                            <option value="375">Belarus  +375</option>
                            <option value="32">Belgium  +32</option>
                            <option value="501">Belize  +501</option>
                            <option value="229">Benin  +229</option>
                            <option value="1441">Bermuda  +1441</option>
                            <option value="975">Bhutan  +975</option>
                            <option value="591">Bolivia  +591</option>
                            <option value="599">Bonaire, Sint Eustatius and Saba  +599</option>
                            <option value="387">Bosnia and Herzegovina  +387</option>
                            <option value="267">Botswana  +267</option>
                            <option value="55">Bouvet Island  +55</option>
                            <option value="55">Brazil  +55</option>
                            <option value="246">British Indian Ocean Territory  +246</option>
                            <option value="673">Brunei Darussalam  +673</option>
                            <option value="359">Bulgaria  +359</option>
                            <option value="226">Burkina Faso  +226</option>
                            <option value="257">Burundi  +257</option>
                            <option value="855">Cambodia  +855</option>
                            <option value="237">Cameroon  +237</option>
                            <option value="1">Canada  +1</option>
                            <option value="238">Cape Verde  +238</option>
                            <option value="1345">Cayman Islands  +1345</option>
                            <option value="236">Central African Republic  +236</option>
                            <option value="235">Chad  +235</option>
                            <option value="56">Chile  +56</option>
                            <option value="86">China  +86</option>
                            <option value="61">Christmas Island  +61</option>
                            <option value="672">Cocos (Keeling) Islands  +672</option>
                            <option value="57">Colombia  +57</option>
                            <option value="269">Comoros  +269</option>
                            <option value="242">Congo  +242</option>
                            <option value="242">Congo, Democratic Republic of the Congo  +242</option>
                            <option value="682">Cook Islands  +682</option>
                            <option value="506">Costa Rica  +506</option>
                            <option value="225">Cote D'Ivoire  +225</option>
                            <option value="385">Croatia  +385</option>
                            <option value="53">Cuba  +53</option>
                            <option value="599">Curacao  +599</option>
                            <option value="357">Cyprus  +357</option>
                            <option value="420">Czech Republic  +420</option>
                            <option value="45">Denmark  +45</option>
                            <option value="253">Djibouti  +253</option>
                            <option value="1767">Dominica  +1767</option>
                            <option value="1809">Dominican Republic  +1809</option>
                            <option value="593">Ecuador  +593</option>
                            <option value="20">Egypt  +20</option>
                            <option value="503">El Salvador  +503</option>
                            <option value="240">Equatorial Guinea  +240</option>
                            <option value="291">Eritrea  +291</option>
                            <option value="372">Estonia  +372</option>
                            <option value="251">Ethiopia  +251</option>
                            <option value="500">Falkland Islands (Malvinas)  +500</option>
                            <option value="298">Faroe Islands  +298</option>
                            <option value="679">Fiji  +679</option>
                            <option value="358">Finland  +358</option>
                            <option value="33">France  +33</option>
                            <option value="594">French Guiana  +594</option>
                            <option value="689">French Polynesia  +689</option>
                            <option value="262">French Southern Territories  +262</option>
                            <option value="241">Gabon  +241</option>
                            <option value="220">Gambia  +220</option>
                            <option value="995">Georgia  +995</option>
                            <option value="49">Germany  +49</option>
                            <option value="233">Ghana  +233</option>
                            <option value="350">Gibraltar  +350</option>
                            <option value="30">Greece  +30</option>
                            <option value="299">Greenland  +299</option>
                            <option value="1473">Grenada  +1473</option>
                            <option value="590">Guadeloupe  +590</option>
                            <option value="1671">Guam  +1671</option>
                            <option value="502">Guatemala  +502</option>
                            <option value="44">Guernsey  +44</option>
                            <option value="224">Guinea  +224</option>
                            <option value="245">Guinea-Bissau  +245</option>
                            <option value="592">Guyana  +592</option>
                            <option value="509">Haiti  +509</option>
                            <option value="39">Holy See (Vatican City State)  +39</option>
                            <option value="504">Honduras  +504</option>
                            <option value="852">Hong Kong  +852</option>
                            <option value="36">Hungary  +36</option>
                            <option value="354">Iceland  +354</option>
                            <option value="91">India  +91</option>
                            <option value="62">Indonesia  +62</option>
                            <option value="98">Iran, Islamic Republic of  +98</option>
                            <option value="964">Iraq  +964</option>
                            <option value="353">Ireland  +353</option>
                            <option value="44">Isle of Man  +44</option>
                            <option value="972">Israel  +972</option>
                            <option value="39">Italy  +39</option>
                            <option value="1876">Jamaica  +1876</option>
                            <option value="81">Japan  +81</option>
                            <option value="44">Jersey  +44</option>
                            <option value="962">Jordan  +962</option>
                            <option value="7">Kazakhstan  +7</option>
                            <option value="254">Kenya  +254</option>
                            <option value="686">Kiribati  +686</option>
                            <option value="850">Korea, Democratic People's Republic of  +850</option>
                            <option value="82">Korea, Republic of  +82</option>
                            <option value="381">Kosovo  +381</option>
                            <option value="965">Kuwait  +965</option>
                            <option value="996">Kyrgyzstan  +996</option>
                            <option value="856">Lao People's Democratic Republic  +856</option>
                            <option value="371">Latvia  +371</option>
                            <option value="961">Lebanon  +961</option>
                            <option value="266">Lesotho  +266</option>
                            <option value="231">Liberia  +231</option>
                            <option value="218">Libyan Arab Jamahiriya  +218</option>
                            <option value="423">Liechtenstein  +423</option>
                            <option value="370">Lithuania  +370</option>
                            <option value="352">Luxembourg  +352</option>
                            <option value="853">Macao  +853</option>
                            <option value="389">Macedonia, the Former Yugoslav Republic of  +389</option>
                            <option value="261">Madagascar  +261</option>
                            <option value="265">Malawi  +265</option>
                            <option value="60">Malaysia  +60</option>
                            <option value="960">Maldives  +960</option>
                            <option value="223">Mali  +223</option>
                            <option value="356">Malta  +356</option>
                            <option value="692">Marshall Islands  +692</option>
                            <option value="596">Martinique  +596</option>
                            <option value="222">Mauritania  +222</option>
                            <option value="230">Mauritius  +230</option>
                            <option value="262">Mayotte  +262</option>
                            <option value="52">Mexico  +52</option>
                            <option value="691">Micronesia, Federated States of  +691</option>
                            <option value="373">Moldova, Republic of  +373</option>
                            <option value="377">Monaco  +377</option>
                            <option value="976">Mongolia  +976</option>
                            <option value="382">Montenegro  +382</option>
                            <option value="1664">Montserrat  +1664</option>
                            <option value="212">Morocco  +212</option>
                            <option value="258">Mozambique  +258</option>
                            <option value="95">Myanmar  +95</option>
                            <option value="264">Namibia  +264</option>
                            <option value="674">Nauru  +674</option>
                            <option value="977">Nepal  +977</option>
                            <option value="31">Netherlands  +31</option>
                            <option value="599">Netherlands Antilles  +599</option>
                            <option value="687">New Caledonia  +687</option>
                            <option value="64">New Zealand  +64</option>
                            <option value="505">Nicaragua  +505</option>
                            <option value="227">Niger  +227</option>
                            <option value="234">Nigeria  +234</option>
                            <option value="683">Niue  +683</option>
                            <option value="672">Norfolk Island  +672</option>
                            <option value="1670">Northern Mariana Islands  +1670</option>
                            <option value="47">Norway  +47</option>
                            <option value="968">Oman  +968</option>
                            <option value="92">Pakistan  +92</option>
                            <option value="680">Palau  +680</option>
                            <option value="970">Palestinian Territory, Occupied  +970</option>
                            <option value="507">Panama  +507</option>
                            <option value="675">Papua New Guinea  +675</option>
                            <option value="595">Paraguay  +595</option>
                            <option value="51">Peru  +51</option>
                            <option value="63">Philippines  +63</option>
                            <option value="64">Pitcairn  +64</option>
                            <option value="48">Poland  +48</option>
                            <option value="351">Portugal  +351</option>
                            <option value="1787">Puerto Rico  +1787</option>
                            <option value="974">Qatar  +974</option>
                            <option value="262">Reunion  +262</option>
                            <option value="40">Romania  +40</option>
                            <option value="7">Russian Federation  +7</option>
                            <option value="250">Rwanda  +250</option>
                            <option value="590">Saint Barthelemy  +590</option>
                            <option value="290">Saint Helena  +290</option>
                            <option value="1869">Saint Kitts and Nevis  +1869</option>
                            <option value="1758">Saint Lucia  +1758</option>
                            <option value="590">Saint Martin  +590</option>
                            <option value="508">Saint Pierre and Miquelon  +508</option>
                            <option value="1784">Saint Vincent and the Grenadines  +1784</option>
                            <option value="684">Samoa  +684</option>
                            <option value="378">San Marino  +378</option>
                            <option value="239">Sao Tome and Principe  +239</option>
                            <option value="966">Saudi Arabia  +966</option>
                            <option value="221">Senegal  +221</option>
                            <option value="381">Serbia  +381</option>
                            <option value="381">Serbia and Montenegro  +381</option>
                            <option value="248">Seychelles  +248</option>
                            <option value="232">Sierra Leone  +232</option>
                            <option value="65">Singapore  +65</option>
                            <option value="721">Sint Maarten  +721</option>
                            <option value="421">Slovakia  +421</option>
                            <option value="386">Slovenia  +386</option>
                            <option value="677">Solomon Islands  +677</option>
                            <option value="252">Somalia  +252</option>
                            <option value="27">South Africa  +27</option>
                            <option value="500">South Georgia and the South Sandwich Islands  +500</option>
                            <option value="211">South Sudan  +211</option>
                            <option value="34">Spain  +34</option>
                            <option value="94">Sri Lanka  +94</option>
                            <option value="249">Sudan  +249</option>
                            <option value="597">Suriname  +597</option>
                            <option value="47">Svalbard and Jan Mayen  +47</option>
                            <option value="268">Swaziland  +268</option>
                            <option value="46">Sweden  +46</option>
                            <option value="41">Switzerland  +41</option>
                            <option value="963">Syrian Arab Republic  +963</option>
                            <option value="886">Taiwan, Province of China  +886</option>
                            <option value="992">Tajikistan  +992</option>
                            <option value="255">Tanzania, United Republic of  +255</option>
                            <option value="66">Thailand  +66</option>
                            <option value="670">Timor-Leste  +670</option>
                            <option value="228">Togo  +228</option>
                            <option value="690">Tokelau  +690</option>
                            <option value="676">Tonga  +676</option>
                            <option value="1868">Trinidad and Tobago  +1868</option>
                            <option value="216">Tunisia  +216</option>
                            <option value="90">Turkey  +90</option>
                            <option value="7370">Turkmenistan  +7370</option>
                            <option value="1649">Turks and Caicos Islands  +1649</option>
                            <option value="688">Tuvalu  +688</option>
                            <option value="256">Uganda  +256</option>
                            <option value="380">Ukraine  +380</option>
                            <option value="971">United Arab Emirates  +971</option>
                            <option value="44">United Kingdom  +44</option>
                            <option value="1">United States  +1</option>
                            <option value="1">United States Minor Outlying Islands  +1</option>
                            <option value="598">Uruguay  +598</option>
                            <option value="998">Uzbekistan  +998</option>
                            <option value="678">Vanuatu  +678</option>
                            <option value="58">Venezuela  +58</option>
                            <option value="84">Viet Nam  +84</option>
                            <option value="1284">Virgin Islands, British  +1284</option>
                            <option value="1340">Virgin Islands, U.s.  +1340</option>
                            <option value="681">Wallis and Futuna  +681</option>
                            <option value="212">Western Sahara  +212</option>
                            <option value="967">Yemen  +967</option>
                            <option value="260">Zambia  +260</option>
                            <option value="263">Zimbabwe  +263</option>
                    </select>
                </div>

                <div class="field input">
                    <label for="country" class="form-label">Country</label>
                    <select id="country" class="form-select" id="country" name="country" required>
                        <option>select country</option>
                    </select>
                </div>
            
                <div class="field input">
                    <label for="state" class="form-label">State</label>
                    <select id="state" class="form-select" name="state" required>
                        <option value="">Select state</option>
                    </select>
                </div>

                <div class="field input">
                    <label for="cities" class="form-label">City/Municipality</label>
                    <select id="cities" class="form-select" name="city" required>
                        <option value="">Select City</option>
                        <option value="Abucay">Abucay</option>
                        <option value="Acli">Acli</option>
                        <option value="Agbannawag">Agbannawag</option>
                        <option value="Akle">Akle</option>
                        <option value="Aliaga">Aliaga</option>
                        <option value="Almendras">Almendras</option>
                        <option value="Alua">Alua</option>
                        <option value="Amacalan">Amacalan</option>
                        <option value="Amucao">Amucao</option>
                        <option value="Amuñgan">Amuñgan</option>
                        <option value="Anao">Anao</option>
                        <option value="Angat">Angat</option>
                        <option value="Angeles City">Angeles City</option>
                        <option value="Antipolo">Antipolo</option>
                        <option value="Apalit">Apalit</option>
                        <option value="Arayat">Arayat</option>
                        <option value="Arenas">Arenas</option>
                        <option value="Arminia">Arminia</option>
                        <option value="Babo-Pangulo">Babo-Pangulo</option>
                        <option value="Bacabac">Bacabac</option>
                        <option value="Bacolor">Bacolor</option>
                        <option value="Bacsay">Bacsay</option>
                        <option value="Bagac">Bagac</option>
                        <option value="Bagong Barrio">Bagong Barrio</option>
                        <option value="Bagong-Sikat">Bagong-Sikat</option>
                        <option value="Bahay Pare">Bahay Pare</option>
                        <option value="Bakulong">Bakulong</option>
                        <option value="Balagtas">Balagtas</option>
                        <option value="Balanga">Balanga</option>
                        <option value="Balaoang">Balaoang</option>
                        <option value="Balas">Balas</option>
                        <option value="Balasing">Balasing</option>
                        <option value="Balayang">Balayang</option>
                        <option value="Baler">Baler</option>
                        <option value="Balibago">Balibago</option>
                        <option value="Balingcanaway">Balingcanaway</option>
                        <option value="Balite">Balite</option>
                        <option value="Baliuag">Baliuag</option>
                        <option value="Baloc">Baloc</option>
                        <option value="Baloy">Baloy</option>
                        <option value="Balsic">Balsic</option>
                        <option value="Balucuc">Balucuc</option>
                        <option value="Balut">Balut</option>
                        <option value="Balutu">Balutu</option>
                        <option value="Bamban">Bamban</option>
                        <option value="Banawang">Banawang</option>
                        <option value="Bangad">Bangad</option>
                        <option value="Bani">Bani</option>
                        <option value="Baquero Norte">Baquero Norte</option>
                        <option value="Batasan Bata">Batasan Bata</option>
                        <option value="Batitang">Batitang</option>
                        <option value="Bayanan">Bayanan</option>
                        <option value="Beddeng">Beddeng</option>
                        <option value="Biay">Biay</option>
                        <option value="Bibiclat">Bibiclat</option>
                        <option value="Bicos">Bicos</option>
                        <option value="Biga">Biga</option>
                        <option value="Bilad">Bilad</option>
                        <option value="Bituñgol">Bituñgol</option>
                        <option value="Bobon Second">Bobon Second</option>
                        <option value="Bocaue">Bocaue</option>
                        <option value="Bodega">Bodega</option>
                        <option value="Bolitoc">Bolitoc</option>
                        <option value="Bongabon">Bongabon</option>
                        <option value="Botolan">Botolan</option>
                        <option value="Buenlag">Buenlag</option>
                        <option value="Buensuseso">Buensuseso</option>
                        <option value="Bulaon">Bulaon</option>
                        <option value="Bularit">Bularit</option>
                        <option value="Bulawin">Bulawin</option>
                        <option value="Bulihan">Bulihan</option>
                        <option value="Buliran">Buliran</option>
                        <option value="Buliran Segundo">Buliran Segundo</option>
                        <option value="Bulualto">Bulualto</option>
                        <option value="Bundoc">Bundoc</option>
                        <option value="Bunol">Bunol</option>
                        <option value="Burgos">Burgos</option>
                        <option value="Bustos">Bustos</option>
                        <option value="Cabanatuan City">Cabanatuan City</option>
                        <option value="Cabangan">Cabangan</option>
                        <option value="Cabayaoasan">Cabayaoasan</option>
                        <option value="Cabcaben">Cabcaben</option>
                        <option value="Cabiao">Cabiao</option>
                        <option value="Cabog">Cabog</option>
                        <option value="Cafe">Cafe</option>
                        <option value="Calaba">Calaba</option>
                        <option value="Calancuasan Norte">Calancuasan Norte</option>
                        <option value="Calangain">Calangain</option>
                        <option value="Calantas">Calantas</option>
                        <option value="Calayaan">Calayaan</option>
                        <option value="Calibungan">Calibungan</option>
                        <option value="Calibutbut">Calibutbut</option>
                        <option value="Calingcuan">Calingcuan</option>
                        <option value="Calumpang">Calumpang</option>
                        <option value="Calumpit">Calumpit</option>
                        <option value="Cama Juan">Cama Juan</option>
                        <option value="Camachile">Camachile</option>
                        <option value="Camias">Camias</option>
                        <option value="Camiling">Camiling</option>
                        <option value="Candaba">Candaba</option>
                        <option value="Candating">Candating</option>
                        <option value="Capas">Capas</option>
                        <option value="Cardona">Cardona</option>
                        <option value="Carmen">Carmen</option>
                        <option value="Carranglan">Carranglan</option>
                        <option value="Castillejos">Castillejos</option>
                        <option value="Cauayan">Cauayan</option>
                        <option value="Cavite">Cavite</option>
                        <option value="Cawayan Bugtong">Cawayan Bugtong</option>
                        <option value="Comillas">Comillas</option>
                        <option value="Communal">Communal</option>
                        <option value="Concepcion">Concepcion</option>
                        <option value="Conversion">Conversion</option>
                        <option value="Culianin">Culianin</option>
                        <option value="Culubasa">Culubasa</option>
                        <option value="Cut-cut Primero">Cut-cut Primero</option>
                        <option value="Cuyapo">Cuyapo</option>
                        <option value="Dampol">Dampol</option>
                        <option value="Del Carmen">Del Carmen</option>
                        <option value="Del Pilar">Del Pilar</option>
                        <option value="Digdig">Digdig</option>
                        <option value="Diliman Primero">Diliman Primero</option>
                        <option value="Dinalupihan">Dinalupihan</option>
                        <option value="Dingalan">Dingalan</option>
                        <option value="Dolores">Dolores</option>
                        <option value="Doña Remedios Trinidad">Doña Remedios Trinidad</option>
                        <option value="Dumarais">Dumarais</option>
                        <option value="Entablado">Entablado</option>
                        <option value="Estacion">Estacion</option>
                        <option value="Estipona">Estipona</option>
                        <option value="Estrella">Estrella</option>
                        <option value="Floridablanca">Floridablanca</option>
                        <option value="Gabaldon">Gabaldon</option>
                        <option value="Gapan">Gapan</option>
                        <option value="General Luna">General Luna</option>
                        <option value="General Mamerto Natividad">General Mamerto Natividad</option>
                        <option value="General Tinio">General Tinio</option>
                        <option value="Gerona">Gerona</option>
                        <option value="Guagua">Guagua</option>
                        <option value="Gueset">Gueset</option>
                        <option value="Guiguinto">Guiguinto</option>
                        <option value="Guimba">Guimba</option>
                        <option value="Guisguis">Guisguis</option>
                        <option value="Gutad">Gutad</option>
                        <option value="Guyong">Guyong</option>
                        <option value="Hagonoy">Hagonoy</option>
                        <option value="Hermosa">Hermosa</option>
                        <option value="Iba">Iba</option>
                        <option value="Jaen">Jaen</option>
                        <option value="La Paz">La Paz</option>
                        <option value="Lambakin">Lambakin</option>
                        <option value="Lanat">Lanat</option>
                        <option value="Laug">Laug</option>
                        <option value="Laur">Laur</option>
                        <option value="Lawang Kupang">Lawang Kupang</option>
                        <option value="Lennec">Lennec</option>
                        <option value="Licab">Licab</option>
                        <option value="Liciada">Liciada</option>
                        <option value="Ligaya">Ligaya</option>
                        <option value="Limay">Limay</option>
                        <option value="Liozon">Liozon</option>
                        <option value="Lipay">Lipay</option>
                        <option value="Llanera">Llanera</option>
                        <option value="Loma de Gato">Loma de Gato</option>
                        <option value="Lomboy">Lomboy</option>
                        <option value="Lourdes">Lourdes</option>
                        <option value="Lubao">Lubao</option>
                        <option value="Lucapon">Lucapon</option>
                        <option value="Lupao">Lupao</option>
                        <option value="Maasim">Maasim</option>
                        <option value="Mababanaba">Mababanaba</option>
                        <option value="Mabalacat City">Mabalacat City</option>
                        <option value="Mabayo">Mabayo</option>
                        <option value="Mabilang">Mabilang</option>
                        <option value="Mabilog">Mabilog</option>
                        <option value="Mabini">Mabini</option>
                        <option value="Macabebe">Macabebe</option>
                        <option value="Macapsing">Macapsing</option>
                        <option value="Macarse">Macarse</option>
                        <option value="Macatbong">Macatbong</option>
                        <option value="Magalang">Magalang</option>
                        <option value="Magliman">Magliman</option>
                        <option value="Magtangol">Magtangol</option>
                        <option value="Maguinao">Maguinao</option>
                        <option value="Malabon">Malabon</option>
                        <option value="Malacampa">Malacampa</option>
                        <option value="Maligaya">Maligaya</option>
                        <option value="Malino">Malino</option>
                        <option value="Malolos">Malolos</option>
                        <option value="Maloma">Maloma</option>
                        <option value="Maluid">Maluid</option>
                        <option value="Malusac">Malusac</option>
                        <option value="Mambog">Mambog</option>
                        <option value="Mamonit">Mamonit</option>
                        <option value="Manacsac">Manacsac</option>
                        <option value="Manatal">Manatal</option>
                        <option value="Mandili">Mandili</option>
                        <option value="Mangga">Mangga</option>
                        <option value="Manibaug Pasig">Manibaug Pasig</option>
                        <option value="Manogpi">Manogpi</option>
                        <option value="Mapalacsiao">Mapalacsiao</option>
                        <option value="Mapalad">Mapalad</option>
                        <option value="Mapaniqui">Mapaniqui</option>
                        <option value="Maquiapo">Maquiapo</option>
                        <option value="Marawa">Marawa</option>
                        <option value="Maria Aurora">Maria Aurora</option>
                        <option value="Marilao">Marilao</option>
                        <option value="Mariveles">Mariveles</option>
                        <option value="Masalipit">Masalipit</option>
                        <option value="Masantol">Masantol</option>
                        <option value="Masinloc">Masinloc</option>
                        <option value="Matayumtayum">Matayumtayum</option>
                        <option value="Maturanoc">Maturanoc</option>
                        <option value="Mayantoc">Mayantoc</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Meycauayan">Meycauayan</option>
                        <option value="Minalin">Minalin</option>
                        <option value="Moncada">Moncada</option>
                        <option value="Moriones">Moriones</option>
                        <option value="Morong">Morong</option>
                        <option value="Motrico">Motrico</option>
                        <option value="Muñoz">Muñoz</option>
                        <option value="Murcia">Murcia</option>
                        <option value="Nagpandayan">Nagpandayan</option>
                        <option value="Nambalan">Nambalan</option>
                        <option value="Nampicuan">Nampicuan</option>
                        <option value="Nancamarinan">Nancamarinan</option>
                        <option value="Nieves">Nieves</option>
                        <option value="Niugan">Niugan</option>
                        <option value="Norzagaray">Norzagaray</option>
                        <option value="Obando">Obando</option>
                        <option value="Olongapo">Olongapo</option>
                        <option value="Orani">Orani</option>
                        <option value="Orion">Orion</option>
                        <option value="Paco Roman">Paco Roman</option>
                        <option value="Padapada">Padapada</option>
                        <option value="Paitan Norte">Paitan Norte</option>
                        <option value="Palauig">Palauig</option>
                        <option value="Palayan City">Palayan City</option>
                        <option value="Palusapis">Palusapis</option>
                        <option value="Pamatawan">Pamatawan</option>
                        <option value="Panabingan">Panabingan</option>
                        <option value="Panan">Panan</option>
                        <option value="Pance">Pance</option>
                        <option value="Pandacaqui">Pandacaqui</option>
                        <option value="Pandi">Pandi</option>
                        <option value="Pando">Pando</option>
                        <option value="Paniqui">Paniqui</option>
                        <option value="Panlinlang">Panlinlang</option>
                        <option value="Pantabangan">Pantabangan</option>
                        <option value="Pantubig">Pantubig</option>
                        <option value="Paombong">Paombong</option>
                        <option value="Papaya">Papaya</option>
                        <option value="Parang">Parang</option>
                        <option value="Parista">Parista</option>
                        <option value="Pau">Pau</option>
                        <option value="Peñaranda">Peñaranda</option>
                        <option value="Pias">Pias</option>
                        <option value="Pilar">Pilar</option>
                        <option value="Piñahan">Piñahan</option>
                        <option value="Pinambaran">Pinambaran</option>
                        <option value="Pio">Pio</option>
                        <option value="Plaridel">Plaridel</option>
                        <option value="Poblacion, San Felipe">Poblacion, San Felipe</option>
                        <option value="Porac">Porac</option>
                        <option value="Porais">Porais</option>
                        <option value="Prado Siongco">Prado Siongco</option>
                        <option value="Province of Aurora">Province of Aurora</option>
                        <option value="Province of Bataan">Province of Bataan</option>
                        <option value="Province of Bulacan">Province of Bulacan</option>
                        <option value="Province of Nueva Ecija">Province of Nueva Ecija</option>
                        <option value="Province of Pampanga">Province of Pampanga</option>
                        <option value="Province of Tarlac">Province of Tarlac</option>
                        <option value="Province of Zambales">Province of Zambales</option>
                        <option value="Pulilan">Pulilan</option>
                        <option value="Pulo">Pulo</option>
                        <option value="Pulong Gubat">Pulong Gubat</option>
                        <option value="Pulong Sampalok">Pulong Sampalok</option>
                        <option value="Pulung Santol">Pulung Santol</option>
                        <option value="Pulungmasle">Pulungmasle</option>
                        <option value="Puncan">Puncan</option>
                        <option value="Pura">Pura</option>
                        <option value="Purac">Purac</option>
                        <option value="Putlod">Putlod</option>
                        <option value="Quezon">Quezon</option>
                        <option value="Rajal Norte">Rajal Norte</option>
                        <option value="Ramos">Ramos</option>
                        <option value="Rizal">Rizal</option>
                        <option value="Sabang">Sabang</option>
                        <option value="Sagana">Sagana</option>
                        <option value="Salapungan">Salapungan</option>
                        <option value="Salaza">Salaza</option>
                        <option value="Salcedo">Salcedo</option>
                        <option value="Salvacion I">Salvacion I</option>
                        <option value="Samal">Samal</option>
                        <option value="Sampaloc">Sampaloc</option>
                        <option value="San Agustin">San Agustin</option>
                        <option value="San Alejandro">San Alejandro</option>
                        <option value="San Andres">San Andres</option>
                        <option value="San Anton">San Anton</option>
                        <option value="San Antonio">San Antonio</option>
                        <option value="San Basilio">San Basilio</option>
                        <option value="San Benito">San Benito</option>
                        <option value="San Carlos">San Carlos</option>
                        <option value="San Casimiro">San Casimiro</option>
                        <option value="San Clemente">San Clemente</option>
                        <option value="San Cristobal">San Cristobal</option>
                        <option value="San Fabian">San Fabian</option>
                        <option value="San Felipe">San Felipe</option>
                        <option value="San Felipe Old">San Felipe Old</option>
                        <option value="San Fernando">San Fernando</option>
                        <option value="San Francisco">San Francisco</option>
                        <option value="San Ildefonso">San Ildefonso</option>
                        <option value="San Isidro">San Isidro</option>
                        <option value="San Jacinto">San Jacinto</option>
                        <option value="San Jose">San Jose</option>
                        <option value="San Jose del Monte">San Jose del Monte</option>
                        <option value="San Juan">San Juan</option>
                        <option value="San Juan de Mata">San Juan de Mata</option>
                        <option value="San Leonardo">San Leonardo</option>
                        <option value="San Lorenzo">San Lorenzo</option>
                        <option value="San Luis">San Luis</option>
                        <option value="San Manuel">San Manuel</option>
                        <option value="San Marcelino">San Marcelino</option>
                        <option value="San Mariano">San Mariano</option>
                        <option value="San Mateo">San Mateo</option>
                        <option value="San Miguel">San Miguel</option>
                        <option value="San Narciso">San Narciso</option>
                        <option value="San Nicolas">San Nicolas</option>
                        <option value="San Pascual">San Pascual</option>
                        <option value="San Patricio">San Patricio</option>
                        <option value="San Rafael">San Rafael</option>
                        <option value="San Ricardo">San Ricardo</option>
                        <option value="San Roque">San Roque</option>
                        <option value="San Roque Dau First">San Roque Dau First</option>
                        <option value="San Simon">San Simon</option>
                        <option value="San Vicente">San Vicente</option>
                        <option value="San Vincente">San Vincente</option>
                        <option value="Santa Ana">Santa Ana</option>
                        <option value="Santa Barbara">Santa Barbara</option>
                        <option value="Santa Cruz">Santa Cruz</option>
                        <option value="Santa Fe">Santa Fe</option>
                        <option value="Santa Ignacia">Santa Ignacia</option>
                        <option value="Santa Ines West">Santa Ines West</option>
                        <option value="Santa Juliana">Santa Juliana</option>
                        <option value="Santa Lucia">Santa Lucia</option>
                        <option value="Santa Maria">Santa Maria</option>
                        <option value="Santa Monica">Santa Monica</option>
                        <option value="Santa Rita">Santa Rita</option>
                        <option value="Santa Rosa">Santa Rosa</option>
                        <option value="Santa Teresa First">Santa Teresa First</option>
                        <option value="Santiago">Santiago</option>
                        <option value="Santo Cristo">Santo Cristo</option>
                        <option value="Santo Domingo">Santo Domingo</option>
                        <option value="Santo Niño">Santo Niño</option>
                        <option value="Santo Rosario">Santo Rosario</option>
                        <option value="Santo Tomas">Santo Tomas</option>
                        <option value="Santol">Santol</option>
                        <option value="Sapang">Sapang</option>
                        <option value="Sapang Buho">Sapang Buho</option>
                        <option value="Sapol">Sapol</option>
                        <option value="Saysain">Saysain</option>
                        <option value="Sexmoan">Sexmoan</option>
                        <option value="Sibul">Sibul</option>
                        <option value="Siclong">Siclong</option>
                        <option value="Sinait">Sinait</option>
                        <option value="Sinilian First">Sinilian First</option>
                        <option value="Soledad">Soledad</option>
                        <option value="Subic">Subic</option>
                        <option value="Suklayin">Suklayin</option>
                        <option value="Sula">Sula</option>
                        <option value="Sulucan">Sulucan</option>
                        <option value="Tabacao">Tabacao</option>
                        <option value="Tabon">Tabon</option>
                        <option value="Tabuating">Tabuating</option>
                        <option value="Tal I Mun Doc">Tal I Mun Doc</option>
                        <option value="Talaga">Talaga</option>
                        <option value="Talang">Talang</option>
                        <option value="Talavera">Talavera</option>
                        <option value="Taltal">Taltal</option>
                        <option value="Talugtug">Talugtug</option>
                        <option value="Tariji">Tariji</option>
                        <option value="Tarlac City">Tarlac City</option>
                        <option value="Tartaro">Tartaro</option>
                        <option value="Tayabo">Tayabo</option>
                        <option value="Telabastagan">Telabastagan</option>
                        <option value="Tikiw">Tikiw</option>
                        <option value="Tinang">Tinang</option>
                        <option value="Tondod">Tondod</option>
                        <option value="Uacon">Uacon</option>
                        <option value="Umiray">Umiray</option>
                        <option value="Upig">Upig</option>
                        <option value="Vargas">Vargas</option>
                        <option value="Villa Aglipay">Villa Aglipay</option>
                        <option value="Villa Isla">Villa Isla</option>
                        <option value="Vizal San Pablo">Vizal San Pablo</option>
                        <option value="Vizal Santo Niño">Vizal Santo Niño</option>
                    </select>
                </div>

                <div class="field input">
                    <label for="FirstName">Barangay</label>
                    <input type="text" name="barangay" id="barangay"required>
                </div>

                <div class="field input">
                    <label for="FirstName">Phase/Subdivision</label>
                    <input type="text" name="phase" id="phase"required>
                </div>

                <div class="field input">
                    <label for="FirstName">Street</label>
                    <input type="text" name="street" id="street"required>
                </div>

                <div class="field input">
                    <label for="FirstName">BLK</label>
                    <input type="number" name="blk" id="blk"required>
                </div>

                <div class="field input">
                    <label for="FirstName">LOT</label>
                    <input type="number" name="lot" id="lot"required>
                </div>

                <div class="field input">
                    <input type="submit" class="btn" name="submit" value="Submit" required>
                </div>
                <div class="links">
                    Already account? <a href="login.php" class="signup"> Login</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
    <script src="country-states.js"></script>
</body>