<?php

?>
<link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
<link rel="stylesheet" href="<?=URLROOT?>/css/Admin/dashboard.css">
<link rel="stylesheet" href="<?=URLROOT?>/css/patient/appointments.css">

<link rel="stylesheet" href="<?=URLROOT?>/css/new.css">
<style>
    .buttonspace{
    display: flex;
    justify-content: end;
    font-size: 30px;
    grid-template-columns: repeat(auto-fit, minmax(1rem, 0.3fr));
    gap: 1rem;
}
.popup{
    height: 10vh;
    background-color: white;
    color:black;
    width: 50%;
    align-items: center;
    gap: 1rem;
    position: fixed;
    padding: 5%;
    z-index: 5;
}
.button{
    height: 31px;
  flex-direction: column;
  justify-content: center;
  flex-shrink: 0;
  color: #FFF;
  font-family: 'inter-bold';
  font-size: 10px;
  font-style: normal;
  font-weight: 700;
  line-height: normal;
  padding: 10px;
  background-color: var(--Gomez-Purple);
  border-style: hidden;
  border-radius: 6px;
}
</style>

<!-- background-color:#E9F3FD -->
<body style="background-image:linear-gradient(90deg,white,#E9F3FD)">
        <?php include APPROOT.'/views/patient/navbar_view.php'?>

<div class="popup" style="margin-top:9%;margin-right:29%;margin-left:29%;display:none">
    Are you sure you want to deactivate your account<br>
    <br><div class="buttonspace" style="justify-content:center"><button class="button" style="background-color:red;padding-left: 5%;
  padding-right: 5%;
  padding-top: 2%;
  padding-bottom: 4%;" id ="yes">yes</button><br><button id="no" class="button" style="background-color:green;padding-right: 5%;padding-left: 5%;
  padding-top: 2%;
  padding-bottom: 4%;">no</button></div>
</div>
<article class="dashboard">
    
    <!-- <a>Welcome to Gomez</a> -->
    
    <ul style="height: 26rem;background-color: white;padding: 5%;width: 59rem;">
    <section class="make" id="make" style="margin-top: -4rem;width: 59rem;margin-left: -1rem; background:#FFF;">
        <h1 style="margin-bottom: 0rem;font-size: xxx-large;font-weight: bold;">Make Appointment</h1>
        <label for="Doctor" style="font-weight: bold;font-size: 22px;"> Doctor Name</label>
        <input type="text" name="userName" id="Doctor" placeholder="Max- 20 Characters" class="holder">
        <label for="Specialization" style="font-weight: bold;font-size: 22px;">Specialization</label>
        <select placeholder="Any Specialization" name="specialization" id="Specialization" class="holder">
            <option value=""></option>
            <option value="0" data-area="0" selected="selected" style="font-weight: bold;font-size: 22px;">Any Specialization</option>
            <option value="195" data-area="195">Acupuncture</option>
            <option value="439" data-area="439">Addiction Professional</option>
            <option value="598" data-area="598">Administration and Clinical Cosmetology</option>
            <option value="414" data-area="414">Aesthetic &amp; Cosmetic Center</option>
            <option value="608" data-area="608">Aesthetic Medicine And Cosmetologist</option>
            <option value="507" data-area="507">Aesthetic Physician</option>
            <option value="649" data-area="649">Aesthetic Physician and Cosmetologist</option>
            <option value="393" data-area="393">Allergy And Asthma Specialist</option>
            <option value="48" data-area="48">Allergy And Immunology</option>
            <option value="49" data-area="49">Allergy Specialist </option>
            <option value="396" data-area="396">Anaesthetist</option>
            <option value="395" data-area="395">Anaesthetist (Pain Management)</option>
            <option value="241" data-area="241">Anaesthetist and Intensivist</option>
            <option value="190" data-area="190">Andrology And Male Fertility</option>
            <option value="284" data-area="284">Anesthetist Assistant</option>
            <option value="389" data-area="389">Anorectal Surgeon</option>
            <option value="394" data-area="394">Anorectal Surgeon (Ayurvedic)</option>
            <option value="187" data-area="187">Applied Psychologist</option>
            <option value="603" data-area="603">Art Therapist</option>
            <option value="444" data-area="444">Arterial Doppler - One Leg</option>
            <option value="445" data-area="445">Arterial Doppler - Two Legs</option>
            <option value="274" data-area="274">Arthritis</option>
            <option value="546" data-area="546">Arthritis and Spinal Disorders</option>
            <option value="510" data-area="510">Associate Specialist in Oral and Maxillofacial Surgery</option>
            <option value="509" data-area="509">Associate Specialist in Orthodontics</option>
            <option value="392" data-area="392">Asthma Specialist</option>
            <option value="607" data-area="607">Audio Grapher</option>
            <option value="139" data-area="139">Audiologist</option>
            <option value="353" data-area="353">Audiometrist</option>
            <option value="568" data-area="568">Australia Visa Medical</option>
            <option value="638" data-area="638">Ayurveda Kayachikitsa</option>
            <option value="587" data-area="587">Ayurveda Neuroendocrinology</option>
            <option value="609" data-area="609">Ayurveda Unani</option>
            <option value="193" data-area="193">Ayurvedic And Alternative Medicine</option>
            <option value="246" data-area="246">Ayurvedic Cardiologist</option>
            <option value="616" data-area="616">Ayurvedic Dermatologist</option>
            <option value="243" data-area="243">Ayurvedic General Slimming &amp; Beauty</option>
            <option value="614" data-area="614">Ayurvedic Gynaecologist</option>
            <option value="254" data-area="254">Ayurvedic Physician</option>
            <option value="255" data-area="255">Ayurvedic Physician (Boils &amp; Wounds Special)</option>
            <option value="256" data-area="256">Ayurvedic Skin Specialist</option>
            <option value="615" data-area="615">Ayurvedic Surgeon</option>
            <option value="496" data-area="496">AYUSH Children's Health</option>
            <option value="536" data-area="536">AYUSH Full Body Therapy (Abhyanga &amp; Swedana)</option>
            <option value="500" data-area="500">AYUSH Holistic Health Assessment</option>
            <option value="514" data-area="514">AYUSH Joint and Bone Health</option>
            <option value="492" data-area="492">AYUSH Joint, Muscle and Bone Health</option>
            <option value="537" data-area="537">AYUSH Leg Therapy (Padabhyanga)</option>
            <option value="495" data-area="495">AYUSH Men's Health</option>
            <option value="538" data-area="538">AYUSH Relaxation &amp; Rejuvenation Therapy</option>
            <option value="494" data-area="494">AYUSH Skin and Beauty</option>
            <option value="493" data-area="493">AYUSH Women's Health</option>
            <option value="116" data-area="116">Back Pain Treatment </option>
            <option value="45" data-area="45">Bacteriologist</option>
            <option value="145" data-area="145">Behaviour Therapist</option>
            <option value="547" data-area="547">Bone / Spine Treatments</option>
            <option value="641" data-area="641">Brain Training/ Rehabilitation Sessions</option>
            <option value="467" data-area="467">Breast and Cancer Surgeon</option>
            <option value="352" data-area="352">Breast and Oncological Surgeon</option>
            <option value="382" data-area="382">Breast Cancer Surgeon</option>
            <option value="481" data-area="481">Breast Care Clinic</option>
            <option value="386" data-area="386">Breast Clinic</option>
            <option value="115" data-area="115">Breast Feeding</option>
            <option value="459" data-area="459">Breast Feeding Advisor</option>
            <option value="320" data-area="320">Breastfeeding and Counselling</option>
            <option value="286" data-area="286">Cancer Surgeon</option>
            <option value="7" data-area="7">Cardiac Electrophysiologist</option>
            <option value="385" data-area="385">Cardiac Surgeon</option>
            <option value="289" data-area="289">Cardiographer</option>
            <option value="4" data-area="4">Cardiologist </option>
            <option value="230" data-area="230">Cardiologist and Cardiac Electrophysiologist</option>
            <option value="239" data-area="239">Cardiologist Echo</option>
            <option value="8" data-area="8">Cardiothoracic Surgeon</option>
            <option value="447" data-area="447">Carotid Doppler</option>
            <option value="242" data-area="242">Chemical Pathology</option>
            <option value="5" data-area="5">Chest Physician</option>
            <option value="6" data-area="6">Chest Specialist</option>
            <option value="158" data-area="158">Child and Adolescent Psychiatric</option>
            <option value="282" data-area="282">Child and Adolescent Psychologist</option>
            <option value="303" data-area="303">Child And Adolescent Psychology Clinic</option>
            <option value="452" data-area="452">Child Counselling Psychologist and Therapist</option>
            <option value="37" data-area="37">Child Psychiatrist</option>
            <option value="143" data-area="143">Child Psychologist</option>
            <option value="250" data-area="250">Children Dentist</option>
            <option value="553" data-area="553">Children Respiratory Chest Diseases, Wheezing and Asthma</option>
            <option value="238" data-area="238">Chiropractor</option>
            <option value="128" data-area="128">Clinical Geneticist</option>
            <option value="290" data-area="290">Clinical Interventional Cardiologist</option>
            <option value="226" data-area="226">Clinical Audiologist</option>
            <option value="165" data-area="165">Clinical Embryologist</option>
            <option value="342" data-area="342">Clinical Haematologist</option>
            <option value="104" data-area="104">Clinical Health Psychologist</option>
            <option value="50" data-area="50">Clinical Hypnotist</option>
            <option value="308" data-area="308">Clinical Immunologist</option>
            <option value="216" data-area="216">Clinical Microbiologist</option>
            <option value="240" data-area="240">Clinical Neurologist</option>
            <option value="185" data-area="185">Clinical Neurophysiologist</option>
            <option value="584" data-area="584">Clinical Nutrition Physician</option>
            <option value="264" data-area="264">Clinical Nutritionist</option>
            <option value="278" data-area="278">Clinical Oncologist</option>
            <option value="309" data-area="309">Clinical Physiologist</option>
            <option value="292" data-area="292">Clinical Psychologist</option>
            <option value="118" data-area="118">Co-Ordinating Dr (Sleep Medicine)</option>
            <option value="310" data-area="310">Colorectal Surgeon</option>
            <option value="540" data-area="540">Community &amp; Development Paediatrician</option>
            <option value="335" data-area="335">Community Child Health( Development Assessment )</option>
            <option value="542" data-area="542">Community Dentistry</option>
            <option value="355" data-area="355">Community Medicine</option>
            <option value="293" data-area="293">Community Medicine Physician</option>
            <option value="644" data-area="644">Community Paediatrician</option>
            <option value="400" data-area="400">Consultant</option>
            <option value="628" data-area="628">Consultant Anaesthetist</option>
            <option value="499" data-area="499">Consultant Cancer Surgeon</option>
            <option value="305" data-area="305">Consultant Cardiologist</option>
            <option value="324" data-area="324">Consultant Cardiothoracic Surgeon</option>
            <option value="645" data-area="645">Consultant Clinical Neurophysiologist</option>
            <option value="569" data-area="569">Consultant Clinical Nutrition Physician</option>
            <option value="51" data-area="51">Consultant Dental Surgeon</option>
            <option value="344" data-area="344">Consultant Dental Surgeon In Paediatric Dentistry</option>
            <option value="321" data-area="321">Consultant Dermatologist</option>
            <option value="506" data-area="506">Consultant Dietician / Medical Clinical Nutritionist</option>
            <option value="484" data-area="484">Consultant Emergency Physician</option>
            <option value="599" data-area="599">Consultant Endocrinologist</option>
            <option value="566" data-area="566">Consultant ENT Surgeon</option>
            <option value="476" data-area="476">Consultant Eye Surgeon</option>
            <option value="391" data-area="391">Consultant Facial Surgeon</option>
            <option value="417" data-area="417">Consultant Family Physician</option>
            <option value="639" data-area="639">Consultant Gastrointestinal Surgeon</option>
            <option value="560" data-area="560">Consultant Haematologist</option>
            <option value="64" data-area="64">Consultant In Fertility</option>
            <option value="512" data-area="512">Consultant in Orthodontics</option>
            <option value="166" data-area="166">Consultant In Reproductive Medicine</option>
            <option value="501" data-area="501">Consultant in Restorative Dentistry</option>
            <option value="491" data-area="491">Consultant in Restorative Dentistry &amp; Dental Implantologist</option>
            <option value="485" data-area="485">Consultant in Subfertility</option>
            <option value="561" data-area="561">Consultant in Subfertility and Gynaecology</option>
            <option value="52" data-area="52">Consultant Judicial Medicine</option>
            <option value="582" data-area="582">Consultant Nephrology</option>
            <option value="624" data-area="624">Consultant Nutrition Physician</option>
            <option value="637" data-area="637">Consultant Nutritionist</option>
            <option value="505" data-area="505">Consultant Obstetrician and Gynaecologist</option>
            <option value="549" data-area="549">Consultant Oncologist</option>
            <option value="646" data-area="646">Consultant Oncosurgeon</option>
            <option value="539" data-area="539">Consultant Orthodontist</option>
            <option value="567" data-area="567">Consultant Orthopaedic Surgeon</option>
            <option value="610" data-area="610">Consultant Paediatric Neurologist</option>
            <option value="526" data-area="526">Consultant Paediatric Pulmonologist</option>
            <option value="474" data-area="474">Consultant Paediatrician</option>
            <option value="311" data-area="311">Consultant Physician</option>
            <option value="478" data-area="478">Consultant Psychiatrist</option>
            <option value="581" data-area="581">Consultant Radiologist</option>
            <option value="611" data-area="611">Consultant Respiratory Physician</option>
            <option value="550" data-area="550">Consultant Sports and Exercise Medicine</option>
            <option value="497" data-area="497">Consultant Surgeon</option>
            <option value="600" data-area="600">Consultant Surgical Oncologist</option>
            <option value="504" data-area="504">Consultant Thoracic Surgeon</option>
            <option value="390" data-area="390">Corneal Surgeon</option>
            <option value="629" data-area="629">Coronary Angiogram</option>
            <option value="398" data-area="398">Cosmetic and Breast Cancer Surgeon</option>
            <option value="202" data-area="202">Cosmetic Care Clinic and Cosmetic</option>
            <option value="221" data-area="221">Cosmetic Care Clinic and Cosmetic Physician</option>
            <option value="260" data-area="260">Cosmetic Center</option>
            <option value="532" data-area="532">Cosmetic Clinic</option>
            <option value="564" data-area="564">Cosmetic Dentistry</option>
            <option value="206" data-area="206">Cosmetic Dermatology</option>
            <option value="296" data-area="296">Cosmetic Gynaecology</option>
            <option value="207" data-area="207">Cosmetic Oculoplasty</option>
            <option value="622" data-area="622">Cosmetic Physician</option>
            <option value="594" data-area="594">Cosmetic Skincare</option>
            <option value="188" data-area="188">Cosmetologist</option>
            <option value="53" data-area="53">Counseling Psychologist</option>
            <option value="54" data-area="54">Counselling</option>
            <option value="253" data-area="253">Counselor</option>
            <option value="340" data-area="340">Counselor and Psychotherapist</option>
            <option value="332" data-area="332">Critical Care Medicine</option>
            <option value="604" data-area="604">Critical Care Physician(Consultant Intensivist)</option>
            <option value="630" data-area="630">CT Coronary Angiogram</option>
            <option value="407" data-area="407">CTG</option>
            <option value="356" data-area="356">Cupping Therapist</option>
            <option value="455" data-area="455">Cystoscopy</option>
            <option value="203" data-area="203">Dental And Maxillo - Facial Surgeon</option>
            <option value="372" data-area="372">Dental Implantologist</option>
            <option value="46" data-area="46">Dental Surgeon</option>
            <option value="112" data-area="112">Dental Surgeon (Preventive Dentistry)</option>
            <option value="508" data-area="508">Dental Surgeon - Cosmetic Dentistry</option>
            <option value="511" data-area="511">Dental Surgeon - Paedodontics</option>
            <option value="208" data-area="208">Dental Surgeon / General And Laser</option>
            <option value="345" data-area="345">Dental Surgeon In Prosthodontics And Endodontics</option>
            <option value="313" data-area="313">Dentist</option>
            <option value="40" data-area="40">Dermatologist</option>
            <option value="283" data-area="283">Dermatologist (Adult &amp; Paediatric)</option>
            <option value="346" data-area="346">Diabetic Educator</option>
            <option value="422" data-area="422">Diabetic Foot Care</option>
            <option value="191" data-area="191">Diabetic Specialist</option>
            <option value="122" data-area="122">Diabetologist</option>
            <option value="585" data-area="585">Dietary and Nutrition</option>
            <option value="36" data-area="36">Dietician</option>
            <option value="554" data-area="554">Dietician &amp; Nutritionist</option>
            <option value="329" data-area="329">Dietician AND/OR public health nutritionist</option>
            <option value="266" data-area="266">Doppler Scan</option>
            <option value="515" data-area="515">Dressing</option>
            <option value="425" data-area="425">Ear Piercing</option>
            <option value="315" data-area="315">Ear, Nose and Throat Surgeon</option>
            <option value="563" data-area="563">ECG</option>
            <option value="155" data-area="155">ECHO Scan</option>
            <option value="263" data-area="263">Educational Therapist</option>
            <option value="307" data-area="307">EEG</option>
            <option value="349" data-area="349">EEG Technician</option>
            <option value="388" data-area="388">Elderly And Memory Practices</option>
            <option value="334" data-area="334">Elderly Care</option>
            <option value="457" data-area="457">Elderly Medicine</option>
            <option value="316" data-area="316">Electroencephalography Specialist</option>
            <option value="521" data-area="521">Electromyogram (EMG) Test &amp; Nerve Conduction Study (NCS)</option>
            <option value="57" data-area="57">Embryologist</option>
            <option value="299" data-area="299">EMDR Therapist</option>
            <option value="631" data-area="631">Emergency Medicine</option>
            <option value="632" data-area="632">Emergency Physician</option>
            <option value="58" data-area="58">Endocrinologist</option>
            <option value="408" data-area="408">ENDOMETRIAL BIOPSY</option>
            <option value="281" data-area="281">ENT - Head And Neck Surgeon</option>
            <option value="9" data-area="9">ENT Surgeon</option>
            <option value="461" data-area="461">Exercise ECG</option>
            <option value="534" data-area="534">Eye Allergies and Eye Surgeon</option>
            <option value="257" data-area="257">Eye Diseases/Rheumatologist(Traditional Medicine)</option>
            <option value="10" data-area="10">Eye Surgeon</option>
            <option value="623" data-area="623">Face &amp; Jaw Surgeon</option>
            <option value="513" data-area="513">Facial Plastic Surgeon</option>
            <option value="59" data-area="59">Family And General Counsellor</option>
            <option value="580" data-area="580">Family Counseling and Career Guidance</option>
            <option value="437" data-area="437">Family Medicine</option>
            <option value="35" data-area="35">Family Physician</option>
            <option value="205" data-area="205">Family Planning /Reproductive And Female Sexual Health</option>
            <option value="440" data-area="440">Family Planning Clinic</option>
            <option value="365" data-area="365">Fellowship In Aesthetic Medicine</option>
            <option value="331" data-area="331">Fertility Consultant</option>
            <option value="164" data-area="164">Fertility Counselor</option>
            <option value="176" data-area="176">Fertility Physician</option>
            <option value="551" data-area="551">Fertility Specialist</option>
            <option value="273" data-area="273">Food &amp; Nutrition</option>
            <option value="427" data-area="427">Forensic Medicine</option>
            <option value="376" data-area="376">Forensic Psychiatrist</option>
            <option value="359" data-area="359">Gastroenterological And Bariatric Surgeon</option>
            <option value="433" data-area="433">Gastroenterological And Hepatobiliary Surgeon</option>
            <option value="34" data-area="34">Gastroenterological Surgeon</option>
            <option value="127" data-area="127">Gastroenterologist</option>
            <option value="60" data-area="60">Gastrointestinal Surgeon</option>
            <option value="61" data-area="61">General</option>
            <option value="426" data-area="426">General &amp; Endocrine Surgeon</option>
            <option value="354" data-area="354">General and Gastroenterological Surgeon</option>
            <option value="362" data-area="362">General And Colorectal Surgeon</option>
            <option value="451" data-area="451">General and Hepato-Pancreato-Biliary(HPB) Surgeon</option>
            <option value="288" data-area="288">General and Laparoscopic Surgeon</option>
            <option value="619" data-area="619">General Counselling</option>
            <option value="498" data-area="498">General Medical Practitioner</option>
            <option value="470" data-area="470">General Medical Services</option>
            <option value="377" data-area="377">General Medicine</option>
            <option value="545" data-area="545">General Paediatrician</option>
            <option value="279" data-area="279">General Physician</option>
            <option value="276" data-area="276">General Practitioner</option>
            <option value="317" data-area="317">General Surgeon</option>
            <option value="287" data-area="287">Genereal and Interventional Cardiologist</option>
            <option value="161" data-area="161">Genetic Counselor</option>
            <option value="62" data-area="62">Geneticist</option>
            <option value="63" data-area="63">Genito Urinary Surgeon</option>
            <option value="458" data-area="458">Geriatric Medicine</option>
            <option value="237" data-area="237">Geriatric Physician</option>
            <option value="215" data-area="215">Geriatrician/ Elderly Care Specialist</option>
            <option value="449" data-area="449">Guided Aspiration</option>
            <option value="448" data-area="448">Guided FNAC</option>
            <option value="450" data-area="450">Guided Injections</option>
            <option value="341" data-area="341">Gynae Oncology</option>
            <option value="170" data-area="170">Gynaecological Cancer Surgeon</option>
            <option value="224" data-area="224">Gynaecological Oncologist</option>
            <option value="219" data-area="219">Gynaecological Oncosurgeon</option>
            <option value="397" data-area="397">Gynaecological Scan</option>
            <option value="11" data-area="11">Gynaecologist</option>
            <option value="152" data-area="152">Gynaecologist (VOG)</option>
            <option value="416" data-area="416">Gynaecologist In Subfertility</option>
            <option value="633" data-area="633">Gynaecology and Obstetrics - Unani</option>
            <option value="211" data-area="211">Gynecologist and Consultant in Fertility</option>
            <option value="330" data-area="330">Haemato-oncologist</option>
            <option value="65" data-area="65">Haematologist</option>
            <option value="120" data-area="120">Hair Clinic</option>
            <option value="277" data-area="277">Hair Transplant</option>
            <option value="601" data-area="601">Health &amp; Fitness Specialist</option>
            <option value="625" data-area="625">Health Check-up &amp; Medical Screening Services - Nawaloka Medicare Gampaha</option>
            <option value="125" data-area="125">Health Management</option>
            <option value="436" data-area="436">Healthcare Package</option>
            <option value="571" data-area="571">Healthy Weight Program - Visit 1</option>
            <option value="572" data-area="572">Healthy Weight Program - Visit 2</option>
            <option value="573" data-area="573">Healthy Weight Program - Visit 3</option>
            <option value="548" data-area="548">Heamatologist</option>
            <option value="294" data-area="294">Hepatobiliary Liver Transplant Surgeon</option>
            <option value="39" data-area="39">Hepatobiliary Surgeon</option>
            <option value="136" data-area="136">Hepatologist </option>
            <option value="301" data-area="301">Hernia Centre</option>
            <option value="247" data-area="247">Histopathologist</option>
            <option value="325" data-area="325">Holter Monitoring</option>
            <option value="556" data-area="556">Home Visit</option>
            <option value="214" data-area="214">Homeopathy</option>
            <option value="605" data-area="605">Homeopathy Physician</option>
            <option value="592" data-area="592">Hormonal Imbalances</option>
            <option value="544" data-area="544">Hospital Facility Tour</option>
            <option value="406" data-area="406">HSG</option>
            <option value="223" data-area="223">Human Nutritionist</option>
            <option value="383" data-area="383">Hydrotherapy</option>
            <option value="418" data-area="418">Hypnotherapist</option>
            <option value="479" data-area="479">Hypnotist</option>
            <option value="300" data-area="300">Imago Therapist</option>
            <option value="67" data-area="67">Immunologist</option>
            <option value="410" data-area="410">IMPLANT REMOVE</option>
            <option value="262" data-area="262">Implantologist</option>
            <option value="557" data-area="557">Infertility</option>
            <option value="517" data-area="517">Injection Service</option>
            <option value="591" data-area="591">Insomnia Treatments</option>
            <option value="148" data-area="148">Internal Medicine</option>
            <option value="595" data-area="595">Interventional Cardiologist</option>
            <option value="131" data-area="131">Interventional Radiologist</option>
            <option value="405" data-area="405">IUCD</option>
            <option value="402" data-area="402">IUI 1ST</option>
            <option value="403" data-area="403">IUI 2ND</option>
            <option value="558" data-area="558">IVF Specialist</option>
            <option value="196" data-area="196">Kidney Dialysis</option>
            <option value="68" data-area="68">Kidney Transplant Surgeon </option>
            <option value="471" data-area="471">Lab Sample Collection</option>
            <option value="280" data-area="280">Lactation Counseling</option>
            <option value="171" data-area="171">Laparoscopic and Bariatric Surgeon</option>
            <option value="186" data-area="186">Laparoscopy And Colorectal Surgeon</option>
            <option value="516" data-area="516">Laser Removal</option>
            <option value="650" data-area="650">Life Style Management For Weight Loss and Diabetes</option>
            <option value="527" data-area="527">Lifestyle Medicine</option>
            <option value="189" data-area="189">Lifestyle Therapist</option>
            <option value="236" data-area="236">Liver Centre</option>
            <option value="181" data-area="181">Low Vision Practitioner</option>
            <option value="543" data-area="543">Lung Function Test</option>
            <option value="271" data-area="271">Manual Therapist</option>
            <option value="528" data-area="528">Manual Therapist</option>
            <option value="204" data-area="204">Maxillofacial Surgeon</option>
            <option value="350" data-area="350">Medical Aesthetist</option>
            <option value="69" data-area="69">Medical And Clinical Geneticist</option>
            <option value="114" data-area="114">Medical Examination (Visa)</option>
            <option value="199" data-area="199">Medical Fitness Certificate for Sports </option>
            <option value="70" data-area="70">Medical Gastroenterologist</option>
            <option value="555" data-area="555">Medical Laser Therapist &amp; Esthetics Technician</option>
            <option value="71" data-area="71">Medical Microbiologist</option>
            <option value="217" data-area="217">Medical Nutritionist</option>
            <option value="174" data-area="174">Medical Officer</option>
            <option value="472" data-area="472">Medical Officer - Home Visit</option>
            <option value="456" data-area="456">Medical Officer - Nutrition</option>
            <option value="178" data-area="178">Medical Officer - Ophthalmology</option>
            <option value="431" data-area="431">Medical Parasitologist</option>
            <option value="432" data-area="432">Medical Psychologist</option>
            <option value="107" data-area="107">Medical Virologist</option>
            <option value="424" data-area="424">Memory and Cognitive Assessment</option>
            <option value="110" data-area="110">Memory Clinic</option>
            <option value="252" data-area="252">Mens Sexual And Reproductive Health</option>
            <option value="304" data-area="304">Menstrual Disorder Clinic</option>
            <option value="135" data-area="135">Microbiologist </option>
            <option value="634" data-area="634">Mother and Baby Care Consultant</option>
            <option value="642" data-area="642">Music Therapist</option>
            <option value="134" data-area="134">Mycologist</option>
            <option value="522" data-area="522">Nebulization</option>
            <option value="12" data-area="12">Neonatal Paediatrician</option>
            <option value="151" data-area="151">Neonatologist</option>
            <option value="72" data-area="72">Nephrologist</option>
            <option value="387" data-area="387">Nerve Conduction</option>
            <option value="38" data-area="38">Neuro Physician</option>
            <option value="74" data-area="74">Neuro Physiologist</option>
            <option value="370" data-area="370">Neuro Physiotherapy</option>
            <option value="13" data-area="13">Neuro Surgeon</option>
            <option value="149" data-area="149">Neurologist</option>
            <option value="338" data-area="338">New Zealand Visa Medical</option>
            <option value="531" data-area="531">Newborn Hearing Screening</option>
            <option value="368" data-area="368">NT - Scan</option>
            <option value="200" data-area="200">Nutrition Physician</option>
            <option value="75" data-area="75">Nutrition Specialist</option>
            <option value="76" data-area="76">Nutritionist</option>
            <option value="267" data-area="267">Nutritious Advice</option>
            <option value="132" data-area="132">Obstetrician</option>
            <option value="147" data-area="147">Obstetrician &amp; Gynaecologist</option>
            <option value="647" data-area="647">Obstetrician &amp; Gynaecologist (Follow-Up)</option>
            <option value="648" data-area="648">Obstetrician &amp; Gynaecologist (New Patients)</option>
            <option value="347" data-area="347">Obstetrician And Fetal Medicine Specialist</option>
            <option value="162" data-area="162">Obstetrician, Fetal Medicine Specialist &amp; Genetic Consultation</option>
            <option value="44" data-area="44">Occupational Medicine</option>
            <option value="326" data-area="326">Occupational Physician</option>
            <option value="77" data-area="77">Occupational Therapist</option>
            <option value="146" data-area="146">Oculoplastic Surgeon</option>
            <option value="333" data-area="333">OMF Surgeon &amp; Specialist in Oral Medicine</option>
            <option value="33" data-area="33">Oncological Surgeon</option>
            <option value="150" data-area="150">Oncologist</option>
            <option value="121" data-area="121">Oncologist - Cancer Specialist</option>
            <option value="617" data-area="617">OPD</option>
            <option value="14" data-area="14">Ophthalmologist</option>
            <option value="182" data-area="182">Optometrist</option>
            <option value="78" data-area="78">Oral And Maxillofacial Surgeon</option>
            <option value="79" data-area="79">Oral Dental And Maxillofacial Surgeon</option>
            <option value="375" data-area="375">Oral Medicine</option>
            <option value="318" data-area="318">Oral surgeon</option>
            <option value="210" data-area="210">Orthodontic Surgeon</option>
            <option value="81" data-area="81">Orthodontist</option>
            <option value="367" data-area="367">Orthopaedic And General Physician</option>
            <option value="111" data-area="111">Orthopaedic Surgeon</option>
            <option value="172" data-area="172">Orthopaedic Surgeon (Adult &amp; Paediatric)</option>
            <option value="361" data-area="361">Orthopaedic Surgeon (Hand And Upper Limb)</option>
            <option value="618" data-area="618">Orthopedic</option>
            <option value="363" data-area="363">Orthopedic/Neuro/Sports Rehabilitation Physiotherapist</option>
            <option value="258" data-area="258">Orthopedics (Traditional Medicine)</option>
            <option value="373" data-area="373">Orthoptic Assessment</option>
            <option value="596" data-area="596">Orthoptist</option>
            <option value="21" data-area="21">Paediatric Cardiac Surgeon</option>
            <option value="15" data-area="15">Paediatric Cardiologist </option>
            <option value="235" data-area="235">Paediatric Cardiothoracic Surgeon</option>
            <option value="269" data-area="269">Paediatric Chest Physician</option>
            <option value="475" data-area="475">Paediatric Clinical Geneticist</option>
            <option value="357" data-area="357">Paediatric Dentist</option>
            <option value="16" data-area="16">Paediatric Dermatologist</option>
            <option value="144" data-area="144">Paediatric Endocrinologist</option>
            <option value="612" data-area="612">Paediatric Endocrinologist and Diabetologist</option>
            <option value="159" data-area="159">Paediatric Eye Surgeon</option>
            <option value="358" data-area="358">Paediatric Gastroenterologist</option>
            <option value="272" data-area="272">Paediatric Intensivist</option>
            <option value="285" data-area="285">Paediatric Interventional Cardiologist</option>
            <option value="140" data-area="140">Paediatric Neonatologist</option>
            <option value="82" data-area="82">Paediatric Nephrologist</option>
            <option value="19" data-area="19">Paediatric Neurologist</option>
            <option value="163" data-area="163">Paediatric Oncologist</option>
            <option value="198" data-area="198">Paediatric Oncologist(Child And Adolescents)</option>
            <option value="183" data-area="183">Paediatric Optometrist</option>
            <option value="18" data-area="18">Paediatric Orthopaedic Surgeon</option>
            <option value="245" data-area="245">Paediatric Physiotherapist</option>
            <option value="141" data-area="141">Paediatric Psychiatrist</option>
            <option value="336" data-area="336">Paediatric Pulmonologist</option>
            <option value="597" data-area="597">Paediatric Respiratory Chest Physician</option>
            <option value="17" data-area="17">Paediatric Surgeon </option>
            <option value="83" data-area="83">Paediatric Vaccinologist</option>
            <option value="32" data-area="32">Paediatrician</option>
            <option value="348" data-area="348">Paediatrician And Neonatologist</option>
            <option value="84" data-area="84">Paediatrics And Paediatric Neurodisability</option>
            <option value="374" data-area="374">Paedodontics</option>
            <option value="130" data-area="130">Pain Management</option>
            <option value="364" data-area="364">Pain Management in Labour</option>
            <option value="275" data-area="275">Panchakarma</option>
            <option value="404" data-area="404">PAP TEST</option>
            <option value="85" data-area="85">Parasitologist</option>
            <option value="20" data-area="20">Pathologist</option>
            <option value="412" data-area="412">PCR</option>
            <option value="415" data-area="415">PCR Test</option>
            <option value="473" data-area="473">PCR-Test</option>
            <option value="261" data-area="261">Periodontist</option>
            <option value="423" data-area="423">Physical Fitness Instructor</option>
            <option value="421" data-area="421">Physical Rehabilitation</option>
            <option value="31" data-area="31">Physician</option>
            <option value="234" data-area="234">Physician And Endocrinologists</option>
            <option value="259" data-area="259">Physician/Chest Physician(Traditional Medicine)</option>
            <option value="620" data-area="620">Physio Medicare</option>
            <option value="419" data-area="419">Physiological Counseling</option>
            <option value="302" data-area="302">Physiologist</option>
            <option value="89" data-area="89">Physiotherapist</option>
            <option value="460" data-area="460">Physiotherapy</option>
            <option value="399" data-area="399">Physiotherapy and Rehabilitation</option>
            <option value="574" data-area="574">Physiotherapy Treatment</option>
            <option value="576" data-area="576">Physiotherapy Treatment with Cupping Therapy</option>
            <option value="575" data-area="575">Physiotherapy Treatment with Dry Needling</option>
            <option value="533" data-area="533">Physiotherapy Unit</option>
            <option value="222" data-area="222">Physiotherapy/Pain And Orthopedic Neuro Rehabilitation</option>
            <option value="613" data-area="613">PICU Paediatrician</option>
            <option value="233" data-area="233">Plastic and Reconstructive Surgeon</option>
            <option value="429" data-area="429">Plastic Eye Surgery (Cosmetic Consultation Only)</option>
            <option value="30" data-area="30">Plastic Surgeon</option>
            <option value="621" data-area="621">Podiatry and Biomechanics Technician</option>
            <option value="428" data-area="428">Polymerase Chain Reaction Test (PCR)</option>
            <option value="323" data-area="323">pre participation evaluation</option>
            <option value="562" data-area="562">Pregnancy Counsellor</option>
            <option value="379" data-area="379">Preventive Health Programmes</option>
            <option value="319" data-area="319">Prosthetist And Orthotist</option>
            <option value="142" data-area="142">Prosthodontist</option>
            <option value="29" data-area="29">Psychiatrist</option>
            <option value="232" data-area="232">Psychiatrist (Child And Adolescents)</option>
            <option value="541" data-area="541">Psychiatrist Counsellor</option>
            <option value="201" data-area="201">Psycho Social Practitioner</option>
            <option value="90" data-area="90">Psychological Counselling</option>
            <option value="643" data-area="643">Psychological Counselling (Ayurvedic)</option>
            <option value="487" data-area="487">Psychological Counselling (Family)</option>
            <option value="486" data-area="486">Psychological Counselling (Individual)</option>
            <option value="401" data-area="401">Psychological Therapy</option>
            <option value="28" data-area="28">Psychologist </option>
            <option value="378" data-area="378">Psychologist - Brain Rehab Workshop</option>
            <option value="588" data-area="588">Psychology Support And Counseling</option>
            <option value="381" data-area="381">Psychotherapist</option>
            <option value="314" data-area="314">Public Health Nutritionist</option>
            <option value="209" data-area="209">Pulmonary Rehabilitation Therapist</option>
            <option value="295" data-area="295">Pulmonologist</option>
            <option value="483" data-area="483">Pure Tone Auditory (PTA)</option>
            <option value="109" data-area="109">Quarterisation Charges</option>
            <option value="91" data-area="91">Radiologist</option>
            <option value="524" data-area="524">Radiology</option>
            <option value="586" data-area="586">Radiology Clinic</option>
            <option value="434" data-area="434">Rapid Antigen Test</option>
            <option value="420" data-area="420">Reconstructive Breast Surgeon</option>
            <option value="535" data-area="535">Reflexology</option>
            <option value="384" data-area="384">Rehabilitation Therapist</option>
            <option value="589" data-area="589">Relaxation Treatments</option>
            <option value="446" data-area="446">Renal Doppler</option>
            <option value="212" data-area="212">Reproductive Endocrinologist</option>
            <option value="552" data-area="552">Reproductive Medicine</option>
            <option value="92" data-area="92">Respiratory Medicine</option>
            <option value="249" data-area="249">Respiratory Physician</option>
            <option value="117" data-area="117">Restorative Dentist</option>
            <option value="413" data-area="413">Reverse Transcription-Polymerase Chain Reaction Test (RT-PCR)</option>
            <option value="27" data-area="27">Rheumatologist</option>
            <option value="138" data-area="138">Rheumatology and Rehabilitation</option>
            <option value="578" data-area="578">Rheumatology and Rehabilitation Medicine</option>
            <option value="113" data-area="113">S.T.D</option>
            <option value="220" data-area="220">Scanning</option>
            <option value="579" data-area="579">Senior Counselor</option>
            <option value="180" data-area="180">Senior Orthoptist</option>
            <option value="173" data-area="173">Sexual Health</option>
            <option value="106" data-area="106">Sexual Medicine</option>
            <option value="327" data-area="327">Sexual Wellness</option>
            <option value="409" data-area="409">SFA</option>
            <option value="435" data-area="435">Skin Care Adult, Paediatric &amp; Cosmetic Dermatologist</option>
            <option value="229" data-area="229">Skin Care And Cosmetic Centre - Plastic Surgeon</option>
            <option value="227" data-area="227">Skin Care And Cosmetic Consultant Dermatologist</option>
            <option value="228" data-area="228">Skin Care And Cosmetic Oculoplastic Surgeon</option>
            <option value="366" data-area="366">Skin Diseases And General Physician</option>
            <option value="577" data-area="577">Skin Prick Test</option>
            <option value="337" data-area="337">Sleep Health and General Wellness Physician</option>
            <option value="627" data-area="627">Sleep Study</option>
            <option value="602" data-area="602">Sleep Trainer/Coach</option>
            <option value="441" data-area="441">Soft Tissues Scan</option>
            <option value="635" data-area="635">Special Education and Behavioural Therapist</option>
            <option value="177" data-area="177">Special Education Consultant</option>
            <option value="167" data-area="167">Special Educational Needs</option>
            <option value="523" data-area="523">Special Interest In Fertility Treatments</option>
            <option value="438" data-area="438">Specialist Family Physician</option>
            <option value="430" data-area="430">Specialist in Internal Medicine</option>
            <option value="168" data-area="168">Specialist in Laparoscopic Surgery</option>
            <option value="360" data-area="360">Specialist in Reproductive Medicine</option>
            <option value="482" data-area="482">Specialist in Sports and Exercise Medicine</option>
            <option value="351" data-area="351">Specialist Physiotherapist</option>
            <option value="297" data-area="297">Specialized Child Psychology Clinic</option>
            <option value="291" data-area="291">Speech and Language Pathologist and Audiologist</option>
            <option value="565" data-area="565">Speech and Hearing Therapist</option>
            <option value="94" data-area="94">Speech and Language Therapist</option>
            <option value="184" data-area="184">Speech Language Pathologist</option>
            <option value="95" data-area="95">Speech Pathologist</option>
            <option value="123" data-area="123">Speech Pathologist/Therapist</option>
            <option value="26" data-area="26">Speech Therapist</option>
            <option value="169" data-area="169">Speech Therapist/Autism</option>
            <option value="502" data-area="502">Speech Therapy</option>
            <option value="489" data-area="489">Speech Therapy &amp; Psychological Counselling</option>
            <option value="626" data-area="626">Spirometry</option>
            <option value="306" data-area="306">Sport Injury Clinic</option>
            <option value="529" data-area="529">Sport Therapist</option>
            <option value="160" data-area="160">Sports and Exercise Medicine</option>
            <option value="270" data-area="270">Sports And Exercise Physician</option>
            <option value="25" data-area="25">Sports Medicine</option>
            <option value="312" data-area="312">Sports Medicine Low Back Pain Management</option>
            <option value="583" data-area="583">Sports Medicine Physician</option>
            <option value="213" data-area="213">Sports Nutrition &amp; Performance</option>
            <option value="244" data-area="244">Sports Physiotherapy/Pain Management</option>
            <option value="156" data-area="156">Sports Psychology</option>
            <option value="606" data-area="606">Std Hiv Sexual Health</option>
            <option value="590" data-area="590">Stress, Anxiety And Depression Treatments</option>
            <option value="503" data-area="503">Stroke Medicine</option>
            <option value="97" data-area="97">Study Disorders And Counselling</option>
            <option value="593" data-area="593">Sub - Fertility Treatments</option>
            <option value="98" data-area="98">Sub Fertility Specialist</option>
            <option value="322" data-area="322">Subspecialist in Reproductive Medicine</option>
            <option value="24" data-area="24">Surgeon</option>
            <option value="518" data-area="518">Suture Removal</option>
            <option value="519" data-area="519">Suturing</option>
            <option value="194" data-area="194">Telemedicine</option>
            <option value="464" data-area="464">Test</option>
            <option value="328" data-area="328">Therapist for Drug and Alcohol Addiction</option>
            <option value="525" data-area="525">Therapy</option>
            <option value="42" data-area="42">Thoracic Surgeon</option>
            <option value="23" data-area="23">Transfusion Medicine</option>
            <option value="225" data-area="225">Transfusion Physician</option>
            <option value="126" data-area="126">Transplant Surgeon</option>
            <option value="298" data-area="298">Trauma Counselor</option>
            <option value="248" data-area="248">Trauma Surgeon</option>
            <option value="268" data-area="268">Ultra Sound Scan</option>
            <option value="175" data-area="175">Urological Surgeon</option>
            <option value="22" data-area="22">Urologist</option>
            <option value="108" data-area="108">UV Therapy</option>
            <option value="157" data-area="157">Vaccine Advice</option>
            <option value="99" data-area="99">Vaccinologist</option>
            <option value="119" data-area="119">Vascular And Transplant Surgeon</option>
            <option value="100" data-area="100">Vascular And Transplant Surgeon Liver And Kidney</option>
            <option value="101" data-area="101">Vascular Surgeon</option>
            <option value="93" data-area="93">Venereologist (S.T.D)</option>
            <option value="442" data-area="442">Venous Doppler - One Leg</option>
            <option value="443" data-area="443">Venous Doppler - Two Legs</option>
            <option value="570" data-area="570">Video Consultation</option>
            <option value="102" data-area="102">Virologist</option>
            <option value="103" data-area="103">Vitreoretinal Surgeon </option>
            <option value="154" data-area="154">VOG Scan</option>
            <option value="133" data-area="133">Weight Management</option>
            <option value="369" data-area="369">Well being Scan</option>
            <option value="197" data-area="197">Well Woman Clinics</option>
            <option value="559" data-area="559">With a Special Interest in Childhood Chest Diseases</option>
            <option value="636" data-area="636">Wound Care Practitioner</option>
            <option value="463" data-area="463">Wound Care Specialist</option>
            <option value="640" data-area="640">Wound Clinic</option>
            <option value="343" data-area="343">Wound Consultation</option>
            <option value="520" data-area="520">X-Ray</option>
        </select>
        <label for="Date" style="font-weight: bold;font-size: 22px;">Date</label>
        <input type="date" name="userName" id="Date" date-placeholder="11/6/2023" class="holder">
        <div class='logbutton' id="maked">
           <a href="<?=URLROOT."/patient/appointments/ShowDoc"?>" style="text-decoration: none;"> <font class="font1">Make appointment</font></a>
        </div>
        <br>
    </section>
    <!-- Your JavaScript Code -->
    
    </ul>
</div>
</article>
</body>
<script src="<?=URLROOT?>./javascript/dashboard.js"></script>
<script>
    function select2()
{if(document.getElementsByClassName("navbar")[0].style.display=="none"){
    document.getElementsByClassName("navbar")[0].style.display="flex";
}
else{
    document.getElementsByClassName("navbar")[0].style.display="none";
}
}
document.getElementById("deactivate").onclick = function () {
            document.getElementsByClassName("popup")[0].style.display="block";
            document.getElementsByClassName("dashboard")[0].style.filter = "blur(3px)";
        };
        document.getElementById("no").onclick = function () {
            document.getElementsByClassName("popup")[0].style.display="none";
            document.getElementsByClassName("dashboard")[0].style.filter = "";
        }
        document.getElementById("yes").onclick = function () {
            document.getElementsByClassName("popup")[0].style.display="none";
            document.getElementsByClassName("dashboard")[0].style.filter = "";
        }   
</script>