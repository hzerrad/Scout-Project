<template>
<li class="dropdown pull-right" style="background-color:white;" id="not" >
    <a class="dropdown-toggle "
       data-toggle="dropdown"
       data-animation="scale-up" aria-expanded="false"
       role="button"
       style="background-color:white"
       @click="markNotificationasRead()"
       >

    <i class="fa fa-bell-o" style="margin-top:5px;color:grey"></i><span class="badge" v-if="unreadsNotification_length !=0">{{unreadsNotification_length}}</span>

    </a>
    <ul class="dropdown-menu" style="margin-top: 12px;margin-left: -200px;padding: 0px 0px 0px !important;width: 350px;height: 350px;border-top-left-radius: 10px;border-top-right-radius: 10px;">

      <li class="header" style="height:50px;color: white;width: 100%;margin-top: 0px;text-align: right;background-color: rgb(51, 181, 229);border-top-left-radius: 10px;border-top-right-radius: 10px;margin-bottom: 0px;padding-left: 0px;padding-right: 0px;padding-top: 0px;">
          <p>
              <i class="fa fa-bell-o pull-right"></i>
              التنبيهات
          </p>


      </li>
      <li id="notification-body" style="width:350px;height:280px;overflow-y:auto;overflow-x:hidden">
                <!-- inner menu: contains the actual data -->
                <ul class="menu" >
                  <!--start-->

                  <notification-content v-for="(notification,index) in Notification " :notification="notification" :index="index" :unreads="unreadsNotifications"></notification-content>


































                </ul>

      </li>













  </ul>

      </li>







              <!--end-->


</template>

<style scoped>
    #notification-body::-webkit-scrollbar-track
    {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        border-radius: 10px;
        background-color: #F5F5F5;
    }


    #notification-body::-webkit-scrollbar
    {
        width: 12px;
        background-color: #F5F5F5;
    }

    #notification-body::-webkit-scrollbar-thumb
    {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
        background-color: #555;
    }
#not:hover{
background-color:white
}
    .header{
        font-family: "Alarabiya Font",'Segoe UI', Tahoma, Geneva, Verdana,sans-serif !important;
    }
</style>


<script>
export default{
props:['unreads','userid','notification'],
beforeMount:function(){

  if(this.first_time===true){
    this.unreadsNotifications = this.unreads;
this.unreadsNotification_length=this.unreadsNotifications.length;
      this.first_time=false;
  }


},

data(){
return{

    unreadsNotifications: "",
    unreadsNotification_length:"",
    Notification:this.notification,
    first_time:true,

}
},
mounted:function(){

 var audio = new Audio('/uploads/Notify.mp3');
Echo.private('App.User.' + this.userid)
    .notification((notification) => {

        this.unreadsNotifications.unshift(notification);
        this.Notification.unshift(notification);
        this.unreadsNotification_length++;
        audio.play();

    });
},
methods:{
  markNotificationasRead(){
    var vm =this;

    axios.post('/api/marsNotificationAsRead').then(function(response){



    });
  this.unreadsNotification_length  = 0;
  }
}
}

</script>
