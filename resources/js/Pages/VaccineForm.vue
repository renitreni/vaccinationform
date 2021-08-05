<template>
    <div>
        <div class="container h-100">
            <header class="d-flex flex-column justify-content-center text-center">
                <img src="resources/SEAL.jpg" class="rounded mx-auto d-block" alt="Seal">
                <h3>Ka-Ikeng COVID-19 Vaccine</h3>
                <h4>Pre-Registration Form</h4>
            </header>
            <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="personal-info-tab" data-bs-toggle="tab"
                            data-bs-target="#personal-info"
                            type="button" role="tab" aria-controls="home" aria-selected="true">Personal Information
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="allergy-tab" data-bs-toggle="tab" data-bs-target="#allergy"
                            type="button" role="tab" aria-controls="allergy" aria-selected="false">Allergy
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="medical-history-tab" data-bs-toggle="tab"
                            data-bs-target="#medical-history"
                            type="button" role="tab"
                            aria-controls="medical-history" aria-selected="false">Medical History
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="personal-info"
                     role="tabpanel" aria-labelledby="personal-info">
                    <personal-information-form></personal-information-form>
                </div>
                <div class="tab-pane fade" id="allergy" role="tabpanel" aria-labelledby="allergy-tab">
                    <allergy-form></allergy-form>
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
        name: "VaccineForm.vue",
        components: {
            PersonalInformationForm,
            AllergyForm,
            MedicalHistoryForm
        },
        mounted() {
        }
    }
</script>

<style scoped>

</style>
