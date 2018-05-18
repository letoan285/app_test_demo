<template>
    <div class="main">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">Welcome to my app</div>

                    <div class="card-body">
                        <h4>Please enter the input to have fun !</h4><hr>
                        <div class="row">
                            <div class="col-5"><strong>Enter Text</strong></div>
                            <div class="col-7">
                                <input type="text" class="form-control" placeholder="Type your Text..." v-model="text">
                            </div>
                        </div>
                        <div class="row mt-10">
                            <div class="col-5"><strong>Enter Sub Text</strong></div>
                            <div class="col-7">
                                <input type="text" class="form-control" placeholder="Type your sub-text" v-model="sub_text">
                            </div>
                        </div>
                        <div class="row mt-10">
                            <div class="col-5"></div>
                            <div class="col-2">
                                
                                <button class="btn btn-primary" @click="matchTheText">Click to get the result</button>
                            </div>
                            <div class="col-5"></div>
                        </div><hr>

                        <div class="row">
                            <div class="col-4"></div>
                            <div class="col-4">
                                <p class="text-center"><strong>The result of matching</strong></p>
                            </div>
                            <div class="col-4"></div>
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
                name: 'Le Van Toan',
                disabledButton: true,
                text: '',
                sub_text: ''
            }
        },
        created(){
            // this.disabledBtn()
        },
         methods: {
            matchTheText(){
                alert('Hello toan')
            }

        }
    }
</script>
<style scoped>

    .main {
        margin-top: 60px;
    }

    .mt-10{
        margin-top: 10px;
    }
    
</style>
