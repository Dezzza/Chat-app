function className(params) {
  return document.getElementsByClassName(params)
}
fields = className('form-control')
btn = className('btn-success')


  for (let i=1; i <= 12; i++) {
      fields[5].innerHTML+=`<option value='${i}'>${i}</option>`;
  } 

  for (let i=1980; i <= 2004; i++) {
      fields[6].innerHTML+=`<option value='${i}'>${i}</option>`;
  } 

  for (let i=1; i <= 30; i++) {
      fields[4].innerHTML+=`<option value='${i}'>${i}</option>`;
  } 



  countries = Array(
  'Afghanistan',
  'Albania',
  'Algeria',
   'American Samoa',
   'Andorra',
   'Angola',
   'Anguilla',
   'Antigua And Barbuda',
   'Argentina',
   'Armenia',
   'Aruba',
   'Australia',
   'Austria',
   'Azerbaijan',
   'Bahamas',
   'Bahrain',
   'Bangladesh',
   'Barbados',
   'Belarus',
   'Belgium',
   'Belize',
   'Benin',
  'Bermuda',
  'Bhutan',
  'Bolivia',
  'Bosnia And Herzegovina',
  'Botswana',
  'Brazil',
  'British Indian Ocean Territory',
  'Brunei',
  'Bulgaria',
  'Burkina Faso',
  'Burundi',
  'Cambodia',
  'Cameroon',
  'Canada',
  'Cape Verde',
  'Cayman Islands',
  'Central African Republic',
  'Chad',
  'Chile',
  'China',
  'Colombia',
  'Congo',
  'Cook Islands',
  'Costa Rica',
  'Cote D\'ivoire',
  'Croatia',
  'Cuba',
  'Cyprus',
  'Czech Republic',
  'Democratic Republic of the Congo',
  'Denmark',
  'Djibouti',
  'Dominica',
  'Dominican Republic',
  'Ecuador',
  'Egypt',
  'El Salvador',
  'Equatorial Guinea',
  'Eritrea',
  'Estonia',
  'Ethiopia',
  'Faroe Islands',
  'Federated States Of Micronesia',
  'Fiji',
  'Finland',
  'France',
  'French Guiana',
  'French Polynesia',
  'Gabon',
  'Gambia',
  'Georgia',
  'Germany',
  'Ghana',
  'Gibraltar',
  'Greece',
  'Greenland',
  'Grenada',
  'Guadeloupe',
  'Guam',
  'Guatemala',
  'Guinea',
  'Guinea Bissau',
  'Guyana',
  'Haiti',
  'Honduras',
  'Hong Kong',
  'Hungary',
  'Iceland',
  'India',
  'Indonesia',
  'Iran',
  'Ireland',
  'Israel',
  'Italy',
  'Jamaica',
  'Japan',
  'Jordan',
  'Kazakhstan',
  'Kenya',
  'Kuwait',
  'Kyrgyzstan',
  'Laos',
  'Latvia',
  'Lebanon',
  'Lesotho',
  'Libyan Arab Jamahiriya',
  'Liechtenstein',
  'Lithuania',
  'Luxembourg',
  'Macedonia',
  'Madagascar',
  'Malawi',
  'Malaysia',
  'Maldives',
  'Mali',
  'Malta',
  'Martinique',
  'Mauritania',
  'Mauritius',
  'Mexico',
  'Monaco',
  'Mongolia',
  'Montenegro',
  'Morocco',
  'Mozambique',
  'Myanmar',
  'Namibia',
  'Nepal',
  'Netherlands',
  'Netherlands Antilles',
  'New Caledonia',
  'New Zealand',
  'Nicaragua',
  'Niger',
  'Nigeria',
  'Norfolk Island',
  'Northern Mariana Islands',
  'Norway',
  'Oman',
  'Pakistan',
  'Palau',
  'Panama',
  'Papua New Guinea',
  'Paraguay',
  'Peru',
  'Philippines',
  'Poland',
  'Portugal',
  'Puerto Rico',
  'Qatar',
  'Republic Of Moldova',
  'Reunion',
  'Romania',
  'Russia',
  'Rwanda',
  'Saint Kitts And Nevis',
  'Saint Lucia',
  'Saint Vincent And The Grenadines',
  'Samoa',
  'San Marino',
  'Sao Tome And Principe',
  'Saudi Arabia',
  'Senegal',
  'Serbia',
  'Seychelles',
  'Singapore',
  'Slovakia',
  'Slovenia',
  'Solomon Islands',
  'South Africa',
  'South Korea',
  'Spain',
  'Sri Lanka',
  'Sudan',
  'Suriname',
  'Swaziland',
  'Sweden',
  'Switzerland',
  'Syrian Arab Republic',
  'Taiwan',
  'Tajikistan',
  'Tanzania',
  'Thailand',
  'Togo',
  'Tonga',
  'Trinidad And Tobago',
  'Tunisia',
  'Turkey',
  'Turkmenistan',
  'Uganda',
  'Ukraine',
  'United Arab Emirates',
  'United Kingdom',
  'United States',
  'Uruguay',
  'Uzbekistan',
  'Vanuatu',
  'Venezuela',
  'Vietnam',
  'Virgin Islands British',
  'Virgin Islands U.S.',
  'Yemen',
  'Zambia',
  'Zimbabwe'
  );
  xhr = new XMLHttpRequest
  
   for (let i=0; i < countries.length; i++) { 
       fields[8].innerHTML+=`<option value='${countries[i]}'>${countries[i]}</option>`;
   }
   formdatas = document.getElementById('formdatas')
   formdatas.onsubmit = (e)=>{
      e.preventDefault()
  datas = new FormData()
  for (let i = 0; i < fields.length; i++) {
    const names = fields[i];
  datas.append(names.name,(names.name=='image'?names.files[0]:names.value))
    
  }
  datas.append(btn['0'].name,'')
  msg = className('msg')
  xhr.open('POST','./server/update.php')
      xhr.onreadystatechange =(e)=>{
        if (e.target.status==200 && e.target.readyState==4) {
      res = e.target.response
      if (res=='redir') {
        window.location='index.php';
      }else{
       msg[0].innerHTML=`<div class='alert alert-danger'>${res}</div>`
      }
    }
  }
  xhr.send(datas)
 }
 window.onload=()=>{
  xhr.open('POST','./server/update.php')
      xhr.onreadystatechange =(e)=>{
        if (e.target.status==200 && e.target.readyState==4) {
      res = e.target.response
      if (res=='redir') {
        window.location='index.php';
      }
    }
  }
  xhr.send()
 }










