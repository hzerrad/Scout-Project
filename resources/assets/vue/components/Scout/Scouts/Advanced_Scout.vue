<template>
    <div class="container   col-md-11 col-sm-11 col-xs-11 text-center card" style="padding-left:0px;padding-right:0px">

        <div class="header">
            <h2 class="title">{{Title}}</h2>
        </div>


        <div style="margin-top: 10px;float:left;padding-right:10px;padding-left:10px">
            <button class="btn btn-primary"    style="float:left; " @click="export_adv_scout_list">استخراج قائمة الكشاف المتقدم</button>
            <router-link class="btn btn-primary"   :to="'/dashboard/AddNewScout/advancedscout'" style="float:right"><span>اضف كشاف متقدم</span></router-link>
            <div class="col-md-8 col-xs-12"   >
                <div class="form-group has-feedback has-search">
                    <i class="fa fa-search form-control-feedback" style="z-index: 1"></i>
                    <input type="text" class="form-control" id="search" dir="rtl" style="padding-right:25px" placeholder="ابحث عن كشاف متقدم" v-on:keyup="searchadvscout()">
                </div>
            </div>
        </div>

        <div id="products" class="row list-group" style="padding-right:15px;padding-left:15px">
          <div class="container col-md-12 col-sm-12 col-xs-12">
              <table id="advscoutTable" class="table table-bordered table-hover" dir="ltr" v-if="MyScouts.length!==0">
                  <thead>
                  <tr>
                      <th class="text-center">العمليات</th>
                      <th class="text-center">الهاتف</th>
                      <th class="text-center">العنوان</th>
                      <th class="text-center">تاريخ الانخراط</th>
                      <th class="text-center">تاريخ الميلاد</th>
                      <th class="text-center">الاسم</th>
                      <th class="text-center">اللقب</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr v-for="adv in MyScouts" :id="'adv'+adv.scout_id" >
                      <td class="text-center">

                          <router-link :to="'/dashboard/EditScoutInfo/AdvancedScout/'+adv.scout.scout_id" class="btn btn-primary"><i class="fas fa-edit"></i></router-link>
                          <button class="btn btn-danger" @click="removeScout(adv)" ><i class="fas fa-trash"></i></button>
                      </td>


                      <td class="text-center">{{adv.scout.phone}}</td>

                      <td class="text-center">{{adv.scout.address}}</td>
                      <td class="text-center">{{adv.scout.membership_date}}</td>

                      <td class="text-center"> {{adv.scout.date_of_birth}} </td>
                      <td class="text-center">{{adv.scout.first_name}}</td>
                      <td class="text-center">{{adv.scout.last_name}}</td>

                  </tr>
                  </tbody>


              </table>
            <!--<div class="item col-lg-5 col-md-11  col-sm-12 col-xs-12 card" style="padding:0px;margin-right:20px" :id="'adv'+adv.scout_id" v-for="adv in MyScouts">-->
                <!--<div class="row" style="padding-botoom:0px;margin-bottom: 0px">-->
                    <!--<div class="col-md-1" style="float:left;padding: 0px;margin-left: 10px;" >-->
                        <!--<i role="button" class="glyphicon glyphicon-remove btn-lg " style="color:red;" @click="removeScout(adv)" ></i>-->

                    <!--</div>-->
                    <!--<div class="col-md-2" style="padding-top: 10px !important;padding-right:30px;float:right" v-if="ImageExiste(adv)">-->
                        <!--<img v-bind:src="'/images/AdvancedScout/'+adv.scout.image"  class="img-rounded" width="80" height="165" style="float: right">-->
                    <!--</div>-->
                    <!--<div class="col-md-2" style="padding-right:30px;float:right;padding-top: 10px !important" v-else>-->
                        <!--<img src="/images/default.png"  class="img-rounded" width="80" height="165" style="float: right">-->
                    <!--</div>-->
                    <!--<div class="col-md-7" style="padding-top:10px;float:right;padding-right:0px;"-->
                    <!--&gt;-->
                        <!--<ul style="float: right;">-->
                            <!--<li>-->
                                <!--<p style="text-align: right" dir="rtl"> <span dir="rtl"> اللقب :</span> <span>{{adv.scout.last_name}}</span>  </p>-->

                            <!--</li>-->
                            <!--<li>-->
                                <!--<p style="text-align: right" dir="rtl"> <span dir="rtl">الاسم : </span>  <span>{{adv.scout.first_name}}</span> </p>-->
                            <!--</li>-->
                            <!--<li >-->
                                <!--<p style="text-align: right">تاريخ الميلاد : {{adv.scout.date_of_birth}} </p>-->
                            <!--</li>-->
                            <!--<li >-->
                                <!--<p style="text-align: right">{{adv.scout.membership_date}} : تاريخ الانخراط</p>-->
                            <!--</li>-->
                        <!--</ul>-->
                    <!--</div>-->








                <!--</div>-->

                <!--<div>-->
                    <!--<router-link  class="glyphicon glyphicon-edit btn-lg" onclick="" style="float: left;color:green" :to="'/dashboard/EditScoutInfo/AdvancedScout/'+adv.scout.scout_id"></router-link>-->
                    <!--<span style="text-align:center;float: right;font-size: small;margin-bottom: 0px;padding-right:10px" >-->
                       <!--{{setScoutCode(adv)}}-->

    <!--</span>-->

                <!--</div>-->
<!--</div>-->







            </div>


            <div v-if="MyScouts.length===0">
                <h1>لا يوجد اي كشاف متقدم في الفوج حتى الآن</h1>
            </div>
        </div>
        <sweet-modal ref="confirmation" icon="warning">
            <h3>هل أنت متأكد من حذف هذا الكشاف المتقدم</h3>
            <h4> ملاحظة : هذه العملية غير رجعية</h4>
            <button id="cancel_button" class="btn btn-danger" style="margin:10px;margin-top:20px">لا</button>
            <button id="confirmation_button" class="btn btn-primary" style="margin: 10px;margin-top:20px" >نعم</button>

        </sweet-modal>
        <loading
                :show="show"
                :label="label">
        </loading>
    </div>
</template>

<script>
    import loading from 'vue-full-loading';
    export default {
        components: {
            loading
        },
       data(){
           return{
               show: false,
               label: '....الرجاء الإنتظار',
               MyScouts:[],
               Title:'',
               Scout_code:'',
           }

       },
        created: function () {
            var vm=this;
            vm.Title="قائمة الكشاف المتقدم";
            axios.get("/api"+vm.$route.fullPath).then(function(response){
                vm.MyScouts = response.data.Scouts;
            });





        },
        methods:{
            setScoutCode(adv){
                var membershipdate =adv.scout.membership_date;

                var scout_code= 'SF-'+ membershipdate.substr(2,2)+'-'+adv.scout.scout_id;
                return scout_code;

            },

            removeScout(adv) {

                this.$refs.confirmation.open();
                var vm = this;
                $("#confirmation_button").unbind().click(function () {
                    axios.delete("/api/deleteScout/" + adv.scout.scout_id).then(function (response) {


                        var position = vm.MyScouts.indexOf(adv);
                        vm.MyScouts.splice(position, 1);
                        vm.$refs.confirmation.close();
                    });
                });

                $("#cancel_button").unbind().click(function () {

                    vm.$refs.confirmation.close();

                });
            },

            ImageExiste(adv){


                if(adv.scout.image===""){

                    return false;
                }
                return true;
            },
            export_adv_scout_list(){
                var vm =this;
                this.show = true;
                axios({
                    url:  '/api/ExportScoutList',
                    method: 'PUT',
                    responseType: 'blob',
                    data:{
                        unit:'asct',
                        unit_name:'الكشاف المتقدم'
                    }
                }).then(function (response) {

                    let blob = new Blob([response.data], { type:  'application/pdf' } );

                    let link = document.createElement('a');
                    link.href = window.URL.createObjectURL(blob);
                    link.download = 'قائمة الكشاف المتقدم.pdf';
                    link.click();
                    vm.show = false;






                });
            },
            searchadvscout(){
                var name = $('#search').val();
                var i;
                if(name.localeCompare('')===0){
                    for(i = 0 ;i<this.MyScouts.length;i++){
                        $('#adv'+this.MyScouts[i].scout_id).show("fast");



                    }
                }else{
                    for(i = 0 ;i<this.MyScouts.length;i++){
                        var fullname = this.MyScouts[i].scout.last_name+" "+this.MyScouts[i].scout.first_name,
                         fullname_reverse = this.MyScouts[i].scout.first_name+" "+this.MyScouts[i].scout.last_name;
                        if(this.MyScouts[i].scout.last_name.localeCompare(name)===0 || this.MyScouts[i].scout.first_name.localeCompare(name)===0 || fullname.localeCompare(name)===0 || fullname_reverse.localeCompare(name)===0)
                        {
                            $('#adv'+this.MyScouts[i].scout_id).show("fast");


                        }else{
                            $('#adv'+this.MyScouts[i].scout_id).hide("slow");
                        }



                    }
                }




            }
        }
    }
</script>

<style scoped>
    .header{
        background-color: rgb(51, 181, 229);
        backdrop-filter: blur(5px);
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;

    }
    .header .title{
        color:white;
    }
    .card{
        margin-top:6%;
        margin-left: 40px;


    }
    /*the small size*/
    @media (max-width: 480px) {
        .icon {
            width: 70px;
            height: 70px;
        }

        .card{
            margin-top: 17%;
            margin-left: 16px;
        }
    }

    /*the medium size*/
    @media (max-width: 720px) {
        .icon {
            width: 70px;
            height: 70px;
        }

        .card{
            margin-top: 25%;
            margin-left: 25px;
        }
    }
  /** .sccout-card{
        -webkit-transform: scale(1.2);
        -moz-transform: scale(1.9);
        -o-transform: scale(1.5);
    }**/
    p,span,h2,h3,h4,button,input{
        font-family: "Alarabiya Font",'Segoe UI', Tahoma, Geneva, Verdana,sans-serif !important;
    }
    #search{

        border-top: 1px solid #9C9C9C;
        border-right: 1px solid #9C9C9C;
        border-left: 1px solid #9C9C9C;
        border-radius: 7px;
        padding: 5px
    }
    .has-search .form-control-feedback {
        right: 0;
        left: initial;
        color: #ccc;
    }

    .has-search .form-control {
        padding-right: 12px;
        padding-left: 34px;
    }

    .has-feedback .form-control-feedback{
        top: 3px;
        right: -35px !important;
    }
    @media(max-width: 991px){
        .col-xs-12{
            margin-top: 10px;
            margin-left: -15px;
        }
    }
</style>
