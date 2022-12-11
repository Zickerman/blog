<template>

  <div>
    <ul class="nav nav-pills nav-fill navbar-dark bg-dark">

      <li class="nav-item">
        <router-link class="nav-link" to="/home"> Home </router-link>
      </li>
      <li class="nav-item">
        <router-link class="nav-link" to="/posts"> Posts </router-link>
      </li>
      <li class="nav-item">
        <router-link class="nav-link disabled" to="#"> Currently Disabled </router-link>
      </li>
      <li class="nav-item">
        <router-link class="nav-link" to="/login"> Login </router-link>
      </li>
    </ul>
  </div>

</template>

<script>
export default {}
</script>

<style scoped>

</style>