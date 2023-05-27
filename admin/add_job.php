<?php
include("connection/db.php");

include('include/header.php');
include('include/sidebar.php');

?>

<style>
    label {
        font-size: 18px;
    }
</style>
<p><a href="dashboard.php">Dashboard</a>&nbsp;/&nbsp;<a href="job.php">Job Posts</a>&nbsp;/&nbsp;<a href="#">Add Job Post</a></p>

<div class="row">
    <div class="col">
        <h1 class="page-header" style="font-size: 25px;">
            Add Job Post 
        </h1>
    </div>
</div><br><br><br>


<div class="formbold-main-wrapper">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="formbold-form-wrapper">
     
    <form action="" method="POST" name="job_form" id="job_form">
      <div class="formbold-input-flex">
        
        <div>
          <label for="firstname" class="formbold-form-label"> Enter Job Title</label>
          <input
            type="text"
            name="jobTitle"  placeholder="Enter Job Title"
            class="formbold-form-input"
          />
        </div>

        <div>
          <label for="lastname" class="formbold-form-label"> Enter Description </label>
          <textarea
            type="text"
            name="desc" id="desc"
            
            class="formbold-form-input"
        ></textarea>
        </div>
      </div>

      <div class="formbold-input-flex">
        <div>
            <label for="email" class="formbold-form-label"> Enter Country </label>
            <select name="country" id="countryId" class="formbold-form-input">
                <option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antartica">Antarctica</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
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
<option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Congo">Congo, the Democratic Republic of the</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cota D'Ivoire">Cote d'Ivoire</option>
<option value="Croatia">Croatia (Hrvatska)</option>
<option value="Cuba">Cuba</option>
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
<option value="Falkland Islands">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="France Metropolitan">France, Metropolitan</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
<option value="Holy See">Holy See (Vatican City State)</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran (Islamic Republic of)</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
<option value="Korea">Korea, Republic of</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon" selected>Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia">Micronesia, Federated States of</option>
<option value="Moldova">Moldova, Republic of</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
<option value="Saint LUCIA">Saint LUCIA</option>
<option value="Saint Vincent">Saint Vincent and the Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia (Slovak Republic)</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia">South Georgia and the South Sandwich Islands</option>
<option value="Span">Spain</option>
<option value="SriLanka">Sri Lanka</option>
<option value="St. Helena">St. Helena</option>
<option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard">Svalbard and Jan Mayen Islands</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syrian Arab Republic</option>
<option value="Taiwan">Taiwan, Province of China</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania, United Republic of</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Viet Nam</option>
<option value="Virgin Islands (British)">Virgin Islands (British)</option>
<option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
<option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Serbia">Serbia</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
            </select>
        </div>

        <div>
            <label class="formbold-form-label">Enter State</label>

            <select class="formbold-form-input" id="country-state" name="state">
                <option value="">Select state</option>
                <option value="HAO">Al Haouz Province</option>
                <option value="HOC">Al Hoceïma Province</option>
                <option value="AOU">Aousserd Province</option>
                <option value="ASZ">Assa-Zag Province</option>
                <option value="AZI">Azilal Province</option>
                <option value="BES">Ben Slimane Province</option>
                <option value="05">Béni Mellal-Khénifra</option>
                <option value="BEM">Béni-Mellal Province</option>
                <option value="BER">Berkane Province</option>
                <option value="BOD">Boujdour Province</option>
                <option value="BOM">Boulemane Province</option>
                <option value="06">Casablanca-Settat</option>
                <option value="CHE">Chefchaouen Province</option>
                <option value="CHI">Chichaoua Province</option>
                <option value="12">Dakhla-Oued Ed-Dahab</option>
                <option value="08">Drâa-Tafilalet</option>
                <option value="HAJ">El Hajeb Province</option>
                <option value="JDI">El Jadida Province</option>
                <option value="ERR">Errachidia Province</option>
                <option value="ESM">Es Semara Province</option>
                <option value="ESI">Essaouira Province</option>
                <option value="FAH">Fahs Anjra Province</option>
                <option value="03">Fès-Meknès</option>
                <option value="FIG">Figuig Province</option>
                <option value="GUE">Guelmim Province</option>
                <option value="10">Guelmim-Oued Noun</option>
                <option value="IFR">Ifrane Province</option>
                <option value="INE">Inezgane-Aït Melloul Prefecture</option>
                <option value="JRA">Jerada Province</option>
                <option value="KES">Kelaat Sraghna Province</option>
                <option value="KEN">Kénitra Province</option>
                <option value="KHE">Khémisset Province</option>
                <option value="KHN">Khénifra Province</option>
                <option value="KHO">Khouribga Province</option>
                <option value="LAA">Laâyoune Province</option>
                <option value="11">Laâyoune-Sakia El Hamra</option>
                <option value="LAR">Larache Province</option>
                <option value="07">Marrakesh-Safi</option>
                <option value="MED">Mediouna Province</option>
                <option value="MOU">Moulay Yacoub Province</option>
                <option value="NAD">Nador Province</option>
                <option value="NOU">Nouaceur Province</option>
                <option value="02">Oriental</option>
                <option value="OUA">Ouarzazate Province</option>
                <option value="OUD">Oued Ed-Dahab Province</option>
                <option value="SAF">Safi Province</option>
                <option value="SEF">Sefrou Province</option>
                <option value="SET">Settat Province</option>
                <option value="CHT">Shtouka Ait Baha Province</option>
                <option value="SIK">Sidi Kacem Province</option>
                <option value="SYB">Sidi Youssef Ben Ali</option>
                <option value="09">Souss-Massa</option>
                <option value="TNT">Tan-Tan Province</option>
                <option value="01">Tanger-Tétouan-Al Hoceïma</option>
                <option value="TAO">Taounate Province</option>
                <option value="TAI">Taourirt Province</option>
                <option value="TAR">Taroudant Province</option>
                <option value="TAT">Tata Province</option>
                <option value="TAZ">Taza Province</option>
                <option value="TET">Tétouan Province</option>
                <option value="TIZ">Tiznit Province</option>
                <option value="ZAG">Zagora Province</option>
            </select>
                    </div>
      </div>

      <div class="formbold-mb-3 formbold-input-wrapp">
        <label for="city" class="formbold-form-label"> Enter City </label>
        <select class="formbold-form-input formbold-w-45" id="city" name="city">
          <option value="Agadir">Agadir</option>
          <option value="Al Hoceima">Al Hoceima</option>
          <option value="Azilal">Azilal</option>
          <option value="Beni Mellal">Beni Mellal</option>
          <option value="Ben Slimane">Ben Slimane</option>
          <option value="Boulemane">Boulemane</option>
          <option value="Casablanca">Casablanca</option>
          <option value="Chaouen">Chaouen</option>
          <option value="El Jadida">El Jadida</option>
          <option value="El Kelaa des Sraghna">El Kelaa des Sraghna</option>
          <option value="Er Rachidia">Er Rachidia</option>
          <option value="Essaouira">Essaouira</option>
          <option value="Fes">Fes</option>
          <option value="Figuig">Figuig</option>
          <option value="Guelmim">Guelmim</option>
          <option value="Ifrane">Ifrane</option>
          <option value="Kenitra">Kenitra</option>
          <option value="Khemisset">Khemisset</option>
          <option value="Khenifra">Khenifra</option>
          <option value="Khouribga">Khouribga</option>
          <option value="Laayoune">Laayoune</option>
          <option value="Larache">Larache</option>
          <option value="Marrakech">Marrakech</option>
          <option value="Meknes">Meknes</option>
          <option value="Nador">Nador</option>
          <option value="Ouarzazate">Ouarzazate</option>
          <option value="Oujda">Oujda</option>
          <option value="Rabat-Sale">Rabat-Sale</option>
          <option value="Safi">Safi</option>
          <option value="Settat">Settat</option>
          <option value="Sidi Kacem">Sidi Kacem</option>
          <option value="Tangier">Tangier</option>
          <option value="Tan-Tan">Tan-Tan</option>
          <option value="Taounate">Taounate</option>
          <option value="Taroudannt">Taroudannt</option>
          <option value="Tata">Tata</option>
          <option value="Taza">Taza</option>
          <option value="Tetouan">Tetouan</option>
          <option value="Tiznit">Tiznit</option>
        </select>

    
      </div>

      <div class="formbold-mb-3">
        <label for="Openings" class="formbold-form-label"> Enter Number of Openings: </label>
        <input
          type="number" class="formbold-form-input formbold-mb-3"
          id="openings" required name="openings" placeholder="Enter number of Openings"
        />
      </div>

      <div class="formbold-mb-3">
        <label for="dob" class="formbold-form-label"> Enter Salary </label>
        <input type="number" id="salary" class="formbold-form-input formbold-mb-3" required name="salary" placeholder="Enter Salary " />
      </div>
      <div class="formbold-form-file-flex">
        <label for="upload" class="formbold-form-label">
          Upload Photo
        </label>
        <input required name="image"
          type="file"
          id="photo"
          class="formbold-form-file"
        />
      </div>
     
      <div class="formbold">
        <input name="submit" id="submit" type="submit" class="formbold-btn" value="ADD">
    </div>
    </form>
  </div>
</div>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: 'Inter', sans-serif;
  }
  .formbold-mb-3 {
    margin-bottom: 15px;
  }

  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 48px;
  }

  .formbold-form-wrapper {
    margin: 0 auto;
    max-width: 570px;
    width: 100%;
    background: white;
    padding: 40px;
  }

  .formbold-img {
    display: block;
    margin: 0 auto 45px;
  }

  .formbold-input-wrapp > div {
    display: flex;
    gap: 20px;
  }

  .formbold-input-flex {
    display: flex;
    gap: 20px;
    margin-bottom: 15px;
  }
  .formbold-input-flex > div {
    width: 50%;
  }
  .formbold-form-input {
    width: 100%;
    padding: 13px 22px;
    border-radius: 5px;
    border: 1px solid #dde3ec;
    background: #ffffff;
    font-weight: 500;
    font-size: 16px;
    color: #536387;
    outline: none;
    resize: none;
  }
  .formbold-form-input::placeholder,
  select.formbold-form-input,
  .formbold-form-input[type='date']::-webkit-datetime-edit-text,
  .formbold-form-input[type='date']::-webkit-datetime-edit-month-field,
  .formbold-form-input[type='date']::-webkit-datetime-edit-day-field,
  .formbold-form-input[type='date']::-webkit-datetime-edit-year-field {
    color: rgba(83, 99, 135, 0.5);
  }

  .formbold-form-input:focus {
    border-color: #6a64f1;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }
  .formbold-form-label {
    color: #07074D;
    font-weight: 500;
    font-size: 14px;
    line-height: 24px;
    display: block;
    margin-bottom: 10px;
  }

  .formbold-form-file-flex {
    display: flex;
    align-items: center;
    gap: 20px;
  }
  .formbold-form-file-flex .formbold-form-label {
    margin-bottom: 0;
  }
  .formbold-form-file {
    font-size: 14px;
    line-height: 24px;
    color: #536387;
  }
  .formbold-form-file::-webkit-file-upload-button {
    display: none;
  }
  .formbold-form-file:before {
    content: 'Upload file';
    display: inline-block;
    background: #EEEEEE;
    border: 0.5px solid #FBFBFB;
    box-shadow: inset 0px 0px 2px rgba(0, 0, 0, 0.25);
    border-radius: 3px;
    padding: 3px 12px;
    outline: none;
    white-space: nowrap;
    -webkit-user-select: none;
    cursor: pointer;
    color: #637381;
    font-weight: 500;
    font-size: 12px;
    line-height: 16px;
    margin-right: 10px;
  }

  .formbold-btn {
    text-align: center;
    width: 100%;
    font-size: 16px;
    border-radius: 5px;
    padding: 14px 25px;
    border: none;
    font-weight: 500;
    background-color: #6a64f1;
    color: white;
    cursor: pointer;
    margin-top: 25px;
  }
  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

  .formbold-w-45 {
    width: 45%;
  }
</style>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>
<!-- <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script> -->

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>

<!-- datatables plugin -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<script>
    $(document).ready(function() {
        $("#submit").click(function() {
            var jobTitle = $('#jobTitle').val();
            var desc = $('#desc').val();
            var country = $('#countryId').val();
            var state = $('#stateId').val();
            var city = $('#cityId').val();
            var salary = $('#salary').val();
            var openings = $('#openings').val();
            var image = $('#image').val();

            if (jobTitle == "") {
                alert('Please Enter a Job Title!')
                return false
            }
            if (desc == "") {
                alert('Please Enter a Description!')
                return false
            }
            if (country == "") {
                alert('Please Select a Country!')
                return false
            }
            if (state == "") {
                alert('Please Select a State!')
                return false
            }
            if (city == "") {
                alert('Please Select a City!')
                return false
            }

            if (openings == 0) {
                alert('Please enter Openings!')
                return false
            }

            if (salary == 0) {
                alert('Please enter Salary!')
                return false
            }
            if (photo == 0) {
                alert('Please enter Image!')
                return false
            }

            var data = $("#job_form").serialize();
            $.ajax({
                type: "POST",
                url: "job_added.php",
                data: data,
                success: function(data) {
                    alert(data);
                }
            });
        });
    });
</script>

</body>

</html>