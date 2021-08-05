<template>
    <section>
        <div class="row">
            <div class="col-8">
                <h1><strong>Medical History </strong></h1>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <h5>Mayroon / nagkaroon ka ba ng mga sumusunod na karamdaman?</h5>
            </div>
        </div>
        <br>
        <table class="table">
            <tbody>
            <tr>
                <td><strong>Sakit sa baga</strong> <br><small>(Lung disease)</small></td>
                <td>
                    <div class="btn-group" role="group">
                        <input type="radio" class="btn-check" name="question1" id="q1yes"
                               value="q1yes" autocomplete="off">
                        <label class="btn btn-outline-primary" for="q1yes"><strong>OO
                            (YES)</strong></label>
                        <input type="radio" class="btn-check" name="question1" id="q1no"
                               value="q1no" autocomplete="off" checked="">
                        <label class="btn btn-outline-primary" for="q1no">HINDI (NO)</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td><strong>Sakit sa bato</strong> <br><small>(Kidney disease)</small></td>
                <td>
                    <div class="btn-group" role="group">
                        <input type="radio" class="btn-check" name="question2" id="q2yes"
                               value="q2yes" autocomplete="off">
                        <label class="btn btn-outline-primary" for="q2yes"><strong>OO
                            (YES)</strong></label>
                        <input type="radio" class="btn-check" name="question2" id="q2no"
                               value="q2no" autocomplete="off" checked="">
                        <label class="btn btn-outline-primary" for="q2no">HINDI (NO)</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td><strong>Diyabetes</strong> <br><small>(Diabetes)</small></td>
                <td>
                    <div class="btn-group" role="group">
                        <input type="radio" class="btn-check" name="question3" id="q3yes"
                               value="q3yes" autocomplete="off">
                        <label class="btn btn-outline-primary" for="q3yes"><strong>OO
                            (YES)</strong></label>
                        <input type="radio" class="btn-check" name="question3" id="q3no"
                               value="q3no" autocomplete="off" checked="">
                        <label class="btn btn-outline-primary" for="q3no">HINDI (NO)</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td><strong>Transplantasyon ng organo</strong> <br><small>(Organ
                    Transplant)</small></td>
                <td>
                    <div class="btn-group" role="group">
                        <input type="radio" class="btn-check" name="question4" id="q4yes"
                               value="q4yes" autocomplete="off">
                        <label class="btn btn-outline-primary" for="q4yes"><strong>OO
                            (YES)</strong></label>
                        <input type="radio" class="btn-check" name="question4" id="q4no"
                               value="q4no" autocomplete="off" checked="">
                        <label class="btn btn-outline-primary" for="q4no">HINDI (NO)</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td><strong>Leukemia</strong></td>
                <td>
                    <div class="btn-group" role="group">
                        <input type="radio" class="btn-check" name="question5" id="q5yes"
                               value="q5yes" autocomplete="off">
                        <label class="btn btn-outline-primary" for="q5yes"><strong>OO
                            (YES)</strong></label>
                        <input type="radio" class="btn-check" name="question5" id="q5no"
                               value="q5no" autocomplete="off" checked="">
                        <label class="btn btn-outline-primary" for="q5no">HINDI (NO)</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td><strong>Sakit sa dugo</strong> <br><small>(Blood disease)</small></td>
                <td>
                    <div class="btn-group" role="group">
                        <input type="radio" class="btn-check" name="question6" id="q6yes"
                               value="q6yes" autocomplete="off">
                        <label class="btn btn-outline-primary" for="q6yes"><strong>OO
                            (YES)</strong></label>
                        <input type="radio" class="btn-check" name="question6" id="q6no"
                               value="q6no" autocomplete="off" checked="">
                        <label class="btn btn-outline-primary" for="q6no">HINDI (NO)</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td><strong>Sakit sa puso</strong> <br><small>(Heart disease)</small></td>
                <td>
                    <div class="btn-group" role="group">
                        <input type="radio" class="btn-check" name="question7" id="q7yes"
                               value="q7yes" autocomplete="off">
                        <label class="btn btn-outline-primary" for="q7yes"><strong>OO
                            (YES)</strong></label>
                        <input type="radio" class="btn-check" name="question7" id="q7no"
                               value="q7no" autocomplete="off" checked="">
                        <label class="btn btn-outline-primary" for="q7no">HINDI (NO)</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td><strong>Hika</strong> <br><small>(Asthma)</small></td>
                <td>
                    <div class="btn-group" role="group">
                        <input type="radio" class="btn-check" name="question8" id="q8yes"
                               value="q8yes" autocomplete="off">
                        <label class="btn btn-outline-primary" for="q8yes"><strong>OO
                            (YES)</strong></label>
                        <input type="radio" class="btn-check" name="question8" id="q8no"
                               value="q8no" autocomplete="off" checked="">
                        <label class="btn btn-outline-primary" for="q8no">HINDI (NO)</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td><strong>Altapresyon</strong> <br><small>(Hypertension)</small></td>
                <td>
                    <div class="btn-group" role="group">
                        <input type="radio" class="btn-check" name="question9" id="q9yes"
                               value="q9yes" autocomplete="off">
                        <label class="btn btn-outline-primary" for="q9yes"><strong>OO
                            (YES)</strong></label>
                        <input type="radio" class="btn-check" name="question9" id="q9no"
                               value="q9no" autocomplete="off" checked="">
                        <label class="btn btn-outline-primary" for="q9no">HINDI (NO)</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td><strong>Kanser</strong> <br><small>(Cancer)</small></td>
                <td>
                    <div class="btn-group" role="group">
                        <input type="radio" class="btn-check" name="question10" id="q10yes"
                               value="q10yes" autocomplete="off">
                        <label class="btn btn-outline-primary" for="q10yes"><strong>OO
                            (YES)</strong></label>
                        <input type="radio" class="btn-check" name="question10" id="q10no"
                               value="q10no" autocomplete="off" checked="">
                        <label class="btn btn-outline-primary" for="q10no">HINDI
                            (NO)</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td><strong>Sakit sa pag-iisip / Seizure disorder</strong></td>
                <td>
                    <div class="btn-group" role="group">
                        <input type="radio" class="btn-check" name="question11" id="q11yes"
                               value="q11yes" autocomplete="off">
                        <label class="btn btn-outline-primary" for="q11yes"><strong>OO
                            (YES)</strong></label>
                        <input type="radio" class="btn-check" name="question11" id="q11no"
                               value="q11no" autocomplete="off" checked="">
                        <label class="btn btn-outline-primary" for="q11no">HINDI
                            (NO)</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td><strong>HIV</strong><br><small>(Immunodeficiency state)</small></td>
                <td>
                    <div class="btn-group" role="group">
                        <input type="radio" class="btn-check" name="question12" id="q12yes"
                               value="q12yes" autocomplete="off">
                        <label class="btn btn-outline-primary" for="q12yes"><strong>OO
                            (YES)</strong></label>
                        <input type="radio" class="btn-check" name="question12" id="q12no"
                               value="q12no" autocomplete="off" checked="">
                        <label class="btn btn-outline-primary" for="q12no">HINDI
                            (NO)</label>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </section>
</template>

<script>
    export default {
        name: "MedicalHistoryForm.vue"
    }
</script>

<style scoped>

</style>
