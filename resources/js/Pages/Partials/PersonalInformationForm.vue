<template>
    <section>
        <div class="d-flex flex-column">
            <h1><u>Personal Information</u></h1>
            <h5>Personal na Impormasyon</h5>
        </div>
        <div class="row">
            <div class="col-6 mb-2">
                <label class="form-label fw-bold">
                    <i class="fas fa-asterisk" style="color: red"></i>
                    Category <i>(Kategorya)</i>
                </label>
                <select v-model="category" class="form-select">
                    <option v-for="(text, item) in categories" v-bind:value="item">{{ text }}</option>
                </select>
            </div>
            <div class="col-6 mb-2" v-if="subCategories[category] !== undefined">
                <label class="form-label fw-bold">
                    <i class="fas fa-asterisk" style="color: red"></i>
                    Sub Category <i>(Sub Kategorya)</i>
                </label>
                <select v-model="subCategory" class="form-select">
                    <option v-for="item in subCategories[category]" v-bind:value="item">{{ item }}</option>
                </select>
            </div>
            <div class="col-6 mb-2">
                <label class="form-label fw-bold">
                    <i class="fas fa-asterisk" style="color: red"></i>
                    Category ID <i>(Kategorya ng ID)</i>
                </label>
                <select class="form-select" v-model="categoryID">
                    <option v-for="item in categoryIDs" v-bind:value="item">{{ item }}</option>
                </select>
            </div>
            <div class="col-6 mb-2" v-if="categoryID === 'Other ID (Iba pa)'">
                <label class="form-label fw-bold">
                    <i class="fas fa-asterisk" style="color: red"></i>
                    Category ID Others <i>(Iba pang Kategorya ng ID)</i>
                </label>
                <input v-model="categoryIDOther" class="required form-control">
            </div>
            <div class="col-6 mb-2">
                <label class="form-label fw-bold">
                    <i class="fas fa-asterisk" style="color: red"></i>
                    Category ID No.
                </label>
                <input v-model="categoryIDNo" class="form-control">
            </div>
            <div class="col-12 mb-2">
                <label class="form-label fw-bold">
                    <i class="fas fa-asterisk" style="color: red"></i>
                    Philhealth No.
                </label>
                <input v-model="philHealthNo" type="text" class="form-control">
            </div>
            <div class="col-3 mb-2">
                <label class="form-label fw-bold">
                    <i class="fas fa-asterisk" style="color: red"></i>
                    Last Name <i>(Apleyido)</i>
                </label>
                <input v-model="lastName" type="text" class="form-control">
            </div>
            <div class="col-3 mb-2">
                <label class="form-label fw-bold">
                    <i class="fas fa-asterisk" style="color: red"></i>
                    First Name <i>(Pangalan)</i>
                </label>
                <input v-model="firstName" type="text" class="form-control">
            </div>
            <div class="col-3 mb-2">
                <label class="form-label fw-bold">
                    <i class="fas fa-asterisk" style="color: red"></i>
                    Middle Name <i>(Gitnang Apelyido)</i>
                </label>
                <input v-model="middleName" type="text" class="form-control">
            </div>
            <div class="col-2 mb-2">
                <label class="form-label fw-bold">
                    <i class="fas fa-asterisk" style="color: red"></i>
                    Suffix
                </label>
                <input v-model="suffix" type="text" class="form-control">
            </div>
            <div class="col-12 d-flex flex-row my-auto mb-2 mt-4">
                <div class="form-check me-5">
                    <input class="form-check-input" type="radio" value="Mobile No." v-model="numberType">
                    <label class="form-check-label fw-bold">
                        Mobile No.
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="Telephone No." v-model="numberType">
                    <label class="form-check-label fw-bold">
                        Telephone No.
                    </label>
                </div>
            </div>
            <div class="col-6 mb-2">
                <label class="form-label fw-bold">
                    <i class="fas fa-asterisk" style="color: red"></i>
                    Phone No
                </label>
                <input v-model="phoneNo" type="text" class="form-control">
            </div>
            <div class="col-6 mb-2">
                <label class="form-label fw-bold">
                    <i class="fas fa-asterisk" style="color: red"></i>
                    E-mail
                </label>
                <input v-model="email" type="email" class="form-control">
            </div>
            <div class="col-4 mb-2">
                <label class="form-label fw-bold">
                    <i class="fas fa-asterisk" style="color: red"></i>
                    Gender
                </label>
                <select class="form-select" v-model="gender">
                    <option value="male">Male (Lalaki)</option>
                    <option value="female">Female (Babae)</option>
                </select>
            </div>
            <div class="col-4 mb-2">
                <label class="form-label fw-bold">
                    <i class="fas fa-asterisk" style="color: red"></i>
                    Birthday
                </label>
                <input v-model="birthday" type="date" class="form-control">
            </div>
            <div class="col-4 mb-2">
                <label class="form-label fw-bold">
                    <i class="fas fa-asterisk" style="color: red"></i>
                    Civil Status<i>(Katayuang Sibil)</i>
                </label>
                <select class="form-select" v-model="civilStatus">
                    <option value="single">Single (Walang asawa)</option>
                    <option value="married">Married (Kasal)</option>
                    <option value="widow or widower">Widow/Widower (Biyudo/a)</option>
                    <option value="separated or annulled">Separated/Annulled (Hiwalay sa Asawa)</option>
                    <option value="common-law spouse">Common-law Spouse (May ka-live-in)</option>
                </select>
            </div>
            <div class="col-12 fw-bold"><i class="fas fa-asterisk" style="color: red"></i>
                Home Address <i>(Tirahan)</i>
            </div>
            <div class="col-6 col-lg-3 mb-2">
                <input v-model="bldg" class="form-control">
                <div class="form-text">(Rm./Flr./Unit No. &amp; Bldg. Name)</div>
            </div>
            <div class="col-6 col-lg-3 mb-2">
                <input v-model="hln" class="form-control">
                <div class="form-text">(House/Lot &amp; Block No.)</div>
            </div>
            <div class="col-6 col-lg-3 mb-2">
                <input v-model="street" class="form-control">
                <div class="form-text">(Street Name)</div>
            </div>
            <div class="col-6 col-lg-3 mb-2">
                <input v-model="subdivision" class="form-control">
                <div class="form-text">(Subdivision/Village)</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <label for="1"><strong>Region<span color="red">*</span>
                </strong>(Rehiyon)</label>
                <select name="region" id="region" class="required form-select valid">
                    <option value="">Please select Region</option>
                    <option value="Ilocos">Ilocos</option>
                    <option value="CagayanValley">CagayanValley</option>
                    <option value="CentralLuzon">CentralLuzon</option>
                    <option value="CALABARZON">CALABARZON</option>
                    <option value="BicolRegion">BicolRegion</option>
                    <option value="WesternVisayas">WesternVisayas</option>
                    <option value="CentralVisayas">CentralVisayas</option>
                    <option value="EasternVisayas">EasternVisayas</option>
                    <option value="ZamboangaPeninsula">ZamboangaPeninsula</option>
                    <option value="NorthernMindanao">NorthernMindanao</option>
                    <option value="DavaoRegion">DavaoRegion</option>
                    <option value="Soccsksargen">Soccsksargen</option>
                    <option value="NationalCapitalRegion">NationalCapitalRegion</option>
                    <option value="CordilleraAdministrativeRegion">
                        CordilleraAdministrativeRegion
                    </option>
                    <option value="BangsamoroAutonomousRegioninMuslimMindanao">
                        BangsamoroAutonomousRegioninMuslimMindanao
                    </option>
                    <option value="CARAGA">CARAGA</option>
                    <option value="MIMAROPA">MIMAROPA</option>
                </select>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <label for="province"><strong>Province<span color="red">*</span> </strong>(Probinsya)</label>
                <select name="province" id="province" class="form-select">
                    <option value="">Please select Province</option>
                    <option value="_1339_NCR_CITY_OF_MANILA_FIRST_DISTRICT"> NCR CITY OF
                        MANILA FIRST DISTRICT
                    </option>
                    <option value="_1376_NCR_FOURTH_DISTRICT"> NCR FOURTH DISTRICT</option>
                    <option value="_1374_NCR_SECOND_DISTRICT"> NCR SECOND DISTRICT</option>
                    <option value="_1375_NCR_THIRD_DISTRICT"> NCR THIRD DISTRICT</option>
                </select>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <label for="city"><strong>City<span color="red">*</span> </strong> (Lungsod)</label>
                <select name="city" id="city" class="form-select">
                    <option value="">Please select City</option>
                    <option value="_137601_CITY_OF_LAS_PIÑAS"> CITY OF LAS PIÑAS</option>
                    <option value="_137602_CITY_OF_MAKATI"> CITY OF MAKATI</option>
                    <option value="_137603_CITY_OF_MUNTINLUPA"> CITY OF MUNTINLUPA</option>
                    <option value="_137604_CITY_OF_PARAÑAQUE"> CITY OF PARAÑAQUE</option>
                    <option value="_137605_PASAY_CITY"> PASAY CITY</option>
                    <option value="_137606_PATEROS"> PATEROS</option>
                    <option value="_137607_TAGUIG_CITY"> TAGUIG CITY</option>
                </select>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <label for="brgy"><strong>Barangay<span color="red">*</span>
                </strong></label>
                <select name="brgy" id="brgy" class="form-select">
                    <option value="">Please select Barangay</option>
                    <option value="_137603001_ALABANG">ALABANG</option>
                    <option value="_137603002_BAYANAN">BAYANAN</option>
                    <option value="_137603003_BULI">BULI</option>
                    <option value="_137603004_CUPANG">CUPANG</option>
                    <option value="_137603009_NEW_ALABANG_VILLAGE">NEW ALABANG VILLAGE
                    </option>
                    <option value="_137603005_POBLACION">POBLACION</option>
                    <option value="_137603006_PUTATAN">PUTATAN</option>
                    <option value="_137603007_SUCAT">SUCAT</option>
                    <option value="_137603008_TUNASAN">TUNASAN</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <label for="otherbrgy"><strong></strong></label>
                <input type="text" name="otherbrgy" id="otherbrgy"
                       placeholder="Please specify barangay" style="display:none;"
                       class="required form-control" value="">
            </div>
        </div>
        <div class="row">

        </div>
        <div class="col-8">
            <br>
            <h5><strong>Employment Information</strong></h5>
            <h6>(Manggagawang Impormasyon) </h6>
            <br>
        </div>
        <div class="row">
            <div class="col-sm">
                <label for="empstat"><strong>Employment Status<span color="red">*</span>
                </strong> (Kalagayang Pangmanggagawa)</label>
                <select name="empstat" id="empstat" class="required form-select error"
                        value="">
                    <option value="">Please select</option>
                    <option value="01">Government Employed (Kawani ng Gobyerno)</option>
                    <option value="02">Private Employed (Pribadong Manggagawa)</option>
                    <option value="03">Self-employed (May sariling
                        pinagkakakitaan/negosyo)
                    </option>
                    <option value="04">Private practitioner</option>
                    <option value="05">Others (Iba pa)</option>
                    <option value="06">N/A</option>
                </select><label for="empstat" generated="true" class="error">This field is
                required.</label>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <label for="provide"><strong>Providing Care to COVID-19 patient?<span
                    color="red">*</span> </strong>(Nagbibigay ng direktang serbisyo hinggil
                    sa COVID?)</label>
                <select name="provide" id="provide" class="required form-select error"
                        value="">
                    <option value="">Please select</option>
                    <option value="01">Yes (Oo)</option>
                    <option value="02">No (Hindi)</option>
                </select><label for="provide" generated="true" class="error">This field is
                required.</label>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <label for="profe"><strong>Occupation<span color="red">*</span> </strong>
                    (Trabaho)</label>
                <select name="profe" id="profe" class="required form-select error" value="">
                    <option value="">Please select</option>
                    <option value="01">Dental Hygienist</option>
                    <option value="02">Dental Technologist</option>
                    <option value="03">Dentist</option>
                    <option value="04">Medical Technologist</option>
                    <option value="05">Midwife</option>
                    <option value="06">Nurse</option>
                    <option value="07">Nutritionist-Dietician</option>
                    <option value="08">Occupational Therapist</option>
                    <option value="09">Optometrist</option>
                    <option value="10">Pharmacist</option>
                    <option value="11">Physical Therapist</option>
                    <option value="12">Physician</option>
                    <option value="13">Radiologic Technologist</option>
                    <option value="14">Respiratory Therapist</option>
                    <option value="15">X-ray Technologist</option>
                    <option value="16">Barangay Health Worker</option>
                    <option value="17">Maintenance Staff</option>
                    <option value="18">Administrative Staff</option>
                    <option value="19">Other Workers in Frontline Health Services</option>
                    <option value="20">N/A</option>
                </select><label for="profe" generated="true" class="error">This field is
                required.</label>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-14">
                <div class="col-sm">
                    <label for="employername"><strong>Employer Name</strong>(Panagalan ng
                        Kumpanya)</label>
                    <input id="employername" name="employername" type="text"
                           class="form-control text-uppercase" value="">
                    <br>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <label for="employeradd"><strong>Employer Address</strong>(Address ng
                    Kumpanya)</label>
                <input id="employeradd" name="employeradd" type="text"
                       class="form-control text-uppercase" value="">
                <br>
            </div>
            <div class="col-sm">
                <label for="empmobile"><strong>Employer Contact No.<span color="red"></span>
                    <span size="1"></span> </strong>(Kontak ng Kumpanya)</label>
                <input id="empmobile" name="empmobile" class="form-control valid"
                       maxlength="20" type="text" value=""
                       onkeypress="if (!window.__cfRLUnblockHandlers) return false; return isNumberKey(event)">
                <br>
            </div>
        </div>
        <div class="col-8">
            <br>
            <h5><strong>Profile Information</strong></h5>
            <br>
        </div>
        <div class="row" style="display:none;" id="pregnantgroup">
            <div class="col-sm">
                <label for="pregnant1"><strong>Pregnant?</strong><span color="red">*</span></label>
                <select name="pregnant" id="pregnant" class="required form-select">
                    <option value="">Please select</option>
                    <option value="01">Yes</option>
                    <option value="02">No</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <label for="histocovid"><strong>History of Covid-19 Infection</strong><span
                    color="red">*</span></label>
                <select name="histocovid" id="histocovid" class="required form-select error"
                        onchange="if (!window.__cfRLUnblockHandlers) return false; checkPositive(this.value);">
                    <option value="">Please select</option>
                    <option value="01">Yes</option>
                    <option value="02">No</option>
                </select><label for="histocovid" generated="true" class="error">This field
                is required.</label>
            </div>
        </div>
        <div class="row" style="display:none;" id="histoChoice">
            <div class="col-sm">
                <label for="dateofinfe"><strong>Date of Infection<span color="red">*</span>
                </strong></label>
                <input id="datetimepicker-input" class="form-control" name="dateofinfe"
                       type="date" value="">
            </div>
            <div class="col-sm">
                <label for="classinfect"><strong>Classification of
                    Infection</strong></label>
                <select name="classinfect" id="classinfect" class="required form-select">
                    <option value="">Please select</option>
                    <option value="01">Asymptomatic</option>
                    <option value="02">Mild</option>
                    <option value="03">Moderate</option>
                    <option value="04">Severe</option>
                    <option value="05">Critical</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-sm"></div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "PersonalInformationForm.vue",
        watch: {
            category: function (value) {
                this.subCategory = '';
                if (this.subCategories[value] !== undefined) {
                    this.subCategory = this.subCategories[value][0];
                }
            },
            categoryID: function (value) {
                this.categoryIDOther = '';
            }
        },
        data() {
            return {
                categoryIDOther: '',
                category: 'A1',
                subCategory: 'A1.1-COVID-19 Referral Hospitals',
                categoryID: 'PRC Number',
                categoryIDNo: '',
                philHealthNo: '',
                lastName: '',
                firstName: '',
                middleName: '',
                suffix: '',
                numberType: 'Mobile No.',
                phoneNo: '',
                email: '',
                gender: 'male',
                birthday: '',
                civilStatus: 'single',
                bldg: '',
                hln: '',
                street: '',
                subdivision: '',
                categoryIDs: [
                    'PRC Number',
                    'OSCA Number',
                    'Facility ID Number',
                    'PWD ID',
                    'Other ID (Iba pa)',
                ],
                categories: {
                    'A1': 'A1-Health Care Worker',
                    'A2': 'A2-Senior Citizen',
                    'A3': 'A3-Adult with Comorbidities (18 to 59 years old)',
                    'A4': 'A4-Uniformed Personnel / Essential Workers',
                    'A5': 'A5-Indigent',
                    'B1': 'B1-Teachers and Social Worker',
                    'B2': 'B2-Other Government Workers',
                    'B3': 'B3-Other Essential Workers',
                    'B4': 'B4-Socio-Demographic groups at significantly Higher Risk',
                    'B5': 'B5-OFW',
                    'B6': 'B6-Remaining Workforce',
                    'C': 'C-Rest of the Population',
                },
                subCategories: {
                    'A1': [
                        'A1.1-COVID-19 Referral Hospitals',
                        'A1.2-Hospitals Catering to C19 Cases',
                        'A1.3-Quarantine Isolation Facilities',
                        'A1.4-Remaining Hospitals',
                        'A1.5-DOH Employees',
                        'A1.5-Disaster Risk Reduction and Management Office (DRRMO) Employees',
                        'A1.5-DepEd Healthcare Workers',
                        'A1.5-All Barangay Health Workers',
                        'A1.5-Government Owned Community Based Primary Care Facilities',
                        'A1.6-Stand-alone Clinics and Diagnostics',
                        'A1.7-Personnel manning closed settings and institutions(BJMP, BuCor, Treatment and Rehabilitation Centers)',
                        'A1.7-Social Workers in Orphanages, nursing homes and in other closed settings',
                    ],
                    'A4': [
                        'A4.1-Private Sector workers who work outside their homes',
                        'A4.2-Employees in government agencies and intrumentalities, government-owned or controlled corporations (GOCCs) and local government units',
                        'A4.3-Informal sector workers and self-employed who work outside their homes and those working in private households',
                    ],
                    'B1': [
                        'B1.1-Primary',
                        'B1.2-Secondary',
                        'B1.3-Tertiary',
                        'B1.4-Vocational Educational Institutions',
                    ],
                    'B2': [
                        'B2.1-Local Government  Unit',
                        'B2.2-National Government Agencies (NGAs)',
                        'B2.3-Government-Owned and Controlled Corporations (GOCCs)',
                        'B2.4-Government Financial Institutions (GFIs)',
                    ],
                    'B4': [
                        'B4.1-Person Deprived of Liberty (PDLs)',
                        'B4.2-Person with Disability (PWDs)',
                        'B4.3-Indigenous People (IPs)',
                        'B4.4-All Filipinos in High-Density Areas',
                        'B4.5-Eligible Private and Public Schools Students',
                    ]
                }
            }
        },
    }
</script>

<style scoped>

</style>
