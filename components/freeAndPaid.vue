<template>
  <div class="container mt-4">
    <div class="row">
      <div class="col-6">
        <div @click="goToPaidApp" class="card">
          <img src="~assets/img/paid.png" alt="" />
          <h3>paid Apps</h3>
        </div>
      </div>
      <div class="col-6">
        <div @click="goToFreeApp" class="card">
          <img src="~assets/img/free.png" alt="" />
          <h3>Free Apps</h3>
        </div>
      </div>
    </div>
  </div>
</template>
<style lang="scss" scoped>
.card {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  width: 100%;
  height: 250px;
  cursor: pointer;
  background: repeating-linear-gradient(
    90deg,
    #ffffff,
    #fdfbfe 10px,
    #f4effe 10px,
    #f4effe 20px
  );

  img {
    width: 130px;
  }
  h3 {
    font-weight: 500;
    color: #5229a6;
    margin-top: 10px;
  }
  border: 1px solid #9065f3;
}
</style>

<script>
export default {
 methods:{
   goToPaidApp(){
           this.$router.push(`/paidApp`);

   },
   goToFreeApp(){
          this.$router.push(`/free`);

   }
 }
}
</script>