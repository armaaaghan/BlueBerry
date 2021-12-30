<template>
  <div>
    <navbarcomponent />
    <div>
      <div class="main-img">
        <img style="width: 100%" src="~assets/img/wave.svg" alt="" />
      </div>

      <div class="container">
        <div class="description-landing">
          <h1>Medical App</h1>
          <p>Lorem ipsum, dolor sit amet</p>
        </div>

        <div class="container mt-5">
          <div class="row">
            <b-spinner
              v-if="loading"
              label="Loading..."
              variant="info"
            ></b-spinner>

            <div class="col-3 mt-3" v-for="item in paidApps">
              <div class="card card-style">
                <img class="berry-img" src="~assets/img/blueberry.svg" alt="" />
                <h5 style="text-align: center">{{ item.track_name }}</h5>
                <div class="flex">
                  <div class="card-item">
                    <img src="~assets/img/star.png" alt="" />
                    <p>{{item.user_rating}}</p>
                  </div>
                  <div class="card-item">
                    <img src="~assets/img/inbox.png" alt="" />
                    <p>{{ item.ver }}</p>
                  </div>
                </div>
                <button class="card-item2">Read More</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        <footerComponent />

  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "paidApp",
  transitions: "fade",
  data() {
    return {
      loading: true,
  
      paidApps: [],
    };
  },
  created() {
    axios
      .get(
        "http://localhost:8080/Blueberry/api/app/view_categories.php?q=medical"
      )
      .then((res) => {
        this.paidApps = res.data;
        this.loading = false;
      })
      .catch((err) => console.log(err));
  },
};
</script>

<style lang="scss">
.main-img {
  width: 100%;
  position: absolute;
  top: 80px;
  z-index: -10;
}

.mobile-main {
  position: absolute;
  right: 40px;
  width: 700px;
  top: 70px;
  img {
    width: 100%;
  }
}
.description-landing {
  color: #fff;
  font-size: 20px;
  margin-top: 180px;
  h1 {
    font-weight: bold;
  }
}
</style>
