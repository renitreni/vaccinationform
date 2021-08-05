<template>
    <section class="border border-1 border-top-0 p-4 shadow">
        <div class="d-flex flex-column">
            <h1><u>Allergy Information</u></h1>
            <h5>Mayroon ka ba ng mga sumusunod na Alerhiya (Allergy)?</h5>
        </div>
        <div class="row">
            <div class="col-auto p-3">
                <div class="p-2 d-flex justify-content-between">
                    <div class="fw-bold">
                        Allergy sa Gamot <i>(Drug Allergy)</i>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="form-check mx-2">
                            <input class="form-check-input" type="radio" name="exampleRadios-1" value="yes"
                                   v-model="overview.drugAllergy">
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check mx-3">
                            <input class="form-check-input" type="radio" name="exampleRadios-1" value="no"
                                   v-model="overview.drugAllergy">
                            <label class="form-check-label">No</label>
                        </div>
                    </div>
                </div>
                <div class="p-2 d-flex justify-content-between">
                    <div class="fw-bold">
                        Allergy sa Pagkain <i>(Food Allergy)</i>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="form-check mx-2">
                            <input class="form-check-input" type="radio" name="exampleRadios-2" value="yes"
                                   v-model="overview.foodAllergy">
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check mx-3">
                            <input class="form-check-input" type="radio" name="exampleRadios-2" value="no"
                                   v-model="overview.foodAllergy">
                            <label class="form-check-label">No</label>
                        </div>
                    </div>
                </div>
                <div class="p-2 d-flex justify-content-between">
                    <div class="fw-bold">
                        Allergy sa Insekto <i>(Insect Allergy)</i>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="form-check mx-2">
                            <input class="form-check-input" type="radio" name="exampleRadios-3" value="yes"
                                   v-model="overview.insectAllergy">
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check mx-3">
                            <input class="form-check-input" type="radio" name="exampleRadios-3" value="no"
                                   v-model="overview.insectAllergy">
                            <label class="form-check-label">No</label>
                        </div>
                    </div>
                </div>
                <div class="p-2 d-flex justify-content-between">
                    <div class="fw-bold">
                        Allergy sa Latex <i>(Latex Allergy)</i>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="form-check mx-2">
                            <input class="form-check-input" type="radio" name="exampleRadios-4" value="yes"
                                   v-model="overview.latexAllergy">
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check mx-3">
                            <input class="form-check-input" type="radio" name="exampleRadios-4" value="no"
                                   v-model="overview.latexAllergy">
                            <label class="form-check-label">No</label>
                        </div>
                    </div>
                </div>
                <div class="p-2 d-flex justify-content-between">
                    <div class="fw-bold">
                        Allergy sa Mold <i>(Mold Allergy)</i>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="form-check mx-2">
                            <input class="form-check-input" type="radio" name="exampleRadios-5" value="yes"
                                   v-model="overview.moldAllergy">
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check mx-3">
                            <input class="form-check-input" type="radio" name="exampleRadios-5" value="no"
                                   v-model="overview.moldAllergy">
                            <label class="form-check-label">No</label>
                        </div>
                    </div>
                </div>
                <div class="p-2 d-flex justify-content-between">
                    <div class="fw-bold">
                        Allergy sa Hayop <i>(Animal Allergy)</i>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="form-check mx-2">
                            <input class="form-check-input" type="radio" name="exampleRadios-6" value="yes"
                                   v-model="overview.animalAllergy">
                            <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check mx-3">
                            <input class="form-check-input" type="radio" name="exampleRadios-6" value="no"
                                   v-model="overview.animalAllergy">
                            <label class="form-check-label">No</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "AllergyForm.vue",
        data() {
            return {
                overview: {
                    drugAllergy: 'no',
                    foodAllergy: 'no',
                    insectAllergy: 'no',
                    latexAllergy: 'no',
                    moldAllergy: 'no',
                    animalAllergy: 'no'
                }
            }
        },
        watch: {
            'overview': {
                handler(val){
                    this.$emit('setAllegriesInfoClick', this.overview);
                },
                deep: true
            }
        },
        mounted() {
            this.$emit('setAllegriesInfoClick', this.overview);
        }
    }
</script>

<style scoped>

</style>
