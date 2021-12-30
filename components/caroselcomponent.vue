<template>
  <div class="container mt-3">
    <carousel
      :perPageCustom="[
        [480, 2],
        [768, 8],
      ]"
    >
      <slide v-for="item in items"  class="slider">
        <img style="width: 40px" src="~assets/img/gamepad2 (1).png" alt="" />
        <p class="title-category">{{item}}</p>
      </slide>

    </carousel>
  </div>
</template>




<script>
import axios from "axios"
export default {
  data() {
    return { items: [] };
  },

  created() {
    axios
      .get("http://localhost:8080//Blueberry/api/app/categories.php/")
      .then((res) =>((this.items = res.data.prime_genre)))
      .catch((err) => console.log(err));
  },
};
</script>
<style lang="scss">
.slider {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  border: 1px solid #9065f3;
  background-color: #fbf6fc;
  padding: 20px 10px;
  border-radius: 8px;
  margin: 5px;
  p {
    margin-top: 7px;
  }
}
</style>