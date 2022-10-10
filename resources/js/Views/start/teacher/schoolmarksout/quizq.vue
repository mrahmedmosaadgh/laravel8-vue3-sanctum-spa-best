<template>
    <div>

<div class="container">
    <div class="d-flex flex-wrap no-gutters quiz__block">

        <div class="col-xl-7 quiz">
            <div class="quiz__wrapper">
                <h3 class="color-secondary quiz__step">Step 1: Quiz</h3>
                <div class="quiz-question mb-3">What will be the output of the following code?</div><span>
                    <pre><code class="py-3x pl-4x hljs stylus"><span class="hljs-function"><span class="hljs-title">print</span><span class="hljs-params">(<span class="hljs-number">50</span> - <span class="hljs-number">30</span>)</span></span></code></pre>
                    </span>
                <div class="quiz-answer">
                    <div class="row">
                        <div class="col-md-6"><label role="presentation" class="label quiz-answer__item "><input
                                    type="radio" name="answer">
                                <div><span class="quiz-answer__sn mr-2x">A. 50</span></div>
                            </label></div>
                        <div class="col-md-6"><label role="presentation" class="label quiz-answer__item "><input
                                    type="radio" name="answer">
                                <div><span class="quiz-answer__sn mr-2x">B. 30</span></div>
                            </label></div>
                        <div class="col-md-6"><label role="presentation" class="label quiz-answer__item active quiz-answer__item--selected "><input
                                    type="radio" name="answer">
                                <div><span class="quiz-answer__sn mr-2x">C. 20</span></div>
                            </label></div>
                        <div class="col-md-6"><label role="presentation" class="label quiz-answer__item "><input
                                    type="radio" name="answer">
                                <div><span class="quiz-answer__sn mr-2x">D. 10</span></div>
                            </label></div>
                    </div>
                    <div class="quiz-action">
                        <div class="quiz-result mr-4x"></div>
                        <div class="quiz-submit "><button context="[object Object]"
                                class="btn btn--primary mt-6x no-border btn--block  disabled " name="next"
                                disabled="">Submit Answer</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>









    </div>
</template>

<script>
export default {
    data() {
        return {

        };
    },



    methods: {


    },
};
</script>
 
<style >
.quiz__wrapper {
    padding: 2.5rem 2rem;
}
.interactive-quiz .quiz-question {
    font-size: 1.25rem;
    color: #25265e;
    font-family: euclid-regular;
}
.quiz-answer__item:not(.active):hover {
    background-color: #e3ebfe;
}

.quiz-answer__item:not(.active):hover {
    border: 1px solid rgba(5,86,243,.2);
    background-color: rgba(5,86,243,.1);
    cursor: pointer;
}
.quiz__wrapper .quiz-answer__item {
    margin-bottom: 1rem;
}
.quiz-answer__item {
    border: 1px solid #d3dce6;
}
.quiz-answer__item {
    display: block;
    background-color: #fff;
    padding: 1rem;
    border-radius: 0.25rem;
    box-shadow: 0 6px 0 rgb(217 217 217 / 25%);
    margin-bottom: 1.5rem;
    transition: all .2s ease-in-out;
}
.interactive-quiz .quiz-answer__sn {
    font-family: euclid-regular;
}
.form-group .form-text, label {
    font-size: .875rem;
}
label {
    font-family: euclid-medium;
    line-height: 20px;
}
label {
    display: inline-block;
    margin-bottom: 0.5rem;
}
/* user agent stylesheet */
label {
    cursor: default;
}
.quiz-answer__item--selected {
    background-color: #0556f3;
    border-color: #0556f3;
    color: #fff;
    box-shadow: 0 8px 4px rgb(104 155 255 / 34%);
}
.quiz-action {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-between;
}
.quiz-action .quiz-result {
    flex: 1 1 auto;
}
@media (max-width: 768px){
.quiz-action .quiz-submit {
    flex: 0 0 100%;
}
}
.quiz-action .quiz-submit {flex: 0 0 150px;}


.interactive-quiz .quiz {
    background-color: #f8faff;
}


.quiz {
    border: 1px solid #d3dce6;
    border-left: 0;
    border-bottom: 0;
}
@media (min-width: 768px){

.quiz {
    border-radius: 0 24px 24px 0;
}



}
/* ----------------
 */

@media (min-width: 992px){
    .container {
    width: 100%;
    max-width: 992px;
}
}

@media (min-width: 768px){

.container {
    width: 100%;
    max-width: 768px;
}


}

@media (min-width: 576px){

.container {
    width: 100%;
    max-width: 576px;
}



}

.container {
    width: 100%;
    max-width: 480px;
}
.container, .container-fluid {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
@media (min-width: 992px){
.container {
    max-width: 992px;
}



}

@media (min-width: 768px){
.container {
    max-width: 768px;
}


}

@media (min-width: 576px){
.container {
    max-width: 576px;
}


}

.container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

.quiz__block {
    border-radius: 0 24px 24px;
    overflow: hidden;
    box-shadow: 0 8px 12px rgb(0 51 63 / 10%);
}

.quiz__wrapper .quiz-answer [class*=col] {
    padding-left: 8px;
    padding-right: 8px;
}

:focus {
    outline: none!important;
}




.col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12, .col-xxl-1, .col-xxl-2, .col-xxl-3, .col-xxl-4, .col-xxl-5, .col-xxl-6, .col-xxl-7, .col-xxl-8, .col-xxl-9, .col-xxl-10, .col-xxl-11, .col-xxl-12 {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
    float: left;
}
@media (min-width: 768px){
   .col-md-6 {
    /* flex: 0 0 50%; */
    max-width: 50%;
}
}

.quiz-action {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-between;
}
.quiz-action .quiz-result {
    flex: 1 1 auto;
}

</style>