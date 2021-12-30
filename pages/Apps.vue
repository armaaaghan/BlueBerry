<template>
  <div>
    <navbarcomponent />
    <div>
      <div class="main-img">
        <img style="width: 100%" src="~assets/img/wave.svg" alt="" />
      </div>

      <div class="container">
        <div class="description-landing">
          <h1>Games</h1>
          <p>Lorem ipsum, dolor sit amet</p>
        </div>

        <div class="container mt-5">
          <div class="row">
            <b-spinner
              v-if="loading"
              label="Loading..."
              variant="info"
            ></b-spinner>
            <appsItems />
            <appsItems />
            <appsItems />
            <appsItems />
          </div>
        </div>
      </div>
    </div>
        <footerComponent />

  </div>
</template>

<script>
export default {
 name:"Apps",
 transitions:"fade"
}
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
