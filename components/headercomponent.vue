<template>
  <div>
    <div class="main-img">
      <img style="width: 100%" src="~assets/img/wave.svg" alt="" />
    </div>

    <div class="container">
      <div class="mobile-main">
        <img src="~assets/img/mobiler-main.svg" alt="" />
      </div>

      <div class="description-landing">
        <h1>Blueberry</h1>
        <p>
          An online platform for viewing and quick access<br> to up-to-date
          applications You can be informed <br> about thelatest published
          applications and use<br> them easily
        </p>
      </div>
       <button class="but">Get Started</button>
    </div>
   
  </div>
</template>

<script>
export default {};
</script>


<style lang="scss" scoped>
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
.description-landing{
color: #fff;
font-size: 20px;
margin-top: 180px;
    h1{
    font-weight: bold;
}

}
.but{
    width: 140px;
    height: 46px;
    background-color: #fff;
    border: none;
    border-radius: 8px;
    color: #9C70F1;
}

</style>