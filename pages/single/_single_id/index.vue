<template>
  <div>
    <navbarcomponent />
    <div class="container">
      <div class="row mt-3">
        <div class="col-12 box">
          <h4>title</h4>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam,
            dolorem? Dolor consectetur commodi accusamus assumenda aperiam quod
            earum eum. Expedita ea labore odit reiciendis incidunt. At
            perspiciatis minima inventore quo.
          </p>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-2 p-0">
          <div class="slider h-100">
            <!-- <img
              style="width: 40px"
              src="~assets/img/gamepad2 (1).png"
              alt=""
            /> -->
            <h5 class="title-detail">ldskfdslhf</h5>
            <p class="dis-detail">asdasdasd</p>
          </div>
        </div>
      </div>
    </div>
    <footerComponent />
  </div>
</template>


<script>
import axios from 'axios'
export default {
  name: "single",
data(){
  return{
      app_id: this.$route.params.app_id,

  }
},

  created() {
    console.log(this.app_id);
    axios
      .get(
        `http://localhost:8080//Blueberry/api/app/read_single.php?q=${app_id}`
      )
      .then((res) => {
        this.financeApps = res.data;
        this.loading = false;
        console.log("asdasdasd", this.financeApps)
      })
      .catch((err) => console.log(err));
  },
};
</script>

<style 
    Navbarcomponentcoped>
.box {
  background-color: #f7ebf9;
  width: 100%;
  padding: 20px;
}
</style>
