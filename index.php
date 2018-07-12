<!DOCTYPE html>
<html>
 <head>
        <meta charset="utf-8">
           <title>Gurudwara Nanaksar Sahib</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/intlTelInput.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <link rel="stylesheet" href="build/css/intlTelInput.min.css">
        <link rel="stylesheet" href="build/css/custom.css">
      
    </head>
<div class="container">
     <h1>Gurudwara Nanaksar Sahib</h1>  
    <form autocomplete="off" id="myform" class="needs-validation" novalidate method="post">
  <div class="form-group">
      <label for="name">Name <span style="color:#ff0000">*</span></label>
      <input type="text" name="name" class="form-control" id="name" placeholder="Name" required onkeypress="removeBorder1()">
      <div class="error.help-block" id="name-error" style="display:none">
        Please fill name.
      </div>
    </div>
  <div class="form-group">
      <label for="phone">Mobile No.<span style="color:#ff0000">*</span></label>
    </div>
    <div class="form-group">
        <input id="phone" name="phone" type="tel" maxlength="10"  style="width:100%;" required onkeypress="return isIntegerKey(event)" >
     <div class="invalid-feedback">
        Please fill mobile.
      </div>
    </div>
     
    <div class="form-group">
      <label for="email">Email Address</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" onkeypress="removeBorder2()">
     
    </div>
   <div class="form-group">
      <label for="country" >Country</label>
      <select name="country" id="country" class="form-control" onchange="isableState(this.value)">
        <option value="">Select Country</option>
	<option value="United States">United States</option> 
	<option value="United Kingdom">United Kingdom</option> 
	<option value="Afghanistan">Afghanistan</option> 
	<option value="Albania">Albania</option> 
	<option value="Algeria">Algeria</option> 
	<option value="American Samoa">American Samoa</option> 
	<option value="Andorra">Andorra</option> 
	<option value="Angola">Angola</option> 
	<option value="Anguilla">Anguilla</option> 
	<option value="Antarctica">Antarctica</option> 
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
	<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
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
	<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
	<option value="Colombia">Colombia</option> 
	<option value="Comoros">Comoros</option> 
	<option value="Congo">Congo</option> 
	<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
	<option value="Cook Islands">Cook Islands</option> 
	<option value="Costa Rica">Costa Rica</option> 
	<option value="Cote D'ivoire">Cote D'ivoire</option> 
	<option value="Croatia">Croatia</option> 
	<option value="Cuba">Cuba</option> 
	<option value="Cyprus">Cyprus</option> 
	<option value="Czech Republic">Czech Republic</option> 
	<option value="Denmark">Denmark</option> 
	<option value="Djibouti">Djibouti</option> 
	<option value="Dominica">Dominica</option> 
	<option value="Dominican Republic">Dominican Republic</option> 
	<option value="Ecuador">Ecuador</option> 
	<option value="Egypt">Egypt</option> 
	<option value="El Salvador">El Salvador</option> 
	<option value="Equatorial Guinea">Equatorial Guinea</option> 
	<option value="Eritrea">Eritrea</option> 
	<option value="Estonia">Estonia</option> 
	<option value="Ethiopia">Ethiopia</option> 
	<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
	<option value="Faroe Islands">Faroe Islands</option> 
	<option value="Fiji">Fiji</option> 
	<option value="Finland">Finland</option> 
	<option value="France">France</option> 
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
	<option value="Guinea-bissau">Guinea-bissau</option> 
	<option value="Guyana">Guyana</option> 
	<option value="Haiti">Haiti</option> 
	<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
	<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
	<option value="Honduras">Honduras</option> 
	<option value="Hong Kong">Hong Kong</option> 
	<option value="Hungary">Hungary</option> 
	<option value="Iceland">Iceland</option> 
        <option value="India" selected="selected">India</option> 
	<option value="Indonesia">Indonesia</option> 
	<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
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
	<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
	<option value="Korea, Republic of">Korea, Republic of</option> 
	<option value="Kuwait">Kuwait</option> 
	<option value="Kyrgyzstan">Kyrgyzstan</option> 
	<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
	<option value="Latvia">Latvia</option> 
	<option value="Lebanon">Lebanon</option> 
	<option value="Lesotho">Lesotho</option> 
	<option value="Liberia">Liberia</option> 
	<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
	<option value="Liechtenstein">Liechtenstein</option> 
	<option value="Lithuania">Lithuania</option> 
	<option value="Luxembourg">Luxembourg</option> 
	<option value="Macao">Macao</option> 
	<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
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
	<option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
	<option value="Moldova, Republic of">Moldova, Republic of</option> 
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
	<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
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
	<option value="Russian Federation">Russian Federation</option> 
	<option value="Rwanda">Rwanda</option> 
	<option value="Saint Helena">Saint Helena</option> 
	<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
	<option value="Saint Lucia">Saint Lucia</option> 
	<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
	<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
	<option value="Samoa">Samoa</option> 
	<option value="San Marino">San Marino</option> 
	<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
	<option value="Saudi Arabia">Saudi Arabia</option> 
	<option value="Senegal">Senegal</option> 
	<option value="Serbia and Montenegro">Serbia and Montenegro</option> 
	<option value="Seychelles">Seychelles</option> 
	<option value="Sierra Leone">Sierra Leone</option> 
	<option value="Singapore">Singapore</option> 
	<option value="Slovakia">Slovakia</option> 
	<option value="Slovenia">Slovenia</option> 
	<option value="Solomon Islands">Solomon Islands</option> 
	<option value="Somalia">Somalia</option> 
	<option value="South Africa">South Africa</option> 
	<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
	<option value="Spain">Spain</option> 
	<option value="Sri Lanka">Sri Lanka</option> 
	<option value="Sudan">Sudan</option> 
	<option value="Suriname">Suriname</option> 
	<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
	<option value="Swaziland">Swaziland</option> 
	<option value="Sweden">Sweden</option> 
	<option value="Switzerland">Switzerland</option> 
	<option value="Syrian Arab Republic">Syrian Arab Republic</option> 
	<option value="Taiwan, Province of China">Taiwan, Province of China</option> 
	<option value="Tajikistan">Tajikistan</option> 
	<option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
	<option value="Thailand">Thailand</option> 
	<option value="Timor-leste">Timor-leste</option> 
	<option value="Togo">Togo</option> 
	<option value="Tokelau">Tokelau</option> 
	<option value="Tonga">Tonga</option> 
	<option value="Trinidad and Tobago">Trinidad and Tobago</option> 
	<option value="Tunisia">Tunisia</option> 
	<option value="Turkey">Turkey</option> 
	<option value="Turkmenistan">Turkmenistan</option> 
	<option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
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
	<option value="Viet Nam">Viet Nam</option> 
	<option value="Virgin Islands, British">Virgin Islands, British</option> 
	<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
	<option value="Wallis and Futuna">Wallis and Futuna</option> 
	<option value="Western Sahara">Western Sahara</option> 
	<option value="Yemen">Yemen</option> 
	<option value="Zambia">Zambia</option> 
	<option value="Zimbabwe">Zimbabwe</option>
        </select>
      <div class="invalid-feedback">
        Please fill country.
      </div>
    </div>
    <div class="form-group" id="stateList">
      <label for="validationCustom">State</label>
      <select id="listBox" onchange="selct_district(this.value)" name="state"  class="form-control">
          <option value="">Select State</option>
          <option value="Andhra Pradesh">Andhra Pradesh</option>
          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
          <option value="Assam">Assam</option><option value="Bihar">Bihar</option>
          <option value="Chhattisgarh">Chhattisgarh</option>
          <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
          <option value="Daman and Diu">Daman and Diu</option><option value="Delhi">Delhi</option>
          <option value="Goa">Goa</option><option value="Gujarat">Gujarat</option>
          <option value="Haryana">Haryana</option>
          <option value="Himachal Pradesh">Himachal Pradesh</option>
          <option value="Jammu and Kashmir">Jammu and Kashmir</option>
          <option value="Jharkhand">Jharkhand</option>
          <option value="Karnataka">Karnataka</option>
          <option value="Kerala">Kerala</option>
          <option value="Madhya Pradesh">Madhya Pradesh</option>
          <option value="Maharashtra">Maharashtra</option>
          <option value="Manipur">Manipur</option>
          <option value="Meghalaya">Meghalaya</option>
          <option value="Mizoram">Mizoram</option>
          <option value="Nagaland">Nagaland</option>
          <option value="Orissa">Orissa</option>
          <option value="Puducherry">Puducherry</option>
          <option value="Punjab">Punjab</option>
          <option value="Rajasthan">Rajasthan</option>
          <option value="Sikkim">Sikkim</option>
          <option value="Tamil Nadu">Tamil Nadu</option>
          <option value="Telangana">Telangana</option>
          <option value="Tripura">Tripura</option>
          <option value="Uttar Pradesh">Uttar Pradesh</option>
          <option value="Uttarakhand">Uttarakhand</option>
          <option value="West Bengal">West Bengal</option>
      </select>
      <div class="invalid-feedback">
        Please fill mobile.
      </div>
    </div>
    
    <div class="form-group">
      <label for="validationCustom05">City</label>
      <input type="text" name="city" class="form-control" id="validationCustom05" placeholder="City" required>
      <div class="invalid-feedback">
        Please fill city.
      </div>
    </div>
      <div class="alert-new-success" id="successMessage" style="display:none;">
        <button type="button" class="close" data-dismiss="alert">×</button>	
        <strong id="successMessagedis">Data saved successfully!</strong>
      </div>
       <div class="btn btn-primary" id="submit1"><i class="fa fa-paper-plane"></i> Submit</div>
    <div class="btn btn-primary" type="submit" onclick="reSetform()">Reset</div>
</form>

  <!-- Load jQuery from CDN so can run demo immediately -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="build/js/intlTelInput.js"></script>
<script>
$(document).ready(function()
{ 
   // <-- time in milliseconds
$("#submit1").on('click',function()
{      
var name= $("#name").val();

var password= $("#password").val();  

var phone= $("#phone").val();
var title= $(".selected-flag").attr('title');

var str = title.split(':');
var country_code=str[1];

var email= $("#email").val();
var country= $("#country").val();
var state= $("#listBox").val();
var city= $("#validationCustom05").val();

   var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
var stringdata="name="+name+"&phone="+phone+"&email="+email+"&country="+country+"&state="+state+"&city="+city+"&country_code=" + country_code;

if(name=='')
{
$("#name").removeClass('form-control')    
$("#name").addClass('form-control red')  
//$("#name-error").show()  
 return false;
} else if(email!='' && !filter.test(email)){
 //alert("please enter valid email id")
$("#email").removeClass('form-control')    
$("#email").addClass('form-control red') 
return false;  
} else if(phone==''){
$("#phone").removeClass('form-control')    
$("#phone").addClass('form-control red') 
return false;  
} else if(country==''){
$("#country").removeClass('form-control')    
$("#country").addClass('form-control red') 
return false;  
} else{

$.ajax({
  type:'POST' ,
  url:'register.php',
  data:stringdata,
  success:function(data)
  {
  $("#successMessage").show();
}
});
setTimeout(function() {
          $('#successMessage').fadeOut('fast');
        }, 5000);

}
  }) ; 
} ) ;  
      
   function isIntegerKey(evt)
          {
              
           var name= $("#phone").val();

 if(name!='') 
 {

   $("#phone").removeClass('form-control red')    
   $("#phone").addClass('form-control')  
 }   
              
              
              
              
              evt = (evt) ? evt : window.event;
              var charCode = (evt.which) ? evt.which : evt.keyCode;
              if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                  return false;
              }
              return true;


          }   
    
  function removeBorder1()
{
var name= $("#name").val();

 if(name!='') 
 {

   $("#name").removeClass('form-control red')    
   $("#name").addClass('form-control')  
   
 }
 
}


  function removeBorder2()
{
var email= $("#email").val();
 var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
  if(email!='' && filter.test(email)){

   $("#email").removeClass('form-control red')    
   $("#email").addClass('form-control')  
 }
 
}

function userLogin2()
{
var password= $("#password").val(); 

 if(password!='') 
 {
   $("#password").removeClass('form-control red')    
   $("#password").addClass('form-control')   
   
 }
 
}  
 
    $("#phone").intlTelInput({
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: "body",
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
       preferredCountries: ['in','us', 'jp'],
      // separateDialCode: true,
      utilsScript: "build/js/utils.js"
    });
  </script>
    
    
    

 
<script>
    function reSetform()
    {
        $('#myform')[0].reset();
       // $("#form").trigger('reset');
    }
    function isableState(id)
    {
        
     var name= $("#country").val();
if(name!='') 
{
$("#country").removeClass('form-control red')    
   $("#country").addClass('form-control')  
 }   
        
        
        
        
      if(id=='India')
      {
          $("#stateList").show()
      }else
      {
        $("#stateList").hide()   
      }
   }

</script>
	</div>
</div>