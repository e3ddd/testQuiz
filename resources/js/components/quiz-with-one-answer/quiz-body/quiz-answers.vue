<template>
    <div class="container answers">
        <div class="row" v-for="answer in answers">
            <div class="col d-flex justify-content-center align-items-center">
                <one-answer-button
                    @click="this.showNext"
                    @showNext="this.showNext"
                    :id="id"
                    :answer="answer"
                    :numOfQuestions="numOfQuestions"
                />
            </div>
        </div>
    </div>
</template>

<script>
import OneAnswerButton from "./UI/one-answer-button.vue";
export default {
    components: {
        OneAnswerButton,
    },

    props: {
      answers: Object,
        id: Number,
        numOfQuestions: Number,
    },

    data: () => ({
        newId: ''
    }),


    watch: {
        newId(newValue, oldValue) {
            this.$emit('showNext', newValue)
        }
    },

    methods: {
        showNext(id) {
            this.newId = id
        }
    },
    name: "quiz-answers"
}
</script>

<style scoped>
.answers {
    padding-bottom: 20px;
    min-height: 170px;
    height: 100%;
}
</style>
