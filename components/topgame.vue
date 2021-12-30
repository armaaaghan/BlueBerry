<template>
  <div class="container mt-4">
    <div class="row">
      <div class="col-6 gameone">
        <div class="card">
          <div class="title">
            <h4>{{TopGame1.track_name}}</h4>
            <p>Game</p>
          </div>
          <img class="one" src="~assets/img/right-game.png" alt="" />
          <img class="two" src="~assets/img/little-wave.png" alt="" />
          <div class="rateanddownload">
            <div class="rate">
              <img src="~assets/img/star.png" alt="" />
              <p class="ml-1"></p>
            </div>
            <div class="download">
              <img src="~assets/img/inbox.png" alt="" />
              <p class="ml-2">{{TopGame1.ver}}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="row">
          <div class="col-6 gametwo">
            <div class="card-gametwo mr-2">
              <div class="title">
                <h4>{{TopGame2.track_name}}</h4>
                <p>Game</p>
              </div>
              <div class="rateanddownload">
                <div class="rate">
                  <img src="~assets/img/star.png" alt="" />
                  <p class="ml-1"></p>
                </div>
                <div class="download">
                  <img src="~assets/img/inbox.png" alt="" />
                  <p class="ml-2">{{TopGame2.ver}}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 gametwo">
            <div class="card-gametwo">
              <div class="title">
                <h4>{{TopGame3.track_name}}</h4>
                <p>Game</p>
              </div>

              <div class="rateanddownload">
                <div class="rate">
                  <img src="~assets/img/star.png" alt="" />
                  <p class="ml-1"></p>
                </div>
                <div class="download">
                  <img src="~assets/img/inbox.png" alt="" />
                  <p class="ml-2">{{TopGame3.ver}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-12 gamethree">
            <div class="card-two">
              <img src="~assets/img/left-game.png" alt="" />
              <div class="title">
                <h4 class="mt-5 ml-3">{{TopGame4.track_name}}</h4>
                <p class="ml-3">Game</p>
              </div>
            </div>
          </div>
        </div>
        <div class="rateanddownload" style="left: 40px !important">
          <div class="rate">
            <img src="~assets/img/star.png" alt="" />
            <p class="ml-1"></p>
          </div>
          <div class="download">
            <img src="~assets/img/inbox.png" alt="" />
            <p class="ml-2">{{TopGame4.ver}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
import axios from "axios";
export default {
  data() {
    return {
      TopGames: [],
      TopGame1: [],
      TopGame2: [],
      TopGame3: [],
      TopGame4: [],
    };
  },
  created() {
    axios
      .get(
        "http://localhost:8080/Blueberry/api/app/view_categories.php?q=games"
      )
      .then((res) => (this.TopGames = res.data))
      .catch((err) => console.log(err));

    setTimeout(() => {
      this.TopGame1 = this.TopGames[0];
      this.TopGame2 = this.TopGames[1];
      this.TopGame3 = this.TopGames[2];
      this.TopGame4 = this.TopGames[3];
    }, 1200);
  },
};
</script>


<style lang="scss" scoped>
.rateanddownload {
  position: absolute;
  bottom: 30px;
  width: 150px;
  z-index: 10;
  display: flex;
  justify-content: space-between;
  align-items: center;
  .rate {
    display: flex;
    width: 40px;
    justify-content: space-between;
  }
  .download {
    display: flex;
    width: 60px;
    justify-content: space-between;
  }
  img {
    width: 25px;
    height: 25px;
  }
}
.title {
  display: flex;
  flex-direction: column;
  h4 {
    font-weight: bold !important;
    color: #996df1 !important;
  }
}
.gameone .one {
  position: absolute;
  top: 0;
  right: 0;
  height: 100%;
  z-index: 10;
}
.gameone .two {
  position: absolute;
  bottom: 0;
  right: 0;
  width: 100%;
  z-index: 0;
  border-radius: 10px;
}
.card {
  position: relative;
  height: 400px;
  border: 1px solid #9065f3;
  border-radius: 8px;
  padding: 40px;
}
.gamethree {
  img {
    position: absolute;
    bottom: 3px;
    height: 114%;
    left: -15px;
  }
}
.gamethree {
  height: 100%;
  background-color: #fbf6fc;
  border: 1px solid #9065f3;
  border-radius: 8px;

  width: 100%;
}
.card-two {
  position: relative;
  height: 200px;
}
.gamefour {
  height: 100%;
  background-color: #fbf6fc;
  border: 1px solid #9065f3;
  border-radius: 8px;
  .card-three {
    position: relative;
    height: 200px;
  }
}
.gametwo {
  height: 190px;
  padding-right: 0 !important;
  padding-left: 0 !important;
}
.card-gametwo {
  height: 100%;

  background-color: #fbf6fc;
  border: 1px solid #9065f3;
  border-radius: 8px;
  padding: 40px 20px;
}

.rateanddownload {
  display: flex;
}
</style>