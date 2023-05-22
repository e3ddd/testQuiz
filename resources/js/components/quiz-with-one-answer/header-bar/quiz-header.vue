<template>
<div class="container-fluid header">
    <div class="row">
        <div class="col ml back" style="cursor: pointer">
            <svg width="18px" height="15px" viewBox="0 0 18 15" xmlns="http://www.w3.org/2000/svg" @click="this.showPrev" :id="id">
                <g  transform="translate(-201.000000, -33.000000)" fill="black">
                    <path d="M218.411555,39.1146057 L212.946037,33.4304674 C212.624915,33.07645 212.13665,32.9251209 211.671603,33.0354785 C211.206555,33.1458362 210.838343,33.5004104 210.710522,33.960964 C210.5827,34.4215177 210.715503,34.9151432 211.057155,35.2493917 L214.388934,38.747323 L202.311724,38.747323 C201.587279,38.747323 201,39.3346019 201,40.0590472 C201,40.7834925 201.587279,41.3707714 202.311724,41.3707714 L214.555086,41.3707714 L210.873513,44.7462751 C210.453218,45.0363413 210.239472,45.5439659 210.325688,46.0473083 C210.411903,46.5506507 210.782404,46.9582024 211.275277,47.0918564 C211.768149,47.2255104 212.293788,47.060968 212.622479,46.6701373 L218.306617,41.4232404 C218.636827,41.1399756 218.801355,40.7089124 218.743859,40.2776679 C218.830657,39.8589395 218.706467,39.4242741 218.411555,39.1146057 Z" id="Shape-Copy" transform="translate(209.885500, 40.068815) scale(-1, 1) translate(-209.885500, -40.068815) "></path>
                </g>
        </svg>
        </div>
        <div class="col-9 logo">
            <img src="" alt="LOGO">
        </div>
        <div class="col mr-1 counter">
            <div class="row">
                <div class="col">
                    <small class="counter_item">{{currentQuiz}}</small>
                    <small class="splash">/</small>
                    <small class="number_of_questions">{{numOfQuestions}}</small>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: "quiz-header",
    props: {
        numOfQuestions: Number,
        currentQuiz: Number,
        id: Number
    },

    methods: {
        showPrev(event) {
            this.$emit('showPrev', --event.target.id)
        }
    }
}
</script>

<style scoped>
.header {
    padding: 15px 7px 0px 7px;
    text-align: center;
    width: 500px;
}

.counter {
    color: #5fcad3;
}

.counter_item {
    font-size: 14px;
    font-weight: bold;
    padding: 2px;
    margin: 3px;
    border-radius: 50%;
    color: #fff;
    background: #5fcad3;
    border: 1px solid #5fcad3;
}

.splash {
    font-size: 11px;
}

.number_of_questions {
    font-size: 14px;
}
</style>
