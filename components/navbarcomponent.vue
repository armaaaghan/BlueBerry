<template>
  <header style="height: 80px; background-color: #fff">
    <div class="container">
      <input type="checkbox" name="" id="check" />

      <div class="logo-container">
        <img class="logo" src="~assets/img/logomain.svg" />
      </div>

      <div class="nav-btn">
        <div class="nav-links">
          <ul style="padding: 0">
            <li @click="goToHome" class="nav-link" style="--i: 0.6s">
              <a href="#">Home </a>
            </li>
            <li @click="goToGame" class="nav-link" style="--i: 0.85s">
              <a href="#"> Games <i></i></a>
            </li>
            <li @click="goToMedical" class="nav-link" style="--i: 1.1s">
              <a href="#">Medical Apps<i></i></a>
            </li>
            <li @click="goToFinance" class="nav-link" style="--i: 1.35s">
              <a href="#">Finance Apps</a>
            </li>
          </ul>
        </div>

        <div id="log-sign" class="log-sign" style="--i: 1.8s">
          <section class="main">
            <form class="search" method="post" action="index.html">
              <input type="text" name="q" placeholder="Search..." />
            </form>
          </section>
        </div>
      </div>

      <div class="container hamburger-menu-container">
        <div class="hamburger-menu">
          <div></div>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  methods: {
    goToGame() {
      this.$router.push("/Game");
    },
        goToHome() {
                this.$router.push("/");
        },
        goToMedical(){
                this.$router.push("/Medical");


        },
          goToFinance(){
                this.$router.push("/Finance");


        }

  },
};
</script>
<style lang="scss" scoped>
header {
  overflow: hidden;
  top: 0px;
  width: 100%;
  z-index: 1001;

  ul {
    list-style: none;
  }

  a {
    text-decoration: none;
  }

  .logo {
    width: 110px;
  }

  section {
    position: relative;
    height: calc(100vh - 3rem);
    width: 100%;
    overflow: hidden;
  }

  .overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-color: #fff;
  }

  .container {
    max-width: 75rem;
    padding: 0 2rem;
    margin: 0 auto;
    display: flex;
    position: relative;
  }

  .logo-container {
    flex: 1;
    margin-top: 10px;
  }

  .nav-btn {
    flex: 3;
    display: flex;
  }

  .nav-links {
    flex: 2;
  }

  .log-sign {
    display: flex;
    justify-content: center;
    align-items: center;
    flex: 1;
  }

  .logo span {
    font-weight: 300;
  }

  .btn {
    display: inline-block;
    font-size: 0.8rem;
    line-height: 1;
    margin: 0 0.2rem;
    transition: 0.3s;
    text-transform: uppercase;
    color: #604788;
    border: 2px solid #604788;
    width: 100px;
    height: 35px;
    font-size: 14px;
    border-radius: 6px;
  }

  .btn.solid,
  .btn.transparent:hover {
    background-color: #604788;
    color: #fff;
  }

  .btn.transparent,
  .btn.solid:hover {
    background-color: transparent;
    color: #604788;
  }

  .nav-links > ul {
    display: flex;
    align-items: left;
  }

  .nav-link {
    position: relative;
  }

  .nav-link > a {
    line-height: 3rem;
    color: #111;
    padding: 0 0.4rem;
    letter-spacing: 1px;
    font-size: 0.95rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    transition: 0.5s;
  }

  .nav-link > a > i {
    margin-left: 0;
  }

  .nav-link:hover > a {
    color: #604788;
    text-decoration: none;
  }

  .hamburger-menu-container {
    flex: 1;
    display: none;
    align-items: center;
    justify-content: flex-end;
  }

  .hamburger-menu {
    width: 2.5rem;
    height: 2.5rem;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    margin-left: -1.5rem;
  }

  .hamburger-menu div {
    width: 1.6rem;
    height: 3px;
    border-radius: 3px;
    background-color: #000;
    position: relative;
    z-index: 1001;
    transition: 0.5s;
  }

  .hamburger-menu div:before,
  .hamburger-menu div:after {
    content: "";
    position: absolute;
    width: inherit;
    height: inherit;
    background-color: #000;
    border-radius: 3px;
    transition: 0.5s;
    margin-right: -1.6rem;
  }

  .hamburger-menu div:before {
    transform: translateY(-7px);
  }

  .hamburger-menu div:after {
    transform: translateY(7px);
  }

  #check {
    position: absolute;
    top: 50%;
    left: 1.5rem;
    transform: translateY(-50%);
    width: 2.5rem;
    height: 2.5rem;
    z-index: 90000;
    cursor: pointer;
    opacity: 0;
    display: none;
  }

  #check:checked ~ .hamburger-menu-container .hamburger-menu div {
    background-color: transparent;
  }

  #check:checked ~ .hamburger-menu-container .hamburger-menu div:before {
    transform: translateY(0) rotate(-45deg);
  }

  #check:checked ~ .hamburger-menu-container .hamburger-menu div:after {
    transform: translateY(0) rotate(45deg);
  }

  @keyframes animation {
    from {
      opacity: 0;
      transform: translateY(15px);
    }
    to {
      opacity: 1;
      transform: translateY(0px);
    }
  }

  @media (max-width: 992px) {
    .hamburger-menu-container {
      display: flex;
    }

    #check {
      display: block;
    }

    .nav-btn {
      position: fixed;
      height: calc(80vh - 3rem);
      top: 0rem;
      left: 0;
      width: 100%;
      background-color: #fff;
      flex-direction: column;
      align-items: center;
      justify-content: space-between;
      overflow-x: hidden;
      overflow-y: auto;
      transform: translatey(-100%);
      transition: 0.65s;
      z-index: 999;
    }

    #check:checked ~ .nav-btn {
      transform: translateX(0);
    }

    #check:checked ~ .nav-btn .nav-link,
    #check:checked ~ .nav-btn .log-sign {
      animation: animation 0.5s ease forwards var(--i);
    }

    .nav-links {
      flex: initial;
      width: 100%;
    }

    .nav-links > ul {
      flex-direction: column;
    }

    .nav-link {
      width: 100%;
      opacity: 0;
      transform: translateY(15px);
    }

    .nav-link > a {
      line-height: 1;
      padding: 1.6rem 2rem;
    }

    .nav-link:hover > a {
      transform: scale(1);
      background-color: #dbc7ec;
      text-decoration: none;
    }

    .log-sign {
      flex: initial;
      width: 100%;
      padding: 1.5rem 1.9rem;
      justify-content: flex-start;
      opacity: 0;
      transform: translateY(15px);
    }
  }
}
.main {
  width: 200px;
  margin-left: auto;
  margin-right: auto;
  height: 300px;
}

.main {
  margin-top: 25px;
}

input {
  font-family: "HelveticaNeue", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 13px;
  color: #555860;
}

.search {
  position: relative;
  margin: 0 auto;
  width: 300px;
}

.search input {
  height: 26px;
  padding: 0 12px 0 25px;
  background: white url("https://cssdeck.com/uploads/media/items/5/5JuDgOa.png")
    8px 6px no-repeat;
  border-width: 1px;
  border-style: solid;
  border-color: #a8acbc #babdcc #c0c3d2;
  border-radius: 13px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -ms-box-sizing: border-box;
  -o-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-box-shadow: inset 0 1px #e5e7ed, 0 1px 0 #fcfcfc;
  -moz-box-shadow: inset 0 1px #e5e7ed, 0 1px 0 #fcfcfc;
  -ms-box-shadow: inset 0 1px #e5e7ed, 0 1px 0 #fcfcfc;
  -o-box-shadow: inset 0 1px #e5e7ed, 0 1px 0 #fcfcfc;
  box-shadow: inset 0 1px #e5e7ed, 0 1px 0 #fcfcfc;
}

.search input:focus {
  outline: none;
  border-color: #66b1ee;
  -webkit-box-shadow: 0 0 2px rgba(85, 168, 236, 0.9);
  -moz-box-shadow: 0 0 2px rgba(85, 168, 236, 0.9);
  -ms-box-shadow: 0 0 2px rgba(85, 168, 236, 0.9);
  -o-box-shadow: 0 0 2px rgba(85, 168, 236, 0.9);
  box-shadow: 0 0 2px rgba(85, 168, 236, 0.9);
}

.search input:focus + .results {
  display: block;
}

.search .results {
  display: none;
  position: absolute;
  top: 35px;
  left: 0;
  right: 0;
  z-index: 10;
  padding: 0;
  margin: 0;
  border-width: 1px;
  border-style: solid;
  border-color: #cbcfe2 #c8cee7 #c4c7d7;
  border-radius: 3px;
  background-color: #fdfdfd;
  background-image: -webkit-gradient(
    linear,
    left top,
    left bottom,
    color-stop(0%, #fdfdfd),
    color-stop(100%, #eceef4)
  );
  background-image: -webkit-linear-gradient(top, #fdfdfd, #eceef4);
  background-image: -moz-linear-gradient(top, #fdfdfd, #eceef4);
  background-image: -ms-linear-gradient(top, #fdfdfd, #eceef4);
  background-image: -o-linear-gradient(top, #fdfdfd, #eceef4);
  background-image: linear-gradient(top, #fdfdfd, #eceef4);
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
  -ms-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
}

.search .results li {
  display: block;
}

.search .results li:first-child {
  margin-top: -1px;
}

.search .results li:first-child:before,
.search .results li:first-child:after {
  display: block;
  content: "";
  width: 0;
  height: 0;
  position: absolute;
  left: 50%;
  margin-left: -5px;
  border: 5px outset transparent;
}

.search .results li:first-child:before {
  border-bottom: 5px solid #c4c7d7;
  top: -11px;
}

.search .results li:first-child:after {
  border-bottom: 5px solid #fdfdfd;
  top: -10px;
}

.search .results li:first-child:hover:before,
.search .results li:first-child:hover:after {
  display: none;
}

.search .results li:last-child {
  margin-bottom: -1px;
}

.search .results a {
  display: block;
  position: relative;
  margin: 0 -1px;
  padding: 6px 40px 6px 10px;
  color: #808394;
  font-weight: 500;
  text-shadow: 0 1px #fff;
  border: 1px solid transparent;
  border-radius: 3px;
}

.search .results a span {
  font-weight: 200;
}

.search .results a:before {
  content: "";
  width: 18px;
  height: 18px;
  position: absolute;
  top: 50%;
  right: 10px;
  margin-top: -9px;
  background: url("https://cssdeck.com/uploads/media/items/7/7BNkBjd.png") 0 0
    no-repeat;
}

:-moz-placeholder {
  color: #a7aabc;
  font-weight: 200;
}

::-webkit-input-placeholder {
  color: #a7aabc;
  font-weight: 200;
}

.lt-ie9 .search input {
  line-height: 26px;
}
</style>>
