<template>
  <div>
    <navbarcomponent />

    <headercomponent />
   
    <div class="title_style container">
      <img src="~assets/img/fire.png" alt="" />
      <p>category</p>
      <div class="line"></div>
    </div>

    <caroselcomponent />
    <categortcomponent />
    <div class="title_style container mt-5">
      <img src="~assets/img/gamepad.png" alt="" />
      <p>Top Games</p>
      <div class="line"></div>
    </div>

    <topgame />
    <banner />
    <div class="title_style container mt-5">
      <img src="~assets/img/fire.png" alt="" />
      <p>Top Travel Apps</p>
      <div class="line"></div>
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-3">
    <div class="card card-style h-100">
      <img class="berry-img" src="~assets/img/blueberry.svg" alt="" />
      <h5 style="text-align: center">{{TopTravel1.track_name}}</h5>
      <div class="flex">
        <div class="card-item">
          <img src="~assets/img/star.png" alt="" />
          <p>{{TopTravel1.user_rating}}</p>
        </div>
        <div class="card-item">
          <img src="~assets/img/inbox.png" alt="" />
          <p>{{TopTravel1.ver}}</p>
        </div>
      </div>
      <button class="card-item2">Read More</button>
    </div>
  </div>
  <div class="col-3">
    <div class="card card-style h-100">
      <img class="berry-img" src="~assets/img/blueberry.svg" alt="" />
      <h5 style="text-align: center">{{TopTravel2.track_name}}</h5>
      <div class="flex">
        <div class="card-item">
          <img src="~assets/img/star.png" alt="" />
          <p>{{TopTravel2.user_rating}}</p>
        </div>
        <div class="card-item">
          <img src="~assets/img/inbox.png" alt="" />
          <p>{{TopTravel2.ver}}</p>
        </div>
      </div>
      <button class="card-item2">Read More</button>
    </div>
  </div>
  <div class="col-3">
    <div class="card card-style h-100">
      <img class="berry-img" src="~assets/img/blueberry.svg" alt="" />
      <h5 style="text-align: center">{{TopTravel3.track_name}}</h5>
      <div class="flex">
        <div class="card-item">
          <img src="~assets/img/star.png" alt="" />
          <p>{{TopTravel3.user_rating}}</p>
        </div>
        <div class="card-item">
          <img src="~assets/img/inbox.png" alt="" />
          <p>{{TopTravel3.ver}}</p>
        </div>
      </div>
      <button class="card-item2">Read More</button>
    </div>
  </div>
  <div class="col-3">
    <div class="card card-style h-100">
      <img class="berry-img" src="~assets/img/blueberry.svg" alt="" />
      <h5 style="text-align: center">{{TopTravel4.track_name}}</h5>
      <div class="flex">
        <div class="card-item">
          <img src="~assets/img/star.png" alt="" />
          <p>{{TopTravel4.user_rating}}</p>
        </div>
        <div class="card-item">
          <img src="~assets/img/inbox.png" alt="" />
          <p>{{TopTravel4.ver}}</p>
        </div>
      </div>
      <button class="card-item2">Read More</button>
    </div>
  </div>
      </div>
    </div>
    <freeAndPaid />
    <footerComponent />
  </div>
</template>

<script>
import Caroselcomponent from "../components/caroselcomponent.vue";
import Categortcomponent from "../components/categortcomponent.vue";
import headercomponent from "../components/headercomponent.vue";
import Navbarcomponent from "../components/navbarcomponent.vue";
import axios from 'axios'
import AppsItems from '../components/appsItems.vue';
export default {
  components: { headercomponent, Categortcomponent, Caroselcomponent, AppsItems },
  Navbarcomponent,

  layouts : 'main',



data(){
  return{
    loading:true,
    appTitle: "",
    TopTravel: [],
    TopTravel1: [],
    TopTravel2:[],
    TopTravel3:[],
    TopTravel4:[]

  }


},
 created() {
    axios
      .get(
        "http://localhost:8080/Blueberry/api/app/view_categories.php?q=education"
      )
      .then((res) => (this.TopTravel = res.data))
      .catch((err) => console.log(err));

  
  setTimeout(() => {
    
    this.TopTravel1 = this.TopTravel[0];
    this.TopTravel2 = this.TopTravel[1];
    this.TopTravel3 = this.TopTravel[2];
    this.TopTravel4 = this.TopTravel[3];


  }, 1000);
  },
};
</script>




<style lang="scss">
.title_style {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 220px;

  img {
    width: 24px;
  }
  p {
    margin: 0 5px 0 5px;
    width: 100px;
  }
}
.line {
  width: 100%;
  height: 1px;
  background-color: #5229a6;
  margin-top: 5px;
}
</style>
