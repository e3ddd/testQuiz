<template>
<div class="container-fluid">
    <div class="row" v-for="(quiz, key) in this.quizes">
        <quiz-layout
            @showNext="this.showNext"
            :question="quiz.question"
            :answers="quiz.answers"
            :num-of-questions="this.numOfQuestions"
            :current-quiz="quiz.id"
            :id="key"
            v-if="key == this.show"
        />
    </div>
</div>
</template>

<script>
import quizLayout from "./components/quiz-with-one-answer/quiz-layout.vue";
export default {
    components: {
        quizLayout
    },

    data: () => ({
        quizes: [],
        numOfQuestions: 0,
        show: 0,
    }),

    mounted() {
        this.getQuizes()
    },

    methods: {
        async getQuizes() {
            axios.get('/get_quizes')
                .then((response) => {
                    this.quizes = response.data
                    this.numOfQuestions = Object.keys(response.data).length
                })
                .catch(err => console.log(err))
        },

        showNext(id) {
            this.show = id
        },
    },

    name: "Index",
}
</script>

<style scoped>

</style>
