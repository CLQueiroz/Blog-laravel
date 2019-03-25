<template>
  <div v-bind:class="defineCor">
    <div class="panel-heading">{{titulo}}</div>

    <div class="panel-body">
      <slot></slot>
    </div>
  </div>
</template>

<script>
export default {
  props: ["titulo", "cor"],
  computed: {
    defineCor: function() {
      return "panel " + (this.cor || "panel-default");
    }
  }
};
</script>
<style scoped>
.blue {
  border-color: #17a2b8;
}

.blue > .panel-heading {
  color: #f7f7f7;
  background-color: #17a2b8;
  border-color: #17a2b8;
}

.orange {
  border-color: #ffc107;
}

.orange > .panel-heading {
  color: #f7f7f7;
  background-color: #ffc107;
  border-color: #ffc107;
}

.red {
  border-color: #dc3545;
}

.red > .panel-heading {
  color: #f7f7f7;
  background-color: #dc3545;
  border-color: #dc3545;
}
</style>

