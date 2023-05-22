<template>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col quiz">
                <div class="row">
                    <quiz-header
                        :num-of-questions="numOfQuestions"
                        :current-quiz="currentQuiz"
                        :id="id"
                        @showPrev="this.showPrev"
                    />
                </div>
                <div class="row">
                        <quiz-body
                            class="body"
                            @showNext="this.showNext"
                            :id="id"
                            :question="question"
                            :answers="answers"
                            :numOfQuestions="numOfQuestions"
                        />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import QuizHeader from "./header-bar/quiz-header.vue";
import QuizBody from "./quiz-body/quiz-body.vue";
export default {
    name: "Index",
    components: {QuizBody, QuizHeader},

    props: {
        question: String,
        answers: Array,
        numOfQuestions: Number,
        currentQuiz: Number,
        id: Number,
        show: Boolean,
    },

    data: () => ({
        newId: '',
    }),


    watch: {
        newId(newValue, oldValue){
            this.$emit('showNext', newValue)
        },
    },

    methods: {
        showPrev(id) {
            if(id >= 0){
                this.newId = id
            }else{
                this.newId = 0
            }
        },

        showNext(id){
            if(id < this.numOfQuestions){
                this.newId = id
            }else{
                this.newId = this.numOfQuestions - 1
            }
        }
    },
}
</script>

<style scoped>
.quiz {
    box-shadow: 0px 5px 20px 10px #fdabac;
    border-radius: 5px;
    margin-top: 30px;
    border: none;
    background: #fff;
    width: 500px;
}

.body {
    opacity: 0;
    animation: ani 2s forwards;
}
@keyframes ani {
    0% {opacity: 0;}
    100% {opacity: 1;}
}
</style>
