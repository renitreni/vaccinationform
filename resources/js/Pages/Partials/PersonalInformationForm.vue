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
            <div class="col-3 mb-2">
                <label class="form-label fw-bold">
                    <i class="fas fa-asterisk" style="color: red"></i>
                    Regions <i>(Rehiyon)</i>
                </label>
                <select v-model="region" class="form-select">
                    <option v-for="item in regions" v-bind:value="item.name">{{ item.name }}</option>
                </select>
            </div>
            <div class="col-3 mb-2">
                <label class="form-label fw-bold">
                    <i class="fas fa-asterisk" style="color: red"></i>
                    Provinces <i>(Probinsya)</i>
                </label>
                <select class="form-select" v-model="province">
                    <option v-for="item in provinces" v-bind:value="item.name">{{ item.name }}</option>
                </select>
            </div>
            <div class="col-3 mb-2">
                <label class="form-label fw-bold">
                    <i class="fas fa-asterisk" style="color: red"></i>
                    Cities <i>(Mga Syudad)</i>
                </label>
                <select class="form-select" v-model="city">
                    <option v-for="item in cities" v-bind:value="item.name">{{ item.name }}</option>
                </select>
            </div>
            <div class="col-3 mb-2">
                <label class="form-label fw-bold">
                    <i class="fas fa-asterisk" style="color: red"></i>
                    Barangay
                </label>
                <input v-model="baranggay" class="form-control">
            </div>
        </div>
        <div class="d-flex flex-column mt-4 mb-3">
            <h1><u>Employment Information</u></h1>
            <h5>(Manggagawang Impormasyon)</h5>
        </div>
        <div class="row">
            <div class="col-12 mb-2">
                <label class="form-label fw-bold">
                    <i class="fas fa-asterisk" style="color: red"></i>
                    Employment Status <i>(Kalagayang Pangmanggagawa)</i>
                </label>
                <select class="form-select" v-model="employmentStatus">
                    <option value="Government Employed (Kawani ng Gobyerno)">
                        Government Employed (Kawani ng Gobyerno)
                    </option>
                    <option value="Private Employed (Pribadong Manggagawa)">
                        Private Employed (Pribadong Manggagawa)
                    </option>
                    <option value="Self-employed (May sariling pinagkakakitaan/negosyo)">
                        Self-employed (May sariling pinagkakakitaan/negosyo)
                    </option>
                    <option value="Private practitioner">
                        Private practitioner
                    </option>
                    <option value="Unemployed">
                        Unemployed
                    </option>
                </select>
            </div>
            <div class="col-12 mb-2">
                <label class="form-label fw-bold">
                    <i class="fas fa-asterisk" style="color: red"></i>
                    Providing Care to COVID-19 patient? <i>(Nagbibigay ng direktang serbisyo hinggil sa COVID?)</i>
                </label>
                <select class="form-select" v-model="careProvider">
                    <option value="Yes">Yes (Oo)</option>
                    <option value="No">No (Hindi)</option>
                </select>
            </div>
            <div class="col-3 mb-2">
                <label class="form-label fw-bold">
                    <i class="fas fa-asterisk" style="color: red"></i>
                    Occupation
                </label>
                <input v-model="occupation" class="form-control">
            </div>
            <div class="col-4 mb-2">
                <label class="form-label fw-bold">
                    <i class="fas fa-asterisk" style="color: red"></i>
                    Employer Name
                </label>
                <input v-model="employerName" class="form-control">
            </div>
            <div class="col-4 mb-2">
                <label class="form-label fw-bold">
                    <i class="fas fa-asterisk" style="color: red"></i>
                    Employer Contract
                </label>
                <input v-model="employerContract" class="form-control">
            </div>
            <div class="col-12 mb-2">
                <label class="form-label fw-bold">
                    <i class="fas fa-asterisk" style="color: red"></i>
                    Employer Address
                </label>
                <input v-model="employerAddress" class="form-control">
            </div>
            <div class="col-6">
                <label class="form-label fw-bold">
                    <i class="fas fa-asterisk" style="color: red"></i>
                    Are you Pregnant? (Ikaw ba ay buntis?)
                </label>
                <select v-model="prenancyStatus" class="form-select">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="col-6">
                <label class="form-label fw-bold">
                    <i class="fas fa-asterisk" style="color: red"></i>
                    History of Covid-19 Infection
                </label>
                <select v-model="historyStatus" class="form-select">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        props: {
            data: Object,
        },
        name: "PersonalInformationForm.vue",
        data() {
            return {
                provinces: null,
                cities: null,
                baranggays: null,
                regions: this.$attrs.regions,
                prenancyStatus: 'No',
                historyStatus: 'No',
                careProvider: 'No',
                occupation: '',
                employerName: '',
                employerAddress: '',
                employerContract: '',
                employmentStatus: 'Private practitioner',
                region: 'Region I (Ilocos Region)',
                province: 'Ilocos Norte',
                city: 'City of Batac',
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
        watch: {
            category: function (value) {
                this.subCategory = '';
                if (this.subCategories[value] !== undefined) {
                    this.subCategory = this.subCategories[value][0];
                }
            },
            categoryID: function (value) {
                this.categoryIDOther = '';
            },
            region: function (value) {
                this.province = '';
            }
        },
        methods: {
            getProvinces() {
                var $this = this;
                axios.post(this.$attrs.get_provinces_link, {region: this.region}).then(function (value) {
                    $this.provinces = value.data;
                });
            },
            getCities() {
                var $this = this;
                axios.post(this.$attrs.get_cities_link, {region: this.region}).then(function (value) {
                    $this.cities = value.data;
                });
            },
        },
        mounted() {
            this.getProvinces();
            this.getCities();
        }
    }
</script>

<style scoped>

</style>
