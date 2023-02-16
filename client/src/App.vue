<template>
  <Navbar title="Navbar" />
  
 <div class="container">
<!--parent component props from Header.vue -->
<Header @toggle-add-task="toggleAddTask" title="Task Tracker" :showAddTask="showAddTask" />
   <div v-show="showAddTask">
    <AddTask @add-task="addTask" />
   </div>
 
   <Tasks @toggle-reminder="toggleReminder" @delete-task="deleteTask" :tasks="tasks" />

 </div>
</template>

<script>
/* imports */

// Header
import Header from './components/Header.vue';
// Navbar
import Navbar from './components/Navbar.vue';
// Tasks
import Tasks from './components/Tasks.vue';
// AddTask
import AddTask from './components/AddTask.vue';


/* export default */
export default {
 name: 'App',
 components: {
   Navbar,
   Header,
   Tasks,
   AddTask
 },

/* data */
 data() {
   return {
     tasks: [],
     showAddTask: false
   }
 },

 /* methods */
 methods: {
  toggleAddTask() {
    this.showAddTask = !this.showAddTask
  },

  addTask(task) {
    this.tasks = [...this.tasks, task]
  },

  deleteTask(id) {
    if(confirm('Are you sure?')) {
      this.tasks = this.tasks.filter((task) => task.id !== id);
    console.log('task', id)
    }
 
  },
  toggleReminder(id){
    //this.tasks = map(we create ny array) in map((we a tæker is the samme id )=> { if is true ? seppe oprapeetter ...task, we take riminder !task.reminder(so if et a true make to false and if false make to true) IF id it not the samme  else just show task}) 
    this.tasks = this.tasks.map((task) => task.id === id 
    ? {...task, reminder: !task.reminder} : task)
  },
 },
/* Lifecycle */
 created() {
   this.tasks = [
     {
       id: 1,
       text: 'Doctors Appointment',
       day: 'March 1st at 2:30pm',
       reminder: true,
     },
     {
       id: 2,
       text: 'Meeting at School',
       day: 'March 4st at 4:30pm',
       reminder: true,
     },
     {
       id: 3,
       text: 'Car Appointment',
       day: 'March 15st at 2:45pm',
       reminder: false,
     },
   ]
 },
}
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap');
* {
 box-sizing: border-box;
 margin: 0;
 padding: 0;
}
body {
 font-family: 'Poppins', sans-serif;
}
.container {
 max-width: 500px;
 margin: 30px auto;
 overflow: auto;
 min-height: 300px;
 border: 1px solid steelblue;
 padding: 30px;
 border-radius: 5px;
}
.btn {
 display: inline-block;
 background: #000;
 color: #000000;
 border: none;
 padding: 10px 20px;
 margin: 5px;
 border-radius: 5px;
 cursor: pointer;
 text-decoration: none;
 font-size: 15px;
 font-family: inherit;
}
.btn:focus {
 outline: none;
}
.btn:active {
 transform: scale(0.98);
}
.btn-block {
 display: block;
 width: 100%;
}

</style>