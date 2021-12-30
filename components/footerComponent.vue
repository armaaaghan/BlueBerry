<template>
  <div class="footer mt-5">
    <img src="~assets/img/blueberry.svg" alt="" />
    <ul>
      <li><a>Home</a></li>

      <li><a>Games</a></li>

      <li><a>Medical Apps</a></li>

      <li><a>Finance Apps</a></li>
    </ul>
  </div>
</template>

<style lang="scss" scoped>
.footer {
  width: 100%;
  height: 180px;
  background: #dba8e3;
  display: flex;
  flex-direction: column;
  align-items: center;

  ul {
    display: flex;
    list-style: none;
    li {
      margin: 5px 10px 0 10px;

      a {
        cursor: pointer;
        color: #fff;
      }
      a:hover {
        color: #39285e;
      }
    }
  }
}
</style>