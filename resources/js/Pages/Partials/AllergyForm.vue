<template>
    <section>
        <div class="d-flex flex-column">
            <div>
                <h1><strong>Allergy</strong></h1>
            </div>
            <div>
                <h5>Mayroon ka ba ng mga sumusunod na Alerhiya(Allergy)?</h5>
            </div>
        </div>
        <table class="table">
            <tbody>
            <tr>
                <td><strong>Allergy sa Gamot</strong> <br><small>(Drug Allergy)</small></td>
                <td>
                    <div class="btn-group" role="group">
                        <input type="radio" class="btn-check" name="allergy1" id="a1yes"
                               value="a1yes" autocomplete="off">
                        <label class="btn btn-outline-primary" for="a1yes"><strong>OO
                            (YES)</strong></label>
                        <input type="radio" class="btn-check" name="allergy1" id="a1no"
                               value="a1no" autocomplete="off" checked="">
                        <label class="btn btn-outline-primary" for="a1no">HINDI (NO)</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td><strong>Allergy sa Pagkain</strong> <br><small>(Food Allergy)</small>
                </td>
                <td>
                    <div class="btn-group" role="group">
                        <input type="radio" class="btn-check" name="allergy2" id="a2yes"
                               value="a2yes" autocomplete="off">
                        <label class="btn btn-outline-primary" for="a2yes"><strong>OO
                            (YES)</strong></label>
                        <input type="radio" class="btn-check" name="allergy2" id="a2no"
                               value="a2no" autocomplete="off" checked="">
                        <label class="btn btn-outline-primary" for="a2no">HINDI (NO)</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td><strong>Allergy sa Insekto</strong> <br><small>(Insect Allergy)</small>
                </td>
                <td>
                    <div class="btn-group" role="group">
                        <input type="radio" class="btn-check" name="allergy3" id="a3yes"
                               value="a3yes" autocomplete="off">
                        <label class="btn btn-outline-primary" for="a3yes"><strong>OO
                            (YES)</strong></label>
                        <input type="radio" class="btn-check" name="allergy3" id="a3no"
                               value="a3no" autocomplete="off" checked="">
                        <label class="btn btn-outline-primary" for="a3no">HINDI (NO)</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td><strong>Allergy sa Latex</strong> <br><small></small></td>
                <td>
                    <div class="btn-group" role="group">
                        <input type="radio" class="btn-check" name="allergy4" id="a4yes"
                               value="a4yes" autocomplete="off">
                        <label class="btn btn-outline-primary" for="a4yes"><strong>OO
                            (YES)</strong></label>
                        <input type="radio" class="btn-check" name="allergy4" id="a4no"
                               value="a4no" autocomplete="off" checked="">
                        <label class="btn btn-outline-primary" for="a4no">HINDI (NO)</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td><strong>Allergy sa Mold</strong></td>
                <td>
                    <div class="btn-group" role="group">
                        <input type="radio" class="btn-check" name="allergy5" id="a5yes"
                               value="a5yes" autocomplete="off">
                        <label class="btn btn-outline-primary" for="a5yes"><strong>OO
                            (YES)</strong></label>
                        <input type="radio" class="btn-check" name="allergy5" id="a5no"
                               value="a5no" autocomplete="off" checked="">
                        <label class="btn btn-outline-primary" for="a5no">HINDI (NO)</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td><strong>Allergy sa Alagang Hayop</strong> <br><small>(Pet
                    Allergy)</small></td>
                <td>
                    <div class="btn-group" role="group">
                        <input type="radio" class="btn-check" name="allergy6" id="a6yes"
                               value="a6yes" autocomplete="off">
                        <label class="btn btn-outline-primary" for="a6yes"><strong>OO
                            (YES)</strong></label>
                        <input type="radio" class="btn-check" name="allergy6" id="a6no"
                               value="a6no" autocomplete="off" checked="">
                        <label class="btn btn-outline-primary" for="a6no">HINDI (NO)</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td><strong>Allergy sa Polen</strong> <br><small>(Pollen Allergy)</small>
                </td>
                <td>
                    <div class="btn-group" role="group">
                        <input type="radio" class="btn-check" name="allergy7" id="a7yes"
                               value="a7yes" autocomplete="off">
                        <label class="btn btn-outline-primary" for="a7yes"><strong>OO
                            (YES)</strong></label>
                        <input type="radio" class="btn-check" name="allergy7" id="a7no"
                               value="a7no" autocomplete="off" checked="">
                        <label class="btn btn-outline-primary" for="a7no">HINDI (NO)</label>
                    </div>
                </td>
            </tr>
            <tr>
            </tr>
            </tbody>
        </table>
    </section>
</template>

<script>
    export default {
        name: "AllergyForm.vue"
    }
</script>

<style scoped>

</style>
