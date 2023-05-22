<template>
<div class="container">
    <div class="row">
        <div class="col question mt-3 p-4">
            <h4>{{question}}</h4>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: "quiz-question",
    props: {
        question: String
    },
}
</script>

<style scoped>
.question {
    min-height: 230px;
    background: rgba(242, 132, 255, 0.91);
}

</style>
