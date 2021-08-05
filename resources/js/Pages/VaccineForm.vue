<template>
    <div>
        <div class="container h-100">
            <header class="d-flex flex-column justify-content-center text-center">
                <h1 class="fw-bold">Ka-Ikeng COVID-19 Vaccine</h1>
                <h4>Pre-Registration Form</h4>
            </header>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active fw-bold" id="personal-info-tab" data-bs-toggle="tab"
                            data-bs-target="#personal-info"
                            type="button" role="tab" aria-controls="home" aria-selected="true">
                        Personal Information
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link fw-bold" id="allergy-tab" data-bs-toggle="tab" data-bs-target="#allergy"
                            type="button" role="tab" aria-controls="allergy" aria-selected="false">
                        Allergy
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link fw-bold" id="medical-history-tab" data-bs-toggle="tab"
                            data-bs-target="#medical-history"
                            type="button" role="tab"
                            aria-controls="medical-history" aria-selected="false">
                        Medical History
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent" style="background-color: #f8fafc">
                <div class="tab-pane fade show active" id="personal-info"
                     role="tabpanel" aria-labelledby="personal-info">
                    <personal-information-form v-bind:regions="data.regions"
                                               v-bind:get_provinces_link="data.get_provinces_link"
                                               v-bind:get_cities_link="data.get_cities_link"
                                               v-bind:get_baranggays_link="data.get_baranggays_link"
                                               @setPersonalInfoClick="setPersonalInfo($event)"
                    ></personal-information-form>
                </div>
                <div class="tab-pane fade" id="allergy" role="tabpanel" aria-labelledby="allergy-tab">
                    <allergy-form @setAllegriesInfoClick="setAllegriesInfo($event)"></allergy-form>
                </div>
                <div class="tab-pane fade" id="medical-history" role="tabpanel"
                     aria-labelledby="medical-history-tab">
                    <medical-history-form></medical-history-form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import PersonalInformationForm from "./Partials/PersonalInformationForm";
    import AllergyForm from "./Partials/AllergyForm";
    import MedicalHistoryForm from "./Partials/MedicalHistoryForm";

    export default {
        props: {
            data: Object,
        },
        data() {
            return {
                personalInfo: null,
                allergies: null,
            }
        },
        name: "VaccineForm.vue",
        components: {
            PersonalInformationForm,
            AllergyForm,
            MedicalHistoryForm
        },
        methods: {
            setPersonalInfo(value) {
                this.personalInfo = value;
            },
            setAllegriesInfo(value) {
                this.allergies = value;
            }
        },
        mounted() {
        }
    }
</script>

<style scoped>

</style>
