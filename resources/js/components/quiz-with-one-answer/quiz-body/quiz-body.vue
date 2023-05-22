<template>
    <div class="container">
        <div class="row">
            <quiz-question
                :question="question"
            />
        </div>
        <div class="row">
            <quiz-answers
                @showNext="this.showNext"
                :id="id"
                :answers="answers"
                :numOfQuestions="numOfQuestions"
            />
        </div>
    </div>
</template>

<script>
import QuizQuestion from "./quiz-question.vue";
import QuizAnswers from "./quiz-answers.vue";
export default {
    name: "quiz-body",
    components: {QuizAnswers, QuizQuestion},
    props: {
        id: Number,
        question: String,
        answers: Array,
        numOfQuestions: Number
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
        showNext(event) {
            this.newId = event.target.id
        }
    },
}
</script>

<style scoped>

</style>
