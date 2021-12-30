<template>
  <div class="container pr-0">
    <div class="row">
      <div class="col">
        <div class="banner">
          <img class="img-one" src="~assets/img/water.png" alt="" />
          <img class="img-two" src="~assets/img/mobile.png" alt="" />
          <div class="banner-title">
            <h1>Blueberry</h1>
            <p>
              An online platform for viewing and quick access<br />
              to up-to-date applications You can be informed<br />
              about thelatest published applications and use<br />
              them easily
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style lang="scss" scoped>
.banner {
  margin-top: 30px;
  width: 100%;
  height: 380px;
  border-radius: 8px;
  background-image: linear-gradient(to right, #d8a5e3, #9166f2);
  position: relative;

  .img-one {
    position: absolute;
    width: 100%;
    bottom: 0;
  }
  .img-two {
    position: absolute;
    width: 50%;
    bottom: 0;
  }

  .banner-title{
      h1{
          font-weight: bold;
      }
      position: absolute;
      left: 55%;
      top: 80px;
      color: #fff;
  }
}
</style>