<template>
  <div class="col-3">
    <div class="card card-style">
      <img class="berry-img" src="~assets/img/blueberry.svg" alt="" />
      <h5 style="text-align: center">{{title}}</h5>
      <div class="flex">
        <div class="card-item">
          <img src="~assets/img/star.png" alt="" />
          <p>4</p>
        </div>
        <div class="card-item">
          <img src="~assets/img/inbox.png" alt="" />
          <p>{{ver}}</p>
        </div>
      </div>
      <button class="card-item2">Read More</button>
    </div>
  </div>
</template>

<script>
export default {
 props:['title' , 'ver']
}
</script>
<style lang="scss" >
.berry-img {
  margin: auto;
  width: 120px;
}

.card-style {
  border-radius: 8px;
  border: 1px solid #9065f3;
  align-items: center;
  padding: 10px 0;
  p {
    margin: 0;
  }
  h5 {
    color: #996df1;
    margin-bottom: 20px;
  }
}

.card-item {
  display: flex;
  border-radius: 8px;
  border: 1px solid #4963c3;
  width: 49%;
  height: 38px;
  align-items: center;
  justify-content: center;
  width: 98px;
  img {
    width: 20px;
    margin: 0 4px;
  }
}
.flex {
  display: flex;
  justify-content: space-between;
  width: 200px;
}
.card-item2 {
  align-items: center;
  justify-content: center;
  display: flex;
  border-radius: 8px;
  border: 1px solid #49c355;
  background-color: #ade194;
  width: 200px;
  text-align: center;
  margin-top: 7px;
  height: 38px;
  color: #fff;
}

.card-item2:hover {
  background-color: #49c355;
}
</style>