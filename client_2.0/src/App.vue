<template>

  <div class="container mx-auto">
    <Navbar title="Navbar" />
    <Header title="Task Tracker" />
    <AddTask />
    <Tasks :tasks="tasks" />
  </div>

</template>


 

<script>
/* imports */

// Navbar
import Navbar from './components/Navbar.vue';
// Header
import Header from './components/Header.vue';
// AddTask
import AddTask from './components/AddTask.vue';
// Tasks
import Tasks from './components/Tasks.vue';

/* export default */
export default {
  name: 'App',
  components: {
    Navbar,
    Header,
    AddTask,
    Tasks
  },
/* data */
  data() {
    return {
      tasks: []
    }
  },
/* Lifecycle */
created() {
   this.tasks = [
     {
       id: 1,
       text: 'Doctors Appointment',
       date: '04/02/2023',
       repeated: true,
       selectRepeated: "Daily",

     },
     {
       id: 2,
       text: 'Meeting at School',
       date: '25/04/2023',
       repeated: true,
       selectRepeated: "weekly",

     },
     {
       id: 3,
       text: 'Car Appointment',
       date: '25/01/2023',
       repeated: false,
       selectRepeated: "",

     },
   ]
 },
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
