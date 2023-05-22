<template>
    <button class="aswBtn" :class="this.clickStyle" @mousedown="this.click" @click="this.showNext" :id="id">
            {{answer}}
    </button>
</template>

<script>
export default {
    props: {
        id: Number,
        answer: String,
        numOfQuestions: Number
    },

    data: () => ({
        clickStyle: ''
    }),

    methods: {
        click() {
            this.clickStyle = 'clickStyle'
        },

        showNext(event) {
            this.$emit('showNext', ++event.target.id)
        }

    },
    name: "one-answer-button"
}
</script>

<style scoped>
.aswBtn span:first-letter {
    text-transform: uppercase;
}
.aswBtn:hover {
    cursor: pointer;
}

.aswBtn {
    color: #fff;
    display: flex;
    justify-content:center;
    padding: 10px;
    margin-top: 20px;
    width: 470px    ;
    background: #fe7677;
    border-radius: 20px;
    border: 2px solid #fe7677;
    -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none;   /* Chrome/Safari/Opera */
    -moz-user-select: none;      /* Firefox */
    -ms-user-select: none;       /* Internet Explorer/Edge */
    user-select: none;
}

.clickStyle {
    transition: 0.5s;
    background: #fdabac;
}
</style>
