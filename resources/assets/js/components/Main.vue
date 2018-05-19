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
                                <input type="text" class="form-control" placeholder="Type your Text ..." v-model="text">
                            </div>
                        </div>
                        <div class="row mt-10">
                            <div class="col-5"><strong>Enter Sub Text</strong></div>
                            <div class="col-7">
                                <input type="text" class="form-control" placeholder="Type your sub-text ..." v-model="sub_text">
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
                            <div class="col-4"><p>The text: </p></div>
                            <div class="col-8 text-danger">{{this.text_result}}</div>
                        </div>

                        <div class="row">
                            <div class="col-4">The sub - text: </div>
                            <div class="col-8 text-success">{{this.sub_text_result}}</div>
                        </div><br>

                        <div class="row">
                            <div class="col-4">The matching positions: </div>
                            <div class="col-8">{{ index }}</div>
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
                sub_text: '',
                result: '',
                text_result: '',
                sub_text_result: '',
                index: ''
            }
        },
        created(){
            // this.disabledBtn()
        },
         methods: {
            matchTheText(){
                let x = this.text 
                let y = this.sub_text
                if(x == '' || y == ''){
                    alert('Please enter Text and Sub text')
                } else {
                    let str = this.text;
                    let x = this.sub_text;
                    let n = str.indexOf(x);
                    this.text_result = str
                    this.sub_text_result = x
                    
                    this.text = ''
                    this.sub_text = ''
                    if(n == -1){
                        this.index = 'There is no matching positions'
                    }else {
                        this.index = n+1
                    }
                    console.log(n);
                }
            },
            // resetText(){
            //     this.text = ''
            //     this.sub_text = ''
            // }

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
