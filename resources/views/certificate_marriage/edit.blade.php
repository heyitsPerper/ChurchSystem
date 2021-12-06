@extends('layouts.master')
@section('title','Update Marriage Information')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <i class="fas fa-table me-1"></i>
        Update Marriage Information
        <a onclick="return confirm('Are you sure to leave this page? - Data you have entered may not be saved.')" href="{{url('marriage_info')}}" class="float-right btn btn-sm btn-info">Go Back</a>
    </div>
    <div class="card-body">
            @if(Session::has('msg'))
                <div class="alert alert-success">
                    {{session('msg')}}
                </div>
            @endif
        
        @if(session()->has('error'))
            <div class="alert alert-danger"> 
                {{ session()->get('error') }}
            </div>
        @endif
        
        <form method="post" action="{{url('marriage_info/'.$data->id)}}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="row no-gutters">
            <div class="col-md-6 no-gutters">
                <div class="left-body">
                    <table class="table table-hover table-bordered">
                    <thead class="thead-dark">
                        <tr>
                        <td class="table-dark text-center" colspan="2">HUSBAND</td>
                        </tr>
                    </thead>
                        <tr>
                            <th>Name of Husband</th>
                            <td>
                                <input type="text" value="{{$data->hhusbandname}}" name="hhusbandname" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>Date of Birth</th>
                            <td>
                            <input type="date" value="{{$data->hbirthdate}}" name="hbirthdate" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>Age</th>
                            <td>
                            <input type="number" value="{{$data->hage}}" name="hage" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>Place of Birth</th>
                            <td>
                            <input type="text" value="{{$data->hbirthplace}}" name="hbirthplace" class="form-control" required>
                            </td>
                        </tr>
                        <!--Husband's Citizenship Dropdown List-->
                        <tr>
                            <th>Citizenship</th>
                            <td>
                                <select name="hcitizenship" class="form-control" required>
                                <option value="">Select Citizenship</option>
                                <option value="Afghan" {{ $data->hcitizenship == 'Afghan' ? 'selected':'' }}>Afghan</option>
                                <option value="Albanian" {{ $data->hcitizenship == 'Albanian' ? 'selected':'' }}>Albanian</option>
                                <option value="Algerian" {{ $data->hcitizenship == 'Algerian' ? 'selected':'' }}>Algerian</option>
                                <option value="American" {{ $data->hcitizenship == 'American' ? 'selected':'' }}>American</option>
                                <option value="Andorran" {{ $data->hcitizenship == 'Andorran' ? 'selected':'' }}>Andorran</option>
                                <option value="Angolan" {{ $data->hcitizenship == 'Angolan' ? 'selected':'' }}>Angolan</option>
                                <option value="Antiguans" {{ $data->hcitizenship == 'Antiguans' ? 'selected':'' }}>Antiguans</option>
                                <option value="Argentinean" {{ $data->hcitizenship == 'Argentinean' ? 'selected':'' }}>Argentinean</option>
                                <option value="Armenian" {{ $data->hcitizenship == 'Armenian' ? 'selected':'' }}>Armenian</option>
                                <option value="Australian" {{ $data->hcitizenship == 'Australian' ? 'selected':'' }}>Australian</option>
                                <option value="Austrian" {{ $data->hcitizenship == 'Austrian' ? 'selected':'' }}>Austrian</option>
                                <option value="Azerbaijani" {{ $data->hcitizenship == 'Azerbaijani' ? 'selected':'' }}>Azerbaijani</option>
                                <option value="Bahamian" {{ $data->hcitizenship == 'Bahamian' ? 'selected':'' }}>Bahamian</option>
                                <option value="Bahraini" {{ $data->hcitizenship == 'Bahraini' ? 'selected':'' }}>Bahraini</option>
                                <option value="Bangladeshi" {{ $data->hcitizenship == 'Bangladeshi' ? 'selected':'' }}>Bangladeshi</option>
                                <option value="Barbadian" {{ $data->hcitizenship == 'Barbadian' ? 'selected':'' }}>Barbadian</option>
                                <option value="Barbudans" {{ $data->hcitizenship == 'Barbudans' ? 'selected':'' }}>Barbudans</option>
                                <option value="Batswana" {{ $data->hcitizenship == 'Batswana' ? 'selected':'' }}>Batswana</option>
                                <option value="Belarusian" {{ $data->hcitizenship == 'Belarusian' ? 'selected':'' }}>Belarusian</option>
                                <option value="Belgian" {{ $data->hcitizenship == 'Belgian' ? 'selected':'' }}>Belgian</option>
                                <option value="Belizean" {{ $data->hcitizenship == 'Belizean' ? 'selected':'' }}>Belizean</option>
                                <option value="Beninese" {{ $data->hcitizenship == 'Beninese' ? 'selected':'' }}>Beninese</option>
                                <option value="Bhutanese" {{ $data->hcitizenship == 'Bhutanese' ? 'selected':'' }}>Bhutanese</option>
                                <option value="Bolivian" {{ $data->hcitizenship == 'Bolivian' ? 'selected':'' }}>Bolivian</option>
                                <option value="Bosnian" {{ $data->hcitizenship == 'Bosnian' ? 'selected':'' }}>Bosnian</option>
                                <option value="Brazilian" {{ $data->hcitizenship == 'Brazilian' ? 'selected':'' }}>Brazilian</option>
                                <option value="British" {{ $data->hcitizenship == 'British' ? 'selected':'' }}>British</option>
                                <option value="Bruneian" {{ $data->hcitizenship == 'Bruneian' ? 'selected':'' }}>Bruneian</option>
                                <option value="Bulgarian" {{ $data->hcitizenship == 'Bulgarian' ? 'selected':'' }}>Bulgarian</option>
                                <option value="Burkinabe" {{ $data->hcitizenship == 'Burkinabe' ? 'selected':'' }}>Burkinabe</option>
                                <option value="Burmese" {{ $data->hcitizenship == 'Burmese' ? 'selected':'' }}>Burmese</option>
                                <option value="Burundian" {{ $data->hcitizenship == 'Burundian' ? 'selected':'' }}>Burundian</option>
                                <option value="Cambodian" {{ $data->hcitizenship == 'Cambodian' ? 'selected':'' }}>Cambodian</option>
                                <option value="Cameroonian" {{ $data->hcitizenship == 'Cameroonian' ? 'selected':'' }}>Cameroonian</option>
                                <option value="Canadian" {{ $data->hcitizenship == 'Canadian' ? 'selected':'' }}>Canadian</option>
                                <option value="Cape verdean" {{ $data->hcitizenship == 'Cape Verdean' ? 'selected':'' }}>Cape Verdean</option>
                                <option value="Central African" {{ $data->hcitizenship == 'Central African' ? 'selected':'' }}>Central African</option>
                                <option value="Chadian" {{ $data->hcitizenship == 'Chadian' ? 'selected':'' }}>Chadian</option>
                                <option value="Chilean" {{ $data->hcitizenship == 'Chilean' ? 'selected':'' }}>Chilean</option>
                                <option value="Chinese" {{ $data->hcitizenship == 'Chinese' ? 'selected':'' }}>Chinese</option>
                                <option value="Colombian" {{ $data->hcitizenship == 'Colombian' ? 'selected':'' }}>Colombian</option>
                                <option value="Comoran" {{ $data->hcitizenship == 'Comoran' ? 'selected':'' }}>Comoran</option>
                                <option value="Congolese" {{ $data->hcitizenship == 'Congolese' ? 'selected':'' }}>Congolese</option>
                                <option value="Costa Rican" {{ $data->hcitizenship == 'Costa Rican' ? 'selected':'' }}>Costa Rican</option>
                                <option value="Croatian" {{ $data->hcitizenship == 'Croatian' ? 'selected':'' }}>Croatian</option>
                                <option value="Cuban" {{ $data->hcitizenship == 'Cuban' ? 'selected':'' }}>Cuban</option>
                                <option value="Cypriot" {{ $data->hcitizenship == 'Cypriot' ? 'selected':'' }}>Cypriot</option>
                                <option value="Czech" {{ $data->hcitizenship == 'Czech' ? 'selected':'' }}>Czech</option>
                                <option value="Danish" {{ $data->hcitizenship == 'Danish' ? 'selected':'' }}>Danish</option>
                                <option value="Djibouti" {{ $data->hcitizenship == 'Djibouti' ? 'selected':'' }}>Djibouti</option>
                                <option value="Dominican" {{ $data->hcitizenship == 'Dominican' ? 'selected':'' }}>Dominican</option>
                                <option value="Dutch" {{ $data->hcitizenship == 'Dutch' ? 'selected':'' }}>Dutch</option>
                                <option value="East Timorese" {{ $data->hcitizenship == '>East Timorese' ? 'selected':'' }}>East Timorese</option>
                                <option value="Ecuadorean" {{ $data->hcitizenship == 'Ecuadorean' ? 'selected':'' }}>Ecuadorean</option>
                                <option value="Egyptian" {{ $data->hcitizenship == 'Egyptian' ? 'selected':'' }}>Egyptian</option>
                                <option value="Emirian" {{ $data->hcitizenship == 'Emirian' ? 'selected':'' }}>Emirian</option>
                                <option value="Equatorial Guinean" {{ $data->hcitizenship == 'Equatorial Guinean' ? 'selected':'' }}>Equatorial Guinean</option>
                                <option value="Eritrean" {{ $data->hcitizenship == 'Eritrean' ? 'selected':'' }}>Eritrean</option>
                                <option value="Estonian" {{ $data->hcitizenship == 'Estonian' ? 'selected':'' }}>Estonian</option>
                                <option value="Ethiopian" {{ $data->hcitizenship == 'Ethiopian' ? 'selected':'' }}>Ethiopian</option>
                                <option value="Fijian" {{ $data->hcitizenship == 'Fijian' ? 'selected':'' }}>Fijian</option>
                                <option value="Filipino" {{ $data->hcitizenship == 'Filipino' ? 'selected':'' }}>Filipino</option>
                                <option value="Finnish" {{ $data->hcitizenship == 'Finnish' ? 'selected':'' }}>Finnish</option>
                                <option value="French" {{ $data->hcitizenship == 'French' ? 'selected':'' }}></option>
                                <option value="Gabonese" {{ $data->hcitizenship == 'Gabonese' ? 'selected':'' }}>Gabonese</option>
                                <option value="Gambian" {{ $data->hcitizenship == 'Gambian' ? 'selected':'' }}>Gambian</option>
                                <option value="Georgian" {{ $data->hcitizenship == 'Georgian' ? 'selected':'' }}>Georgian</option>
                                <option value="German" {{ $data->hcitizenship == 'German' ? 'selected':'' }}>German</option>
                                <option value="Ghanaian" {{ $data->hcitizenship == 'Ghanaian' ? 'selected':'' }}>Ghanaian</option>
                                <option value="Greek" {{ $data->hcitizenship == 'Greek' ? 'selected':'' }}>Greek</option>
                                <option value="Grenadian" {{ $data->hcitizenship == 'Grenadian' ? 'selected':'' }}>Grenadian</option>
                                <option value="Guatemalan" {{ $data->hcitizenship == 'Guatemalan' ? 'selected':'' }}>Guatemalan</option>
                                <option value="Guinea-Bissauan" {{ $data->hcitizenship == 'Guinea-Bissauan' ? 'selected':'' }}>Guinea-Bissauan</option>
                                <option value="Guinean" {{ $data->hcitizenship == 'Guinean' ? 'selected':'' }}>Guinean</option>
                                <option value="Guyanese" {{ $data->hcitizenship == 'Guyanese' ? 'selected':'' }}>Guyanese</option>
                                <option value="Haitian" {{ $data->hcitizenship == 'Haitian' ? 'selected':'' }}>Haitian</option>
                                <option value="Herzegovinian" {{ $data->hcitizenship == 'Herzegovinian' ? 'selected':'' }}>Herzegovinian</option>
                                <option value="Honduran" {{ $data->hcitizenship == 'Honduran' ? 'selected':'' }}>Honduran</option>
                                <option value="Hungarian" {{ $data->hcitizenship == 'Hungarian' ? 'selected':'' }}>Hungarian</option>
                                <option value="Icelander" {{ $data->hcitizenship == 'Icelander' ? 'selected':'' }}>Icelander</option>
                                <option value="Indian" {{ $data->hcitizenship == 'Indian' ? 'selected':'' }}>Indian</option>
                                <option value="Indonesian" {{ $data->hcitizenship == 'Indonesian' ? 'selected':'' }}>Indonesian</option>
                                <option value="Iranian" {{ $data->hcitizenship == 'Iranian' ? 'selected':'' }}>Iranian</option>
                                <option value="Iraqi" {{ $data->hcitizenship == 'Iraqi' ? 'selected':'' }}>Iraqi</option>
                                <option value="Irish" {{ $data->hcitizenship == 'Irish' ? 'selected':'' }}>Irish</option>
                                <option value="Israeli" {{ $data->hcitizenship == 'Israeli' ? 'selected':'' }}>Israeli</option>
                                <option value="Italian" {{ $data->hcitizenship == 'Italian' ? 'selected':'' }}>Italian</option>
                                <option value="Ivorian" {{ $data->hcitizenship == 'Ivorian' ? 'selected':'' }}>Ivorian</option>
                                <option value="Jamaican" {{ $data->hcitizenship == 'Jamaican' ? 'selected':'' }}>Jamaican</option>
                                <option value="Japanese" {{ $data->hcitizenship == 'Japanese' ? 'selected':'' }}>Japanese</option>
                                <option value="Jordanian" {{ $data->hcitizenship == 'Jordanian' ? 'selected':'' }}>Jordanian</option>
                                <option value="Kazakhstani" {{ $data->hcitizenship == 'Kazakhstani' ? 'selected':'' }}>Kazakhstani</option>
                                <option value="Kenyan" {{ $data->hcitizenship == 'Kenyan' ? 'selected':'' }}>Kenyan</option>
                                <option value="Kittian and Nevisian" {{ $data->hcitizenship == 'Kittian and Nevisian' ? 'selected':'' }}>Kittian and Nevisian</option>
                                <option value="Kuwaiti" {{ $data->hcitizenship == 'Kuwaiti' ? 'selected':'' }}>Kuwaiti</option>
                                <option value="Kyrgyz" {{ $data->hcitizenship == 'Kyrgyz' ? 'selected':'' }}>Kyrgyz</option>
                                <option value="Laotian" {{ $data->hcitizenship == 'Laotian' ? 'selected':'' }}>Laotian</option>
                                <option value="Latvian" {{ $data->hcitizenship == 'Latvian' ? 'selected':'' }}>Latvian</option>
                                <option value="Lebanese" {{ $data->hcitizenship == 'Lebanese' ? 'selected':'' }}>Lebanese</option>
                                <option value="Liberian" {{ $data->hcitizenship == 'Liberian' ? 'selected':'' }}>Liberian</option>
                                <option value="Libyan" {{ $data->hcitizenship == 'Libyan' ? 'selected':'' }}>Libyan</option>
                                <option value="Liechtensteiner" {{ $data->hcitizenship == 'Liechtensteiner' ? 'selected':'' }}>Liechtensteiner</option>
                                <option value="Lithuanian" {{ $data->hcitizenship == 'Lithuanian' ? 'selected':'' }}>Lithuanian</option>
                                <option value="Luxembourger" {{ $data->hcitizenship == 'Luxembourger' ? 'selected':'' }}>Luxembourger</option>
                                <option value="Macedonian" {{ $data->hcitizenship == 'Macedonian' ? 'selected':'' }}>Macedonian</option>
                                <option value="Malagasy" {{ $data->hcitizenship == 'Malagasy' ? 'selected':'' }}>Malagasy</option>
                                <option value="Malawian" {{ $data->hcitizenship == 'Malawian' ? 'selected':'' }}>Malawian</option>
                                <option value="Malaysian" {{ $data->hcitizenship == 'Malaysian' ? 'selected':'' }}>Malaysian</option>
                                <option value="Maldivan" {{ $data->hcitizenship == 'Maldivan' ? 'selected':'' }}>Maldivan</option>
                                <option value="Malian" {{ $data->hcitizenship == 'Malian' ? 'selected':'' }}>Malian</option>
                                <option value="Maltese" {{ $data->hcitizenship == 'Maltese' ? 'selected':'' }}>Maltese</option>
                                <option value="Marshallese" {{ $data->hcitizenship == 'Marshallese' ? 'selected':'' }}>Marshallese</option>
                                <option value="Mauritanian" {{ $data->hcitizenship == 'Mauritanian' ? 'selected':'' }}>Mauritanian</option>
                                <option value="Mauritian" {{ $data->hcitizenship == 'Mauritian' ? 'selected':'' }}>Mauritian</option>
                                <option value="Mexican" {{ $data->hcitizenship == 'Mexican' ? 'selected':'' }}>Mexican</option>
                                <option value="Micronesian" {{ $data->hcitizenship == 'Micronesian' ? 'selected':'' }}>Micronesian</option>
                                <option value="Moldovan" {{ $data->hcitizenship == 'Moldovan' ? 'selected':'' }}>Moldovan</option>
                                <option value="Monacan" {{ $data->hcitizenship == 'Monacan' ? 'selected':'' }}>Monacan</option>
                                <option value="Mongolian" {{ $data->hcitizenship == 'Mongolian' ? 'selected':'' }}>Mongolian</option>
                                <option value="Moroccan" {{ $data->hcitizenship == 'Moroccan' ? 'selected':'' }}>Moroccan</option>
                                <option value="Mosotho" {{ $data->hcitizenship == 'Mosotho' ? 'selected':'' }}>Mosotho</option>
                                <option value="Motswana" {{ $data->hcitizenship == 'Motswana' ? 'selected':'' }}>Motswana</option>
                                <option value="Mozambican" {{ $data->hcitizenship == 'Mozambican' ? 'selected':'' }}>Mozambican</option>
                                <option value="Namibian" {{ $data->hcitizenship == 'Namibian' ? 'selected':'' }}>Namibian</option>
                                <option value="Nauruan" {{ $data->hcitizenship == 'Nauruan' ? 'selected':'' }}>Nauruan</option>
                                <option value="Nepalese" {{ $data->hcitizenship == 'Nepalese' ? 'selected':'' }}>Nepalese</option>
                                <option value="New Zealander" {{ $data->hcitizenship == 'New Zealander' ? 'selected':'' }}>New Zealander</option>
                                <option value="Ni-Vanuatu" {{ $data->hcitizenship == 'Ni-Vanuatu' ? 'selected':'' }}>Ni-Vanuatu</option>
                                <option value="Nnicaraguan" {{ $data->hcitizenship == 'Nicaraguan' ? 'selected':'' }}>Nicaraguan</option>
                                <option value="Nigerien" {{ $data->hcitizenship == 'Nigerien' ? 'selected':'' }}>Nigerien</option>
                                <option value="North Korean" {{ $data->hcitizenship == 'North Korean' ? 'selected':'' }}>North Korean</option>
                                <option value="Northern Irish" {{ $data->hcitizenship == 'Northern Irish' ? 'selected':'' }}>Northern Irish</option>
                                <option value="Norwegian" {{ $data->hcitizenship == 'Norwegian ' ? 'selected':'' }}>Norwegian</option>
                                <option value="Omani" {{ $data->hcitizenship == 'Omani' ? 'selected':'' }}>Omani</option>
                                <option value="Pakistani" {{ $data->hcitizenship == 'Pakistani' ? 'selected':'' }}>Pakistani</option>
                                <option value="Palauan" {{ $data->hcitizenship == 'Palauan' ? 'selected':'' }}>Palauan</option>
                                <option value="Panamanian" {{ $data->hcitizenship == 'Panamanian' ? 'selected':'' }}>Panamanian</option>
                                <option value="Papua New Guinean" {{ $data->hcitizenship == 'Papua New Guinea' ? 'selected':'' }}>Papua New Guinean</option>
                                <option value="Paraguayan" {{ $data->hcitizenship == 'Paraguayan' ? 'selected':'' }}>Paraguayan</option>
                                <option value="Peruvian" {{ $data->hcitizenship == 'Peruvian' ? 'selected':'' }}>Peruvian</option>
                                <option value="Polish" {{ $data->hcitizenship == 'Polish' ? 'selected':'' }}>Polish</option>
                                <option value="Portuguese" {{ $data->hcitizenship == 'Portuguese' ? 'selected':'' }}>Portuguese</option>
                                <option value="Qatari" {{ $data->hcitizenship == 'Qatari' ? 'selected':'' }}>Qatari</option>
                                <option value="Romanian" {{ $data->hcitizenship == 'Romanian' ? 'selected':'' }}>Romanian</option>
                                <option value="Russian" {{ $data->hcitizenship == 'Russian' ? 'selected':'' }}>Russian</option>
                                <option value="Rwandan" {{ $data->hcitizenship == 'Rwandan' ? 'selected':'' }}>Rwandan</option>
                                <option value="Saint Lucian" {{ $data->hcitizenship == 'Saint Lucian' ? 'selected':'' }}>Saint Lucian</option>
                                <option value="Salvadoran" {{ $data->hcitizenship == 'Salvadoran' ? 'selected':'' }}>Salvadoran</option>
                                <option value="Samoan" {{ $data->hcitizenship == 'Samoan' ? 'selected':'' }}>Samoan</option>
                                <option value="San Marinese" {{ $data->hcitizenship == 'San Marinese' ? 'selected':'' }}>San Marinese</option>
                                <option value="Sao Tomean" {{ $data->hcitizenship == 'Sao Tomean' ? 'selected':'' }}>Sao Tomean</option>
                                <option value="Saudi" {{ $data->hcitizenship == 'Saudi' ? 'selected':'' }}>Saudi</option>
                                <option value="Scottish" {{ $data->hcitizenship == 'Scottish' ? 'selected':'' }}>Scottish</option>
                                <option value="Senegalese" {{ $data->hcitizenship == 'Senegalese' ? 'selected':'' }}>Senegalese</option>
                                <option value="Serbian" {{ $data->hcitizenship == 'Serbian' ? 'selected':'' }}>Serbian</option>
                                <option value="Seychellois" {{ $data->hcitizenship == 'Seychellois' ? 'selected':'' }}>Seychellois</option>
                                <option value="Sierra Leonean" {{ $data->hcitizenship == 'Sierra Leonea' ? 'selected':'' }}>Sierra Leonean</option>
                                <option value="Singaporean" {{ $data->hcitizenship == 'Singaporean' ? 'selected':'' }}>Singaporean</option>
                                <option value="Slovakian" {{ $data->hcitizenship == 'Slovakian' ? 'selected':'' }}>Slovakian</option>
                                <option value="Slovenian" {{ $data->hcitizenship == 'Slovenian' ? 'selected':'' }}>Slovenian</option>
                                <option value="Solomon Islander" {{ $data->hcitizenship == 'Solomon Islander' ? 'selected':'' }}>Solomon Islander</option>
                                <option value="Somali" {{ $data->hcitizenship == 'Somali' ? 'selected':'' }}>Somali</option>
                                <option value="South African" {{ $data->hcitizenship == 'South African' ? 'selected':'' }}>South African</option>
                                <option value="South Korean" {{ $data->hcitizenship == 'South Korean' ? 'selected':'' }}>South Korean</option>
                                <option value="Spanish" {{ $data->hcitizenship == 'Spanish' ? 'selected':'' }}>Spanish</option>
                                <option value="Sri Lankan" {{ $data->hcitizenship == 'Sri Lankan' ? 'selected':'' }}>Sri Lankan</option>
                                <option value="Sudanese" {{ $data->hcitizenship == 'Sudanese' ? 'selected':'' }}>Sudanese</option>
                                <option value="Surinamer" {{ $data->hcitizenship == 'Surinamer' ? 'selected':'' }}>Surinamer</option>
                                <option value="Swazi" {{ $data->hcitizenship == 'Swazi' ? 'selected':'' }}>Swazi</option>
                                <option value="Swedish" {{ $data->hcitizenship == 'Swedish' ? 'selected':'' }}>Swedish</option>
                                <option value="Swiss" {{ $data->hcitizenship == 'Swiss' ? 'selected':'' }}>Swiss</option>
                                <option value="Syrian" {{ $data->hcitizenship == 'Syrian' ? 'selected':'' }}>Syrian</option>
                                <option value="Taiwanese" {{ $data->hcitizenship == 'Taiwanese' ? 'selected':'' }}>Taiwanese</option>
                                <option value="Tajik" {{ $data->hcitizenship == 'Tajik' ? 'selected':'' }}>Tajik</option>
                                <option value="Tanzanian" {{ $data->hcitizenship == 'Tanzanian' ? 'selected':'' }}>Tanzanian</option>
                                <option value="Thai" {{ $data->hcitizenship == 'Thai' ? 'selected':'' }}>Thai</option>
                                <option value="Togolese" {{ $data->hcitizenship == 'Togolese' ? 'selected':'' }}>Togolese</option>
                                <option value="Tongan" {{ $data->hcitizenship == 'Tongan' ? 'selected':'' }}>Tongan</option>
                                <option value="Trinidadian or Tobagonian" {{ $data->hcitizenship == 'Trinidadian or Tobagoni' ? 'selected':'' }}>Trinidadian or Tobagonian</option>
                                <option value="Tunisian" {{ $data->hcitizenship == 'Tunisian' ? 'selected':'' }}>Tunisian</option>
                                <option value="Turkish" {{ $data->hcitizenship == 'Turkish' ? 'selected':'' }}>Turkish</option>
                                <option value="Tuvaluan" {{ $data->hcitizenship == 'Tuvaluan' ? 'selected':'' }}>Tuvaluan</option>
                                <option value="Ugandan" {{ $data->hcitizenship == 'Ugandan' ? 'selected':'' }}>Ugandan</option>
                                <option value="Ukrainian" {{ $data->hcitizenship == 'Ukrainian' ? 'selected':'' }}>Ukrainian</option>
                                <option value="Uruguayan" {{ $data->hcitizenship == 'Uruguayan' ? 'selected':'' }}>Uruguayan</option>
                                <option value="Uzbekistani" {{ $data->hcitizenship == 'Uzbekistani' ? 'selected':'' }}>Uzbekistani</option>
                                <option value="Venezuelan" {{ $data->hcitizenship == 'Venezuelan' ? 'selected':'' }}>Venezuelan</option>
                                <option value="Vietnamese" {{ $data->hcitizenship == 'Vietnamese' ? 'selected':'' }}>Vietnamese</option>
                                <option value="Welsh" {{ $data->hcitizenship == 'Welsh' ? 'selected':'' }}>Welsh</option>
                                <option value="Yemenite" {{ $data->hcitizenship == 'Yemenite' ? 'selected':'' }}>Yemenite</option>
                                <option value="Zambian" {{ $data->hcitizenship == 'Zambian' ? 'selected':'' }}>Zambian</option>
                                <option value="Zimbabwean" {{ $data->hcitizenship == 'Zimbabwean' ? 'selected':'' }}>Zimbabwean</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Residence</th>
                            <td>
                            <input type="text" value="{{$data->hhusbandresidence}}" name="hhusbandresidence" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>Religion</th>
                            <td>
                            <input type="text" value="{{$data->hreligion}}" name="hreligion" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>Civil Status</th>
                            <td>
                            <select name="hcivilstatus" class="form-control" required>
                                <option value="">Select Civil Status</option>
                                <option value='Single' {{ $data->hcivilstatus == 'Single' ? 'selected':'' }}> Single </option>
                                <option value='Married' {{ $data->hcivilstatus == 'Married' ? 'selected':'' }}> Married </option>
                                <option value='Widowed' {{ $data->hcivilstatus == 'Widowed' ? 'selected':'' }}> Widowed </option>
                                <option value='Separated' {{ $data->hcivilstatus == 'Separated' ? 'selected':'' }}> Separated </option>
                                <option value='Divorced' {{ $data->hcivilstatus == 'Divorced' ? 'selected':'' }}> Divorced </option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Name of Father</th>
                            <td>
                            <input type="text" value="{{$data->hfathername}}" name="hfathername" class="form-control"  required>
                            </td>
                        </tr>
                        <!--Father's Citizenship Dropdown list-->
                        <tr>
                            <th>Father's Citizenship</th>
                            <td>
                                <select name="hfathercitizenship" class="form-control" required>
                                <option value="">Select Citizenship</option>
                                <option value="Afghan" {{ $data->hfathercitizenship == 'Afghan' ? 'selected':'' }}>Afghan</option>
                                <option value="Albanian" {{ $data->hfathercitizenship == 'Albanian' ? 'selected':'' }}>Albanian</option>
                                <option value="Algerian" {{ $data->hfathercitizenship == 'Algerian' ? 'selected':'' }}>Algerian</option>
                                <option value="American" {{ $data->hfathercitizenship == 'American' ? 'selected':'' }}>American</option>
                                <option value="Andorran" {{ $data->hfathercitizenship == 'Andorran' ? 'selected':'' }}>Andorran</option>
                                <option value="Angolan" {{ $data->hfathercitizenship == 'Angolan' ? 'selected':'' }}>Angolan</option>
                                <option value="Antiguans" {{ $data->hfathercitizenship == 'Antiguans' ? 'selected':'' }}>Antiguans</option>
                                <option value="Argentinean" {{ $data->hfathercitizenship == 'Argentinean' ? 'selected':'' }}>Argentinean</option>
                                <option value="Armenian" {{ $data->hfathercitizenship == 'Armenian' ? 'selected':'' }}>Armenian</option>
                                <option value="Australian" {{ $data->hfathercitizenship == 'Australian' ? 'selected':'' }}>Australian</option>
                                <option value="Austrian" {{ $data->hfathercitizenship == 'Austrian' ? 'selected':'' }}>Austrian</option>
                                <option value="Azerbaijani" {{ $data->hfathercitizenship == 'Azerbaijani' ? 'selected':'' }}>Azerbaijani</option>
                                <option value="Bahamian" {{ $data->hfathercitizenship == 'Bahamian' ? 'selected':'' }}>Bahamian</option>
                                <option value="Bahraini" {{ $data->hfathercitizenship == 'Bahraini' ? 'selected':'' }}>Bahraini</option>
                                <option value="Bangladeshi" {{ $data->hfathercitizenship == 'Bangladeshi' ? 'selected':'' }}>Bangladeshi</option>
                                <option value="Barbadian" {{ $data->hfathercitizenship == 'Barbadian' ? 'selected':'' }}>Barbadian</option>
                                <option value="Barbudans" {{ $data->hfathercitizenship == 'Barbudans' ? 'selected':'' }}>Barbudans</option>
                                <option value="Batswana" {{ $data->hfathercitizenship == 'Belarusian' ? 'selected':'' }}>Belarusian</option>
                                <option value="Belgian" {{ $data->hfathercitizenship == 'Belgian' ? 'selected':'' }}>Belgian</option>
                                <option value="Belizean" {{ $data->hfathercitizenship == 'Belizean' ? 'selected':'' }}>Belizean</option>
                                <option value="Beninese" {{ $data->hfathercitizenship == 'Beninese' ? 'selected':'' }}>Beninese</option>
                                <option value="Bhutanese" {{ $data->hfathercitizenship == 'Bhutanese' ? 'selected':'' }}>Bhutanese</option>
                                <option value="Bolivian" {{ $data->hfathercitizenship == 'Bolivian' ? 'selected':'' }}>Bolivian</option>
                                <option value="Bosnian" {{ $data->hfathercitizenship == 'Bosnian' ? 'selected':'' }}>Bosnian</option>
                                <option value="Brazilian" {{ $data->hfathercitizenship == 'Brazilian' ? 'selected':'' }}>Brazilian</option>
                                <option value="British" {{ $data->hfathercitizenship == 'British' ? 'selected':'' }}>British</option>
                                <option value="Bruneian" {{ $data->hfathercitizenship == 'Bruneian' ? 'selected':'' }}>Bruneian</option>
                                <option value="Bulgarian" {{ $data->hfathercitizenship == 'Bulgarian' ? 'selected':'' }}>Bulgarian</option>
                                <option value="Burkinabe" {{ $data->hfathercitizenship == 'Burkinabe' ? 'selected':'' }}>Burkinabe</option>
                                <option value="Burmese" {{ $data->hfathercitizenship == 'Burmese' ? 'selected':'' }}>Burmese</option>
                                <option value="Burundian" {{ $data->hfathercitizenship == 'Burundian' ? 'selected':'' }}>Burundian</option>
                                <option value="Cambodian" {{ $data->hfathercitizenship == 'Cambodian' ? 'selected':'' }}>Cambodian</option>
                                <option value="Cameroonian" {{ $data->hfathercitizenship == 'Cameroonian' ? 'selected':'' }}>Cameroonian</option>
                                <option value="Canadian" {{ $data->hfathercitizenship == 'Canadian' ? 'selected':'' }}>Canadian</option>
                                <option value="Cape verdean" {{ $data->hfathercitizenship == 'Cape Verdean' ? 'selected':'' }}>Cape Verdean</option>
                                <option value="Central African" {{ $data->hfathercitizenship == 'Central African' ? 'selected':'' }}>Central African</option>
                                <option value="Chadian" {{ $data->hfathercitizenship == 'Chadian' ? 'selected':'' }}>Chadian</option>
                                <option value="Chilean" {{ $data->hfathercitizenship == 'Chilean' ? 'selected':'' }}>Chilean</option>
                                <option value="Chinese" {{ $data->hfathercitizenship == 'Chinese' ? 'selected':'' }}>Chinese</option>
                                <option value="Colombian" {{ $data->hfathercitizenship == 'Colombian' ? 'selected':'' }}>Colombian</option>
                                <option value="Comoran" {{ $data->hfathercitizenship == 'Comoran' ? 'selected':'' }}>Comoran</option>
                                <option value="Congolese" {{ $data->hfathercitizenship == 'Congolese' ? 'selected':'' }}>Congolese</option>
                                <option value="Costa Rican" {{ $data->hfathercitizenship == 'Costa Rican' ? 'selected':'' }}>Costa Rican</option>
                                <option value="Croatian" {{ $data->hfathercitizenship == 'Croatian' ? 'selected':'' }}>Croatian</option>
                                <option value="Cuban" {{ $data->hfathercitizenship == 'Cuban' ? 'selected':'' }}>Cuban</option>
                                <option value="Cypriot" {{ $data->hfathercitizenship == 'Cypriot' ? 'selected':'' }}>Cypriot</option>
                                <option value="Czech" {{ $data->hfathercitizenship == 'Czech' ? 'selected':'' }}>Czech</option>
                                <option value="Danish" {{ $data->hfathercitizenship == 'Danish' ? 'selected':'' }}>Danish</option>
                                <option value="Djibouti" {{ $data->hfathercitizenship == 'Djibouti' ? 'selected':'' }}>Djibouti</option>
                                <option value="Dominican" {{ $data->hfathercitizenship == 'Dominican' ? 'selected':'' }}>Dominican</option>
                                <option value="Dutch" {{ $data->hfathercitizenship == 'Dutch' ? 'selected':'' }}>Dutch</option>
                                <option value="East Timorese" {{ $data->hfathercitizenship == '>East Timorese' ? 'selected':'' }}>East Timorese</option>
                                <option value="Ecuadorean" {{ $data->hfathercitizenship == 'Ecuadorean' ? 'selected':'' }}>Ecuadorean</option>
                                <option value="Egyptian" {{ $data->hfathercitizenship == 'Egyptian' ? 'selected':'' }}>Egyptian</option>
                                <option value="Emirian" {{ $data->hfathercitizenship == 'Emirian' ? 'selected':'' }}>Emirian</option>
                                <option value="Equatorial Guinean" {{ $data->hfathercitizenship == 'Equatorial Guinean' ? 'selected':'' }}>Equatorial Guinean</option>
                                <option value="Eritrean" {{ $data->hfathercitizenship == 'Eritrean' ? 'selected':'' }}>Eritrean</option>
                                <option value="Estonian" {{ $data->hfathercitizenship == 'Estonian' ? 'selected':'' }}>Estonian</option>
                                <option value="Ethiopian" {{ $data->hfathercitizenship == 'Ethiopian' ? 'selected':'' }}>Ethiopian</option>
                                <option value="Fijian" {{ $data->hfathercitizenship == 'Fijian' ? 'selected':'' }}>Fijian</option>
                                <option value="Filipino" {{ $data->hfathercitizenship == 'Filipino' ? 'selected':'' }}>Filipino</option>
                                <option value="Finnish" {{ $data->hfathercitizenship == 'Finnish' ? 'selected':'' }}>Finnish</option>
                                <option value="French" {{ $data->hfathercitizenship == 'French' ? 'selected':'' }}></option>
                                <option value="Gabonese" {{ $data->hfathercitizenship == 'Gabonese' ? 'selected':'' }}>Gabonese</option>
                                <option value="Gambian" {{ $data->hfathercitizenship == 'Gambian' ? 'selected':'' }}>Gambian</option>
                                <option value="Georgian" {{ $data->hfathercitizenship == 'Georgian' ? 'selected':'' }}>Georgian</option>
                                <option value="German" {{ $data->hfathercitizenship == 'German' ? 'selected':'' }}>German</option>
                                <option value="Ghanaian" {{ $data->hfathercitizenship == 'Ghanaian' ? 'selected':'' }}>Ghanaian</option>
                                <option value="Greek" {{ $data->hfathercitizenship == 'Greek' ? 'selected':'' }}>Greek</option>
                                <option value="Grenadian" {{ $data->hfathercitizenship == 'Grenadian' ? 'selected':'' }}>Grenadian</option>
                                <option value="Guatemalan" {{ $data->hfathercitizenship == 'Guatemalan' ? 'selected':'' }}>Guatemalan</option>
                                <option value="Guinea-Bissauan" {{ $data->hfathercitizenship == 'Guinea-Bissauan' ? 'selected':'' }}>Guinea-Bissauan</option>
                                <option value="Guinean" {{ $data->hfathercitizenship == 'Guinean' ? 'selected':'' }}>Guinean</option>
                                <option value="Guyanese" {{ $data->hfathercitizenship == 'Guyanese' ? 'selected':'' }}>Guyanese</option>
                                <option value="Haitian" {{ $data->hfathercitizenship == 'Haitian' ? 'selected':'' }}>Haitian</option>
                                <option value="Herzegovinian" {{ $data->hfathercitizenship == 'Herzegovinian' ? 'selected':'' }}>Herzegovinian</option>
                                <option value="Honduran" {{ $data->hfathercitizenship == 'Honduran' ? 'selected':'' }}>Honduran</option>
                                <option value="Hungarian" {{ $data->hfathercitizenship == 'Hungarian' ? 'selected':'' }}>Hungarian</option>
                                <option value="Icelander" {{ $data->hfathercitizenship == 'Icelander' ? 'selected':'' }}>Icelander</option>
                                <option value="Indian" {{ $data->hfathercitizenship == 'Indian' ? 'selected':'' }}>Indian</option>
                                <option value="Indonesian" {{ $data->hfathercitizenship == 'Indonesian' ? 'selected':'' }}>Indonesian</option>
                                <option value="Iranian" {{ $data->hfathercitizenship == 'Iranian' ? 'selected':'' }}>Iranian</option>
                                <option value="Iraqi" {{ $data->hfathercitizenship == 'Iraqi' ? 'selected':'' }}>Iraqi</option>
                                <option value="Irish" {{ $data->hfathercitizenship == 'Irish' ? 'selected':'' }}>Irish</option>
                                <option value="Israeli" {{ $data->hfathercitizenship == 'Israeli' ? 'selected':'' }}>Israeli</option>
                                <option value="Italian" {{ $data->hfathercitizenship == 'Italian' ? 'selected':'' }}>Italian</option>
                                <option value="Ivorian" {{ $data->hfathercitizenship == 'Ivorian' ? 'selected':'' }}>Ivorian</option>
                                <option value="Jamaican" {{ $data->hfathercitizenship == 'Jamaican' ? 'selected':'' }}>Jamaican</option>
                                <option value="Japanese" {{ $data->hfathercitizenship == 'Japanese' ? 'selected':'' }}>Japanese</option>
                                <option value="Jordanian" {{ $data->hfathercitizenship == 'Jordanian' ? 'selected':'' }}>Jordanian</option>
                                <option value="Kazakhstani" {{ $data->hfathercitizenship == 'Kazakhstani' ? 'selected':'' }}>Kazakhstani</option>
                                <option value="Kenyan" {{ $data->hfathercitizenship == 'Kenyan' ? 'selected':'' }}>Kenyan</option>
                                <option value="Kittian and Nevisian" {{ $data->hfathercitizenship == 'Kittian and Nevisian' ? 'selected':'' }}>Kittian and Nevisian</option>
                                <option value="Kuwaiti" {{ $data->hfathercitizenship == 'Kuwaiti' ? 'selected':'' }}>Kuwaiti</option>
                                <option value="Kyrgyz" {{ $data->hfathercitizenship == 'Kyrgyz' ? 'selected':'' }}>Kyrgyz</option>
                                <option value="Laotian" {{ $data->hfathercitizenship == 'Laotian' ? 'selected':'' }}>Laotian</option>
                                <option value="Latvian" {{ $data->hfathercitizenship == 'Latvian' ? 'selected':'' }}>Latvian</option>
                                <option value="Lebanese" {{ $data->hfathercitizenship == 'Lebanese' ? 'selected':'' }}>Lebanese</option>
                                <option value="Liberian" {{ $data->hfathercitizenship == 'Liberian' ? 'selected':'' }}>Liberian</option>
                                <option value="Libyan" {{ $data->hfathercitizenship == 'Libyan' ? 'selected':'' }}>Libyan</option>
                                <option value="Liechtensteiner" {{ $data->hfathercitizenship == 'Liechtensteiner' ? 'selected':'' }}>Liechtensteiner</option>
                                <option value="Lithuanian" {{ $data->hfathercitizenship == 'Lithuanian' ? 'selected':'' }}>Lithuanian</option>
                                <option value="Luxembourger" {{ $data->hfathercitizenship == 'Luxembourger' ? 'selected':'' }}>Luxembourger</option>
                                <option value="Macedonian" {{ $data->hfathercitizenship == 'Macedonian' ? 'selected':'' }}>Macedonian</option>
                                <option value="Malagasy" {{ $data->hfathercitizenship == 'Malagasy' ? 'selected':'' }}>Malagasy</option>
                                <option value="Malawian" {{ $data->hfathercitizenship == 'Malawian' ? 'selected':'' }}>Malawian</option>
                                <option value="Malaysian" {{ $data->hfathercitizenship == 'Malaysian' ? 'selected':'' }}>Malaysian</option>
                                <option value="Maldivan" {{ $data->hfathercitizenship == 'Maldivan' ? 'selected':'' }}>Maldivan</option>
                                <option value="Malian" {{ $data->hfathercitizenship == 'Malian' ? 'selected':'' }}>Malian</option>
                                <option value="Maltese" {{ $data->hfathercitizenship == 'Maltese' ? 'selected':'' }}>Maltese</option>
                                <option value="Marshallese" {{ $data->hfathercitizenship == 'Marshallese' ? 'selected':'' }}>Marshallese</option>
                                <option value="Mauritanian" {{ $data->hfathercitizenship == 'Mauritanian' ? 'selected':'' }}>Mauritanian</option>
                                <option value="Mauritian" {{ $data->hfathercitizenship == 'Mauritian' ? 'selected':'' }}>Mauritian</option>
                                <option value="Mexican" {{ $data->hfathercitizenship == 'Mexican' ? 'selected':'' }}>Mexican</option>
                                <option value="Micronesian" {{ $data->hfathercitizenship == 'Micronesian' ? 'selected':'' }}>Micronesian</option>
                                <option value="Moldovan" {{ $data->hfathercitizenship == 'Moldovan' ? 'selected':'' }}>Moldovan</option>
                                <option value="Monacan" {{ $data->hfathercitizenship == 'Monacan' ? 'selected':'' }}>Monacan</option>
                                <option value="Mongolian" {{ $data->hfathercitizenship == 'Mongolian' ? 'selected':'' }}>Mongolian</option>
                                <option value="Moroccan" {{ $data->hfathercitizenship == 'Moroccan' ? 'selected':'' }}>Moroccan</option>
                                <option value="Mosotho" {{ $data->hfathercitizenship == 'Mosotho' ? 'selected':'' }}>Mosotho</option>
                                <option value="Motswana" {{ $data->hfathercitizenship == 'Motswana' ? 'selected':'' }}>Motswana</option>
                                <option value="Mozambican" {{ $data->hfathercitizenship == 'Mozambican' ? 'selected':'' }}>Mozambican</option>
                                <option value="Namibian" {{ $data->hfathercitizenship == 'Namibian' ? 'selected':'' }}>Namibian</option>
                                <option value="Nauruan" {{ $data->hfathercitizenship == 'Nauruan' ? 'selected':'' }}>Nauruan</option>
                                <option value="Nepalese" {{ $data->hfathercitizenship == 'Nepalese' ? 'selected':'' }}>Nepalese</option>
                                <option value="New Zealander" {{ $data->hfathercitizenship == 'New Zealander' ? 'selected':'' }}>New Zealander</option>
                                <option value="Ni-Vanuatu" {{ $data->hfathercitizenship == 'Ni-Vanuatu' ? 'selected':'' }}>Ni-Vanuatu</option>
                                <option value="Nnicaraguan" {{ $data->hfathercitizenship == 'Nicaraguan' ? 'selected':'' }}>Nicaraguan</option>
                                <option value="Nigerien" {{ $data->hfathercitizenship == 'Nigerien' ? 'selected':'' }}>Nigerien</option>
                                <option value="North Korean" {{ $data->hfathercitizenship == 'North Korean' ? 'selected':'' }}>North Korean</option>
                                <option value="Northern Irish" {{ $data->hfathercitizenship == 'Northern Irish' ? 'selected':'' }}>Northern Irish</option>
                                <option value="Norwegian" {{ $data->hfathercitizenship == 'Norwegian ' ? 'selected':'' }}>Norwegian</option>
                                <option value="Omani" {{ $data->hfathercitizenship == 'Omani' ? 'selected':'' }}>Omani</option>
                                <option value="Pakistani" {{ $data->hfathercitizenship == 'Pakistani' ? 'selected':'' }}>Pakistani</option>
                                <option value="Palauan" {{ $data->hfathercitizenship == 'Palauan' ? 'selected':'' }}>Palauan</option>
                                <option value="Panamanian" {{ $data->hfathercitizenship == 'Panamanian' ? 'selected':'' }}>Panamanian</option>
                                <option value="Papua New Guinean" {{ $data->hfathercitizenship == 'Papua New Guinea' ? 'selected':'' }}>Papua New Guinean</option>
                                <option value="Paraguayan" {{ $data->hfathercitizenship == 'Paraguayan' ? 'selected':'' }}>Paraguayan</option>
                                <option value="Peruvian" {{ $data->hfathercitizenship == 'Peruvian' ? 'selected':'' }}>Peruvian</option>
                                <option value="Polish" {{ $data->hfathercitizenship == 'Polish' ? 'selected':'' }}>Polish</option>
                                <option value="Portuguese" {{ $data->hfathercitizenship == 'Portuguese' ? 'selected':'' }}>Portuguese</option>
                                <option value="Qatari" {{ $data->hfathercitizenship == 'Qatari' ? 'selected':'' }}>Qatari</option>
                                <option value="Romanian" {{ $data->hfathercitizenship == 'Romanian' ? 'selected':'' }}>Romanian</option>
                                <option value="Russian" {{ $data->hfathercitizenship == 'Russian' ? 'selected':'' }}>Russian</option>
                                <option value="Rwandan" {{ $data->hfathercitizenship == 'Rwandan' ? 'selected':'' }}>Rwandan</option>
                                <option value="Saint Lucian" {{ $data->hfathercitizenship == 'Saint Lucian' ? 'selected':'' }}>Saint Lucian</option>
                                <option value="Salvadoran" {{ $data->hfathercitizenship == 'Salvadoran' ? 'selected':'' }}>Salvadoran</option>
                                <option value="Samoan" {{ $data->hfathercitizenship == 'Samoan' ? 'selected':'' }}>Samoan</option>
                                <option value="San Marinese" {{ $data->hfathercitizenship == 'San Marinese' ? 'selected':'' }}>San Marinese</option>
                                <option value="Sao Tomean" {{ $data->hfathercitizenship == 'Sao Tomean' ? 'selected':'' }}>Sao Tomean</option>
                                <option value="Saudi" {{ $data->hfathercitizenship == 'Saudi' ? 'selected':'' }}>Saudi</option>
                                <option value="Scottish" {{ $data->hfathercitizenship == 'Scottish' ? 'selected':'' }}>Scottish</option>
                                <option value="Senegalese" {{ $data->hfathercitizenship == 'Senegalese' ? 'selected':'' }}>Senegalese</option>
                                <option value="Serbian" {{ $data->hfathercitizenship == 'Serbian' ? 'selected':'' }}>Serbian</option>
                                <option value="Seychellois" {{ $data->hfathercitizenship == 'Seychellois' ? 'selected':'' }}>Seychellois</option>
                                <option value="Sierra Leonean" {{ $data->hfathercitizenship == 'Sierra Leonea' ? 'selected':'' }}>Sierra Leonean</option>
                                <option value="Singaporean" {{ $data->hfathercitizenship == 'Singaporean' ? 'selected':'' }}>Singaporean</option>
                                <option value="Slovakian" {{ $data->hfathercitizenship == 'Slovakian' ? 'selected':'' }}>Slovakian</option>
                                <option value="Slovenian" {{ $data->hfathercitizenship == 'Slovenian' ? 'selected':'' }}>Slovenian</option>
                                <option value="Solomon Islander" {{ $data->hfathercitizenship == 'Solomon Islander' ? 'selected':'' }}>Solomon Islander</option>
                                <option value="Somali" {{ $data->hfathercitizenship == 'Somali' ? 'selected':'' }}>Somali</option>
                                <option value="South African" {{ $data->hfathercitizenship == 'South African' ? 'selected':'' }}>South African</option>
                                <option value="South Korean" {{ $data->hfathercitizenship == 'South Korean' ? 'selected':'' }}>South Korean</option>
                                <option value="Spanish" {{ $data->hfathercitizenship == 'Spanish' ? 'selected':'' }}>Spanish</option>
                                <option value="Sri Lankan" {{ $data->hfathercitizenship == 'Sri Lankan' ? 'selected':'' }}>Sri Lankan</option>
                                <option value="Sudanese" {{ $data->hfathercitizenship == 'Sudanese' ? 'selected':'' }}>Sudanese</option>
                                <option value="Surinamer" {{ $data->hfathercitizenship == 'Surinamer' ? 'selected':'' }}>Surinamer</option>
                                <option value="Swazi" {{ $data->hfathercitizenship == 'Swazi' ? 'selected':'' }}>Swazi</option>
                                <option value="Swedish" {{ $data->hfathercitizenship == 'Swedish' ? 'selected':'' }}>Swedish</option>
                                <option value="Swiss" {{ $data->hfathercitizenship == 'Swiss' ? 'selected':'' }}>Swiss</option>
                                <option value="Syrian" {{ $data->hfathercitizenship == 'Syrian' ? 'selected':'' }}>Syrian</option>
                                <option value="Taiwanese" {{ $data->hfathercitizenship == 'Taiwanese' ? 'selected':'' }}>Taiwanese</option>
                                <option value="Tajik" {{ $data->hfathercitizenship == 'Tajik' ? 'selected':'' }}>Tajik</option>
                                <option value="Tanzanian" {{ $data->hfathercitizenship == 'Tanzanian' ? 'selected':'' }}>Tanzanian</option>
                                <option value="Thai" {{ $data->hfathercitizenship == 'Thai' ? 'selected':'' }}>Thai</option>
                                <option value="Togolese" {{ $data->hfathercitizenship == 'Togolese' ? 'selected':'' }}>Togolese</option>
                                <option value="Tongan" {{ $data->hfathercitizenship == 'Tongan' ? 'selected':'' }}>Tongan</option>
                                <option value="Trinidadian or Tobagonian" {{ $data->hfathercitizenship == 'Trinidadian or Tobagoni' ? 'selected':'' }}>Trinidadian or Tobagonian</option>
                                <option value="Tunisian" {{ $data->hfathercitizenship == 'Tunisian' ? 'selected':'' }}>Tunisian</option>
                                <option value="Turkish" {{ $data->hfathercitizenship == 'Turkish' ? 'selected':'' }}>Turkish</option>
                                <option value="Tuvaluan" {{ $data->hfathercitizenship == 'Tuvaluan' ? 'selected':'' }}>Tuvaluan</option>
                                <option value="Ugandan" {{ $data->hfathercitizenship == 'Ugandan' ? 'selected':'' }}>Ugandan</option>
                                <option value="Ukrainian" {{ $data->hfathercitizenship == 'Ukrainian' ? 'selected':'' }}>Ukrainian</option>
                                <option value="Uruguayan" {{ $data->hfathercitizenship == 'Uruguayan' ? 'selected':'' }}>Uruguayan</option>
                                <option value="Uzbekistani" {{ $data->hfathercitizenship == 'Uzbekistani' ? 'selected':'' }}>Uzbekistani</option>
                                <option value="Venezuelan" {{ $data->hfathercitizenship == 'Venezuelan' ? 'selected':'' }}>Venezuelan</option>
                                <option value="Vietnamese" {{ $data->hfathercitizenship == 'Vietnamese' ? 'selected':'' }}>Vietnamese</option>
                                <option value="Welsh" {{ $data->hfathercitizenship == 'Welsh' ? 'selected':'' }}>Welsh</option>
                                <option value="Yemenite" {{ $data->hfathercitizenship == 'Yemenite' ? 'selected':'' }}>Yemenite</option>
                                <option value="Zambian" {{ $data->hfathercitizenship == 'Zambian' ? 'selected':'' }}>Zambian</option>
                                <option value="Zimbabwean" {{ $data->hfathercitizenship == 'Zimbabwean' ? 'selected':'' }}>Zimbabwean</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Name of Mother</th>
                            <td>
                            <input type="text" value="{{$data->hmothername}}" name="hmothername" class="form-control"  required>
                            </td>
                        </tr>
                        <!--Mother's Citizenship Dropdown List-->
                        <tr>
                            <th>Mother's Citizenship</th>
                            <td>
                                <select name="hmothercitizenship" class="form-control" required>
                                <option value="">Select Citizenship</option>
                                <option value="Afghan" {{ $data->hmothercitizenship == 'Afghan' ? 'selected':'' }}>Afghan</option>
                                <option value="Albanian" {{ $data->hmothercitizenship == 'Albanian' ? 'selected':'' }}>Albanian</option>
                                <option value="Algerian" {{ $data->hmothercitizenship == 'Algerian' ? 'selected':'' }}>Algerian</option>
                                <option value="American" {{ $data->hmothercitizenship == 'American' ? 'selected':'' }}>American</option>
                                <option value="Andorran" {{ $data->hmothercitizenship == 'Andorran' ? 'selected':'' }}>Andorran</option>
                                <option value="Angolan" {{ $data->hmothercitizenship == 'Angolan' ? 'selected':'' }}>Angolan</option>
                                <option value="Antiguans" {{ $data->hmothercitizenship == 'Antiguans' ? 'selected':'' }}>Antiguans</option>
                                <option value="Argentinean" {{ $data->hmothercitizenship == 'Argentinean' ? 'selected':'' }}>Argentinean</option>
                                <option value="Armenian" {{ $data->hmothercitizenship == 'Armenian' ? 'selected':'' }}>Armenian</option>
                                <option value="Australian" {{ $data->hmothercitizenship == 'Australian' ? 'selected':'' }}>Australian</option>
                                <option value="Austrian" {{ $data->hmothercitizenship == 'Austrian' ? 'selected':'' }}>Austrian</option>
                                <option value="Azerbaijani" {{ $data->hmothercitizenship == 'Azerbaijani' ? 'selected':'' }}>Azerbaijani</option>
                                <option value="Bahamian" {{ $data->hmothercitizenship == 'Bahamian' ? 'selected':'' }}>Bahamian</option>
                                <option value="Bahraini" {{ $data->hmothercitizenship == 'Bahraini' ? 'selected':'' }}>Bahraini</option>
                                <option value="Bangladeshi" {{ $data->hmothercitizenship == 'Bangladeshi' ? 'selected':'' }}>Bangladeshi</option>
                                <option value="Barbadian" {{ $data->hmothercitizenship == 'Barbadian' ? 'selected':'' }}>Barbadian</option>
                                <option value="Barbudans" {{ $data->hmothercitizenship == 'Barbudans' ? 'selected':'' }}>Barbudans</option>
                                <option value="Batswana" {{ $data->hmothercitizenship == 'Batswana' ? 'selected':'' }}>Batswana</option>
                                <option value="Belarusian" {{ $data->hmothercitizenship == 'Belarusian' ? 'selected':'' }}>Belarusian</option>
                                <option value="Belgian" {{ $data->hmothercitizenship == 'Belgian' ? 'selected':'' }}>Belgian</option>
                                <option value="Belizean" {{ $data->hmothercitizenship == 'Belizean' ? 'selected':'' }}>Belizean</option>
                                <option value="Beninese" {{ $data->hmothercitizenship == 'Beninese' ? 'selected':'' }}>Beninese</option>
                                <option value="Bhutanese" {{ $data->hmothercitizenship == 'Bhutanese' ? 'selected':'' }}>Bhutanese</option>
                                <option value="Bolivian" {{ $data->hmothercitizenship == 'Bolivian' ? 'selected':'' }}>Bolivian</option>
                                <option value="Bosnian" {{ $data->hmothercitizenship == 'Bosnian' ? 'selected':'' }}>Bosnian</option>
                                <option value="Brazilian" {{ $data->hmothercitizenship == 'Brazilian' ? 'selected':'' }}>Brazilian</option>
                                <option value="British" {{ $data->hmothercitizenship == 'British' ? 'selected':'' }}>British</option>
                                <option value="Bruneian" {{ $data->hmothercitizenship == 'Bruneian' ? 'selected':'' }}>Bruneian</option>
                                <option value="Bulgarian" {{ $data->hmothercitizenship == 'Bulgarian' ? 'selected':'' }}>Bulgarian</option>
                                <option value="Burkinabe" {{ $data->hmothercitizenship == 'Burkinabe' ? 'selected':'' }}>Burkinabe</option>
                                <option value="Burmese" {{ $data->hmothercitizenship == 'Burmese' ? 'selected':'' }}>Burmese</option>
                                <option value="Burundian" {{ $data->hmothercitizenship == 'Burundian' ? 'selected':'' }}>Burundian</option>
                                <option value="Cambodian" {{ $data->hmothercitizenship == 'Cambodian' ? 'selected':'' }}>Cambodian</option>
                                <option value="Cameroonian" {{ $data->hmothercitizenship == 'Cameroonian' ? 'selected':'' }}>Cameroonian</option>
                                <option value="Canadian" {{ $data->hmothercitizenship == 'Canadian' ? 'selected':'' }}>Canadian</option>
                                <option value="Cape verdean" {{ $data->hmothercitizenship == 'Cape Verdean' ? 'selected':'' }}>Cape Verdean</option>
                                <option value="Central African" {{ $data->hmothercitizenship == 'Central African' ? 'selected':'' }}>Central African</option>
                                <option value="Chadian" {{ $data->hmothercitizenship == 'Chadian' ? 'selected':'' }}>Chadian</option>
                                <option value="Chilean" {{ $data->hmothercitizenship == 'Chilean' ? 'selected':'' }}>Chilean</option>
                                <option value="Chinese" {{ $data->hmothercitizenship == 'Chinese' ? 'selected':'' }}>Chinese</option>
                                <option value="Colombian" {{ $data->hmothercitizenship == 'Colombian' ? 'selected':'' }}>Colombian</option>
                                <option value="Comoran" {{ $data->hmothercitizenship == 'Comoran' ? 'selected':'' }}>Comoran</option>
                                <option value="Congolese" {{ $data->hmothercitizenship == 'Congolese' ? 'selected':'' }}>Congolese</option>
                                <option value="Costa Rican" {{ $data->hmothercitizenship == 'Costa Rican' ? 'selected':'' }}>Costa Rican</option>
                                <option value="Croatian" {{ $data->hmothercitizenship == 'Croatian' ? 'selected':'' }}>Croatian</option>
                                <option value="Cuban" {{ $data->hmothercitizenship == 'Cuban' ? 'selected':'' }}>Cuban</option>
                                <option value="Cypriot" {{ $data->hmothercitizenship == 'Cypriot' ? 'selected':'' }}>Cypriot</option>
                                <option value="Czech" {{ $data->hmothercitizenship == 'Czech' ? 'selected':'' }}>Czech</option>
                                <option value="Danish" {{ $data->hmothercitizenship == 'Danish' ? 'selected':'' }}>Danish</option>
                                <option value="Djibouti" {{ $data->hmothercitizenship == 'Djibouti' ? 'selected':'' }}>Djibouti</option>
                                <option value="Dominican" {{ $data->hmothercitizenship == 'Dominican' ? 'selected':'' }}>Dominican</option>
                                <option value="Dutch" {{ $data->hmothercitizenship == 'Dutch' ? 'selected':'' }}>Dutch</option>
                                <option value="East Timorese" {{ $data->hmothercitizenship == '>East Timorese' ? 'selected':'' }}>East Timorese</option>
                                <option value="Ecuadorean" {{ $data->hmothercitizenship == 'Ecuadorean' ? 'selected':'' }}>Ecuadorean</option>
                                <option value="Egyptian" {{ $data->hmothercitizenship == 'Egyptian' ? 'selected':'' }}>Egyptian</option>
                                <option value="Emirian" {{ $data->hmothercitizenship == 'Emirian' ? 'selected':'' }}>Emirian</option>
                                <option value="Equatorial Guinean" {{ $data->hmothercitizenship == 'Equatorial Guinean' ? 'selected':'' }}>Equatorial Guinean</option>
                                <option value="Eritrean" {{ $data->hmothercitizenship == 'Eritrean' ? 'selected':'' }}>Eritrean</option>
                                <option value="Estonian" {{ $data->hmothercitizenship == 'Estonian' ? 'selected':'' }}>Estonian</option>
                                <option value="Ethiopian" {{ $data->hmothercitizenship == 'Ethiopian' ? 'selected':'' }}>Ethiopian</option>
                                <option value="Fijian" {{ $data->hmothercitizenship == 'Fijian' ? 'selected':'' }}>Fijian</option>
                                <option value="Filipino" {{ $data->hmothercitizenship == 'Filipino' ? 'selected':'' }}>Filipino</option>
                                <option value="Finnish" {{ $data->hmothercitizenship == 'Finnish' ? 'selected':'' }}>Finnish</option>
                                <option value="French" {{ $data->hmothercitizenship == 'French' ? 'selected':'' }}></option>
                                <option value="Gabonese" {{ $data->hmothercitizenship == 'Gabonese' ? 'selected':'' }}>Gabonese</option>
                                <option value="Gambian" {{ $data->hmothercitizenship == 'Gambian' ? 'selected':'' }}>Gambian</option>
                                <option value="Georgian" {{ $data->hmothercitizenship == 'Georgian' ? 'selected':'' }}>Georgian</option>
                                <option value="German" {{ $data->hmothercitizenship == 'German' ? 'selected':'' }}>German</option>
                                <option value="Ghanaian" {{ $data->hmothercitizenship == 'Ghanaian' ? 'selected':'' }}>Ghanaian</option>
                                <option value="Greek" {{ $data->hmothercitizenship == 'Greek' ? 'selected':'' }}>Greek</option>
                                <option value="Grenadian" {{ $data->hmothercitizenship == 'Grenadian' ? 'selected':'' }}>Grenadian</option>
                                <option value="Guatemalan" {{ $data->hmothercitizenship == 'Guatemalan' ? 'selected':'' }}>Guatemalan</option>
                                <option value="Guinea-Bissauan" {{ $data->hmothercitizenship == 'Guinea-Bissauan' ? 'selected':'' }}>Guinea-Bissauan</option>
                                <option value="Guinean" {{ $data->hmothercitizenship == 'Guinean' ? 'selected':'' }}>Guinean</option>
                                <option value="Guyanese" {{ $data->hmothercitizenship == 'Guyanese' ? 'selected':'' }}>Guyanese</option>
                                <option value="Haitian" {{ $data->hmothercitizenship == 'Haitian' ? 'selected':'' }}>Haitian</option>
                                <option value="Herzegovinian" {{ $data->hmothercitizenship == 'Herzegovinian' ? 'selected':'' }}>Herzegovinian</option>
                                <option value="Honduran" {{ $data->hmothercitizenship == 'Honduran' ? 'selected':'' }}>Honduran</option>
                                <option value="Hungarian" {{ $data->hmothercitizenship == 'Hungarian' ? 'selected':'' }}>Hungarian</option>
                                <option value="Icelander" {{ $data->hmothercitizenship == 'Icelander' ? 'selected':'' }}>Icelander</option>
                                <option value="Indian" {{ $data->hmothercitizenship == 'Indian' ? 'selected':'' }}>Indian</option>
                                <option value="Indonesian" {{ $data->hmothercitizenship == 'Indonesian' ? 'selected':'' }}>Indonesian</option>
                                <option value="Iranian" {{ $data->hmothercitizenship == 'Iranian' ? 'selected':'' }}>Iranian</option>
                                <option value="Iraqi" {{ $data->hmothercitizenship == 'Iraqi' ? 'selected':'' }}>Iraqi</option>
                                <option value="Irish" {{ $data->hmothercitizenship == 'Irish' ? 'selected':'' }}>Irish</option>
                                <option value="Israeli" {{ $data->hmothercitizenship == 'Israeli' ? 'selected':'' }}>Israeli</option>
                                <option value="Italian" {{ $data->hmothercitizenship == 'Italian' ? 'selected':'' }}>Italian</option>
                                <option value="Ivorian" {{ $data->hmothercitizenship == 'Ivorian' ? 'selected':'' }}>Ivorian</option>
                                <option value="Jamaican" {{ $data->hmothercitizenship == 'Jamaican' ? 'selected':'' }}>Jamaican</option>
                                <option value="Japanese" {{ $data->hmothercitizenship == 'Japanese' ? 'selected':'' }}>Japanese</option>
                                <option value="Jordanian" {{ $data->hmothercitizenship == 'Jordanian' ? 'selected':'' }}>Jordanian</option>
                                <option value="Kazakhstani" {{ $data->hmothercitizenship == 'Kazakhstani' ? 'selected':'' }}>Kazakhstani</option>
                                <option value="Kenyan" {{ $data->hmothercitizenship == 'Kenyan' ? 'selected':'' }}>Kenyan</option>
                                <option value="Kittian and Nevisian" {{ $data->hmothercitizenship == 'Kittian and Nevisian' ? 'selected':'' }}>Kittian and Nevisian</option>
                                <option value="Kuwaiti" {{ $data->hmothercitizenship == 'Kuwaiti' ? 'selected':'' }}>Kuwaiti</option>
                                <option value="Kyrgyz" {{ $data->hmothercitizenship == 'Kyrgyz' ? 'selected':'' }}>Kyrgyz</option>
                                <option value="Laotian" {{ $data->hmothercitizenship == 'Laotian' ? 'selected':'' }}>Laotian</option>
                                <option value="Latvian" {{ $data->hmothercitizenship == 'Latvian' ? 'selected':'' }}>Latvian</option>
                                <option value="Lebanese" {{ $data->hmothercitizenship == 'Lebanese' ? 'selected':'' }}>Lebanese</option>
                                <option value="Liberian" {{ $data->hmothercitizenship == 'Liberian' ? 'selected':'' }}>Liberian</option>
                                <option value="Libyan" {{ $data->hmothercitizenship == 'Libyan' ? 'selected':'' }}>Libyan</option>
                                <option value="Liechtensteiner" {{ $data->hmothercitizenship == 'Liechtensteiner' ? 'selected':'' }}>Liechtensteiner</option>
                                <option value="Lithuanian" {{ $data->hmothercitizenship == 'Lithuanian' ? 'selected':'' }}>Lithuanian</option>
                                <option value="Luxembourger" {{ $data->hmothercitizenship == 'Luxembourger' ? 'selected':'' }}>Luxembourger</option>
                                <option value="Macedonian" {{ $data->hmothercitizenship == 'Macedonian' ? 'selected':'' }}>Macedonian</option>
                                <option value="Malagasy" {{ $data->hmothercitizenship == 'Malagasy' ? 'selected':'' }}>Malagasy</option>
                                <option value="Malawian" {{ $data->hmothercitizenship == 'Malawian' ? 'selected':'' }}>Malawian</option>
                                <option value="Malaysian" {{ $data->hmothercitizenship == 'Malaysian' ? 'selected':'' }}>Malaysian</option>
                                <option value="Maldivan" {{ $data->hmothercitizenship == 'Maldivan' ? 'selected':'' }}>Maldivan</option>
                                <option value="Malian" {{ $data->hmothercitizenship == 'Malian' ? 'selected':'' }}>Malian</option>
                                <option value="Maltese" {{ $data->hmothercitizenship == 'Maltese' ? 'selected':'' }}>Maltese</option>
                                <option value="Marshallese" {{ $data->hmothercitizenship == 'Marshallese' ? 'selected':'' }}>Marshallese</option>
                                <option value="Mauritanian" {{ $data->hmothercitizenship == 'Mauritanian' ? 'selected':'' }}>Mauritanian</option>
                                <option value="Mauritian" {{ $data->hmothercitizenship == 'Mauritian' ? 'selected':'' }}>Mauritian</option>
                                <option value="Mexican" {{ $data->hmothercitizenship == 'Mexican' ? 'selected':'' }}>Mexican</option>
                                <option value="Micronesian" {{ $data->hmothercitizenship == 'Micronesian' ? 'selected':'' }}>Micronesian</option>
                                <option value="Moldovan" {{ $data->hmothercitizenship == 'Moldovan' ? 'selected':'' }}>Moldovan</option>
                                <option value="Monacan" {{ $data->hmothercitizenship == 'Monacan' ? 'selected':'' }}>Monacan</option>
                                <option value="Mongolian" {{ $data->hmothercitizenship == 'Mongolian' ? 'selected':'' }}>Mongolian</option>
                                <option value="Moroccan" {{ $data->hmothercitizenship == 'Moroccan' ? 'selected':'' }}>Moroccan</option>
                                <option value="Mosotho" {{ $data->hmothercitizenship == 'Mosotho' ? 'selected':'' }}>Mosotho</option>
                                <option value="Motswana" {{ $data->hmothercitizenship == 'Motswana' ? 'selected':'' }}>Motswana</option>
                                <option value="Mozambican" {{ $data->hmothercitizenship == 'Mozambican' ? 'selected':'' }}>Mozambican</option>
                                <option value="Namibian" {{ $data->hmothercitizenship == 'Namibian' ? 'selected':'' }}>Namibian</option>
                                <option value="Nauruan" {{ $data->hmothercitizenship == 'Nauruan' ? 'selected':'' }}>Nauruan</option>
                                <option value="Nepalese" {{ $data->hmothercitizenship == 'Nepalese' ? 'selected':'' }}>Nepalese</option>
                                <option value="New Zealander" {{ $data->hmothercitizenship == 'New Zealander' ? 'selected':'' }}>New Zealander</option>
                                <option value="Ni-Vanuatu" {{ $data->hmothercitizenship == 'Ni-Vanuatu' ? 'selected':'' }}>Ni-Vanuatu</option>
                                <option value="Nnicaraguan" {{ $data->hmothercitizenship == 'Nicaraguan' ? 'selected':'' }}>Nicaraguan</option>
                                <option value="Nigerien" {{ $data->hmothercitizenship == 'Nigerien' ? 'selected':'' }}>Nigerien</option>
                                <option value="North Korean" {{ $data->hmothercitizenship == 'North Korean' ? 'selected':'' }}>North Korean</option>
                                <option value="Northern Irish" {{ $data->hmothercitizenship == 'Northern Irish' ? 'selected':'' }}>Northern Irish</option>
                                <option value="Norwegian" {{ $data->hmothercitizenship == 'Norwegian ' ? 'selected':'' }}>Norwegian</option>
                                <option value="Omani" {{ $data->hmothercitizenship == 'Omani' ? 'selected':'' }}>Omani</option>
                                <option value="Pakistani" {{ $data->hmothercitizenship == 'Pakistani' ? 'selected':'' }}>Pakistani</option>
                                <option value="Palauan" {{ $data->hmothercitizenship == 'Palauan' ? 'selected':'' }}>Palauan</option>
                                <option value="Panamanian" {{ $data->hmothercitizenship == 'Panamanian' ? 'selected':'' }}>Panamanian</option>
                                <option value="Papua New Guinean" {{ $data->hmothercitizenship == 'Papua New Guinea' ? 'selected':'' }}>Papua New Guinean</option>
                                <option value="Paraguayan" {{ $data->hmothercitizenship == 'Paraguayan' ? 'selected':'' }}>Paraguayan</option>
                                <option value="Peruvian" {{ $data->hmothercitizenship == 'Peruvian' ? 'selected':'' }}>Peruvian</option>
                                <option value="Polish" {{ $data->hmothercitizenship == 'Polish' ? 'selected':'' }}>Polish</option>
                                <option value="Portuguese" {{ $data->hmothercitizenship == 'Portuguese' ? 'selected':'' }}>Portuguese</option>
                                <option value="Qatari" {{ $data->hmothercitizenship == 'Qatari' ? 'selected':'' }}>Qatari</option>
                                <option value="Romanian" {{ $data->hmothercitizenship == 'Romanian' ? 'selected':'' }}>Romanian</option>
                                <option value="Russian" {{ $data->hmothercitizenship == 'Russian' ? 'selected':'' }}>Russian</option>
                                <option value="Rwandan" {{ $data->hmothercitizenship == 'Rwandan' ? 'selected':'' }}>Rwandan</option>
                                <option value="Saint Lucian" {{ $data->hmothercitizenship == 'Saint Lucian' ? 'selected':'' }}>Saint Lucian</option>
                                <option value="Salvadoran" {{ $data->hmothercitizenship == 'Salvadoran' ? 'selected':'' }}>Salvadoran</option>
                                <option value="Samoan" {{ $data->hmothercitizenship == 'Samoan' ? 'selected':'' }}>Samoan</option>
                                <option value="San Marinese" {{ $data->hmothercitizenship == 'San Marinese' ? 'selected':'' }}>San Marinese</option>
                                <option value="Sao Tomean" {{ $data->hmothercitizenship == 'Sao Tomean' ? 'selected':'' }}>Sao Tomean</option>
                                <option value="Saudi" {{ $data->hmothercitizenship == 'Saudi' ? 'selected':'' }}>Saudi</option>
                                <option value="Scottish" {{ $data->hmothercitizenship == 'Scottish' ? 'selected':'' }}>Scottish</option>
                                <option value="Senegalese" {{ $data->hmothercitizenship == 'Senegalese' ? 'selected':'' }}>Senegalese</option>
                                <option value="Serbian" {{ $data->hmothercitizenship == 'Serbian' ? 'selected':'' }}>Serbian</option>
                                <option value="Seychellois" {{ $data->hmothercitizenship == 'Seychellois' ? 'selected':'' }}>Seychellois</option>
                                <option value="Sierra Leonean" {{ $data->hmothercitizenship == 'Sierra Leonea' ? 'selected':'' }}>Sierra Leonean</option>
                                <option value="Singaporean" {{ $data->hmothercitizenship == 'Singaporean' ? 'selected':'' }}>Singaporean</option>
                                <option value="Slovakian" {{ $data->hmothercitizenship == 'Slovakian' ? 'selected':'' }}>Slovakian</option>
                                <option value="Slovenian" {{ $data->hmothercitizenship == 'Slovenian' ? 'selected':'' }}>Slovenian</option>
                                <option value="Solomon Islander" {{ $data->hmothercitizenship == 'Solomon Islander' ? 'selected':'' }}>Solomon Islander</option>
                                <option value="Somali" {{ $data->hmothercitizenship == 'Somali' ? 'selected':'' }}>Somali</option>
                                <option value="South African" {{ $data->hmothercitizenship == 'South African' ? 'selected':'' }}>South African</option>
                                <option value="South Korean" {{ $data->hmothercitizenship == 'South Korean' ? 'selected':'' }}>South Korean</option>
                                <option value="Spanish" {{ $data->hmothercitizenship == 'Spanish' ? 'selected':'' }}>Spanish</option>
                                <option value="Sri Lankan" {{ $data->hmothercitizenship == 'Sri Lankan' ? 'selected':'' }}>Sri Lankan</option>
                                <option value="Sudanese" {{ $data->hmothercitizenship == 'Sudanese' ? 'selected':'' }}>Sudanese</option>
                                <option value="Surinamer" {{ $data->hmothercitizenship == 'Surinamer' ? 'selected':'' }}>Surinamer</option>
                                <option value="Swazi" {{ $data->hmothercitizenship == 'Swazi' ? 'selected':'' }}>Swazi</option>
                                <option value="Swedish" {{ $data->hmothercitizenship == 'Swedish' ? 'selected':'' }}>Swedish</option>
                                <option value="Swiss" {{ $data->hmothercitizenship == 'Swiss' ? 'selected':'' }}>Swiss</option>
                                <option value="Syrian" {{ $data->hmothercitizenship == 'Syrian' ? 'selected':'' }}>Syrian</option>
                                <option value="Taiwanese" {{ $data->hmothercitizenship == 'Taiwanese' ? 'selected':'' }}>Taiwanese</option>
                                <option value="Tajik" {{ $data->hmothercitizenship == 'Tajik' ? 'selected':'' }}>Tajik</option>
                                <option value="Tanzanian" {{ $data->hmothercitizenship == 'Tanzanian' ? 'selected':'' }}>Tanzanian</option>
                                <option value="Thai" {{ $data->hmothercitizenship == 'Thai' ? 'selected':'' }}>Thai</option>
                                <option value="Togolese" {{ $data->hmothercitizenship == 'Togolese' ? 'selected':'' }}>Togolese</option>
                                <option value="Tongan" {{ $data->hmothercitizenship == 'Tongan' ? 'selected':'' }}>Tongan</option>
                                <option value="Trinidadian or Tobagonian" {{ $data->hmothercitizenship == 'Trinidadian or Tobagoni' ? 'selected':'' }}>Trinidadian or Tobagonian</option>
                                <option value="Tunisian" {{ $data->hmothercitizenship == 'Tunisian' ? 'selected':'' }}>Tunisian</option>
                                <option value="Turkish" {{ $data->hmothercitizenship == 'Turkish' ? 'selected':'' }}>Turkish</option>
                                <option value="Tuvaluan" {{ $data->hmothercitizenship == 'Tuvaluan' ? 'selected':'' }}>Tuvaluan</option>
                                <option value="Ugandan" {{ $data->hmothercitizenship == 'Ugandan' ? 'selected':'' }}>Ugandan</option>
                                <option value="Ukrainian" {{ $data->hmothercitizenship == 'Ukrainian' ? 'selected':'' }}>Ukrainian</option>
                                <option value="Uruguayan" {{ $data->hmothercitizenship == 'Uruguayan' ? 'selected':'' }}>Uruguayan</option>
                                <option value="Uzbekistani" {{ $data->hmothercitizenship == 'Uzbekistani' ? 'selected':'' }}>Uzbekistani</option>
                                <option value="Venezuelan" {{ $data->hmothercitizenship == 'Venezuelan' ? 'selected':'' }}>Venezuelan</option>
                                <option value="Vietnamese" {{ $data->hmothercitizenship == 'Vietnamese' ? 'selected':'' }}>Vietnamese</option>
                                <option value="Welsh" {{ $data->hmothercitizenship == 'Welsh' ? 'selected':'' }}>Welsh</option>
                                <option value="Yemenite" {{ $data->hmothercitizenship == 'Yemenite' ? 'selected':'' }}>Yemenite</option>
                                <option value="Zambian" {{ $data->hmothercitizenship == 'Zambian' ? 'selected':'' }}>Zambian</option>
                                <option value="Zimbabwean" {{ $data->hmothercitizenship == 'Zimbabwean' ? 'selected':'' }}>Zimbabwean</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <th>Witness</th>
                            <td>
                            <input type="text" value="{{$data->hwitness}}" name="hwitness" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>Relationship</th>
                            <td>
                            <input type="text" value="{{$data->hwitnessrelationship}}" name="hwitnessrelationship" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>Residence</th>
                            <td>
                            <input type="text" value="{{$data->hwitnessresidence}}" name="hwitnessresidence" class="form-control"  required>
                            </td>
                        </tr>
                        <tr>
                            <th>Marriage Contract Date</th>
                            <td>
                            <input type="text" value="{{$data->marriagecontractdate}}" name="marriagecontractdate" class="form-control"  required>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        <div class="col-md-6 no-gutters">
            <div class="right-body">
                <table class="table table-hover table-bordered">
                    <thead class="thead-dark">
                        <tr>
                        <td class="table-dark text-center" colspan="2">WIFE</td>
                        </tr>
                    </thead>
                        <tr>
                            <th>Name of Wife</th>
                            <td>
                                <input type="text" value="{{$data->wwifename}}" name="wwifename" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>Date of Birth</th>
                            <td>
                            <input type="date" value="{{$data->wbirthdate}}" name="wbirthdate" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>Age</th>
                            <td>
                            <input type="number" value="{{$data->wage}}" name="wage" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>Place of Birth</th>
                            <td>
                            <input type="text" value="{{$data->wbirthplace}}" name="wbirthplace" class="form-control" required>
                            </td>
                        </tr>
                        <!--Wife's Citizenship Dropdown List-->
                        <tr>
                            <th>Citizenship</th>
                            <td>
                                <select name="wcitizenship" class="form-control" required>
                                <option value="">Select Citizenship</option>
                                <option value="Afghan" {{ $data->wcitizenship == 'Afghan' ? 'selected':'' }}>Afghan</option>
                                <option value="Albanian" {{ $data->wcitizenship == 'Albanian' ? 'selected':'' }}>Albanian</option>
                                <option value="Algerian" {{ $data->wcitizenship == 'Algerian' ? 'selected':'' }}>Algerian</option>
                                <option value="American" {{ $data->wcitizenship == 'American' ? 'selected':'' }}>American</option>
                                <option value="Andorran" {{ $data->wcitizenship == 'Andorran' ? 'selected':'' }}>Andorran</option>
                                <option value="Angolan" {{ $data->wcitizenship == 'Angolan' ? 'selected':'' }}>Angolan</option>
                                <option value="Antiguans" {{ $data->wcitizenship == 'Antiguans' ? 'selected':'' }}>Antiguans</option>
                                <option value="Argentinean" {{ $data->wcitizenship == 'Argentinean' ? 'selected':'' }}>Argentinean</option>
                                <option value="Armenian" {{ $data->wcitizenship == 'Armenian' ? 'selected':'' }}>Armenian</option>
                                <option value="Australian" {{ $data->wcitizenship == 'Australian' ? 'selected':'' }}>Australian</option>
                                <option value="Austrian" {{ $data->wcitizenship == 'Austrian' ? 'selected':'' }}>Austrian</option>
                                <option value="Azerbaijani" {{ $data->wcitizenship == 'Azerbaijani' ? 'selected':'' }}>Azerbaijani</option>
                                <option value="Bahamian" {{ $data->wcitizenship == 'Bahamian' ? 'selected':'' }}>Bahamian</option>
                                <option value="Bahraini" {{ $data->wcitizenship == 'Bahraini' ? 'selected':'' }}>Bahraini</option>
                                <option value="Bangladeshi" {{ $data->wcitizenship == 'Bangladeshi' ? 'selected':'' }}>Bangladeshi</option>
                                <option value="Barbadian" {{ $data->wcitizenship == 'Barbadian' ? 'selected':'' }}>Barbadian</option>
                                <option value="Barbudans" {{ $data->wcitizenship == 'Barbudans' ? 'selected':'' }}>Barbudans</option>
                                <option value="Batswana" {{ $data->wcitizenship == 'Batswana' ? 'selected':'' }}>Batswana</option>
                                <option value="Belarusian" {{ $data->wcitizenship == 'Belarusian' ? 'selected':'' }}>Belarusian</option>
                                <option value="Belgian" {{ $data->wcitizenship == 'Belgian' ? 'selected':'' }}>Belgian</option>
                                <option value="Belizean" {{ $data->wcitizenship == 'Belizean' ? 'selected':'' }}>Belizean</option>
                                <option value="Beninese" {{ $data->wcitizenship == 'Beninese' ? 'selected':'' }}>Beninese</option>
                                <option value="Bhutanese" {{ $data->wcitizenship == 'Bhutanese' ? 'selected':'' }}>Bhutanese</option>
                                <option value="Bolivian" {{ $data->wcitizenship == 'Bolivian' ? 'selected':'' }}>Bolivian</option>
                                <option value="Bosnian" {{ $data->wcitizenship == 'Bosnian' ? 'selected':'' }}>Bosnian</option>
                                <option value="Brazilian" {{ $data->wcitizenship == 'Brazilian' ? 'selected':'' }}>Brazilian</option>
                                <option value="British" {{ $data->wcitizenship == 'British' ? 'selected':'' }}>British</option>
                                <option value="Bruneian" {{ $data->wcitizenship == 'Bruneian' ? 'selected':'' }}>Bruneian</option>
                                <option value="Bulgarian" {{ $data->wcitizenship == 'Bulgarian' ? 'selected':'' }}>Bulgarian</option>
                                <option value="Burkinabe" {{ $data->wcitizenship == 'Burkinabe' ? 'selected':'' }}>Burkinabe</option>
                                <option value="Burmese" {{ $data->wcitizenship == 'Burmese' ? 'selected':'' }}>Burmese</option>
                                <option value="Burundian" {{ $data->wcitizenship == 'Burundian' ? 'selected':'' }}>Burundian</option>
                                <option value="Cambodian" {{ $data->wcitizenship == 'Cambodian' ? 'selected':'' }}>Cambodian</option>
                                <option value="Cameroonian" {{ $data->wcitizenship == 'Cameroonian' ? 'selected':'' }}>Cameroonian</option>
                                <option value="Canadian" {{ $data->wcitizenship == 'Canadian' ? 'selected':'' }}>Canadian</option>
                                <option value="Cape verdean" {{ $data->wcitizenship == 'Cape Verdean' ? 'selected':'' }}>Cape Verdean</option>
                                <option value="Central African" {{ $data->wcitizenship == 'Central African' ? 'selected':'' }}>Central African</option>
                                <option value="Chadian" {{ $data->wcitizenship == 'Chadian' ? 'selected':'' }}>Chadian</option>
                                <option value="Chilean" {{ $data->wcitizenship == 'Chilean' ? 'selected':'' }}>Chilean</option>
                                <option value="Chinese" {{ $data->wcitizenship == 'Chinese' ? 'selected':'' }}>Chinese</option>
                                <option value="Colombian" {{ $data->wcitizenship == 'Colombian' ? 'selected':'' }}>Colombian</option>
                                <option value="Comoran" {{ $data->wcitizenship == 'Comoran' ? 'selected':'' }}>Comoran</option>
                                <option value="Congolese" {{ $data->wcitizenship == 'Congolese' ? 'selected':'' }}>Congolese</option>
                                <option value="Costa Rican" {{ $data->wcitizenship == 'Costa Rican' ? 'selected':'' }}>Costa Rican</option>
                                <option value="Croatian" {{ $data->wcitizenship == 'Croatian' ? 'selected':'' }}>Croatian</option>
                                <option value="Cuban" {{ $data->wcitizenship == 'Cuban' ? 'selected':'' }}>Cuban</option>
                                <option value="Cypriot" {{ $data->wcitizenship == 'Cypriot' ? 'selected':'' }}>Cypriot</option>
                                <option value="Czech" {{ $data->wcitizenship == 'Czech' ? 'selected':'' }}>Czech</option>
                                <option value="Danish" {{ $data->wcitizenship == 'Danish' ? 'selected':'' }}>Danish</option>
                                <option value="Djibouti" {{ $data->wcitizenship == 'Djibouti' ? 'selected':'' }}>Djibouti</option>
                                <option value="Dominican" {{ $data->wcitizenship == 'Dominican' ? 'selected':'' }}>Dominican</option>
                                <option value="Dutch" {{ $data->wcitizenship == 'Dutch' ? 'selected':'' }}>Dutch</option>
                                <option value="East Timorese" {{ $data->wcitizenship == '>East Timorese' ? 'selected':'' }}>East Timorese</option>
                                <option value="Ecuadorean" {{ $data->wcitizenship == 'Ecuadorean' ? 'selected':'' }}>Ecuadorean</option>
                                <option value="Egyptian" {{ $data->wcitizenship == 'Egyptian' ? 'selected':'' }}>Egyptian</option>
                                <option value="Emirian" {{ $data->wcitizenship == 'Emirian' ? 'selected':'' }}>Emirian</option>
                                <option value="Equatorial Guinean" {{ $data->wcitizenship == 'Equatorial Guinean' ? 'selected':'' }}>Equatorial Guinean</option>
                                <option value="Eritrean" {{ $data->wcitizenship == 'Eritrean' ? 'selected':'' }}>Eritrean</option>
                                <option value="Estonian" {{ $data->wcitizenship == 'Estonian' ? 'selected':'' }}>Estonian</option>
                                <option value="Ethiopian" {{ $data->wcitizenship == 'Ethiopian' ? 'selected':'' }}>Ethiopian</option>
                                <option value="Fijian" {{ $data->wcitizenship == 'Fijian' ? 'selected':'' }}>Fijian</option>
                                <option value="Filipino" {{ $data->wcitizenship == 'Filipino' ? 'selected':'' }}>Filipino</option>
                                <option value="Finnish" {{ $data->wcitizenship == 'Finnish' ? 'selected':'' }}>Finnish</option>
                                <option value="French" {{ $data->wcitizenship == 'French' ? 'selected':'' }}></option>
                                <option value="Gabonese" {{ $data->wcitizenship == 'Gabonese' ? 'selected':'' }}>Gabonese</option>
                                <option value="Gambian" {{ $data->wcitizenship == 'Gambian' ? 'selected':'' }}>Gambian</option>
                                <option value="Georgian" {{ $data->wcitizenship == 'Georgian' ? 'selected':'' }}>Georgian</option>
                                <option value="German" {{ $data->wcitizenship == 'German' ? 'selected':'' }}>German</option>
                                <option value="Ghanaian" {{ $data->wcitizenship == 'Ghanaian' ? 'selected':'' }}>Ghanaian</option>
                                <option value="Greek" {{ $data->wcitizenship == 'Greek' ? 'selected':'' }}>Greek</option>
                                <option value="Grenadian" {{ $data->wcitizenship == 'Grenadian' ? 'selected':'' }}>Grenadian</option>
                                <option value="Guatemalan" {{ $data->wcitizenship == 'Guatemalan' ? 'selected':'' }}>Guatemalan</option>
                                <option value="Guinea-Bissauan" {{ $data->wcitizenship == 'Guinea-Bissauan' ? 'selected':'' }}>Guinea-Bissauan</option>
                                <option value="Guinean" {{ $data->wcitizenship == 'Guinean' ? 'selected':'' }}>Guinean</option>
                                <option value="Guyanese" {{ $data->wcitizenship == 'Guyanese' ? 'selected':'' }}>Guyanese</option>
                                <option value="Haitian" {{ $data->wcitizenship == 'Haitian' ? 'selected':'' }}>Haitian</option>
                                <option value="Herzegovinian" {{ $data->wcitizenship == 'Herzegovinian' ? 'selected':'' }}>Herzegovinian</option>
                                <option value="Honduran" {{ $data->wcitizenship == 'Honduran' ? 'selected':'' }}>Honduran</option>
                                <option value="Hungarian" {{ $data->wcitizenship == 'Hungarian' ? 'selected':'' }}>Hungarian</option>
                                <option value="Icelander" {{ $data->wcitizenship == 'Icelander' ? 'selected':'' }}>Icelander</option>
                                <option value="Indian" {{ $data->wcitizenship == 'Indian' ? 'selected':'' }}>Indian</option>
                                <option value="Indonesian" {{ $data->wcitizenship == 'Indonesian' ? 'selected':'' }}>Indonesian</option>
                                <option value="Iranian" {{ $data->wcitizenship == 'Iranian' ? 'selected':'' }}>Iranian</option>
                                <option value="Iraqi" {{ $data->wcitizenship == 'Iraqi' ? 'selected':'' }}>Iraqi</option>
                                <option value="Irish" {{ $data->wcitizenship == 'Irish' ? 'selected':'' }}>Irish</option>
                                <option value="Israeli" {{ $data->wcitizenship == 'Israeli' ? 'selected':'' }}>Israeli</option>
                                <option value="Italian" {{ $data->wcitizenship == 'Italian' ? 'selected':'' }}>Italian</option>
                                <option value="Ivorian" {{ $data->wcitizenship == 'Ivorian' ? 'selected':'' }}>Ivorian</option>
                                <option value="Jamaican" {{ $data->wcitizenship == 'Jamaican' ? 'selected':'' }}>Jamaican</option>
                                <option value="Japanese" {{ $data->wcitizenship == 'Japanese' ? 'selected':'' }}>Japanese</option>
                                <option value="Jordanian" {{ $data->wcitizenship == 'Jordanian' ? 'selected':'' }}>Jordanian</option>
                                <option value="Kazakhstani" {{ $data->wcitizenship == 'Kazakhstani' ? 'selected':'' }}>Kazakhstani</option>
                                <option value="Kenyan" {{ $data->wcitizenship == 'Kenyan' ? 'selected':'' }}>Kenyan</option>
                                <option value="Kittian and Nevisian" {{ $data->wcitizenship == 'Kittian and Nevisian' ? 'selected':'' }}>Kittian and Nevisian</option>
                                <option value="Kuwaiti" {{ $data->wcitizenship == 'Kuwaiti' ? 'selected':'' }}>Kuwaiti</option>
                                <option value="Kyrgyz" {{ $data->wcitizenship == 'Kyrgyz' ? 'selected':'' }}>Kyrgyz</option>
                                <option value="Laotian" {{ $data->wcitizenship == 'Laotian' ? 'selected':'' }}>Laotian</option>
                                <option value="Latvian" {{ $data->wcitizenship == 'Latvian' ? 'selected':'' }}>Latvian</option>
                                <option value="Lebanese" {{ $data->wcitizenship == 'Lebanese' ? 'selected':'' }}>Lebanese</option>
                                <option value="Liberian" {{ $data->wcitizenship == 'Liberian' ? 'selected':'' }}>Liberian</option>
                                <option value="Libyan" {{ $data->wcitizenship == 'Libyan' ? 'selected':'' }}>Libyan</option>
                                <option value="Liechtensteiner" {{ $data->wcitizenship == 'Liechtensteiner' ? 'selected':'' }}>Liechtensteiner</option>
                                <option value="Lithuanian" {{ $data->wcitizenship == 'Lithuanian' ? 'selected':'' }}>Lithuanian</option>
                                <option value="Luxembourger" {{ $data->wcitizenship == 'Luxembourger' ? 'selected':'' }}>Luxembourger</option>
                                <option value="Macedonian" {{ $data->wcitizenship == 'Macedonian' ? 'selected':'' }}>Macedonian</option>
                                <option value="Malagasy" {{ $data->wcitizenship == 'Malagasy' ? 'selected':'' }}>Malagasy</option>
                                <option value="Malawian" {{ $data->wcitizenship == 'Malawian' ? 'selected':'' }}>Malawian</option>
                                <option value="Malaysian" {{ $data->wcitizenship == 'Malaysian' ? 'selected':'' }}>Malaysian</option>
                                <option value="Maldivan" {{ $data->wcitizenship == 'Maldivan' ? 'selected':'' }}>Maldivan</option>
                                <option value="Malian" {{ $data->wcitizenship == 'Malian' ? 'selected':'' }}>Malian</option>
                                <option value="Maltese" {{ $data->wcitizenship == 'Maltese' ? 'selected':'' }}>Maltese</option>
                                <option value="Marshallese" {{ $data->wcitizenship == 'Marshallese' ? 'selected':'' }}>Marshallese</option>
                                <option value="Mauritanian" {{ $data->wcitizenship == 'Mauritanian' ? 'selected':'' }}>Mauritanian</option>
                                <option value="Mauritian" {{ $data->wcitizenship == 'Mauritian' ? 'selected':'' }}>Mauritian</option>
                                <option value="Mexican" {{ $data->wcitizenship == 'Mexican' ? 'selected':'' }}>Mexican</option>
                                <option value="Micronesian" {{ $data->wcitizenship == 'Micronesian' ? 'selected':'' }}>Micronesian</option>
                                <option value="Moldovan" {{ $data->wcitizenship == 'Moldovan' ? 'selected':'' }}>Moldovan</option>
                                <option value="Monacan" {{ $data->wcitizenship == 'Monacan' ? 'selected':'' }}>Monacan</option>
                                <option value="Mongolian" {{ $data->wcitizenship == 'Mongolian' ? 'selected':'' }}>Mongolian</option>
                                <option value="Moroccan" {{ $data->wcitizenship == 'Moroccan' ? 'selected':'' }}>Moroccan</option>
                                <option value="Mosotho" {{ $data->wcitizenship == 'Mosotho' ? 'selected':'' }}>Mosotho</option>
                                <option value="Motswana" {{ $data->wcitizenship == 'Motswana' ? 'selected':'' }}>Motswana</option>
                                <option value="Mozambican" {{ $data->wcitizenship == 'Mozambican' ? 'selected':'' }}>Mozambican</option>
                                <option value="Namibian" {{ $data->wcitizenship == 'Namibian' ? 'selected':'' }}>Namibian</option>
                                <option value="Nauruan" {{ $data->wcitizenship == 'Nauruan' ? 'selected':'' }}>Nauruan</option>
                                <option value="Nepalese" {{ $data->wcitizenship == 'Nepalese' ? 'selected':'' }}>Nepalese</option>
                                <option value="New Zealander" {{ $data->wcitizenship == 'New Zealander' ? 'selected':'' }}>New Zealander</option>
                                <option value="Ni-Vanuatu" {{ $data->wcitizenship == 'Ni-Vanuatu' ? 'selected':'' }}>Ni-Vanuatu</option>
                                <option value="Nnicaraguan" {{ $data->wcitizenship == 'Nicaraguan' ? 'selected':'' }}>Nicaraguan</option>
                                <option value="Nigerien" {{ $data->wcitizenship == 'Nigerien' ? 'selected':'' }}>Nigerien</option>
                                <option value="North Korean" {{ $data->wcitizenship == 'North Korean' ? 'selected':'' }}>North Korean</option>
                                <option value="Northern Irish" {{ $data->wcitizenship == 'Northern Irish' ? 'selected':'' }}>Northern Irish</option>
                                <option value="Norwegian" {{ $data->wcitizenship == 'Norwegian ' ? 'selected':'' }}>Norwegian</option>
                                <option value="Omani" {{ $data->wcitizenship == 'Omani' ? 'selected':'' }}>Omani</option>
                                <option value="Pakistani" {{ $data->wcitizenship == 'Pakistani' ? 'selected':'' }}>Pakistani</option>
                                <option value="Palauan" {{ $data->wcitizenship == 'Palauan' ? 'selected':'' }}>Palauan</option>
                                <option value="Panamanian" {{ $data->wcitizenship == 'Panamanian' ? 'selected':'' }}>Panamanian</option>
                                <option value="Papua New Guinean" {{ $data->wcitizenship == 'Papua New Guinea' ? 'selected':'' }}>Papua New Guinean</option>
                                <option value="Paraguayan" {{ $data->wcitizenship == 'Paraguayan' ? 'selected':'' }}>Paraguayan</option>
                                <option value="Peruvian" {{ $data->wcitizenship == 'Peruvian' ? 'selected':'' }}>Peruvian</option>
                                <option value="Polish" {{ $data->wcitizenship == 'Polish' ? 'selected':'' }}>Polish</option>
                                <option value="Portuguese" {{ $data->wcitizenship == 'Portuguese' ? 'selected':'' }}>Portuguese</option>
                                <option value="Qatari" {{ $data->wcitizenship == 'Qatari' ? 'selected':'' }}>Qatari</option>
                                <option value="Romanian" {{ $data->wcitizenship == 'Romanian' ? 'selected':'' }}>Romanian</option>
                                <option value="Russian" {{ $data->wcitizenship == 'Russian' ? 'selected':'' }}>Russian</option>
                                <option value="Rwandan" {{ $data->wcitizenship == 'Rwandan' ? 'selected':'' }}>Rwandan</option>
                                <option value="Saint Lucian" {{ $data->wcitizenship == 'Saint Lucian' ? 'selected':'' }}>Saint Lucian</option>
                                <option value="Salvadoran" {{ $data->wcitizenship == 'Salvadoran' ? 'selected':'' }}>Salvadoran</option>
                                <option value="Samoan" {{ $data->wcitizenship == 'Samoan' ? 'selected':'' }}>Samoan</option>
                                <option value="San Marinese" {{ $data->wcitizenship == 'San Marinese' ? 'selected':'' }}>San Marinese</option>
                                <option value="Sao Tomean" {{ $data->wcitizenship == 'Sao Tomean' ? 'selected':'' }}>Sao Tomean</option>
                                <option value="Saudi" {{ $data->wcitizenship == 'Saudi' ? 'selected':'' }}>Saudi</option>
                                <option value="Scottish" {{ $data->wcitizenship == 'Scottish' ? 'selected':'' }}>Scottish</option>
                                <option value="Senegalese" {{ $data->wcitizenship == 'Senegalese' ? 'selected':'' }}>Senegalese</option>
                                <option value="Serbian" {{ $data->wcitizenship == 'Serbian' ? 'selected':'' }}>Serbian</option>
                                <option value="Seychellois" {{ $data->wcitizenship == 'Seychellois' ? 'selected':'' }}>Seychellois</option>
                                <option value="Sierra Leonean" {{ $data->wcitizenship == 'Sierra Leonea' ? 'selected':'' }}>Sierra Leonean</option>
                                <option value="Singaporean" {{ $data->wcitizenship == 'Singaporean' ? 'selected':'' }}>Singaporean</option>
                                <option value="Slovakian" {{ $data->wcitizenship == 'Slovakian' ? 'selected':'' }}>Slovakian</option>
                                <option value="Slovenian" {{ $data->wcitizenship == 'Slovenian' ? 'selected':'' }}>Slovenian</option>
                                <option value="Solomon Islander" {{ $data->wcitizenship == 'Solomon Islander' ? 'selected':'' }}>Solomon Islander</option>
                                <option value="Somali" {{ $data->wcitizenship == 'Somali' ? 'selected':'' }}>Somali</option>
                                <option value="South African" {{ $data->wcitizenship == 'South African' ? 'selected':'' }}>South African</option>
                                <option value="South Korean" {{ $data->wcitizenship == 'South Korean' ? 'selected':'' }}>South Korean</option>
                                <option value="Spanish" {{ $data->wcitizenship == 'Spanish' ? 'selected':'' }}>Spanish</option>
                                <option value="Sri Lankan" {{ $data->wcitizenship == 'Sri Lankan' ? 'selected':'' }}>Sri Lankan</option>
                                <option value="Sudanese" {{ $data->wcitizenship == 'Sudanese' ? 'selected':'' }}>Sudanese</option>
                                <option value="Surinamer" {{ $data->wcitizenship == 'Surinamer' ? 'selected':'' }}>Surinamer</option>
                                <option value="Swazi" {{ $data->wcitizenship == 'Swazi' ? 'selected':'' }}>Swazi</option>
                                <option value="Swedish" {{ $data->wcitizenship == 'Swedish' ? 'selected':'' }}>Swedish</option>
                                <option value="Swiss" {{ $data->wcitizenship == 'Swiss' ? 'selected':'' }}>Swiss</option>
                                <option value="Syrian" {{ $data->wcitizenship == 'Syrian' ? 'selected':'' }}>Syrian</option>
                                <option value="Taiwanese" {{ $data->wcitizenship == 'Taiwanese' ? 'selected':'' }}>Taiwanese</option>
                                <option value="Tajik" {{ $data->wcitizenship == 'Tajik' ? 'selected':'' }}>Tajik</option>
                                <option value="Tanzanian" {{ $data->wcitizenship == 'Tanzanian' ? 'selected':'' }}>Tanzanian</option>
                                <option value="Thai" {{ $data->wcitizenship == 'Thai' ? 'selected':'' }}>Thai</option>
                                <option value="Togolese" {{ $data->wcitizenship == 'Togolese' ? 'selected':'' }}>Togolese</option>
                                <option value="Tongan" {{ $data->wcitizenship == 'Tongan' ? 'selected':'' }}>Tongan</option>
                                <option value="Trinidadian or Tobagonian" {{ $data->wcitizenship == 'Trinidadian or Tobagoni' ? 'selected':'' }}>Trinidadian or Tobagonian</option>
                                <option value="Tunisian" {{ $data->wcitizenship == 'Tunisian' ? 'selected':'' }}>Tunisian</option>
                                <option value="Turkish" {{ $data->wcitizenship == 'Turkish' ? 'selected':'' }}>Turkish</option>
                                <option value="Tuvaluan" {{ $data->wcitizenship == 'Tuvaluan' ? 'selected':'' }}>Tuvaluan</option>
                                <option value="Ugandan" {{ $data->wcitizenship == 'Ugandan' ? 'selected':'' }}>Ugandan</option>
                                <option value="Ukrainian" {{ $data->wcitizenship == 'Ukrainian' ? 'selected':'' }}>Ukrainian</option>
                                <option value="Uruguayan" {{ $data->wcitizenship == 'Uruguayan' ? 'selected':'' }}>Uruguayan</option>
                                <option value="Uzbekistani" {{ $data->wcitizenship == 'Uzbekistani' ? 'selected':'' }}>Uzbekistani</option>
                                <option value="Venezuelan" {{ $data->wcitizenship == 'Venezuelan' ? 'selected':'' }}>Venezuelan</option>
                                <option value="Vietnamese" {{ $data->wcitizenship == 'Vietnamese' ? 'selected':'' }}>Vietnamese</option>
                                <option value="Welsh" {{ $data->wcitizenship == 'Welsh' ? 'selected':'' }}>Welsh</option>
                                <option value="Yemenite" {{ $data->wcitizenship == 'Yemenite' ? 'selected':'' }}>Yemenite</option>
                                <option value="Zambian" {{ $data->wcitizenship == 'Zambian' ? 'selected':'' }}>Zambian</option>
                                <option value="Zimbabwean" {{ $data->wcitizenship == 'Zimbabwean' ? 'selected':'' }}>Zimbabwean</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Residence</th>
                            <td>
                            <input type="text" value="{{$data->wwiferesidence}}" name="wwiferesidence" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>Religion</th>
                            <td>
                            <input type="text" value="{{$data->wreligion}}" name="wreligion" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>Civil Status</th>
                            <td>
                                <select name="wcivilstatus" class="form-control" required>
                                    <option value="">Select Civil Status</option>
                                    <option value='Single' {{ $data->wcivilstatus == 'Single' ? 'selected':'' }}> Single </option>
                                    <option value='Married' {{ $data->wcivilstatus == 'Married' ? 'selected':'' }}> Married </option>
                                    <option value='Widowed' {{ $data->wcivilstatus == 'Widowed' ? 'selected':'' }}> Widowed </option>
                                    <option value='Separated' {{ $data->wcivilstatus == 'Separated' ? 'selected':'' }}> Separated </option>
                                    <option value='Divorced' {{ $data->wcivilstatus == 'Divorced' ? 'selected':'' }}> Divorced </option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Name of Father</th>
                            <td>
                            <input type="text" value="{{$data->wfathername}}" name="wfathername" class="form-control" required>
                            </td>
                        </tr>
                        <!--Father's Citizenship Dropdown List-->
                        <tr>
                            <th>Father's Citizenship</th>
                            <td>
                                <select name="wfathercitizenship" class="form-control" required>
                                <option value="">Select Citizenship</option>
                                <option value="Afghan" {{ $data->wfathercitizenship == 'Afghan' ? 'selected':'' }}>Afghan</option>
                                <option value="Albanian" {{ $data->wfathercitizenship == 'Albanian' ? 'selected':'' }}>Albanian</option>
                                <option value="Algerian" {{ $data->wfathercitizenship == 'Algerian' ? 'selected':'' }}>Algerian</option>
                                <option value="American" {{ $data->wfathercitizenship == 'American' ? 'selected':'' }}>American</option>
                                <option value="Andorran" {{ $data->wfathercitizenship == 'Andorran' ? 'selected':'' }}>Andorran</option>
                                <option value="Angolan" {{ $data->wfathercitizenship == 'Angolan' ? 'selected':'' }}>Angolan</option>
                                <option value="Antiguans" {{ $data->wfathercitizenship == 'Antiguans' ? 'selected':'' }}>Antiguans</option>
                                <option value="Argentinean" {{ $data->wfathercitizenship == 'Argentinean' ? 'selected':'' }}>Argentinean</option>
                                <option value="Armenian" {{ $data->wfathercitizenship == 'Armenian' ? 'selected':'' }}>Armenian</option>
                                <option value="Australian" {{ $data->wfathercitizenship == 'Australian' ? 'selected':'' }}>Australian</option>
                                <option value="Austrian" {{ $data->wfathercitizenship == 'Austrian' ? 'selected':'' }}>Austrian</option>
                                <option value="Azerbaijani" {{ $data->wfathercitizenship == 'Azerbaijani' ? 'selected':'' }}>Azerbaijani</option>
                                <option value="Bahamian" {{ $data->wfathercitizenship == 'Bahamian' ? 'selected':'' }}>Bahamian</option>
                                <option value="Bahraini" {{ $data->wfathercitizenship == 'Bahraini' ? 'selected':'' }}>Bahraini</option>
                                <option value="Bangladeshi" {{ $data->wfathercitizenship == 'Bangladeshi' ? 'selected':'' }}>Bangladeshi</option>
                                <option value="Barbadian" {{ $data->wfathercitizenship == 'Barbadian' ? 'selected':'' }}>Barbadian</option>
                                <option value="Barbudans" {{ $data->wfathercitizenship == 'Barbudans' ? 'selected':'' }}>Barbudans</option>
                                <option value="Batswana" {{ $data->wfathercitizenship == 'Batswana' ? 'selected':'' }}>Batswana</option>
                                <option value="Belarusian" {{ $data->wfathercitizenship == 'Belarusian' ? 'selected':'' }}>Belarusian</option>
                                <option value="Belgian" {{ $data->wfathercitizenship == 'Belgian' ? 'selected':'' }}>Belgian</option>
                                <option value="Belizean" {{ $data->wfathercitizenship == 'Belizean' ? 'selected':'' }}>Belizean</option>
                                <option value="Beninese" {{ $data->wfathercitizenship == 'Beninese' ? 'selected':'' }}>Beninese</option>
                                <option value="Bhutanese" {{ $data->wfathercitizenship == 'Bhutanese' ? 'selected':'' }}>Bhutanese</option>
                                <option value="Bolivian" {{ $data->wfathercitizenship == 'Bolivian' ? 'selected':'' }}>Bolivian</option>
                                <option value="Bosnian" {{ $data->wfathercitizenship == 'Bosnian' ? 'selected':'' }}>Bosnian</option>
                                <option value="Brazilian" {{ $data->wfathercitizenship == 'Brazilian' ? 'selected':'' }}>Brazilian</option>
                                <option value="British" {{ $data->wfathercitizenship == 'British' ? 'selected':'' }}>British</option>
                                <option value="Bruneian" {{ $data->wfathercitizenship == 'Bruneian' ? 'selected':'' }}>Bruneian</option>
                                <option value="Bulgarian" {{ $data->wfathercitizenship == 'Bulgarian' ? 'selected':'' }}>Bulgarian</option>
                                <option value="Burkinabe" {{ $data->wfathercitizenship == 'Burkinabe' ? 'selected':'' }}>Burkinabe</option>
                                <option value="Burmese" {{ $data->wfathercitizenship == 'Burmese' ? 'selected':'' }}>Burmese</option>
                                <option value="Burundian" {{ $data->wfathercitizenship == 'Burundian' ? 'selected':'' }}>Burundian</option>
                                <option value="Cambodian" {{ $data->wfathercitizenship == 'Cambodian' ? 'selected':'' }}>Cambodian</option>
                                <option value="Cameroonian" {{ $data->wfathercitizenship == 'Cameroonian' ? 'selected':'' }}>Cameroonian</option>
                                <option value="Canadian" {{ $data->wfathercitizenship == 'Canadian' ? 'selected':'' }}>Canadian</option>
                                <option value="Cape verdean" {{ $data->wfathercitizenship == 'Cape Verdean' ? 'selected':'' }}>Cape Verdean</option>
                                <option value="Central African" {{ $data->wfathercitizenship == 'Central African' ? 'selected':'' }}>Central African</option>
                                <option value="Chadian" {{ $data->wfathercitizenship == 'Chadian' ? 'selected':'' }}>Chadian</option>
                                <option value="Chilean" {{ $data->wfathercitizenship == 'Chilean' ? 'selected':'' }}>Chilean</option>
                                <option value="Chinese" {{ $data->wfathercitizenship == 'Chinese' ? 'selected':'' }}>Chinese</option>
                                <option value="Colombian" {{ $data->wfathercitizenship == 'Colombian' ? 'selected':'' }}>Colombian</option>
                                <option value="Comoran" {{ $data->wfathercitizenship == 'Comoran' ? 'selected':'' }}>Comoran</option>
                                <option value="Congolese" {{ $data->wfathercitizenship == 'Congolese' ? 'selected':'' }}>Congolese</option>
                                <option value="Costa Rican" {{ $data->wfathercitizenship == 'Costa Rican' ? 'selected':'' }}>Costa Rican</option>
                                <option value="Croatian" {{ $data->wfathercitizenship == 'Croatian' ? 'selected':'' }}>Croatian</option>
                                <option value="Cuban" {{ $data->wfathercitizenship == 'Cuban' ? 'selected':'' }}>Cuban</option>
                                <option value="Cypriot" {{ $data->wfathercitizenship == 'Cypriot' ? 'selected':'' }}>Cypriot</option>
                                <option value="Czech" {{ $data->wfathercitizenship == 'Czech' ? 'selected':'' }}>Czech</option>
                                <option value="Danish" {{ $data->wfathercitizenship == 'Danish' ? 'selected':'' }}>Danish</option>
                                <option value="Djibouti" {{ $data->wfathercitizenship == 'Djibouti' ? 'selected':'' }}>Djibouti</option>
                                <option value="Dominican" {{ $data->wfathercitizenship == 'Dominican' ? 'selected':'' }}>Dominican</option>
                                <option value="Dutch" {{ $data->wfathercitizenship == 'Dutch' ? 'selected':'' }}>Dutch</option>
                                <option value="East Timorese" {{ $data->wfathercitizenship == '>East Timorese' ? 'selected':'' }}>East Timorese</option>
                                <option value="Ecuadorean" {{ $data->wfathercitizenship == 'Ecuadorean' ? 'selected':'' }}>Ecuadorean</option>
                                <option value="Egyptian" {{ $data->wfathercitizenship == 'Egyptian' ? 'selected':'' }}>Egyptian</option>
                                <option value="Emirian" {{ $data->wfathercitizenship == 'Emirian' ? 'selected':'' }}>Emirian</option>
                                <option value="Equatorial Guinean" {{ $data->wfathercitizenship == 'Equatorial Guinean' ? 'selected':'' }}>Equatorial Guinean</option>
                                <option value="Eritrean" {{ $data->wfathercitizenship == 'Eritrean' ? 'selected':'' }}>Eritrean</option>
                                <option value="Estonian" {{ $data->wfathercitizenship == 'Estonian' ? 'selected':'' }}>Estonian</option>
                                <option value="Ethiopian" {{ $data->wfathercitizenship == 'Ethiopian' ? 'selected':'' }}>Ethiopian</option>
                                <option value="Fijian" {{ $data->wfathercitizenship == 'Fijian' ? 'selected':'' }}>Fijian</option>
                                <option value="Filipino" {{ $data->wfathercitizenship == 'Filipino' ? 'selected':'' }}>Filipino</option>
                                <option value="Finnish" {{ $data->wfathercitizenship == 'Finnish' ? 'selected':'' }}>Finnish</option>
                                <option value="French" {{ $data->wfathercitizenship == 'French' ? 'selected':'' }}></option>
                                <option value="Gabonese" {{ $data->wfathercitizenship == 'Gabonese' ? 'selected':'' }}>Gabonese</option>
                                <option value="Gambian" {{ $data->wfathercitizenship == 'Gambian' ? 'selected':'' }}>Gambian</option>
                                <option value="Georgian" {{ $data->wfathercitizenship == 'Georgian' ? 'selected':'' }}>Georgian</option>
                                <option value="German" {{ $data->wfathercitizenship == 'German' ? 'selected':'' }}>German</option>
                                <option value="Ghanaian" {{ $data->wfathercitizenship == 'Ghanaian' ? 'selected':'' }}>Ghanaian</option>
                                <option value="Greek" {{ $data->wfathercitizenship == 'Greek' ? 'selected':'' }}>Greek</option>
                                <option value="Grenadian" {{ $data->wfathercitizenship == 'Grenadian' ? 'selected':'' }}>Grenadian</option>
                                <option value="Guatemalan" {{ $data->wfathercitizenship == 'Guatemalan' ? 'selected':'' }}>Guatemalan</option>
                                <option value="Guinea-Bissauan" {{ $data->wfathercitizenship == 'Guinea-Bissauan' ? 'selected':'' }}>Guinea-Bissauan</option>
                                <option value="Guinean" {{ $data->wfathercitizenship == 'Guinean' ? 'selected':'' }}>Guinean</option>
                                <option value="Guyanese" {{ $data->wfathercitizenship == 'Guyanese' ? 'selected':'' }}>Guyanese</option>
                                <option value="Haitian" {{ $data->wfathercitizenship == 'Haitian' ? 'selected':'' }}>Haitian</option>
                                <option value="Herzegovinian" {{ $data->wfathercitizenship == 'Herzegovinian' ? 'selected':'' }}>Herzegovinian</option>
                                <option value="Honduran" {{ $data->wfathercitizenship == 'Honduran' ? 'selected':'' }}>Honduran</option>
                                <option value="Hungarian" {{ $data->wfathercitizenship == 'Hungarian' ? 'selected':'' }}>Hungarian</option>
                                <option value="Icelander" {{ $data->wfathercitizenship == 'Icelander' ? 'selected':'' }}>Icelander</option>
                                <option value="Indian" {{ $data->wfathercitizenship == 'Indian' ? 'selected':'' }}>Indian</option>
                                <option value="Indonesian" {{ $data->wfathercitizenship == 'Indonesian' ? 'selected':'' }}>Indonesian</option>
                                <option value="Iranian" {{ $data->wfathercitizenship == 'Iranian' ? 'selected':'' }}>Iranian</option>
                                <option value="Iraqi" {{ $data->wfathercitizenship == 'Iraqi' ? 'selected':'' }}>Iraqi</option>
                                <option value="Irish" {{ $data->wfathercitizenship == 'Irish' ? 'selected':'' }}>Irish</option>
                                <option value="Israeli" {{ $data->wfathercitizenship == 'Israeli' ? 'selected':'' }}>Israeli</option>
                                <option value="Italian" {{ $data->wfathercitizenship == 'Italian' ? 'selected':'' }}>Italian</option>
                                <option value="Ivorian" {{ $data->wfathercitizenship == 'Ivorian' ? 'selected':'' }}>Ivorian</option>
                                <option value="Jamaican" {{ $data->wfathercitizenship == 'Jamaican' ? 'selected':'' }}>Jamaican</option>
                                <option value="Japanese" {{ $data->wfathercitizenship == 'Japanese' ? 'selected':'' }}>Japanese</option>
                                <option value="Jordanian" {{ $data->wfathercitizenship == 'Jordanian' ? 'selected':'' }}>Jordanian</option>
                                <option value="Kazakhstani" {{ $data->wfathercitizenship == 'Kazakhstani' ? 'selected':'' }}>Kazakhstani</option>
                                <option value="Kenyan" {{ $data->wfathercitizenship == 'Kenyan' ? 'selected':'' }}>Kenyan</option>
                                <option value="Kittian and Nevisian" {{ $data->wfathercitizenship == 'Kittian and Nevisian' ? 'selected':'' }}>Kittian and Nevisian</option>
                                <option value="Kuwaiti" {{ $data->wfathercitizenship == 'Kuwaiti' ? 'selected':'' }}>Kuwaiti</option>
                                <option value="Kyrgyz" {{ $data->wfathercitizenship == 'Kyrgyz' ? 'selected':'' }}>Kyrgyz</option>
                                <option value="Laotian" {{ $data->wfathercitizenship == 'Laotian' ? 'selected':'' }}>Laotian</option>
                                <option value="Latvian" {{ $data->wfathercitizenship == 'Latvian' ? 'selected':'' }}>Latvian</option>
                                <option value="Lebanese" {{ $data->wfathercitizenship == 'Lebanese' ? 'selected':'' }}>Lebanese</option>
                                <option value="Liberian" {{ $data->wfathercitizenship == 'Liberian' ? 'selected':'' }}>Liberian</option>
                                <option value="Libyan" {{ $data->wfathercitizenship == 'Libyan' ? 'selected':'' }}>Libyan</option>
                                <option value="Liechtensteiner" {{ $data->wfathercitizenship == 'Liechtensteiner' ? 'selected':'' }}>Liechtensteiner</option>
                                <option value="Lithuanian" {{ $data->wfathercitizenship == 'Lithuanian' ? 'selected':'' }}>Lithuanian</option>
                                <option value="Luxembourger" {{ $data->wfathercitizenship == 'Luxembourger' ? 'selected':'' }}>Luxembourger</option>
                                <option value="Macedonian" {{ $data->wfathercitizenship == 'Macedonian' ? 'selected':'' }}>Macedonian</option>
                                <option value="Malagasy" {{ $data->wfathercitizenship == 'Malagasy' ? 'selected':'' }}>Malagasy</option>
                                <option value="Malawian" {{ $data->wfathercitizenship == 'Malawian' ? 'selected':'' }}>Malawian</option>
                                <option value="Malaysian" {{ $data->wfathercitizenship == 'Malaysian' ? 'selected':'' }}>Malaysian</option>
                                <option value="Maldivan" {{ $data->wfathercitizenship == 'Maldivan' ? 'selected':'' }}>Maldivan</option>
                                <option value="Malian" {{ $data->wfathercitizenship == 'Malian' ? 'selected':'' }}>Malian</option>
                                <option value="Maltese" {{ $data->wfathercitizenship == 'Maltese' ? 'selected':'' }}>Maltese</option>
                                <option value="Marshallese" {{ $data->wfathercitizenship == 'Marshallese' ? 'selected':'' }}>Marshallese</option>
                                <option value="Mauritanian" {{ $data->wfathercitizenship == 'Mauritanian' ? 'selected':'' }}>Mauritanian</option>
                                <option value="Mauritian" {{ $data->wfathercitizenship == 'Mauritian' ? 'selected':'' }}>Mauritian</option>
                                <option value="Mexican" {{ $data->wfathercitizenship == 'Mexican' ? 'selected':'' }}>Mexican</option>
                                <option value="Micronesian" {{ $data->wfathercitizenship == 'Micronesian' ? 'selected':'' }}>Micronesian</option>
                                <option value="Moldovan" {{ $data->wfathercitizenship == 'Moldovan' ? 'selected':'' }}>Moldovan</option>
                                <option value="Monacan" {{ $data->wfathercitizenship == 'Monacan' ? 'selected':'' }}>Monacan</option>
                                <option value="Mongolian" {{ $data->wfathercitizenship == 'Mongolian' ? 'selected':'' }}>Mongolian</option>
                                <option value="Moroccan" {{ $data->wfathercitizenship == 'Moroccan' ? 'selected':'' }}>Moroccan</option>
                                <option value="Mosotho" {{ $data->wfathercitizenship == 'Mosotho' ? 'selected':'' }}>Mosotho</option>
                                <option value="Motswana" {{ $data->wfathercitizenship == 'Motswana' ? 'selected':'' }}>Motswana</option>
                                <option value="Mozambican" {{ $data->wfathercitizenship == 'Mozambican' ? 'selected':'' }}>Mozambican</option>
                                <option value="Namibian" {{ $data->wfathercitizenship == 'Namibian' ? 'selected':'' }}>Namibian</option>
                                <option value="Nauruan" {{ $data->wfathercitizenship == 'Nauruan' ? 'selected':'' }}>Nauruan</option>
                                <option value="Nepalese" {{ $data->wfathercitizenship == 'Nepalese' ? 'selected':'' }}>Nepalese</option>
                                <option value="New Zealander" {{ $data->wfathercitizenship == 'New Zealander' ? 'selected':'' }}>New Zealander</option>
                                <option value="Ni-Vanuatu" {{ $data->wfathercitizenship == 'Ni-Vanuatu' ? 'selected':'' }}>Ni-Vanuatu</option>
                                <option value="Nnicaraguan" {{ $data->wfathercitizenship == 'Nicaraguan' ? 'selected':'' }}>Nicaraguan</option>
                                <option value="Nigerien" {{ $data->wfathercitizenship == 'Nigerien' ? 'selected':'' }}>Nigerien</option>
                                <option value="North Korean" {{ $data->wfathercitizenship == 'North Korean' ? 'selected':'' }}>North Korean</option>
                                <option value="Northern Irish" {{ $data->wfathercitizenship == 'Northern Irish' ? 'selected':'' }}>Northern Irish</option>
                                <option value="Norwegian" {{ $data->wfathercitizenship == 'Norwegian ' ? 'selected':'' }}>Norwegian</option>
                                <option value="Omani" {{ $data->wfathercitizenship == 'Omani' ? 'selected':'' }}>Omani</option>
                                <option value="Pakistani" {{ $data->wfathercitizenship == 'Pakistani' ? 'selected':'' }}>Pakistani</option>
                                <option value="Palauan" {{ $data->wfathercitizenship == 'Palauan' ? 'selected':'' }}>Palauan</option>
                                <option value="Panamanian" {{ $data->wfathercitizenship == 'Panamanian' ? 'selected':'' }}>Panamanian</option>
                                <option value="Papua New Guinean" {{ $data->wfathercitizenship == 'Papua New Guinea' ? 'selected':'' }}>Papua New Guinean</option>
                                <option value="Paraguayan" {{ $data->wfathercitizenship == 'Paraguayan' ? 'selected':'' }}>Paraguayan</option>
                                <option value="Peruvian" {{ $data->wfathercitizenship == 'Peruvian' ? 'selected':'' }}>Peruvian</option>
                                <option value="Polish" {{ $data->wfathercitizenship == 'Polish' ? 'selected':'' }}>Polish</option>
                                <option value="Portuguese" {{ $data->wfathercitizenship == 'Portuguese' ? 'selected':'' }}>Portuguese</option>
                                <option value="Qatari" {{ $data->wfathercitizenship == 'Qatari' ? 'selected':'' }}>Qatari</option>
                                <option value="Romanian" {{ $data->wfathercitizenship == 'Romanian' ? 'selected':'' }}>Romanian</option>
                                <option value="Russian" {{ $data->wfathercitizenship == 'Russian' ? 'selected':'' }}>Russian</option>
                                <option value="Rwandan" {{ $data->wfathercitizenship == 'Rwandan' ? 'selected':'' }}>Rwandan</option>
                                <option value="Saint Lucian" {{ $data->wfathercitizenship == 'Saint Lucian' ? 'selected':'' }}>Saint Lucian</option>
                                <option value="Salvadoran" {{ $data->wfathercitizenship == 'Salvadoran' ? 'selected':'' }}>Salvadoran</option>
                                <option value="Samoan" {{ $data->wfathercitizenship == 'Samoan' ? 'selected':'' }}>Samoan</option>
                                <option value="San Marinese" {{ $data->wfathercitizenship == 'San Marinese' ? 'selected':'' }}>San Marinese</option>
                                <option value="Sao Tomean" {{ $data->wfathercitizenship == 'Sao Tomean' ? 'selected':'' }}>Sao Tomean</option>
                                <option value="Saudi" {{ $data->wfathercitizenship == 'Saudi' ? 'selected':'' }}>Saudi</option>
                                <option value="Scottish" {{ $data->wfathercitizenship == 'Scottish' ? 'selected':'' }}>Scottish</option>
                                <option value="Senegalese" {{ $data->wfathercitizenship == 'Senegalese' ? 'selected':'' }}>Senegalese</option>
                                <option value="Serbian" {{ $data->wfathercitizenship == 'Serbian' ? 'selected':'' }}>Serbian</option>
                                <option value="Seychellois" {{ $data->wfathercitizenship == 'Seychellois' ? 'selected':'' }}>Seychellois</option>
                                <option value="Sierra Leonean" {{ $data->wfathercitizenship == 'Sierra Leonea' ? 'selected':'' }}>Sierra Leonean</option>
                                <option value="Singaporean" {{ $data->wfathercitizenship == 'Singaporean' ? 'selected':'' }}>Singaporean</option>
                                <option value="Slovakian" {{ $data->wfathercitizenship == 'Slovakian' ? 'selected':'' }}>Slovakian</option>
                                <option value="Slovenian" {{ $data->wfathercitizenship == 'Slovenian' ? 'selected':'' }}>Slovenian</option>
                                <option value="Solomon Islander" {{ $data->wfathercitizenship == 'Solomon Islander' ? 'selected':'' }}>Solomon Islander</option>
                                <option value="Somali" {{ $data->wfathercitizenship == 'Somali' ? 'selected':'' }}>Somali</option>
                                <option value="South African" {{ $data->wfathercitizenship == 'South African' ? 'selected':'' }}>South African</option>
                                <option value="South Korean" {{ $data->wfathercitizenship == 'South Korean' ? 'selected':'' }}>South Korean</option>
                                <option value="Spanish" {{ $data->wfathercitizenship == 'Spanish' ? 'selected':'' }}>Spanish</option>
                                <option value="Sri Lankan" {{ $data->wfathercitizenship == 'Sri Lankan' ? 'selected':'' }}>Sri Lankan</option>
                                <option value="Sudanese" {{ $data->wfathercitizenship == 'Sudanese' ? 'selected':'' }}>Sudanese</option>
                                <option value="Surinamer" {{ $data->wfathercitizenship == 'Surinamer' ? 'selected':'' }}>Surinamer</option>
                                <option value="Swazi" {{ $data->wfathercitizenship == 'Swazi' ? 'selected':'' }}>Swazi</option>
                                <option value="Swedish" {{ $data->wfathercitizenship == 'Swedish' ? 'selected':'' }}>Swedish</option>
                                <option value="Swiss" {{ $data->wfathercitizenship == 'Swiss' ? 'selected':'' }}>Swiss</option>
                                <option value="Syrian" {{ $data->wfathercitizenship == 'Syrian' ? 'selected':'' }}>Syrian</option>
                                <option value="Taiwanese" {{ $data->wfathercitizenship == 'Taiwanese' ? 'selected':'' }}>Taiwanese</option>
                                <option value="Tajik" {{ $data->wfathercitizenship == 'Tajik' ? 'selected':'' }}>Tajik</option>
                                <option value="Tanzanian" {{ $data->wfathercitizenship == 'Tanzanian' ? 'selected':'' }}>Tanzanian</option>
                                <option value="Thai" {{ $data->wfathercitizenship == 'Thai' ? 'selected':'' }}>Thai</option>
                                <option value="Togolese" {{ $data->wfathercitizenship == 'Togolese' ? 'selected':'' }}>Togolese</option>
                                <option value="Tongan" {{ $data->wfathercitizenship == 'Tongan' ? 'selected':'' }}>Tongan</option>
                                <option value="Trinidadian or Tobagonian" {{ $data->wfathercitizenship == 'Trinidadian or Tobagoni' ? 'selected':'' }}>Trinidadian or Tobagonian</option>
                                <option value="Tunisian" {{ $data->wfathercitizenship == 'Tunisian' ? 'selected':'' }}>Tunisian</option>
                                <option value="Turkish" {{ $data->wfathercitizenship == 'Turkish' ? 'selected':'' }}>Turkish</option>
                                <option value="Tuvaluan" {{ $data->wfathercitizenship == 'Tuvaluan' ? 'selected':'' }}>Tuvaluan</option>
                                <option value="Ugandan" {{ $data->wfathercitizenship == 'Ugandan' ? 'selected':'' }}>Ugandan</option>
                                <option value="Ukrainian" {{ $data->wfathercitizenship == 'Ukrainian' ? 'selected':'' }}>Ukrainian</option>
                                <option value="Uruguayan" {{ $data->wfathercitizenship == 'Uruguayan' ? 'selected':'' }}>Uruguayan</option>
                                <option value="Uzbekistani" {{ $data->wfathercitizenship == 'Uzbekistani' ? 'selected':'' }}>Uzbekistani</option>
                                <option value="Venezuelan" {{ $data->wfathercitizenship == 'Venezuelan' ? 'selected':'' }}>Venezuelan</option>
                                <option value="Vietnamese" {{ $data->wfathercitizenship == 'Vietnamese' ? 'selected':'' }}>Vietnamese</option>
                                <option value="Welsh" {{ $data->wfathercitizenship == 'Welsh' ? 'selected':'' }}>Welsh</option>
                                <option value="Yemenite" {{ $data->wfathercitizenship == 'Yemenite' ? 'selected':'' }}>Yemenite</option>
                                <option value="Zambian" {{ $data->wfathercitizenship == 'Zambian' ? 'selected':'' }}>Zambian</option>
                                <option value="Zimbabwean" {{ $data->wfathercitizenship == 'Zimbabwean' ? 'selected':'' }}>Zimbabwean</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Name of Mother</th>
                            <td>
                            <input type="text" value="{{$data->wmothername}}" name="wmothername" class="form-control" required>
                            </td>
                        </tr>
                        <!--Mother's Citizenship Dropdown List-->
                        <tr>
                            <th>Mother's Citizenship</th>
                            <td>
                                <select name="wmothercitizenship" class="form-control" required>
                                <option value="">Select Citizenship</option>
                                <option value="Afghan" {{ $data->wmothercitizenship == 'Afghan' ? 'selected':'' }}>Afghan</option>
                                <option value="Albanian" {{ $data->wmothercitizenship == 'Albanian' ? 'selected':'' }}>Albanian</option>
                                <option value="Algerian" {{ $data->wmothercitizenship == 'Algerian' ? 'selected':'' }}>Algerian</option>
                                <option value="American" {{ $data->wmothercitizenship == 'American' ? 'selected':'' }}>American</option>
                                <option value="Andorran" {{ $data->wmothercitizenship == 'Andorran' ? 'selected':'' }}>Andorran</option>
                                <option value="Angolan" {{ $data->wmothercitizenship == 'Angolan' ? 'selected':'' }}>Angolan</option>
                                <option value="Antiguans" {{ $data->wmothercitizenship == 'Antiguans' ? 'selected':'' }}>Antiguans</option>
                                <option value="Argentinean" {{ $data->wmothercitizenship == 'Argentinean' ? 'selected':'' }}>Argentinean</option>
                                <option value="Armenian" {{ $data->wmothercitizenship == 'Armenian' ? 'selected':'' }}>Armenian</option>
                                <option value="Australian" {{ $data->wmothercitizenship == 'Australian' ? 'selected':'' }}>Australian</option>
                                <option value="Austrian" {{ $data->wmothercitizenship == 'Austrian' ? 'selected':'' }}>Austrian</option>
                                <option value="Azerbaijani" {{ $data->wmothercitizenship == 'Azerbaijani' ? 'selected':'' }}>Azerbaijani</option>
                                <option value="Bahamian" {{ $data->wmothercitizenship == 'Bahamian' ? 'selected':'' }}>Bahamian</option>
                                <option value="Bahraini" {{ $data->wmothercitizenship == 'Bahraini' ? 'selected':'' }}>Bahraini</option>
                                <option value="Bangladeshi" {{ $data->wmothercitizenship == 'Bangladeshi' ? 'selected':'' }}>Bangladeshi</option>
                                <option value="Barbadian" {{ $data->wmothercitizenship == 'Barbadian' ? 'selected':'' }}>Barbadian</option>
                                <option value="Barbudans" {{ $data->wmothercitizenship == 'Barbudans' ? 'selected':'' }}>Barbudans</option>
                                <option value="Batswana" {{ $data->wmothercitizenship == 'Batswana' ? 'selected':'' }}>Batswana</option>
                                <option value="Belarusian" {{ $data->wmothercitizenship == 'Belarusian' ? 'selected':'' }}>Belarusian</option>
                                <option value="Belgian" {{ $data->wmothercitizenship == 'Belgian' ? 'selected':'' }}>Belgian</option>
                                <option value="Belizean" {{ $data->wmothercitizenship == 'Belizean' ? 'selected':'' }}>Belizean</option>
                                <option value="Beninese" {{ $data->wmothercitizenship == 'Beninese' ? 'selected':'' }}>Beninese</option>
                                <option value="Bhutanese" {{ $data->wmothercitizenship == 'Bhutanese' ? 'selected':'' }}>Bhutanese</option>
                                <option value="Bolivian" {{ $data->wmothercitizenship == 'Bolivian' ? 'selected':'' }}>Bolivian</option>
                                <option value="Bosnian" {{ $data->wmothercitizenship == 'Bosnian' ? 'selected':'' }}>Bosnian</option>
                                <option value="Brazilian" {{ $data->wmothercitizenship == 'Brazilian' ? 'selected':'' }}>Brazilian</option>
                                <option value="British" {{ $data->wmothercitizenship == 'British' ? 'selected':'' }}>British</option>
                                <option value="Bruneian" {{ $data->wmothercitizenship == 'Bruneian' ? 'selected':'' }}>Bruneian</option>
                                <option value="Bulgarian" {{ $data->wmothercitizenship == 'Bulgarian' ? 'selected':'' }}>Bulgarian</option>
                                <option value="Burkinabe" {{ $data->wmothercitizenship == 'Burkinabe' ? 'selected':'' }}>Burkinabe</option>
                                <option value="Burmese" {{ $data->wmothercitizenship == 'Burmese' ? 'selected':'' }}>Burmese</option>
                                <option value="Burundian" {{ $data->wmothercitizenship == 'Burundian' ? 'selected':'' }}>Burundian</option>
                                <option value="Cambodian" {{ $data->wmothercitizenship == 'Cambodian' ? 'selected':'' }}>Cambodian</option>
                                <option value="Cameroonian" {{ $data->wmothercitizenship == 'Cameroonian' ? 'selected':'' }}>Cameroonian</option>
                                <option value="Canadian" {{ $data->wmothercitizenship == 'Canadian' ? 'selected':'' }}>Canadian</option>
                                <option value="Cape verdean" {{ $data->wmothercitizenship == 'Cape Verdean' ? 'selected':'' }}>Cape Verdean</option>
                                <option value="Central African" {{ $data->wmothercitizenship == 'Central African' ? 'selected':'' }}>Central African</option>
                                <option value="Chadian" {{ $data->wmothercitizenship == 'Chadian' ? 'selected':'' }}>Chadian</option>
                                <option value="Chilean" {{ $data->wmothercitizenship == 'Chilean' ? 'selected':'' }}>Chilean</option>
                                <option value="Chinese" {{ $data->wmothercitizenship == 'Chinese' ? 'selected':'' }}>Chinese</option>
                                <option value="Colombian" {{ $data->wmothercitizenship == 'Colombian' ? 'selected':'' }}>Colombian</option>
                                <option value="Comoran" {{ $data->wmothercitizenship == 'Comoran' ? 'selected':'' }}>Comoran</option>
                                <option value="Congolese" {{ $data->wmothercitizenship == 'Congolese' ? 'selected':'' }}>Congolese</option>
                                <option value="Costa Rican" {{ $data->wmothercitizenship == 'Costa Rican' ? 'selected':'' }}>Costa Rican</option>
                                <option value="Croatian" {{ $data->wmothercitizenship == 'Croatian' ? 'selected':'' }}>Croatian</option>
                                <option value="Cuban" {{ $data->wmothercitizenship == 'Cuban' ? 'selected':'' }}>Cuban</option>
                                <option value="Cypriot" {{ $data->wmothercitizenship == 'Cypriot' ? 'selected':'' }}>Cypriot</option>
                                <option value="Czech" {{ $data->wmothercitizenship == 'Czech' ? 'selected':'' }}>Czech</option>
                                <option value="Danish" {{ $data->wmothercitizenship == 'Danish' ? 'selected':'' }}>Danish</option>
                                <option value="Djibouti" {{ $data->wmothercitizenship == 'Djibouti' ? 'selected':'' }}>Djibouti</option>
                                <option value="Dominican" {{ $data->wmothercitizenship == 'Dominican' ? 'selected':'' }}>Dominican</option>
                                <option value="Dutch" {{ $data->wmothercitizenship == 'Dutch' ? 'selected':'' }}>Dutch</option>
                                <option value="East Timorese" {{ $data->wmothercitizenship == '>East Timorese' ? 'selected':'' }}>East Timorese</option>
                                <option value="Ecuadorean" {{ $data->wmothercitizenship == 'Ecuadorean' ? 'selected':'' }}>Ecuadorean</option>
                                <option value="Egyptian" {{ $data->wmothercitizenship == 'Egyptian' ? 'selected':'' }}>Egyptian</option>
                                <option value="Emirian" {{ $data->wmothercitizenship == 'Emirian' ? 'selected':'' }}>Emirian</option>
                                <option value="Equatorial Guinean" {{ $data->wmothercitizenship == 'Equatorial Guinean' ? 'selected':'' }}>Equatorial Guinean</option>
                                <option value="Eritrean" {{ $data->wmothercitizenship == 'Eritrean' ? 'selected':'' }}>Eritrean</option>
                                <option value="Estonian" {{ $data->wmothercitizenship == 'Estonian' ? 'selected':'' }}>Estonian</option>
                                <option value="Ethiopian" {{ $data->wmothercitizenship == 'Ethiopian' ? 'selected':'' }}>Ethiopian</option>
                                <option value="Fijian" {{ $data->wmothercitizenship == 'Fijian' ? 'selected':'' }}>Fijian</option>
                                <option value="Filipino" {{ $data->wmothercitizenship == 'Filipino' ? 'selected':'' }}>Filipino</option>
                                <option value="Finnish" {{ $data->wmothercitizenship == 'Finnish' ? 'selected':'' }}>Finnish</option>
                                <option value="French" {{ $data->wmothercitizenship == 'French' ? 'selected':'' }}></option>
                                <option value="Gabonese" {{ $data->wmothercitizenship == 'Gabonese' ? 'selected':'' }}>Gabonese</option>
                                <option value="Gambian" {{ $data->wmothercitizenship == 'Gambian' ? 'selected':'' }}>Gambian</option>
                                <option value="Georgian" {{ $data->wmothercitizenship == 'Georgian' ? 'selected':'' }}>Georgian</option>
                                <option value="German" {{ $data->wmothercitizenship == 'German' ? 'selected':'' }}>German</option>
                                <option value="Ghanaian" {{ $data->wmothercitizenship == 'Ghanaian' ? 'selected':'' }}>Ghanaian</option>
                                <option value="Greek" {{ $data->wmothercitizenship == 'Greek' ? 'selected':'' }}>Greek</option>
                                <option value="Grenadian" {{ $data->wmothercitizenship == 'Grenadian' ? 'selected':'' }}>Grenadian</option>
                                <option value="Guatemalan" {{ $data->wmothercitizenship == 'Guatemalan' ? 'selected':'' }}>Guatemalan</option>
                                <option value="Guinea-Bissauan" {{ $data->wmothercitizenship == 'Guinea-Bissauan' ? 'selected':'' }}>Guinea-Bissauan</option>
                                <option value="Guinean" {{ $data->wmothercitizenship == 'Guinean' ? 'selected':'' }}>Guinean</option>
                                <option value="Guyanese" {{ $data->wmothercitizenship == 'Guyanese' ? 'selected':'' }}>Guyanese</option>
                                <option value="Haitian" {{ $data->wmothercitizenship == 'Haitian' ? 'selected':'' }}>Haitian</option>
                                <option value="Herzegovinian" {{ $data->wmothercitizenship == 'Herzegovinian' ? 'selected':'' }}>Herzegovinian</option>
                                <option value="Honduran" {{ $data->wmothercitizenship == 'Honduran' ? 'selected':'' }}>Honduran</option>
                                <option value="Hungarian" {{ $data->wmothercitizenship == 'Hungarian' ? 'selected':'' }}>Hungarian</option>
                                <option value="Icelander" {{ $data->wmothercitizenship == 'Icelander' ? 'selected':'' }}>Icelander</option>
                                <option value="Indian" {{ $data->wmothercitizenship == 'Indian' ? 'selected':'' }}>Indian</option>
                                <option value="Indonesian" {{ $data->wmothercitizenship == 'Indonesian' ? 'selected':'' }}>Indonesian</option>
                                <option value="Iranian" {{ $data->wmothercitizenship == 'Iranian' ? 'selected':'' }}>Iranian</option>
                                <option value="Iraqi" {{ $data->wmothercitizenship == 'Iraqi' ? 'selected':'' }}>Iraqi</option>
                                <option value="Irish" {{ $data->wmothercitizenship == 'Irish' ? 'selected':'' }}>Irish</option>
                                <option value="Israeli" {{ $data->wmothercitizenship == 'Israeli' ? 'selected':'' }}>Israeli</option>
                                <option value="Italian" {{ $data->wmothercitizenship == 'Italian' ? 'selected':'' }}>Italian</option>
                                <option value="Ivorian" {{ $data->wmothercitizenship == 'Ivorian' ? 'selected':'' }}>Ivorian</option>
                                <option value="Jamaican" {{ $data->wmothercitizenship == 'Jamaican' ? 'selected':'' }}>Jamaican</option>
                                <option value="Japanese" {{ $data->wmothercitizenship == 'Japanese' ? 'selected':'' }}>Japanese</option>
                                <option value="Jordanian" {{ $data->wmothercitizenship == 'Jordanian' ? 'selected':'' }}>Jordanian</option>
                                <option value="Kazakhstani" {{ $data->wmothercitizenship == 'Kazakhstani' ? 'selected':'' }}>Kazakhstani</option>
                                <option value="Kenyan" {{ $data->wmothercitizenship == 'Kenyan' ? 'selected':'' }}>Kenyan</option>
                                <option value="Kittian and Nevisian" {{ $data->wmothercitizenship == 'Kittian and Nevisian' ? 'selected':'' }}>Kittian and Nevisian</option>
                                <option value="Kuwaiti" {{ $data->wmothercitizenship == 'Kuwaiti' ? 'selected':'' }}>Kuwaiti</option>
                                <option value="Kyrgyz" {{ $data->wmothercitizenship == 'Kyrgyz' ? 'selected':'' }}>Kyrgyz</option>
                                <option value="Laotian" {{ $data->wmothercitizenship == 'Laotian' ? 'selected':'' }}>Laotian</option>
                                <option value="Latvian" {{ $data->wmothercitizenship == 'Latvian' ? 'selected':'' }}>Latvian</option>
                                <option value="Lebanese" {{ $data->wmothercitizenship == 'Lebanese' ? 'selected':'' }}>Lebanese</option>
                                <option value="Liberian" {{ $data->wmothercitizenship == 'Liberian' ? 'selected':'' }}>Liberian</option>
                                <option value="Libyan" {{ $data->wmothercitizenship == 'Libyan' ? 'selected':'' }}>Libyan</option>
                                <option value="Liechtensteiner" {{ $data->wmothercitizenship == 'Liechtensteiner' ? 'selected':'' }}>Liechtensteiner</option>
                                <option value="Lithuanian" {{ $data->wmothercitizenship == 'Lithuanian' ? 'selected':'' }}>Lithuanian</option>
                                <option value="Luxembourger" {{ $data->wmothercitizenship == 'Luxembourger' ? 'selected':'' }}>Luxembourger</option>
                                <option value="Macedonian" {{ $data->wmothercitizenship == 'Macedonian' ? 'selected':'' }}>Macedonian</option>
                                <option value="Malagasy" {{ $data->wmothercitizenship == 'Malagasy' ? 'selected':'' }}>Malagasy</option>
                                <option value="Malawian" {{ $data->wmothercitizenship == 'Malawian' ? 'selected':'' }}>Malawian</option>
                                <option value="Malaysian" {{ $data->wmothercitizenship == 'Malaysian' ? 'selected':'' }}>Malaysian</option>
                                <option value="Maldivan" {{ $data->wmothercitizenship == 'Maldivan' ? 'selected':'' }}>Maldivan</option>
                                <option value="Malian" {{ $data->wmothercitizenship == 'Malian' ? 'selected':'' }}>Malian</option>
                                <option value="Maltese" {{ $data->wmothercitizenship == 'Maltese' ? 'selected':'' }}>Maltese</option>
                                <option value="Marshallese" {{ $data->wmothercitizenship == 'Marshallese' ? 'selected':'' }}>Marshallese</option>
                                <option value="Mauritanian" {{ $data->wmothercitizenship == 'Mauritanian' ? 'selected':'' }}>Mauritanian</option>
                                <option value="Mauritian" {{ $data->wmothercitizenship == 'Mauritian' ? 'selected':'' }}>Mauritian</option>
                                <option value="Mexican" {{ $data->wmothercitizenship == 'Mexican' ? 'selected':'' }}>Mexican</option>
                                <option value="Micronesian" {{ $data->wmothercitizenship == 'Micronesian' ? 'selected':'' }}>Micronesian</option>
                                <option value="Moldovan" {{ $data->wmothercitizenship == 'Moldovan' ? 'selected':'' }}>Moldovan</option>
                                <option value="Monacan" {{ $data->wmothercitizenship == 'Monacan' ? 'selected':'' }}>Monacan</option>
                                <option value="Mongolian" {{ $data->wmothercitizenship == 'Mongolian' ? 'selected':'' }}>Mongolian</option>
                                <option value="Moroccan" {{ $data->wmothercitizenship == 'Moroccan' ? 'selected':'' }}>Moroccan</option>
                                <option value="Mosotho" {{ $data->wmothercitizenship == 'Mosotho' ? 'selected':'' }}>Mosotho</option>
                                <option value="Motswana" {{ $data->wmothercitizenship == 'Motswana' ? 'selected':'' }}>Motswana</option>
                                <option value="Mozambican" {{ $data->wmothercitizenship == 'Mozambican' ? 'selected':'' }}>Mozambican</option>
                                <option value="Namibian" {{ $data->wmothercitizenship == 'Namibian' ? 'selected':'' }}>Namibian</option>
                                <option value="Nauruan" {{ $data->wmothercitizenship == 'Nauruan' ? 'selected':'' }}>Nauruan</option>
                                <option value="Nepalese" {{ $data->wmothercitizenship == 'Nepalese' ? 'selected':'' }}>Nepalese</option>
                                <option value="New Zealander" {{ $data->wmothercitizenship == 'New Zealander' ? 'selected':'' }}>New Zealander</option>
                                <option value="Ni-Vanuatu" {{ $data->wmothercitizenship == 'Ni-Vanuatu' ? 'selected':'' }}>Ni-Vanuatu</option>
                                <option value="Nnicaraguan" {{ $data->wmothercitizenship == 'Nicaraguan' ? 'selected':'' }}>Nicaraguan</option>
                                <option value="Nigerien" {{ $data->wmothercitizenship == 'Nigerien' ? 'selected':'' }}>Nigerien</option>
                                <option value="North Korean" {{ $data->wmothercitizenship == 'North Korean' ? 'selected':'' }}>North Korean</option>
                                <option value="Northern Irish" {{ $data->wmothercitizenship == 'Northern Irish' ? 'selected':'' }}>Northern Irish</option>
                                <option value="Norwegian" {{ $data->wmothercitizenship == 'Norwegian ' ? 'selected':'' }}>Norwegian</option>
                                <option value="Omani" {{ $data->wmothercitizenship == 'Omani' ? 'selected':'' }}>Omani</option>
                                <option value="Pakistani" {{ $data->wmothercitizenship == 'Pakistani' ? 'selected':'' }}>Pakistani</option>
                                <option value="Palauan" {{ $data->wmothercitizenship == 'Palauan' ? 'selected':'' }}>Palauan</option>
                                <option value="Panamanian" {{ $data->wmothercitizenship == 'Panamanian' ? 'selected':'' }}>Panamanian</option>
                                <option value="Papua New Guinean" {{ $data->wmothercitizenship == 'Papua New Guinea' ? 'selected':'' }}>Papua New Guinean</option>
                                <option value="Paraguayan" {{ $data->wmothercitizenship == 'Paraguayan' ? 'selected':'' }}>Paraguayan</option>
                                <option value="Peruvian" {{ $data->wmothercitizenship == 'Peruvian' ? 'selected':'' }}>Peruvian</option>
                                <option value="Polish" {{ $data->wmothercitizenship == 'Polish' ? 'selected':'' }}>Polish</option>
                                <option value="Portuguese" {{ $data->wmothercitizenship == 'Portuguese' ? 'selected':'' }}>Portuguese</option>
                                <option value="Qatari" {{ $data->wmothercitizenship == 'Qatari' ? 'selected':'' }}>Qatari</option>
                                <option value="Romanian" {{ $data->wmothercitizenship == 'Romanian' ? 'selected':'' }}>Romanian</option>
                                <option value="Russian" {{ $data->wmothercitizenship == 'Russian' ? 'selected':'' }}>Russian</option>
                                <option value="Rwandan" {{ $data->wmothercitizenship == 'Rwandan' ? 'selected':'' }}>Rwandan</option>
                                <option value="Saint Lucian" {{ $data->wmothercitizenship == 'Saint Lucian' ? 'selected':'' }}>Saint Lucian</option>
                                <option value="Salvadoran" {{ $data->wmothercitizenship == 'Salvadoran' ? 'selected':'' }}>Salvadoran</option>
                                <option value="Samoan" {{ $data->wmothercitizenship == 'Samoan' ? 'selected':'' }}>Samoan</option>
                                <option value="San Marinese" {{ $data->wmothercitizenship == 'San Marinese' ? 'selected':'' }}>San Marinese</option>
                                <option value="Sao Tomean" {{ $data->wmothercitizenship == 'Sao Tomean' ? 'selected':'' }}>Sao Tomean</option>
                                <option value="Saudi" {{ $data->wmothercitizenship == 'Saudi' ? 'selected':'' }}>Saudi</option>
                                <option value="Scottish" {{ $data->wmothercitizenship == 'Scottish' ? 'selected':'' }}>Scottish</option>
                                <option value="Senegalese" {{ $data->wmothercitizenship == 'Senegalese' ? 'selected':'' }}>Senegalese</option>
                                <option value="Serbian" {{ $data->wmothercitizenship == 'Serbian' ? 'selected':'' }}>Serbian</option>
                                <option value="Seychellois" {{ $data->wmothercitizenship == 'Seychellois' ? 'selected':'' }}>Seychellois</option>
                                <option value="Sierra Leonean" {{ $data->wmothercitizenship == 'Sierra Leonea' ? 'selected':'' }}>Sierra Leonean</option>
                                <option value="Singaporean" {{ $data->wmothercitizenship == 'Singaporean' ? 'selected':'' }}>Singaporean</option>
                                <option value="Slovakian" {{ $data->wmothercitizenship == 'Slovakian' ? 'selected':'' }}>Slovakian</option>
                                <option value="Slovenian" {{ $data->wmothercitizenship == 'Slovenian' ? 'selected':'' }}>Slovenian</option>
                                <option value="Solomon Islander" {{ $data->wmothercitizenship == 'Solomon Islander' ? 'selected':'' }}>Solomon Islander</option>
                                <option value="Somali" {{ $data->wmothercitizenship == 'Somali' ? 'selected':'' }}>Somali</option>
                                <option value="South African" {{ $data->wmothercitizenship == 'South African' ? 'selected':'' }}>South African</option>
                                <option value="South Korean" {{ $data->wmothercitizenship == 'South Korean' ? 'selected':'' }}>South Korean</option>
                                <option value="Spanish" {{ $data->wmothercitizenship == 'Spanish' ? 'selected':'' }}>Spanish</option>
                                <option value="Sri Lankan" {{ $data->wmothercitizenship == 'Sri Lankan' ? 'selected':'' }}>Sri Lankan</option>
                                <option value="Sudanese" {{ $data->wmothercitizenship == 'Sudanese' ? 'selected':'' }}>Sudanese</option>
                                <option value="Surinamer" {{ $data->wmothercitizenship == 'Surinamer' ? 'selected':'' }}>Surinamer</option>
                                <option value="Swazi" {{ $data->wmothercitizenship == 'Swazi' ? 'selected':'' }}>Swazi</option>
                                <option value="Swedish" {{ $data->wmothercitizenship == 'Swedish' ? 'selected':'' }}>Swedish</option>
                                <option value="Swiss" {{ $data->wmothercitizenship == 'Swiss' ? 'selected':'' }}>Swiss</option>
                                <option value="Syrian" {{ $data->wmothercitizenship == 'Syrian' ? 'selected':'' }}>Syrian</option>
                                <option value="Taiwanese" {{ $data->wmothercitizenship == 'Taiwanese' ? 'selected':'' }}>Taiwanese</option>
                                <option value="Tajik" {{ $data->wmothercitizenship == 'Tajik' ? 'selected':'' }}>Tajik</option>
                                <option value="Tanzanian" {{ $data->wmothercitizenship == 'Tanzanian' ? 'selected':'' }}>Tanzanian</option>
                                <option value="Thai" {{ $data->wmothercitizenship == 'Thai' ? 'selected':'' }}>Thai</option>
                                <option value="Togolese" {{ $data->wmothercitizenship == 'Togolese' ? 'selected':'' }}>Togolese</option>
                                <option value="Tongan" {{ $data->wmothercitizenship == 'Tongan' ? 'selected':'' }}>Tongan</option>
                                <option value="Trinidadian or Tobagonian" {{ $data->wmothercitizenship == 'Trinidadian or Tobagoni' ? 'selected':'' }}>Trinidadian or Tobagonian</option>
                                <option value="Tunisian" {{ $data->wmothercitizenship == 'Tunisian' ? 'selected':'' }}>Tunisian</option>
                                <option value="Turkish" {{ $data->wmothercitizenship == 'Turkish' ? 'selected':'' }}>Turkish</option>
                                <option value="Tuvaluan" {{ $data->wmothercitizenship == 'Tuvaluan' ? 'selected':'' }}>Tuvaluan</option>
                                <option value="Ugandan" {{ $data->wmothercitizenship == 'Ugandan' ? 'selected':'' }}>Ugandan</option>
                                <option value="Ukrainian" {{ $data->wmothercitizenship == 'Ukrainian' ? 'selected':'' }}>Ukrainian</option>
                                <option value="Uruguayan" {{ $data->wmothercitizenship == 'Uruguayan' ? 'selected':'' }}>Uruguayan</option>
                                <option value="Uzbekistani" {{ $data->wmothercitizenship == 'Uzbekistani' ? 'selected':'' }}>Uzbekistani</option>
                                <option value="Venezuelan" {{ $data->wmothercitizenship == 'Venezuelan' ? 'selected':'' }}>Venezuelan</option>
                                <option value="Vietnamese" {{ $data->wmothercitizenship == 'Vietnamese' ? 'selected':'' }}>Vietnamese</option>
                                <option value="Welsh" {{ $data->wmothercitizenship == 'Welsh' ? 'selected':'' }}>Welsh</option>
                                <option value="Yemenite" {{ $data->wmothercitizenship == 'Yemenite' ? 'selected':'' }}>Yemenite</option>
                                <option value="Zambian" {{ $data->wmothercitizenship == 'Zambian' ? 'selected':'' }}>Zambian</option>
                                <option value="Zimbabwean" {{ $data->wmothercitizenship == 'Zimbabwean' ? 'selected':'' }}>Zimbabwean</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Witness</th>
                            <td>
                            <input type="text" value="{{$data->wwitness}}" name="wwitness" class="form-control"  required>
                            </td>
                        </tr>
                        <tr>
                            <th>Relationship</th>
                            <td>
                            <input type="text" value="{{$data->wwitnessrelationship}}" name="wwitnessrelationship" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>Residence</th>
                            <td>
                            <input type="text" value="{{$data->wwitnessresidence}}" name="wwitnessresidence" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>Name of Server</th>
                            <td>
                            <input type="text" value="{{$data->minister}}" name="minister" class="form-control" required>
                            </td>
                        </tr>
                </table>
            </div>
        </div>
    </div>
    <div >
        <tr>
            <td colspan="2">
            <input type="submit" class="btn btn-primary btn-block" value="Submit" />
            </td>
        </tr>
    </div>
    </form>
</div>
@endsection