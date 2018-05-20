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
                            <div class="col-2"></div>
                            <div class="col-3">
                                <select class="form-control" id="" v-model="case_sensitive">
                                    <option value="0">Case-insensitive</option>
                                    <option value="1">Case-sensitive</option>
                                </select>
                            </div>
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
                            <div class="col-8">{{ result }}</div>
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
                index: '',
                case_sensitive: 0
            }
        },
        created(){
            // this.disabledBtn()
        },
         methods: {
            matchTheText(){
                let subText = this.sub_text
                let text = this.text
                if(subText == '' || text == ''){
                    alert('Please enter Text and Sub Text')
                }
                let l = subText.length;
                let case_sensitive = this.case_sensitive
                if(case_sensitive == 0){
                    case_sensitive = false
                } else {
                    case_sensitive = true
                }
                console.log(case_sensitive);
                if (l == 0) {
                    return [];
                }
                let start = 0;
                let index;
                let indices = [];

                if (!case_sensitive) {
                    text = text.toLowerCase();
                    subText = subText.toLowerCase();
                }

                while ((index = text.indexOf(subText, start)) > -1) {
                    indices.push(index);
                    start = index + l;
                }
                indices = indices.join(' , ');
                if(indices){
                    this.result = indices;
                    
                }else {
                    this.result = "There is no matching points"
                }

                this.text_result = text 
                this.sub_text_result = subText


            },


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
