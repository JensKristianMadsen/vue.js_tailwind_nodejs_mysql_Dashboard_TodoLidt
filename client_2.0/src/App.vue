<template>
   <Navbar title="Navbar" />

    <AddTask />
</template>

<script>
import Navbar from './components/Navbar.vue';
import AddTask from './components/AddTask.vue';

export default {
  name: 'App',
  components: {
    Navbar,
    AddTask,

  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
