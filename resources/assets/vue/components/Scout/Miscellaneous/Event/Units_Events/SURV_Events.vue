<template>
    <div class="container   col-md-11 col-sm-11 col-xs-11 text-center card" style="margin:10px;margin-top: 22px;border-radius: 5px;margin-left: 40px;padding-left: 0px;padding-right: 0px" >

        <div class="header">

            <h4 class="title">خدمة و تنمية المجتمع </h4>
        </div>
        <div class="container  " style="background-color: transparent">
        <div class="row">

            <div  v-for="events in AllEvents" :key="events.id" class="col-sm-3 hoverable card card-width" style="margin: 10px 10px;padding: 0 0 ">
                <div class="card-img-top" style="background-color: #0b96e5;height: 150px;">

                    <img :src="'/images/EventImages/'+events.event_image" class="icon" >

                </div>
                <div class="card-body" style="height: 50px; background-color: #C8C8C8">
                    <h6 @click="checkChoice(events.event_id)"> {{events.title}} </h6>
                </div>
                <div class="trigger" @click="delete_event(events)">
                    <i class="glyphicon glyphicon-remove" ></i>
                </div>
                <router-link class="trigger" style="float: right; right: 0px;" :to="'/dashboard/myposts/event/'+events.event_id">
                    <i class="glyphicon glyphicon-edit" ></i>
                </router-link>
                <div class="toolbar">

                    <div class="pseudo-circle">
                        <div class="dialog" ></div>
                    </div>
                </div>
                <div class="card-footer" style="background-color:white;height: 50px; margin: 0 0; padding: 0 0" >
                    <div class="col-sm-8 col-xs-8" style="height: 100%;padding: 0 0">
                        <h6 style="text-align:right;margin-top: 5%;margin-right: 0; padding-right: 0">{{events.creator.last_name}} {{events.creator.first_name}}</h6>
                        <h6 style="text-align:right;margin: 0 0">    <span>نشر بتاريخ</span><span> {{getday(events)}} </span> <span> {{getcurrentmonth(events)}} </span>   الساعة <span>{{gettime(events)}}</span> </h6>
                    </div>
                    <div class="col-sm-2 col-xs-2" style="height: 100%; margin: 0 0; padding: 0 0">
                        <a href="#"><img class="img-circle":src="'/images/Captain/'+events.creator.image"  style="height: 70%; width: 70%;margin:15% 15%" v-if="events.creator.image.localeCompare('')!==0">
  <img class="img-circle" src="/images/default.png"  style="height: 70%; width: 70%;margin:15% 15%" v-else></a>
                    </div>



                </div>
                </div>


                <!--here you can make confition if scout color to change the background-->



            </div>
        </div>




        <div v-if="AllEvents.length===0">
            <p style="font-size: large">لا توجد احداث </p>
        </div>
        <sweet-modal ref="confirmation" icon="warning">
            <h3>هل أنت متأكد من حذف هذا الحدث</h3>
            <h4> ملاحظة : هذه العملية غير رجعية</h4>
            <button id="cancel_button" class="btn btn-danger" style="margin:10px;margin-top:20px">لا</button>
            <button id="confirmation_button" class="btn btn-primary" style="margin: 10px;margin-top:20px" >نعم</button>

        </sweet-modal>
        <sweet-modal ref="export_choice" >
            <h3>حدد الخيارات المراد وضعها </h3>
            <div>
                <label class="choice" for="box1">الهاتف</label>
                <input  id="box1" type="checkbox" v-model="choice.phone"/>
                <label class="choice" for="box1"></label>

                <label class="choice" for="box2">الدور</label>
                <input id="box2" type="checkbox" v-model="choice.role"/>
                <label class="choice" for="box2"></label>
                <label class="choice" for="box3">تاريخ الميلاد</label>
                <input id="box3" type="checkbox" v-model="choice.birthday"/>
                <label class="choice" for="box3"></label>



            </div>


            <button id="done_button" class="btn btn-primary" style="margin: 10px;margin-top:20px" @click="ExportPresentCaptains">تحميل</button>
        </sweet-modal>
        <loading
                class="label_title"
                :show="show"
                :label="label">
        </loading>
        </div>

</template>

<script>
    import loading from 'vue-full-loading';

    export default {
        components:{
            loading
        },
        data(){
            return{
                AllEvents:'',
                choice:{
                    birthday:false,
                    role:false,
                    phone:false
                },
                event_id:'',
                show: false,
                label: '....الرجاء الإنتظار',
            }
        },
        created:function(){

          this.getUnitEvents();
        },
        methods:{

            getUnitEvents(){
                var vm =this;
                axios.get('/api/getUnitEvents/7').then(function (response) {

                    vm.AllEvents = response.data.unit_events;
                });

            },
            getcurrentmonth(event){
                var arr = event.created_at.split('-');
                const monthNames = ["جانفي", "فيفري", "مارس", "أفريل", "ماي", "جوان",
                    "جويلية", "أوت", "سبتمبر", "أكتوبر", "نوفمبر", "ديسمبر"
                ];
                return monthNames[parseInt(arr[1],10)-1];
            },
            getday(event){
                var arr = event.created_at.split('-');


                return arr[2].toString().slice(0,2);
            },
            gettime(event){
                var arr = event.created_at.split('-');
                var fulltime = arr[2].toString().slice(2);
                var time = fulltime.split(':');
                var hour = time[0];
                var minute = time[1];

                return hour+':'+minute;
            },
            delete_event(event){
                this.$refs.confirmation.open();
                var vm = this;
                $("#confirmation_button").unbind().click(function () {
                    axios.delete('/api/deleteEvent/'+event.event_id).then(function (response) {
                        var position = vm.AllEvents.indexOf(event);
                        vm.AllEvents.splice(position,1);
                        vm.$refs.confirmation.close();

                    });
                });

                $("#cancel_button").unbind().click(function () {

                    vm.$refs.confirmation.close();

                });
            },
            checkChoice(event_id){
                this.$refs.export_choice.open();
                this.event_id = event_id;
            },
            ExportPresentCaptains(){
                this.$refs.export_choice.close();
                this.show = true;
                var vm = this;
                axios({
                    url: '/api/ExportPresentsCaptains/'+vm.event_id,
                    method: 'Post',
                    responseType: 'blob',
                    data:{
                        choice:vm.choice
                    }
                }).then(function (response) {
                    let blob = new Blob([response.data], {type: 'application/pdf'});

                    let link = document.createElement('a');
                    link.href = window.URL.createObjectURL(blob);
                    link.download = 'قائمة الحضور.pdf';
                    link.click();
                    vm.show = false;
                }).catch(function(error){
                    vm.show = false;
                })
            }
        }
    }
    /*the floating button css*/
    $(function() {
        $('.trigger').click(function() {
            $(this).addClass('open');
            $('.pseudo-circle').addClass('open');
        });
        $('.close').click(function() {
            $('.trigger').removeClass('open');
            $('.pseudo-circle').removeClass('open');
        })
    })

</script>

<style scoped>

    .icon{
        max-width: 100%;
        width: 100%;
        height: 150px;
        margin: 0 0 ;/*1% top to buttom auto to center it*/

    }

    .card{
        margin-top:7%;
        margin-left: 65px;
        background-color: white;

    }

    h3, h5, h6{
        margin: 0 0;
        padding: 0 0;
        font-family: "DroidArabicKufiRegular", 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;
    }


    /*the floating button css*/
    body {
        margin: 0;
    }
    * {
        box-sizing: border-box;
    }
    .pseudo-circle, .trigger {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        position: absolute;
        margin-top: 51%;
        margin-left: 3% ;
        /*right: 100px;*/
        /*bottom: 10px;*/
        /*z-index: 99998;
        cursor: pointer;
        transform-origin: 50% 50%;*/
    }
    .pseudo-circle {
        opacity: 0;
        overflow: hidden;
        transition: transform 0.3s cubic-bezier(0.0, 0.0, 0.2, 1), opacity 0.1s;
    }
    .trigger {

        cursor:pointer;
        color: #fff;
        line-height: 56px;
        background-color: #009688;
        transition: transform 0.15s cubic-bezier(0.4, 0.0, 1, 1), opacity 0.1s 0.1s, box-shadow 0.3s;
        opacity: 1;
        /*right: 50px;*/
       /*bottom: 50px;*/
        /*position: fixed;*/
        box-shadow: 0 0 6px rgba(0, 0, 0, 0.12), 0 6px 6px rgba(0, 0, 0, 0.24);
        z-index: 1;
    }
    .pseudo-circle.open {
        transition-delay: .15s;
        transform: scale(45);
        opacity: 1;
    }
    .trigger.open {
        transform: translate(-50px, 40px);
        opacity: 0;
    }
    .trigger.open i {
        opacity: 0;
    }
    .trigger:hover {
        box-shadow: 0 0 12px rgba(0, 0, 0, 0.12), 0 12px 12px rgba(0, 0, 0, 0.24);
    }
    .dialog {
        width: 100vw;
        height: 100vh;
        background-color: #009688;
    }
    .toolbar {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 70px;
        overflow: hidden;
        padding: 20px;
    }
    .toolbar button {
        position: absolute;
        z-index: 999999;
        border: 0;
        background: transparent;
        font-size: 16px;
        text-transform: uppercase;
        top: 50%;
        color: #fff;
        transform: translateY(-50%);
        padding: 10px 20px;
        border-radius: 2px;
        cursor: pointer;
        transition: all 0.3s;
        outline: none;
    }
    .header{
        background-color: rgb(51, 181, 229);
        backdrop-filter: blur(5px);
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;

    }
    .header .title{
        color:white;
    }


    @media (max-width: 767px){
        .card-width{
            width:100%;
        }
    }
    @media (min-width: 768px){
        .card-width{
            width:30%;
        }
    }
    h6,h3,h4,span,p,button {
        font-family: "Alarabiya Font",'Segoe UI', Tahoma, Geneva, Verdana,sans-serif !important;

    }
</style>
