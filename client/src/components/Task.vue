<template>
    <!-- :class= "[objdet.value ?(true) 'reminder' :(else) '', 'task'(also want the task classe )  ]"-->
    <div :class="[task.reminder ? 'reminder' : '', 'task']">
        <h3>{{ task.text }}
             <!--Tailwind-->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <!--Tailwind-->
        </h3>
        <p>{{ task.day }}</p>
    </div>
  
</template>

<script>
export default {
    name: 'Task',
    props: {
        task: Object
    },
}

</script>

<style scope>
.w-6 {
    color: red;
}
/*
html   <i class="fas fa-times"></i>
.fas {
  color: red;
}
*/
.task {
  background: #f4f4f4;
  margin: 5px;
  padding: 10px 20px;
  cursor: pointer;
}

.task.reminder {
  border-left: 5px solid green;
}
.task h3 {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
</style>

  <!--Tailwind
           
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            -->